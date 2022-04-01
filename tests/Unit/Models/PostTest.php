<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;


use function PHPUnit\Framework\assertEquals;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_setLowercase()
    {
        $post = new Post;
        $post -> name = "David Felipe Castro Herrera";
        $this->assertEquals("david felipe castro herrera", $post->name);
    }

    public function test_getSlug(){
        $post = new Post;
        $post -> name = "aboutUs/David Felipe Castro Herrera";
        $this -> assertEquals('aboutus/david%felipe%castro%herrera', $post->slug);
    }
}
