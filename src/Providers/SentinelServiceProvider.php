<?php

namespace Ebuyer\Sentinel\Providers;

use Ebuyer\Sentinel\Services\SentinelSchedule;
use Illuminate\Support\ServiceProvider;

class SentinelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            'schedule',
            fn ($app) => new SentinelSchedule()
        );
    }
}
