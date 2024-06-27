<?php

namespace Abdulmajidcse\LaravelCodeMask;

use Abdulmajidcse\CodeMask\CodeMask;
use Illuminate\Support\ServiceProvider;

class LaravelCodeMaskServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('abdulmajidcse-code-mask', function ($app) {
            return new CodeMask();
        });
    }

    public function boot()
    {
        //
    }
}
