<?php

namespace Modules\Blogs;

use Illuminate\Database\Eloquent\Model;
use ReflectionObject;
use Illuminate\Support\Arr;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\ModelSearchAspect;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model implements Searchable
{
    use \Conner\Tagging\Taggable;
    use SoftDeletes;
     /**
     * @var array
     */
    
    protected $fillable = ['title','source_image','author' ,'image', 'publish_date', 'category_id','body','created_at','updated_at','deleted_at'];

    public function getSearchResult(): SearchResult
    {
        $url = route('blog.article', $this->id);
     
         return new \Spatie\Searchable\SearchResult(
             $this,
             $this->title,
             $url
         );
    }
}
