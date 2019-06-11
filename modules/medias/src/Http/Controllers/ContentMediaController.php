<?php

namespace Modules\Medias\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Medias\Content;
use Illuminate\Http\Request;

class ContentMediaController extends Controller
{


    /**
     * Create a new parameter.
     *
     * @var mixed contentalbum
     */
    protected $contentalbum;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->contentalbum = Content::first();
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeMedia(Request $request)
    {
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        /** @var \Illuminate\Http\UploadedFile **/
        $file = $request->file('file');
        /** @var string **/
        $original_name = $file->getClientOriginalName();
        $name = uniqid() . '_' . trim($original_name);

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $original_name,
            'path' => $path
        ], 200);
    }

     /**
     * Store a newly created resource in storage in to databases.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $uploadedMedia = [];
        foreach ($request->input('document', []) as $file) {
            $media = $this->contentalbum->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection();
            $uploadedMedia[] = [
                'id'=>$media->id,
                'url'=>$media->getUrl()
            ];
        }
        
        if ($request->ajax()) {
            return response()->json([
                'status'=>'success',
                'data'=>['images'=>$uploadedMedia]
            ]);
        }
        
        return redirect()->route('media.library');
    }
}
