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

class staffController extends Controller
{
    public function staffs() {
        return view('staffall.staff');
    }

    public function staffsinfo() {
        return view('staffall.staff_info');
    }
}
