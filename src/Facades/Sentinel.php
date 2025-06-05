<?php

namespace Ebuyer\Sentinel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ebuyer\Sentinel\Sentinel
 */
class Sentinel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ebuyer\Sentinel\Sentinel::class;
    }
}
