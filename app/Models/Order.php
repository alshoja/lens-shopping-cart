<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderdetails()
    {
        return $this->hasMany('App\Models\Orderdetail', 'order_id', 'id');
    }

    public function staff()
    {
        return $this->belongsTo('App\User', 'staff_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'customer_id', 'id')->select('id','name');
    }

}
