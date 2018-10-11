<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;

=======
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //
        Schema::defaultStringLength(191);
=======
        
        //
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
