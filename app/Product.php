<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'image', 'price', 'color', 'size', 'gender', 'description', 'id_brand'
    ];

// tetlam 
    public function brand(){
        return $this->belongsTo('App\Brand', 'id_brand');
    }
    public function order_details(){
        return $this->hasMany('App\OrderDetail');
    }
}
