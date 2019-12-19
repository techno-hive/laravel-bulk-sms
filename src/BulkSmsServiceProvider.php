<?php

namespace TechnoHiveKenya\LaravelBulkSMS;

use Illuminate\Support\ServiceProvider;
use TechnoHiveKenya\LaravelBulkSMS\Services\BulkSMS;

class BulkSmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
//        $this->app->make(__DIR__.'/LaravelBulkSMSController');
        $this->loadViewsFrom(__DIR__.'/Views', 'laravel-bulk-sms');
        $this->app->bind('bulksms', function () {

            return new BulkSMS();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__."/routes.php";
        $this->publishes([
            __DIR__.'/Config/laravelbulksms.php' => config_path('laravelbulksms.php'),

        ]);
        $this->publishes([
            __DIR__.'/Assets' => public_path('laravelbulksms'),
        ], 'public');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/laravelbulksms'),
        ]);
    }
}
