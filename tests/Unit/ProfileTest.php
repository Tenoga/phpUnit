<?php

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Http\Controllers\ProfileController;


class ProfileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_profile()
    {
        Storage::fake('local');
        $response = $this->post('profile',[
            'photo' => $photo = UploadedFile::fake()->image('photo.jpeg')
        ]);
        Storage::disk('local')->assertExists("profiles/{$photo->hashName()}");
        $response->assertRedirect('profile');

    }
}
