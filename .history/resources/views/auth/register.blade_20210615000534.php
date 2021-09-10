@extends('layouts.layout')

@section('content')
<div class="signupPage">
<header class="header">
<div>ユーザー登録</div>
</header>
<div class="container">
  
      
<form class="form mt-5" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
@csrf

  <div class="form-group @error('name')has-error @enderror">
    <label>名前</label>
      <input type="text" name="name"  class="form-control" placeholder="名前を入力してください" required value="{{ old('name') }}">
      @error('name')
        <span class="errorMessage">
          {{ $message}}
        </span>
        @enderror
  </div>

  <div class="form-group">
    <label for="email">メールアドレス</label>
      <input type="text" name="email"  class="form-control" placeholder="メールアドレスを入力してください" required value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <label for="password">パスワード</label>
      <input type="password" name="password"  class="form-control" placeholder="パスワードを入力してください">
  </div>

  <div class="form-group">
    <label>確認用パスワード</label>
      <input type="password" name="password_confirmation" class="form-control" placeholder="パスワードを再度入力してください">
  </div>

  <div class="form-group">
    <div><label>性別</label></div>
    <div class="form-check form-check-inline">
          <input class="form-check-input" name="sex" value="0" type="radio" id="inlineRadio1" checked>
          <label class="form-check-label" for="inlineRadio1">男</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" name="sex" value="1" type="radio" id="inlineRadio2">
          <label class="form-check-label" for="inlineRadio2">女</label>
        </div>
      </div>

      <div class="form-group">
    <lavel for="age">歳</label>
      <select type="text" class="form-control" name="age">
      <!-- <option value="" selected="selected">選択してください</option> -->
        @foreach(config('year') as $key=> $age)
          <option value="{{ $key }}">{{ $age }}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
    <lavel for="occupation">職業</label>
      <select type="text" class="form-control" name="occupation">
      <!-- <option value="" selected="selected">選択してください</option> -->
        @foreach(config('job') as $key=> $occupation)
          <option value="{{ $key }}">{{ $occupation }}</option>
        @endforeach
      </select>
      </div>
  <div class="form-group">
    <lavel for="area">エリア</label>
      <select type="text" class="form-control" name="area">
      <!-- <option value="" selected="selected">選択してください</option> -->
        @foreach(config('pref') as $key=> $area)
          <option value="{{ $key }}">{{ $area }}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
    <lavel for="want_talk">話したい言語</label>
      <select type="text" class="form-control" name="want_talk">
      <!-- <option value="" selected="selected">選択してください</option> -->
        @foreach(config('language') as $key=> $want_talk)
          <option value="{{ $key }}">{{ $want_talk }}</option>
        @endforeach
      </select>
      </div>

      <div class="form-group">
    <lavel for="can_talk">話せる言葉</label>
      <select type="text" class="form-control" name="can_talk">
      <!-- <option value="" selected="selected">選択してください</option> -->
        @foreach(config('language') as $key=> $can_talk)
          <option value="{{ $key }}">{{ $can_talk }}</option>
        @endforeach
      </select>
      </div>
      <label for="file_photo" class="userProfileImg">
        <div class="userProfileImg_description">画像をアップロード</div>
        
        <input type="file" id="file_photo" name="img_name">

      </label>


  <div class="form-group @error('self_introduction')has-error @enderror">
    <label>自己紹介文</label>
       <textarea class="form-control" name="self_introduction" rows="10"></textarea>
          @error('self_introduction')
          <span class="errorMessage">
            {{ $message }}
          </span>
          @enderror
        </div>  

<button class="btn btn-success w-100">ユーザー登録</button>
</form>
</div>
</div>
@endsection

