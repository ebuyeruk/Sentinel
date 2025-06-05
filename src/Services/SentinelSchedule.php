<?php

namespace Ebuyer\Sentinel\Services;

use Ebuyer\Sentinel\Facades\Sentinel;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Console\Scheduling\Schedule;

class SentinelSchedule extends Schedule
{
    public function exec($command, array $parameters = []): Event|bool
    {
        if (! Sentinel::isEnabled($command)) {
            return false;
        }

        return parent::exec($command, $parameters);
    }
}
