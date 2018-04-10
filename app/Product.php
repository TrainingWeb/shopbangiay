<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'image', 'price', 'color', 'size', 'gender', 'description', 'id_brand', 'productslug'
    ];

// tetlam 
    public function brand(){
        return $this->belongsTo('App\Brand', 'id_brand');
    }
    public function order_details(){
        return $this->hasMany('App\OrderDetail');
    }
    public function comments(){
        return $this->hasMany('App\Comment', 'id_product');
    }
}
