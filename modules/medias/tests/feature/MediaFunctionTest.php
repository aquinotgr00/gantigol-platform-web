<?php

namespace Modules\Medias\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Modules\Medias\Content;
use Tests\TestCase;

class MediaFunctionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function media_upload()
    {
        $this->withoutExceptionHandling();
        $media = factory(Content::class)->create();
        $model = Content::first();
        Storage::fake('avatars');

         $file =  UploadedFile::fake()->image('avatar.png');

        $model->addMedia($file)
            ->toMediaCollection();

        $response = $this->get(route('media.view.content', ['model'=>'content']));
        $this->assertEquals(1, count($response->original['media']));
    }

    /**
     * @test
     */
    public function media_destroy()
    {
        $this->withoutExceptionHandling();
        $media = factory(Content::class)->create();
        $model = Content::first();
        Storage::fake('avatars');

         $file =  UploadedFile::fake()->image('avatar.png');

        $model->addMedia($file)
            ->toMediaCollection();

        $model->clearMediaCollection();
        $response = $this->get(route('media.view.content', ['model'=>'content']));
        $this->assertEquals(0, count($response->original['media']));
    }
}
