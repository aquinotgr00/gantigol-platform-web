<?php

namespace Modules\Preorder\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WayBill extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * [$send description]
     *
     * @var object
     */
    protected $send;

    /**
     * [__construct description]
     *
     * @param object $send
     *
     * @return  void
     */
    public function __construct($send)
    {
        $this->send = $send;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Shipping Number #'.$this->send['invoice'])
        ->markdown('preorder::emails.waybill')->with($this->send);
    }
}
