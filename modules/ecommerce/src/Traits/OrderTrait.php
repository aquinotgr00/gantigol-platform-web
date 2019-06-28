<?php

namespace Modules\Ecommerce\Traits;

use Modules\Ecommerce\Order;
use Modules\Ecommerce\OrderItem;
use Modules\Inventory\Adjustment;
use Modules\Ecommerce\Mail\PaymentReminder;
use Modules\Ecommerce\Mail\OrderCancelled;
use Modules\Product\ProductVariant;
use Modules\Preorder\SettingReminder;
use App\User;

use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use \GuzzleHttp\Client;


trait OrderTrait
{
    public function setAddress($prefix, $data)
    {
        return collect($data)->mapWithKeys(function ($value, $key) use ($prefix) {
            return [$prefix . '_' . snake_case($key) => $value];
        })->all();
    }

    public function setAdminFee($total_amount, $payment_option_selected, $shipping_cost, $member_discount, $member_discount_id)
    {
        return [
            'total_amount' => $total_amount,
            'payment_type' => $payment_option_selected,
            'shipping_cost' => $shipping_cost,
            'member_discount' => $member_discount,
            'member_discount_id' => $member_discount_id
        ];
    }

    public function getShipmentOptions(int $destination, int $weight, bool $apiFormatted)
    {
        $originId = config('ecommerce.shipment.origin');
        $originType = config('ecommerce.shipment.originType');
        $client = new Client([
            'headers' => [
                'Content-type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json',
                'key' => config('ecommerce.rajaongkir.api_key')
            ]
        ]);
        $response = $client->request('POST', config('ecommerce.rajaongkir.end_point_api') . '/cost', [
            'form_params' => [
                'origin' => $originId,
                'originType' => $originType,
                'destination' => $destination,
                'destinationType' => 'subdistrict',
                'weight' => $weight,
                'courier' => join(':', config('ecommerce.shipment.services'))
            ]
        ]);
        $apiResponse = json_decode((string)$response->getBody(), true);
        $courier_services = $this->shapeShipmentApiResult($apiResponse, $apiFormatted);
        if (!$apiFormatted) {
            session(['shippingOptions' => $courier_services]);
        }
        return $courier_services;
    }

    private function shapeShipmentApiResult($apiResponse, bool $apiFormatted)
    {
        // filter against unwanted services
        $filteredServices = collect($apiResponse["rajaongkir"]["results"])
            ->map(function ($courier) {
                return [
                    'code' => $courier['code'],
                    'name' => $courier['name'],
                    'costs' => collect($courier['costs'])->filter(function ($cost) {
                        return !in_array($cost['service'], config('ecommerce.shipment.blacklist'));
                    })->all()
                ];
            });

        if ($apiFormatted) {
            return $this->apiFormattedShipmentOptions($filteredServices);
        } else {
            return $this->webFormattedShipmentOptions($filteredServices);
        }
    }

    private function apiFormattedShipmentOptions($courierServices)
    {
        return $courierServices->map(function ($courier) {
            return collect($courier["costs"])
                ->map(function ($cost) use ($courier) {
                    return [
                        "id" => strtoupper($courier["code"] . '-' . $cost["service"]),
                        "code" => strtoupper($courier["code"]),
                        "name" => strtoupper($courier["code"] . ' ' . $cost["service"]),
                        "description" => $cost["description"],
                        "full_description" => strtoupper($courier["code"] . ' ' . $cost["description"] . ' (' . $cost["cost"][0]["etd"] . (($courier["code"] != 'pos') ? ' HARI' : '') . ')'),
                        "etd" => strtoupper($cost["cost"][0]["etd"] . (($courier["code"] != 'pos') ? ' HARI' : '')),
                        "cost_currency_code" => "IDR",
                        "cost_amount" => $cost["cost"][0]["value"]
                    ];
                });
        })->flatten(1)->values();
    }

    private function webFormattedShipmentOptions($courierServices)
    {
        return $courierServices->map(function ($courier) {
            return [
                'code' => $courier['code'],
                'name' => $courier['name'],
                'costs' => collect($courier["costs"])->map(function ($cost) use ($courier) {
                    return [
                        "id" => strtoupper($courier["code"] . '-' . $cost["service"]),
                        'service' => $cost['service'],
                        'description' => $cost['description'],
                        "full_description" => strtoupper($courier["code"] . ' ' . $cost["description"] . ' (' . $cost["cost"][0]["etd"] . (($courier["code"] != 'pos') ? ' HARI' : '') . ')'),
                        'etd' => strtoupper($cost["cost"][0]["etd"] . (($courier["code"] != 'pos') ? ' HARI' : '')),
                        'value' => $cost['cost'][0]['value']
                    ];
                })->values()
            ];
        })->all();
    }

    public function getNextInvoiceNumber()
    {
        $nOrders = Order::whereDate('created_at', Carbon::today())->count();
        $orderId = 'INV-' . Carbon::now()->format('Y-m-d-') . str_pad(++$nOrders, 5, '0', STR_PAD_LEFT);

        return $orderId;
    }

    public function scheduleExpiry(Order $order)
    {
        dispatch(function () use ($order) {
            if ($order->order_status === config('ecommerce.order.status.Pending')) {
                $order->order_status = config('ecommerce.order.status.Expired');
                $order->payment_confirmation_link = null;
                $order->save();

                $this->restoreItemStock($order);

                Mail::to($order->billing_email)->send(new OrderCancelled($order));
            }
        })->delay(now()->addMinutes(config('ecommerce.transferBca.expired.amount')));
    }

    private function restoreItemStock($order)
    {
        $invoiceExpired = config('ecommerce.adjustment.type.InvoiceExpired');
        $user = User::where('email', 'admin@mail.com')->first();
        $order->items->each(function ($item, $key) use ($order, $invoiceExpired, $user) {
            Adjustment::create([
                'product_variants_id' => $item->productvariant_id,
                'method' => '+',
                'qty' => $item->qty,
                'users_id' => $user->id,
                'note' => 'Payment Expired : Invoice ' . $order->invoice_id,
                'type' => $invoiceExpired
            ]);

            $variant = ProductVariant::find($item->productvariant_id);
            $variant->quantity_on_hand += $item->qty;
            $variant->save();
        });
    }

    public function scheduleReminders(int $numberOfReminders, Order $order)
    {
        $settingReminder    =  SettingReminder::first();
        
        if (is_null($settingReminder)) {
            $expired  = config('preorder.Reminder.expired.amount');
        }elseif(isset($settingReminder->interval)){
            $expired  = intval($settingReminder->interval) * 60;
        }else{
            $expired  = 60;
        }
        $interval = $expired / ($numberOfReminders + 1);
        for ($i = 1; $i <= $numberOfReminders; $i++) {
            dispatch(function () use ($i, $order) {
                if ($order->order_status === config('ecommerce.order.status.Pending')) {
                    Mail::to($order->billing_email)->send(new PaymentReminder($i, $order));
                }
            })->delay($order->created_at->addMinutes($i * $interval));
        }
    }

    public function transformOrderItems($items)
    {
        $orderItems = collect($items)
            ->filter(function ($item) {
                return !in_array($item['id'], ['0', '00', 'SHIPPING']);
            })
            ->map(function ($item) {
                $orderItem = new OrderItem();

                $productVariant = ProductVariant::with('product')->find((int)$item['id']);

                $orderItem->productVariant()->associate($productVariant);
                $orderItem->price = $item['price'];
                $orderItem->qty = $item['quantity'] ?? $item['qty'];
                $orderItem->discount = null;
                $orderItem->discountupdate_id = null;
                return $orderItem;
            });
        return $orderItems;
    }
}
