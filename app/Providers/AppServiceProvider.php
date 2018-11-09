<?php

namespace App\Providers;

use App\Twitter;
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
              \App\Repositories\UserRepository::class,
              \App\Repositories\DbUserRepository::class
         );
    }
}
/*

$this->app->singleton('foo', function (){
            return 'app';
        });
 */