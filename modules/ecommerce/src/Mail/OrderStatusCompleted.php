<?php

namespace Modules\Ecommerce\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderStatusCompleted extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $email)
    {
        $this->order = $order;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->order;
        $invoice_id = $order->invoice_id;
        $invoice_url = url('/account/invoice/'.$order->invoice_id);
        $review_url = url('/account/review/'.$order->invoice_id.'/'.$order->id);
        return $this->view('ecommerce::emails.order-completed', compact('invoice_id', 'invoice_url', 'review_url'));
    }
}
