<?php
namespace frankyso\iPaymu\Laravel;

use Illuminate\Support\ServiceProvider;
use Frankyso\iPaymu\iPaymu;

class iPaymuServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('iPaymu',function(){
            return new iPaymu(config('ipaymu.key'), [config('ipaymu.url_return'), config('ipaymu.url_notify'), config('ipaymu.url_cancel')]);
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