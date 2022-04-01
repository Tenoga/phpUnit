<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_number()
    {
        $number = 11;
        $result = validate_number($number);
        $this->assertTrue($result);
    }
}
