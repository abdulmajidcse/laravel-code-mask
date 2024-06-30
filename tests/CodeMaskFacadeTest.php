<?php

namespace Abdulmajidcse\LaravelCodeMask\Tests;

use Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade;

class CodeMaskFacadeTest extends TestCase
{
    public function test_hide_string()
    {
        $phoneNumber = "1234567890";
        $hidePhoneNumber = CodeMaskFacade::hideString($phoneNumber, 2, 2);
        $this->assertEquals('12******90', $hidePhoneNumber);
    }

    public function test_generate_id()
    {
        $id = CodeMaskFacade::generateId(123, 10, 0, '2701');
        $this->assertSame('27010000000123', $id);
    }

    public function test_money_format_with_left_currency()
    {
        $money = CodeMaskFacade::moneyFormat(100000000.556, 'TK');
        $this->assertSame('TK 10,00,00,000.56', $money);
    }

    public function test_money_format_with_right_currency()
    {
        $money = CodeMaskFacade::moneyFormat(100000000.556, '', 'BDT');
        $this->assertSame('10,00,00,000.56 BDT', $money);
    }
}
