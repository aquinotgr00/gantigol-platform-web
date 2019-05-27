<?php

namespace Modules\Preorder\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderPaymentReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Undocumented variable
     *
     * @var object
     */
    private $transaction;

    /**
     * Create a new message instance.
     *
     * @param object $transaction
     * @return mixed
     */
    public function __construct($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Payment Reminder')
        ->markdown('preorder::emails.orders.payment-reminder')->with([
            'transaction' => $this->transaction
        ]);
    }
}
