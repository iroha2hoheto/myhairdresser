@extends('layout.layouts')
@section('content')
    <main class="py-4">
        <div class="side-menu">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class="random">
                    <a href="{{ route('appointment') }}">予約する</a>
                        <div class="card">
                            <a href="/">本日の<br><b>ヘアガチャ</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-body">
                <div class='search'>
                    <textarea class='form-control' name='comment'></textarea>
                    <button type='button' class='search-btm'>search</button>
                </div>
                <div class="search-link">
                    <a href="/">地域</a>　/
                    <a href="/">年代</a>　/　
                    <a href="/">性別</a>　/　
                    <a href="/">ヘアスタイル</a>　/　
                    <a href="/">カラー</a>
                </div>
            </div>
        </div>    
                <div class="hair-box">
                    ここに画像4:4
                </div>
    </main>
@endsection