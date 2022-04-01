<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $var = true;
        $this->assertEquals(true, $var);
        $this->assertTrue($var);
    }
    public function test_check(){
        $var = true;
        $this->assertTrue($var);
    }
}
