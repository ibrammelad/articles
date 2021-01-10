<?php

namespace App\Providers;

use App\Events\ProductEvent;
use App\Listeners\AwordProduct;
use App\Listeners\SecondProduct;
use App\Listeners\ThirdProduct;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ProductEvent::class=>[
            AwordProduct::class,
            SecondProduct::class,
            ThirdProduct::class,
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
//    public function shouldDiscoverEvents()
//    {
//        return true;
//    }
}
