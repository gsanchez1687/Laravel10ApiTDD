<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Video;
class getVideoByIdTest extends TestCase
{
    use RefreshDatabase;
    public function testGetVideoById(){
    $video = Video::factory(1)->create();
    $this->get(sprintf('/api/videos/%s', $video[0]['id']))->assertJsonFragment($video[0]->toArray());
    }
}
