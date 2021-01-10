<?php

namespace App\Listeners;

use App\Events\ProductEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SecondProduct
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
     * @param  ProductEvent  $event
     * @return void
     */
    public function handle(ProductEvent $event)
    {
        var_dump('second function and listener');
    }
}
