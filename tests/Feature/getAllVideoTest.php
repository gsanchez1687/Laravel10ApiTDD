<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Video;

class getAllVideoTest extends TestCase
{
    use RefreshDatabase;
   
    public function testGetAllVideo()
    {
        $this->withoutExceptionHandling();

        //Crear 10 videos para obtener todos
        Video::factory(10)->create();

        //Ruta Api para obtener todos los videos
        $this->getJson("/api/videos")->assertOk()->assertJsonCount(10);
    }

    public function testGetAllVideos()
    {
        $video = Video::factory(10)->create();
        $this->getJson("/api/videos")->assertJson($video->toArray());
    }
    
}
