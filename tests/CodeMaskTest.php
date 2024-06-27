<?php

namespace Abdulmajidcse\LaravelCodeMask\Tests;

use Abdulmajidcse\LaravelCodeMask\CodeMaskFacade;

class CodeMaskFacadeTest extends TestCase
{
    public function testHiddenString()
    {
        $phoneNumber = "1234567890";
        $hiddenPhoneNumber = CodeMaskFacade::hiddenString($phoneNumber, 2, 2);
        $this->assertEquals('12******90', $hiddenPhoneNumber);
    }

    public function testGenerateSerial()
    {
        $serial = CodeMaskFacade::generateSerial(123, 10, 0, '2701');
        $this->assertEquals('27010000000123', $serial);
    }
}
