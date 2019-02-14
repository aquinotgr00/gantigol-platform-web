<?php

namespace Modules\Medias\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Medias\Content;
use Illuminate\Http\Request;

class ContentMediaController extends Controller
{
     protected $contentalbum;

    public function __construct()
    {
        $this->contentalbum = Content::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->contentalbum
            ->addMedia($request->file)
            ->toMediaCollection();

        return redirect()->back()->with('status', 'Media files added to photo album!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $mediaId
     * @return \Illuminate\Http\Response
     */
    public function destroy($mediaId)
    {
        $this->contentalbum
            ->getMedia()
            ->keyBy('id')
            ->get($mediaId)
            ->delete();

        return redirect()->back()->with('status', 'Media file deleted!');
    }

    public function destroyAll()
    {
        $this->contentalbum->clearMediaCollection();

        return redirect()->back()->with('status', 'All media deleted!');
    }
}
