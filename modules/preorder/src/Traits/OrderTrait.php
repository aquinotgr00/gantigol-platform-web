<?php

namespace Modules\Preorder\Traits;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Modules\Preorder\Mail\OrderPaymentReminder;
use Modules\Preorder\Transaction;

trait OrderTrait {
    
    public function scheduleReminders(int $numberOfReminders, Transaction $transaction) {
        $interval = config('preorder.Reminder.expired.amount')/($numberOfReminders+1);
        for($i=1;$i<=$numberOfReminders;$i++) {
            dispatch(function () use ($i,$transaction) {
                if($transaction->status === 'pending') {
                    Mail::to($transaction->email)->send(new OrderPaymentReminder($i, $transaction));
                }
            })->delay($transaction->created_at->addMinutes($i*$interval));
            $transaction->payment_reminder = $i;
            $transaction->update();
        }
    }

}
