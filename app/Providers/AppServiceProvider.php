<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//avoid the error during migration when using field string/varchar
//The error was cause by the length.
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //solving an issue happening with old MySQL version, defining string length solve this
        Schema::defaultStringLength(191);
    }
}
