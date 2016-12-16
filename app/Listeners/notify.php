<?php

namespace App\Listeners;

use App\Events\FriendRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class notify
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FriendRequest  $event
     * @return void
     */
    public function handle(FriendRequest $event)
    {
        //
    }
}
