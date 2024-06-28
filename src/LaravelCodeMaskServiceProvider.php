<?php

namespace Abdulmajidcse\LaravelCodeMask;

use Illuminate\Support\ServiceProvider;
use Abdulmajidcse\LaravelCodeMask\Services\LaravelCodeMask;

class LaravelCodeMaskServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('abdulmajidcse-laravel-code-mask', function ($app) {
            return new LaravelCodeMask();
        });
    }
}
