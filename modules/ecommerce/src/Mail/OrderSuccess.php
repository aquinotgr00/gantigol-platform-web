<?php

namespace Modules\Ecommerce\Mail;

use Modules\Ecommerce\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;

class OrderSuccess extends Mailable
{
    use Queueable, SerializesModels;

    private $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->order;
        $prices = collect($order->items)->map(function($item){
            $sub = (int) ($item->price - $item->discount) * $item->qty;
            return $sub;
        });
        $subtotal = $prices->sum();
        $total_order = $subtotal + $order->shipping_cost;
        
        if($order->payment_type==='BCA') {
            $payment_confirmation_link = route('payment.confirmation.form',['link'=>$order->payment_confirmation_link]);
            return $this
                    ->subject('Menunggu Pembayaran ke Bank BCA untuk Invoice '.$order->invoice_id)
                    ->view('ecommerce::emails.bca-order-success', compact('order', 'prices', 'subtotal', 'total_order', 'payment_confirmation_link'));
        }
        else {
            return $this->view('ecommerce::emails.order-success', compact('order', 'prices', 'subtotal', 'total_order'));
        }
        
    }
}
