@extends('layouts.layout')

@section('content')
@include('users.app')
<div class='usershowPage'>
  <div class='container'>
    <header class="header">
      <p class='header_logo'>
      <a href="{{ route('home') }}">
      
      </a>
      </p>
    </header>
    <div class='userInfo'>
      <div class='userInfo_img'>
      <img src="{{$user -> img_name}}">
      </div>
      <div class='userInfo_name'>{{ $user -> name }}</div>
      <div class='userInfo_sex'>{{ $user -> sex_name }}</div>
      <div class='userInfo_age'>年齢{{ $user -> year_name }}</div>
      <div class='userInfo_area'>地域{{ $user -> pref_name }}</div>
      <div class='userInfo_want_talk'>話したい言語{{ $user -> wantlanguage_name }}</div>
      <div class='userInfo_can_talk'>話せる言語{{ $user -> canlanguage_name}}</div>
      <div class='userInfo_occupation'>職業{{ $user -> job_name}}</div>
      <div class='userInfo_selfIntroduction'>自己紹介{{ $user -> self_introduction }}</div>
    </div>
    
      <div class='userAction'>
        <div class="userAction_edit userAction_common">
          <i class="fas fa-edit fa-2x"></i>
          <span>情報を編集</span>
        </div>
        <div class='userAction_logout userAction_common'>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><i class="fas fa-cog fa-2x"></i></a>
          <span>ログアウト</span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    
  </div>
</div>

@endsection