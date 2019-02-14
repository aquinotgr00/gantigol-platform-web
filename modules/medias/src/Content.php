<?php

namespace Modules\Medias;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Content extends Model implements HasMedia
{
    use HasMediaTrait;
}
