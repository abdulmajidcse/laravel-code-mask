<?php

namespace Abdulmajidcse\LaravelCodeMask\Facades;

use Illuminate\Support\Facades\Facade;

class CodeMaskFacade extends Facade
{
    /**
     * @method static string hideString(string $string, int $visibleInStart = 1, int $visibleInEnd = 1, string $maskString = '*')
     * @method static string generateId(string $string, int $length = 10, string $padString = '0', string $prefix = '')
     *
     * To get available methods information
     * @see \Abdulmajidcse\LaravelCodeMask\Services\LaravelCodeMask
     */
    protected static function getFacadeAccessor()
    {
        return 'abdulmajidcse-laravel-code-mask';
    }
}
