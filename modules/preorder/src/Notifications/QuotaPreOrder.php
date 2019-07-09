<?php

namespace Modules\Preorder\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Modules\Preorder\PreOrder;

class QuotaPreOrder extends Notification
{
    use Queueable;

    protected $preorder;

    public function __construct(PreOrder $preorder)
    {
        $this->preorder = $preorder;
    }

    public function via($notifiable)
    {
        return ['broadcast', 'database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'preorder' => $this->preorder
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'preorder' => $this->preorder
        ]);
    }
}
