<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Users;
use App\Shop;
use App\Staff;
use App\Hairstyle;

class displayController extends Controller
{
    // public function index() {
    //     return view('home');
    // }

    public function index() {
        return view('auth.login');
    }
}
