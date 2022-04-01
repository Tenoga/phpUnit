<?php

namespace Tests\Unit\Helpers;
use PHPUnit\Framework\TestCase;

class Email2Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email2()
    {
        $result = validate_email('correotest@gmail.com');
        $this->assertTrue($result);
    }
    
}
