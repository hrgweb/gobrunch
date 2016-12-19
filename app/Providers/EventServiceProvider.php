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
        'App\Events\WhoseOnline' => [
            'App\Listeners\ListOfOnline',
        ],
        'App\Events\FriendList' => [
            'App\Listeners\ListOfFriend',
        ],
        'App\Events\FriendRequest' => [
            'App\Listeners\notify',
        ],
        'App\Events\FriendNotification' => [
            'App\Listeners\FriedRequest',
        ],
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
