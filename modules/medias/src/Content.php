<?php

namespace Modules\Medias;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Content extends Model implements HasMedia
{
    use HasMediaTrait;

    /**
     * get media with paginate default 16 file
     *
     *
     * @return mixed
     */
    public function getMediaPaginate()
    {
        /** @var Content **/
        $content = $this->find(1);

        return $content->media()->where('collection_name', 'default')->latest()->paginate(16);
    }
    
    public function scopeMedia($query)
    {
        /*
        $media = Content::find(1)->media()->where('collection_name', 'default');
        
        if(request()->has('s')) {
            $media = $media->where('file_name', 'like', '%'.request()->query('s').'%');
        }
        
        if(request()->has('c')) {
            $media = $media->where('category', request()->query('c'));
        }
        */
        
    }
}
