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
                <div class="time">時間</div>
                <div class="stuff">担当</div>
                <div class="apoinnt">予約</div>
                <label for='comment' class='mt-2'>メモ</label>
                <textarea class='form-control' name='comment'></textarea>
                <button type='submit' class='btn'>予約確認</button>      
            </div>   
    </main>
@endsection