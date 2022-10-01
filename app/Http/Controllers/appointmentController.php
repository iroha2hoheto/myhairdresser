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

class appointmentController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }
}
