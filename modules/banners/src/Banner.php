<?php

namespace Modules\Banners;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{	
	use SoftDeletes;
     protected $fillable = ['title', 'image', 'url', 'placement','sequence','created_at','updated_at','deleted_at'];
}
