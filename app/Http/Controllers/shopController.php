<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Users;
use App\Shop;
use App\Staff;
use App\Hairstyle;

class shopController extends Controller
{
    // public function index() {
    //     return view('shopall.shop');
    // }
    public function index() {
        return view('shopall.shop_info');
    }
}
