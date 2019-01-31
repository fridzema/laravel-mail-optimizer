<?php

namespace Fridzel\LaravelMailOptimizer;

use Swift_Mailer;
use Illuminate\Support\ServiceProvider;

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

        $this->app->singleton(LaravelMailOptimizerPlugin::class, function ($app) {
            return new LaravelMailOptimizerPlugin($app['config']->get('mail-optimizer'));
        });

        $this->app->extend('swift.mailer', function (Swift_Mailer $swiftMailer, $app) {
            $swiftMailer->registerPlugin($app->make(LaravelMailOptimizerPlugin::class));

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
        $this->publishes([
            __DIR__.'/../config/mail-optimizer.php' => config_path('mail-optimizer.php'),
        ], 'mail-optimizer');
    }
}
