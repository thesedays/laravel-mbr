<?php

namespace TheseDays\MasterBoss;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
       $this->publishes([
           __DIR__.'/../config/mbr.php' => config_path('mbr.php'),
       ], 'config');
     }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mbr.php', 'mbr');
    }
}
