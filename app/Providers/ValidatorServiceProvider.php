<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidatorServiceProvider extends ServiceProvider{
    
    public function boot(){

        Validator::extend('foo', function($attribute, $value, $parameters){
            var_dump($attribute);
            var_dump($value);
            var_dump($parameters);
            // die();
            return $value == 'foorule';
        });

    }

    public function register(){

    }
} 