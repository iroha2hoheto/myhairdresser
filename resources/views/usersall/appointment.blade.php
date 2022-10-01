@extends('layout.layouts')
@section('content')
    <main class="py-4">
        <table class="apo-calendar">
                <tr>
                    <th>日</th>
                    <th>月</th>
                    <th>火</th>
                    <th>水</th>
                    <th>木</th>
                    <th>金</th>
                    <th>土</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
           
            <div class="apo">
                <div class="time">第1希望時間</div>
                <div class="time">第2希望時間</div>
                <div class="day">第1希望日</div>
                <div class="day">第2希望日</div>
                <div class="day">第3希望日</div>    
                <div class="stuff">担当</div>
                <div class="apoinnt">予約</div>
                <label for='comment' class='mt-2'>メモ</label>
                <textarea class='form-control' name='comment'></textarea>
                <a href="{{ route('apoconf') }}">
                <button type='submit' class='btn'>予約確認</button>      
                </a>
            </div>   
    </main>
@endsection