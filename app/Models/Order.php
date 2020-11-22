<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'name', 'phone', 'address', 'email', 'total_money'];
    public function orderdetails()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
