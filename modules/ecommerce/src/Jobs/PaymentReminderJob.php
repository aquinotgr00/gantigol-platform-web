<?php

namespace Modules\Ecommerce\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use Modules\Ecommerce\Mail\PaymentReminder;
use Modules\Ecommerce\Order;

class PaymentReminderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $order;

    private $times;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $times,Order $order)
    {
        $this->times    = $times;
        $this->order    = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (isset($this->order->billing_email)) {
            Mail::to($this->order->billing_email)->send(new PaymentReminder($this->times,$this->order));
            $order->increment('payment_reminder');
        }
    }
}
