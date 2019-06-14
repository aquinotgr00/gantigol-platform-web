<?php

namespace Modules\Medias\Http\Controllers;

use Modules\Medias\Content;
use Modules\Medias\MediaCategories;
use Modules\Medias\Media;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use File;

class MediaController extends Controller
{

     /**
     * Create a new parameter.
     *
     * @var mixed medias
     */
    protected $medias;

    /**
     * Create a new parameter.
     *
     * @var mixed mediaCategories
     */
    protected $mediaCategories;

     /**
     * Create a new parameter.
     *
     * @var mixed mediaContent
     */
    protected $mediaContent;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Content $mediaModel, MediaCategories $mediaCategories, Media $mediaContent)
    {
        $this->medias = $mediaModel;
        $this->mediaCategories = $mediaCategories;
        $this->mediaContent = $mediaContent;
    }

    /**
     * view function media library function.
     *
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return [ 'gallery'=>view('medias::media-gallery')->render() ];
        }
 
        return view('medias::media-library');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('medias::media-library-uploader');
    }
    
    
    /**
     * view function media library (original).
     *
     *
     * @return mixed
     */
    public function mediaLibrary2(Request $request)
    {

        $media = $this->medias->getMediaPaginate();
        $category = $this->getCategory();
        if ($request->ajax()) {
            return view('banners::media-list-pagination', compact('media'))->render();
        }
 
        return view('medias::media-library-ori', compact('category', 'media'));
    }

    /**
     * Create new media category to categorize media function.
     *
     * @param \Illuminate\Http\Request  $request
     *
     * @return mixed
     */

    public function createMediaCategory(Request $request)
    {
        $response = response()->json(["message"=>"failed adding category"], 500);

        $this->mediaCategories->title = $request->title;

        if ($this->mediaCategories->save()) {
            $returnData = $this->mediaCategories->find($this->mediaCategories->id);
            $data = array ("message" => 'Category added successfully',"data" => $returnData );
            $response = response()->json($data, 200);
        }

        return $response;
    }


    /**
     * get media from model function.
     *
     *
     * @return mixed
     */
    protected function getCategory()
    {

        return $this->mediaCategories->get();
    }

    /**
     * assign media with category function.
     * @param \Illuminate\Http\Request  $request
     *
     * @return mixed
     */
    public function assignCategory(Request $request)
    {
        $assign = $this->mediaContent->find($request->id);
        $assign->category = $request->category;
        if ($assign->save()) {
            return response()->json(['message'=>'Success assign category to image.'], 200);
        }
        return response()->json(['message'=>'Failed assign category to image.'], 401);
    }
}
