<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProjetoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     Storage::fake('evento');

    //     $file = UploadedFile::fake()->image('event.jpg');

    //     $response = $this->post('/events', [
    //         'evento' => $file,
    //     ]);

    //     Storage::disk('evento')->assertExists($file->hasName());
    // }

    public function test_a_welcome_view_can_be_rendered() {

        //
        
    }
}
