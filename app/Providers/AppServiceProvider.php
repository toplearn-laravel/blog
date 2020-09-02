<?php

namespace App\Providers;

use App\Service\FuelConsumption;
use App\Service\FuelControl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FuelControl::class, function(){
            return new FuelConsumption('BMW');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
