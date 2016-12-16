<?php

namespace App\Listeners;

use App\Events\WhoseOnline;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListOfOnline
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
     * @param  WhoseOnline  $event
     * @return void
     */
    public function handle(WhoseOnline $event)
    {
        return 'were getting list of online users...';
    }
}
