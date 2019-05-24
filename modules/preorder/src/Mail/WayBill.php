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
     * [$production description]
     *
     * @var object
     */
    protected $production;

    /**
     * [__construct description]
     *
     * @param object $production
     *
     * @return  void
     */
    public function __construct($production)
    {
        $this->production = $production;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Shipping Number #'.$this->production->id)
        ->markdown('preorder::emails.waybill')->with([
            'production' => $this->production,
        ]);
    }
}
