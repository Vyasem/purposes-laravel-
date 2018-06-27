<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('alpha_latin_num', function ($attribute, $value, $parameters, $validator) {

            if(empty($value))
            {
                return true;
            }
            else
            {
                return preg_match('/[A-Za-z0-9]+$/', $value) == 1;
            }

        });
        Validator::extend('alpha_num_dash', function ($attribute, $value, $parameters, $validator) {

            if(empty($value))
            {
                return true;
            }
            else
            {
                return preg_match('/[A-Za-zА-Яа-я0-9_-]+$/', $value) == 1;
            }

        });

        View::share('status', array('successful' => 'Выполнено', 'wait' => 'Ожидает', 'process' => 'Выполняется'));

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
