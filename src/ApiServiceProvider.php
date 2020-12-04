<?php

namespace Atozpw\Whatsapp;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/whatsapp.php' => config_path('config/whatsapp.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('whatsapp', function() {
            return true;
        });

        App::bind('whatsapp', function() {
            return new Whatsapp;
        });
    }
}