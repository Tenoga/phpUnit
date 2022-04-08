<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;

use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        User::factory()->create([
            'email' => 'castroherreradavid@admin.com'
        ]);
        $this->assertDatabaseHas('users', [
            'email' => 'castroherreradavid@admin.com']);

        $this->assertDatabaseMissing('users',[
            'email'=> 'noexiste@admin.com']);
    }
}
