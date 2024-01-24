<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
class getVideoByIdTest extends TestCase
{
    
    //Trails
    use RefreshDatabase;

   public function testGetVideoById(){

    //Crea el escenario
    //crea video
    Video::factory(10)->create([
        'title' => 'Video 1',
        'description' => 'Description 1',
        'url' => 'https://www.youtube.com/watch?v=1',
        'status' => '1',
    ]);

    //llamar a la api
    $response = $this->get('/api/videos/1');

    //comprobar que nos devuelve el video
    $response->assertJsonFragment([
        'id' => 1,
        'title' => 'Video 1',
        'description' => 'Description 1',
        'url' => 'https://www.youtube.com/watch?v=1',
        'status' => '1',
    ]);

   }
}
