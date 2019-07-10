<?php

namespace Modules\Preorder\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Modules\Preorder\PreOrder;
use Modules\Preorder\Notifications\QuotaPreOrder;

use Notification;

class QuotaFulfilled implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Place to hold the object of product.
     *
     * @var object
     */
    public $product;

    /**
     * Place to hold the message that need to send.
     *
     * @var string
     */
    public $message;
    /**
     *
     * @var string
     */
    public $url;
    /**
     *
     * @param   PreOrder  $preOrder
     *
     * @return  void
     */
    public function __construct(PreOrder $preOrder)
    {
        if (isset($preOrder->created_by)) {
            $user = \Modules\Admin\Admin::find($preOrder->created_by)->first();
            if (!is_null($user)) {
                Notification::send($user, new QuotaPreOrder($preOrder));
            }
        }

        $this->product = $preOrder;
        $this->message = "{$preOrder->product->name} quota is fulfilled.";
        $this->url = route('list-preorder.show', $preOrder->id);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return ['quota-fulfilled'];
    }
}
