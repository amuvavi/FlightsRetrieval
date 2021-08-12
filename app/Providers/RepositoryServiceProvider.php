<?php

namespace App\Providers;

use App\Repositories\Contracts\FlightRepository;
use App\Repositories\Eloquent\EloquentFlightRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(FlightRepository::class, EloquentFlightRepository::class);
    }
}
