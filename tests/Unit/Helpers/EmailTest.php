<?php

namespace Tests\Unit\Helpers;
use App\Helpers\Email;

use PHPUnit\Framework\TestCase;


class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $email = "correotest@gmail.com";
        // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        $result = Email::validate($email);

        

        $this->assertTrue($result);


    }
}
