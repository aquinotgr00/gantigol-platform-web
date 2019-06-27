<?php

namespace Modules\Preorder\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Modules\Preorder\Mail\OrderPaymentReminder;
use Modules\Preorder\Transaction;
use Modules\Preorder\SettingReminder;

class BulkPaymentReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $settingReminder = SettingReminder::first();
        $repeat = (!is_null($settingReminder))? $settingReminder->repeat : 3;
        $items  = Transaction::getToReminder($repeat);
        foreach ($items as $key => $value) {
            try {
                Mail::to($value->email)->send(new OrderPaymentReminder($value));
                $increment = 1;
                $increment += intval($value->payment_reminder);
                $transaction = Transaction::find($value->id);
                $transaction->payment_reminder = $increment;
                $transaction->update();
            } catch (\Swift_TransportException $e) {
                $response = $e->getMessage() ;
                break;
            }
        }
    }
}
