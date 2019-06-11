<?php

namespace Modules\Ecommerce;

use Illuminate\Database\Eloquent\Model;

class OrderStatusLog extends Model
{
    protected $fillable = ['order_id','order_status','admin_id'];
}
