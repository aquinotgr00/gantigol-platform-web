<?php

namespace Modules\Medias\Http\Controllers;

use Modules\Medias\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use File;

class MediaController extends Controller
{
    public function mediaUp(string $model)
    {

        $model = $this->getModel($model);
        $media = $this->getMedia($model);
        $title = ucfirst($model);
 
        return view('medias::content', compact('title', 'content', 'model', 'media'));
    }


    protected function getMedia(string $model): Collection
    {
        switch ($model) {
            case 'content':
                return Content::first()->getMedia();
                break;
            default:
                return new Collection();
        }
    }

    protected function getModel(string $model): string
    {
        switch ($model) {
            case 'content':
                return 'content';
                break;
            default:
                return '';
        }
    }
}
