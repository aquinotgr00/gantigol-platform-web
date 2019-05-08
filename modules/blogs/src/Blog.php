<?php

namespace Modules\Blogs;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use \Conner\Tagging\Taggable;

     /**
     * @var array
     */
    
    protected $fillable = ['title', 'image', 'publish_date', 'category_id','body','created_at','updated_at','deleted_at'];

}
