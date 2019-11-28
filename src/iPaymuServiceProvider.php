<?php

namespace frankyso\iPaymu\Laravel;

use frankyso\iPaymu\iPaymu;
use Illuminate\Support\ServiceProvider;

class iPaymuServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('iPaymu', function () {
            return new iPaymu(config('ipaymu.key'), [url(config('ipaymu.url_return')), url(config('ipaymu.url_notify')), url(config('ipaymu.url_cancel'))]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/ipaymu.php' => config_path('ipaymu.php'),
        ]);
    }
}
