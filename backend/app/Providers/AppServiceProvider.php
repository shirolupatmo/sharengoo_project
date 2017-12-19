<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\schema;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        schema::defaultStringLength(191);
    }


    public function register()
    {
        //
    }
}
