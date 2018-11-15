<?php

namespace Fridzema\LaravelMailOptimizer;

use Illuminate\Support\ServiceProvider;
use Swift_Mailer;

class LaravelMailOptimizerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mail-optimizer.php', 'mail-optimizer');

        // Register the service the package provides.
        $this->app->singleton(LaravelMailOptimizerPlugin::class, function ($app) {
            return new LaravelMailOptimizerPlugin($app['config']->get('mail-optimizer'));
        });

        $this->app->extend('swift.mailer', function (Swift_Mailer $swiftMailer, $app) {
            $inlinerPlugin = $app->make(LaravelMailOptimizerPlugin::class);
            // $minifierPlugin = $app->make(LaravelMailHtmlMinifierPlugin::class);

            $swiftMailer->registerPlugin($inlinerPlugin);

            return $swiftMailer;
        });
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/mail-optimizer.php' => config_path('mail-optimizer.php'),
        ], 'mail-optimizer');
    }
}
