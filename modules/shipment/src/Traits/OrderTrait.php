<?php

namespace Modules\Shipment\Traits;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use \GuzzleHttp\Client;


trait OrderTrait {
    public function setAddress($prefix, $data) {
        return collect($data)->mapWithKeys(function($value, $key) use($prefix) {
            return [$prefix.'_'.snake_case($key)=>$value];
        })->all();
    }
    
    public function setAdminFee($total_amount, $payment_option_selected, $shipping_cost, $member_discount, $member_discount_id) {
        return [
            'total_amount'=>$total_amount,
            'payment_type'=>$payment_option_selected,
            'shipping_cost'=>$shipping_cost,
            'member_discount'=>$member_discount,
            'member_discount_id'=>$member_discount_id
        ];
    }
    
    public function getShipmentOptions(int $destination, int $weight, bool $apiFormatted) {
        $originId = config('shipment.origin');
        $originType = config('shipment.originType');
        $client = new Client([
            'headers' => [
                'Content-type'=>'application/x-www-form-urlencoded',
                'Accept' => 'application/json',
                'key' => config('rajaongkir.api_key')
            ]]);
        $response = $client->request('POST',config('rajaongkir.end_point_api').'/cost',[
            'form_params' => [
                'origin'=>$originId,
                'originType'=>$originType,
                'destination'=>$destination,
                'destinationType'=>'subdistrict',
                'weight'=>$weight,
                'courier'=>join(':',config('shipment.services'))
            ]
        ]);
        $apiResponse = json_decode((string) $response->getBody(), true);
        $courier_services = $this->shapeShipmentApiResult($apiResponse, $apiFormatted);
        
        //dd($courier_services);
        if(!$apiFormatted) {
            session(['shippingOptions'=>$courier_services]);
        }
        return $courier_services;
    }
    
    private function shapeShipmentApiResult($apiResponse, bool $apiFormatted) {
        // filter against unwanted services
        $filteredServices = collect($apiResponse["rajaongkir"]["results"])
        ->map(function($courier){
            return [
                'code'=>$courier['code'],
                'name'=>$courier['name'],
                'costs'=>collect($courier['costs'])->filter(function($cost) {
                    return !in_array($cost['service'], config('shipment.blacklist'));
                })->all()
            ];
        });
        
        if($apiFormatted) {
            return $this->apiFormattedShipmentOptions($filteredServices);
        }
        else {
            return $this->webFormattedShipmentOptions($filteredServices);
        }
    }
    
    private function apiFormattedShipmentOptions($courierServices) {
        return $courierServices->map(function($courier) {
                return collect($courier["costs"])
                    ->map(function($cost) use($courier) {
                        return [
                            "id"=> strtoupper($courier["code"].'-'.$cost["service"]),
                            "code"=>strtoupper($courier["code"]),
                            "name"=> strtoupper($courier["code"].' '.$cost["service"]),
                            "description" => $cost["description"],
                            "full_description" => strtoupper($courier["code"].' '.$cost["description"].' ('.$cost["cost"][0]["etd"].(($courier["code"]!='pos')?' HARI':'').')'),
                            "etd"=> strtoupper($cost["cost"][0]["etd"].(($courier["code"]!='pos')?' HARI':'')),
                            "cost_currency_code"=>"IDR",
                            "cost_amount"=>$cost["cost"][0]["value"]
                        ];
                    });
                })->flatten(1)->values();
    }
    
    private function webFormattedShipmentOptions($courierServices) {
        return $courierServices->map(function($courier) {
                return [
                    'code'=>$courier['code'],
                    'name'=>$courier['name'],
                    'costs'=>collect($courier["costs"])->map(function($cost) use($courier) {
                        return [
                            "id"=> strtoupper($courier["code"].'-'.$cost["service"]),
                            'service'=>$cost['service'],
                            'description'=>$cost['description'],
                            "full_description" => strtoupper($courier["code"].' '.$cost["description"].' ('.$cost["cost"][0]["etd"].(($courier["code"]!='pos')?' HARI':'').')'),
                            'etd'=>strtoupper($cost["cost"][0]["etd"].(($courier["code"]!='pos')?' HARI':'')),
                            'value'=>$cost['cost'][0]['value']
                        ];
                    })->values()
                ];
            })->all();
    }

}