<?php

namespace App\listeners;

use App\Events\NewRegistrationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TipToAdmin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  NewRegistrationEvent  $event
     * @return void
     */
    public function handle(NewRegistrationEvent $event)
    {
        dd('Never give up');
    }
}
