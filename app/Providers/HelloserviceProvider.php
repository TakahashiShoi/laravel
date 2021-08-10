<?php

namespace App\Providers;

use Illuminate\Support\facades\View;
use Illuminate\Support\ServiceProvider;

class HelloserviceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
            'hello.index', function($view){
                $view->with('view_message', 'composer message!');
            }
        );
    }
}