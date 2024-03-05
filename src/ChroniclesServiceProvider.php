<?php

namespace Chronicles\Chronicles;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Chronicles\Chronicles\Home\Home;

class ChroniclesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'chronicles');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'chronicles');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        Livewire::component('chronicles-home', Home::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/chronicles.php' => config_path('chronicles.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/chronicles'),
            ], 'views');*/

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/chronicles/chronicles'),
            ], 'assets');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/chronicles'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/chronicles.php', 'chronicles');

        // Register the main class to use with the facade
        $this->app->singleton('chronicles', function () {
            return new Chronicles;
        });
    }
}
