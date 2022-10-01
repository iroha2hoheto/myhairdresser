@extends('layout.layouts')
@section('content')
    <main class="py-3">
            <table class="info-calendar">
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
        <div class="info-right">
            <div class="select-time">ご希望の時間</div>   
            <div class="select-staff">担当者の選択</div>
            <label for='comment' class='info-memo'>ご希望・質問</label>
            <textarea class='info-comment' name='comment'></textarea> 
            <button class="decide">予約する</button> 
        </div>
</main>
@endsection