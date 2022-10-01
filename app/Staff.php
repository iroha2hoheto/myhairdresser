<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillabe = ['staff_name','shop_id','staff_sex','area_id','address','telphone','email'];

    public function type() {
        return $this->belongsTo('App\sexual','staff_sex','sex');
    }
}
