<?php

namespace App\Listeners;

use App\Events\FriendList;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListOfFriend
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
     * @param  FriendList  $event
     * @return void
     */
    public function handle(FriendList $event)
    {
        return 'we`re getting results of friends for this users.';
    }
}
