<?php

namespace Modules\Medias\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;
use Modules\Medias\Content;
use Modules\Medias\MediaCategories;
use Modules\Medias\Media;
use Tests\TestCase;

class MediaFunctionTest extends TestCase
{
    use RefreshDatabase;


    /**
     * @test
     * @return void
     */
    public function mediaLibrary()
    {
        $this->withoutExceptionHandling();
        factory(Content::class)->create();
        /** @var Content */
        $model = Content::first();
        Storage::fake('avatars');

         $file =  UploadedFile::fake()->image('avatar.png');
     
        $model->addMedia($file)
            ->toMediaCollection();

        $response = $this->get(route('media.library', ['model'=>'content']));
        $response->assertViewHas('media');
    }

    /**
     * @test
     * @return void
     */
    public function mediaLibraryTemp()
    {
        Storage::fake('avatars');
        $path = UploadedFile::fake()->image('avatar.png');
        $response = $this->postJson(route('projects.storeMedia'), ['file'=>$path]);
        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function mediaLibraryAjax()
    {
        $this->withoutExceptionHandling();
        factory(Content::class)->create();
        /** @var Content */
        $model = Content::first();
        Storage::fake('avatars');

         $file =  UploadedFile::fake()->image('avatar.png');
     
        $model->addMedia($file)
            ->toMediaCollection();

        $response = $this->post(route('projects.store', ['documents[]'=>$file->getClientOriginalName()]));
        $response->assertRedirect('media/library');
    }

    /**
     * @test
     * @return void
     */
    public function mediaAddCategory()
    {
       
        $response = $this->post(route('media.storeCategory', ['title'=>'test']));
        $response->assertStatus(200);
    }

     /**
     * @test
     * @return void
     */
    public function mediaAssignCategory()
    {
        $categories = factory(MediaCategories::class)->create();
        $medias = factory(Media::class)->create();
        $response = $this->post(route('media.assignMediaCategory'), ['id'=>$medias->id,'category'=>$categories->id]);
        $response->assertStatus(200);
    }
}
