<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillabe = ['shop_name','area_id','address','telphone','email'];

    public function type() {
        return $this->belongsTo('App\Type','type_id','id');
    }
}
