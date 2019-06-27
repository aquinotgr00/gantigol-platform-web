<?php

namespace Modules\Preorder\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Modules\Preorder\PreOrder;

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
        $this->product = $preOrder;
        $this->message = "{$preOrder->product->name} quota is fulfilled.";
        $this->url = route('pending.transaction', $preOrder->id);
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
