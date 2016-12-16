<?php

namespace App\Events;

use App\Friend;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class FriendRequest implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $friendRequest;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($friendRequest)
    {
        $this->friendRequest = $friendRequest;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return ['friend-request'];
    }
}
