<?php

namespace App\Events;

use App\Invitation;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class NotifyUserContainer implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $invitation;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->invitation = $this->invitations();
    }

    public function invitations()
    {
        return Invitation::where('UserThatInvitedID', auth()->user()->id)->where('isAccepted', 0)->get();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('invite-event');
    }
}
