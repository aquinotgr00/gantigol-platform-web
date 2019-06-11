<?php

namespace Modules\Ecommerce\Mail;

use Modules\Ecommerce\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentReminder extends Mailable
{
    use Queueable, SerializesModels;
    
    private $order;
    private $times;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(int $times,Order $order)
    {
        $this->times = $times;
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
        
        $subjects = [
            1=>'Hai, ada yang ketinggalan nih...',
            2=>'Menunggu pembayaran untuk Invoice '.$order->invoice_id,
            3=>'Apakah kamu melupakan pembelanjaanmu?'
        ];
        
        $prices = collect($order->items)->map(function($item){
            $sub = (int) ($item->price - $item->discount) * $item->qty;
            return $sub;
        });
        $subtotal = $prices->sum();
        $total_order = $subtotal + $order->shipping_cost;
        
        return $this
                    ->subject($subjects[$this->times])
                    ->view('ecommerce::emails.waiting-for-payment', compact('order', 'prices', 'subtotal', 'total_order'));
    }
}
