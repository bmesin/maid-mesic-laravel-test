<?php

namespace App\Providers;

use App\Services\Destination\ResolveDestination;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\Services\Destination\ResolveDestinationInterface',
            function () {
                return new ResolveDestination();
            }
        );
    }
}
