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

class displayController extends Controller
{
    public function index() {
       

        return view('home',[
            
        ]);
    }

    public function userslogin() {
        return view('Auth.userslogin');
    }
    public function shopslogin() {
        return view('Auth.shopslogin');
    }
}
