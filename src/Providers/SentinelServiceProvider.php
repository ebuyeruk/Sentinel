<?php

namespace Ebuyer\Sentinel\Providers;

use Ebuyer\Sentinel\Services\SentinelSchedule;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;

class SentinelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            Schedule::class,
            fn ($app) => new SentinelSchedule
        );
    }
}
