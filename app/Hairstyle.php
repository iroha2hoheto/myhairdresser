<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hairstyle extends Model
{
    protected $fillabe = ['user_id','name','category_id','image','menu','staff_id'];

    public function type() {
        return $this->belongsTo('App\Staff','staff_id','id');
    }
}
