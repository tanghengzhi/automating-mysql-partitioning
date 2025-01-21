<?php

namespace Victor Tang\AutomatingMysqlPartitioning;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Victor Tang\AutomatingMysqlPartitioning\Commands\AutomatingMysqlPartitioningCommand;

class AutomatingMysqlPartitioningServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('automating-mysql-partitioning')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_automating_mysql_partitioning_table')
            ->hasCommand(AutomatingMysqlPartitioningCommand::class);
    }
}
