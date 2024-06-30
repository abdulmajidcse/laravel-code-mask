<?php

namespace Abdulmajidcse\LaravelCodeMask\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string hideString(string $string, int $visibleInStart = 1, int $visibleInEnd = 1, string $maskString = '*')
 * @method static string generateId(string $string, int $length = 10, string $padString = '0', string $prefix = '')
 * @method static string moneyFormat(float $number, string $prefix = '', string $postfix = '')
 *
 * @see \Abdulmajidcse\LaravelCodeMask\Services\LaravelCodeMask
 */
class CodeMaskFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'abdulmajidcse-laravel-code-mask';
    }
}
