<?php

namespace App\Listeners;

use App\Events\EmployeTacheCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmployeTacheNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmployeTacheCreated $event): void
    {
        //
    }
    protected $listen = [
        EmployeTacheCreated::class => [
            SendEmployeTacheNotification::class,
        ],
    ];
}
