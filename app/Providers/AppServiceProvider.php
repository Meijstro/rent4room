<?php

namespace App\Providers;

use App\Rooms\RoomsRepository;
use Illuminate\Support\ServiceProvider;
use App\Rooms\EloquentRoomsRepository;

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
       $this->app->bind(RoomsRepository::class, function () {
           return new EloquentRoomsRepository();
       });
     }
}
