<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ArrayShow;

class ArrayShowProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('array.show', function () {
            return new ArrayShow();
        });
    }

}
