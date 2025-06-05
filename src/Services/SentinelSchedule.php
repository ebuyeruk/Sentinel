<?php

namespace Ebuyer\Sentinel\Services;

use Ebuyer\Sentinel\Facades\Sentinel;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;

class SentinelSchedule extends Schedule
{
    public function exec($command, array $parameters = []): Event|bool
    {
        if (! Sentinel::isEnabled($command)) {
            return false;
        }

        Log::info('Scheduling '.$command);

        return parent::exec($command, $parameters);
    }
}
