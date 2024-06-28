<?php

namespace Abdulmajidcse\LaravelCodeMask\Facades;

use Illuminate\Support\Facades\Facade;

class CodeMaskFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'abdulmajidcse-laravel-code-mask';
    }
}
