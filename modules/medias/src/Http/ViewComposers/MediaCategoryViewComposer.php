<?php

namespace Modules\Medias\Http\ViewComposers;

use Illuminate\View\View;
use Modules\Medias\MediaCategories;

class MediaCategoryViewComposer
{
    /**
     * @var \Modules\Medias\MediaCategories
     */
    protected $mediaCategories;
    
    /**
     * Create a new Image Gallery composer.
     *
     * @param  \Modules\Medias\MediaCategories  $mediaCategories
     * @return void
     */
    public function __construct(MediaCategories $mediaCategories)
    {
        // Dependencies automatically resolved by service container...
        $this->mediaCategories = $mediaCategories;
    }
    
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->mediaCategories->get());
    }
}