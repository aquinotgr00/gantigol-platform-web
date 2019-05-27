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
    public function __construct(Content $media)
    {
        // Dependencies automatically resolved by service container...
        $this->media = $media;
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('media', $this->media->getMediaPaginate());
    }
}