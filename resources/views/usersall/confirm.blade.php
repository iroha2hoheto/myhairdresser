@extends('layout.layouts')
@section('content')
    <main class="py-4">
        <div class='apoconfirm'>この内容で予約の確定をします。</div>
        <button class='back'>
            <a href="{{ route('appointment') }}"></a>
        </button>
        <button class='send'>
            <a href="{{ route('complete') }}"></a>
        </button>
    </main>
@endsection