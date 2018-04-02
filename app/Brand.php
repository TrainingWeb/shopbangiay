<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name', 'brandslug'
    ];
    public function products(){
        return $this->hasMany('App\Product', 'id_brand');
    }
}
