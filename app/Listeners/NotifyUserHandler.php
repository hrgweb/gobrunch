<?php

namespace App\Listeners;

use App\Events\NotifyUserContainer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyUserHandler
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
     * @param  NotifyUserContainer  $event
     * @return void
     */
    public function handle(NotifyUserContainer $event)
    {
        return 'Someone invited you to an event.';
    }
}
