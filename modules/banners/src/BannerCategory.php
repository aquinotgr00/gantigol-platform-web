<?php

namespace Modules\Banners;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerCategory extends Model
{	
	use SoftDeletes;
    protected $table = 'banner_category';
    protected $fillable = ['name','created_at','updated_at','deleted_at'];
}
