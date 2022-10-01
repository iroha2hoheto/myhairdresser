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

class usersController extends Controller
{
    // 会員ページ
    public function users() {
        return view('usersall.users');
    }
    // 予約画面
    public function appointment() {
        return view('usersall.appointment');
    }
    public function appointmentrequest() {
        return redirect('/');
    }   
    // 予約確認画面
    public function apoconf() {
        return view('usersall.confirm');
    }
    public function apoconfirm() {
        return redirect('/');
    }
}
