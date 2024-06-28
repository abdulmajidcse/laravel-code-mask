<?php

namespace Abdulmajidcse\LaravelCodeMask\Tests;

use Abdulmajidcse\LaravelCodeMask\Facades\CodeMaskFacade;

class CodeMaskFacadeTest extends TestCase
{
    public function testHideString()
    {
        $phoneNumber = "1234567890";
        $hidePhoneNumber = CodeMaskFacade::hideString($phoneNumber, 2, 2);
        $this->assertEquals('12******90', $hidePhoneNumber);
    }

    public function testGenerateId()
    {
        $id = CodeMaskFacade::generateId(123, 10, 0, '2701');
        $this->assertSame('27010000000123', $id);
    }
}
