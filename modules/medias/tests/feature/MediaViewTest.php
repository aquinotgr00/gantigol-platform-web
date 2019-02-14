<?php

namespace Modules\Medias\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Medias\Content;
use Tests\TestCase;

class MediaViewTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function media_cannot_render_view_empty_model()
    {
        $response = $this->get(route('media.view.content', ['model'=>'content']));

        $response->assertStatus(500);
    }

    /**
     * @test
     */
    public function media_can_render_view(): void
    {
        $media = factory(Content::class)->create();

        $response = $this->get(route('media.view.content', ['model'=>'content']));

        $response->assertStatus(200);
    }

     /**
     * @test
     */
    public function media_can_render_view_empty_data(): void
    {
        $media = factory(Content::class)->create();

        $response = $this->get(route('media.view.content', ['model'=>'content']));

        $this->assertEquals(0, count($response->original['media']));
    }
}
