<?php

namespace G2\FinancialAdapter;

use Illuminate\Support\ServiceProvider;

class FinancialAdapterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
         $this->loadMigrationsFrom(__DIR__.'/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');
         $this->commands([
            \G2\FinancialAdapter\Commands\Migrate::class,
            \G2\FinancialAdapter\Commands\Seed::class,
        ]);
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('finance.php'),
            ], 'config');
        }

        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'FinancialAdapter');

        // Register the main class to use with the facade
        $this->app->singleton('FinancialAdapter', function () {
            return new FinancialAdapter;
        });
    }
}
