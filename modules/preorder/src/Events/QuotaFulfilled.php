<?php

namespace Modules\Preorder\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class QuotaFulfilled implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Place to hold the object of product.
     *
     * @var object
     */
    public $preOrder;

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
     * @param   mixed  $preOrder
     *
     * @return  void
     */
    public function __construct($preOrder)
    {
        $this->product = $preOrder->product->name;
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
