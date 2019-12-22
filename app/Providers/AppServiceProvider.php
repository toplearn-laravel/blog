<?php

namespace App\Providers;

// use Illuminate\Support\Facades\View;
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

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::directive('ifGuest', function (){
        return "<?php if (auth()->guest()); ?>";
      });
      Blade::if('env', function ($env){
        return app()->environment($env);
      });
    }
}
