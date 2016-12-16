<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\FriendRequest' => [
            'App\Listeners\notify',
        ],
        'App\Events\WhoseOnline' => [
            'App\Listeners\ListOfOnline',
        ],
        'App\Events\FriendList' => [
            'App\Listeners\ListOfFriend',
        ],
        'App\Events\NotifyUserContainer' => [
            'App\Listeners\NotifyUserHandler',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
