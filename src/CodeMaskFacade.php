<?php

namespace Abdulmajidcse\LaravelCodeMask;

use Illuminate\Support\Facades\Facade;

class CodeMaskFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'code-mask';
    }
}
