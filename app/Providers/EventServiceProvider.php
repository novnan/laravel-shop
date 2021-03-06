<?php

namespace App\Providers;

use App\Listeners\QueryListener;
use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Events\QueryExecuted;
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
        'App\Events\Event' => [
            'App\Listeners\EventListener'
        ],
        Registered::class => [
            RegisteredListener::class
        ],
        QueryExecuted::class => [
            QueryListener::class
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
