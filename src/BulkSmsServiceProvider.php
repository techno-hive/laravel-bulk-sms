<?php

namespace TechnoHiveKenya\LaravelBulkSMS;

use Illuminate\Support\ServiceProvider;

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
    }
}
