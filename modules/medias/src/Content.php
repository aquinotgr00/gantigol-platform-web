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

        return $content->media()->where('collection_name', 'default')->paginate(16);
    }
}
