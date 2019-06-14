<?php

namespace Modules\Ecommerce\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Ecommerce\Order;

class CustomerNotification extends Mailable
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
        return $this
                    ->subject('Notifikasi Pengiriman Invoice '.$order->invoice_id)
                    ->view('emails.order-shipped', compact('order'));
    }
}
