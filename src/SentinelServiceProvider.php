<?php

namespace Ebuyer\Sentinel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ebuyer\Sentinel\Commands\SentinelCommand;

class SentinelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sentinel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sentinel_table')
            ->hasCommand(SentinelCommand::class);
    }
}
