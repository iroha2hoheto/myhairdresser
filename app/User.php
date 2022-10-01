<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function appointment() {
        return $this ->hasMany('App\appointment');
    }

    public function area() {
        return $this ->hasMany('App\area');
    }
 
    public function haircategory() {
        return $this ->hasMany('App\haircategory');
    }

    public function hairstyle() {
        return $this ->hasMany('App\Hairstyle');
    }

    public function sexual() {
        return $this ->hasMany('App\sexual');
    }
 
    public function shop() {
        return $this ->hasMany('App\Shop');
    }

    public function staff() {
        return $this ->hasMany('App\Staff');
    }

}
