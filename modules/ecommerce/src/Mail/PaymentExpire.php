<?php

namespace Modules\Ecommerce\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PaymentExpire extends Mailable
{
    use Queueable, SerializesModels;

    private $transaction;
    /**
     * Create a new message instance.
     *
     * @return void
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
        return $this->subject('Gagal dibayar #' . $this->transaction->invoice)
        ->view('ecommerce::emails.payment-expire')
        ->with([
            'transaction' => $this->transaction
        ]);
    }
}
