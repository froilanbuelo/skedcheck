<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Validator::extend('not_both_zero', function($attribute, $value, $parameters, $validator) {
            $first = (int) array_get($validator->getData(), $parameters[0]);   
            $second = (int) array_get($validator->getData(), $parameters[1]);   
            if ($first == 0 && $second == 0){
                return false;
            }else{
                return true;
            }
        }); 
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
