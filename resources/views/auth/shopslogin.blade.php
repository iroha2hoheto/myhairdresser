@extends('layout.layouts')
@section('content')
  <div class="box-info">
    <nav class="box">
          <div class="box-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            
              @csrf
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
              </div>
              <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
              <div class="text-right">
                <a href="{{ route('shops') }}">
                  <button type="submit" class="btn btn-primary">送信</button>
                </a>
              </div>
          </div>
        </nav>
      </div>
@endsection