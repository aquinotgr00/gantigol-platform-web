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
     * [$transaction description]
     *
     * @var object
     */
    protected $transaction;

    /**
     * [__construct description]
     *
     * @param object $transaction
     *
     * @return  void
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
        return $this->subject('Nomor Resi #' . $this->transaction->invoice)
            ->view('preorder::emails.waybill')
            ->with(['transaction' => $this->transaction]);
    }
}
