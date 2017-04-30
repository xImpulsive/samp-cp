<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\View;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
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

        Event::listen('view.inject', function ($name) {
            return event("view.inject." . $name);
        });

        Event::listen("view.inject.anyname", function() {
            return View::make("acp.layout.test");
        });

        Event::listen("view.inject.afterAnyname", function() {
            return "Plugin overview fertig!";
        });
    }
}
