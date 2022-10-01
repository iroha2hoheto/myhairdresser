<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Users;
use App\Shop;
use App\Staff;
use App\Hairstyle;
use App\haircategory;
use App\sexual;
use App\area;
use App\appointment;

class shopController extends Controller
{
    public function shops() {
        return view('shopall.shop');
    }
    
    public function shopsinfo() {
        return view('shopall.shop_info');
    }
}
