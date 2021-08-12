<?php

namespace App\Providers;

use Illuminate\Support\facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Http\Validators\HelloValidator;

class HelloserviceProvider extends ServiceProvider
{
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function ($translator, $data, $rules, $message) {
            return new HelloValidator($translator, $data, $rules, $message);
        });
    }
}
