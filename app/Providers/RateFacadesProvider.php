<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RateFacadesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        app()->bind('rates', function(){
            return new \App\Services\Rates;
        });
    }
}
