<?php

namespace Modules\Preorder\Traits;

use Illuminate\Support\Facades\Mail;
use Modules\Preorder\SettingReminder;
use Modules\Preorder\Mail\OrderPaymentReminder;
use Modules\Preorder\Transaction;

trait OrderTrait {
    
    public function scheduleReminders(int $numberOfReminders, Transaction $transaction) {

        $settingReminder    =  SettingReminder::first();
        
        if (is_null($settingReminder)) {
            $expired  = config('preorder.Reminder.expired.amount');
        }elseif(isset($settingReminder->interval)){
            $expired  = intval($settingReminder->interval) * 60;
        }else{
            $expired  = 60;
        }
        
        $interval = $expired / ($numberOfReminders+1);
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
