<?php

namespace Modules\Medias\Http\ViewComposers;

use Illuminate\View\View;
use Modules\Medias\Content;
use Modules\Medias\MediaCategories;

class MediaGalleryViewComposer
{
    /**
     * @var \Modules\Medias\Content
     */
    protected $media;
    
    /**
     * Create a new Image Gallery composer.
     *
     * @param  \Modules\Medias\Content  $media
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $media = Content::find(1)->media()->where('collection_name', 'default');
        
        if(request()->has('s')) {
            $media = $media->where('file_name', 'like', '%'.request()->query('s').'%');
        }
        
        if(request()->has('c')) {
            $media = $media->where('category', request()->query('c'));
        }
        
        $media = $media->latest()->paginate(16);
        $view->with('media', $media);
    }
}
