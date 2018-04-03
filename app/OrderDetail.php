<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'quantity', 'unit_price', 'id_order', 'id_product'
    ];

    public function order(){
        return $this->belongsTo('App\Order', 'id_order');
    }
    public function product(){
        return $this->belongsTo('App\Product', 'id_product');
    }
}
