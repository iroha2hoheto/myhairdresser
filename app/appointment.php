<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $fillabe = ['date','date2','time','time2','time3','comment','shop_id','staff_id'];

    public function type() {
        return $this->belongsTo('App\Staff','shop_id','id');
    }
}
