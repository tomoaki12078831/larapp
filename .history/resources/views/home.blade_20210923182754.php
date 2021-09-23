@extends('layouts.app')

@section('content')
ユーザー一覧<br>
<div class="container">
@foreach($users as $user)
<div class="card mt-3">
  <div class="card-body d-flex flex-row">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
    <div>
      <div class='userInfo_name font-weight-bold'>
        {{ $user -> name }}
      </div>
</div>
</div>
      <div class='userInfo_sex card-text'>性別{{ $user -> sex_name }}</div>
      <div class='userInfo_age card-text'>年齢{{ $user -> year_name }}</div>
      <div class='userInfo_area card-text'>地域{{ $user -> pref_name }}</div>
      <div class='userInfo_want_talk card-text'>話したい言語{{ $user -> wantlanguage_name }}</div>
      <div class='userInfo_can_talk card-text'>話せる言語{{ $user -> canlanguage_name }}</div>
      <div class='userInfo_occupation card-text'>職業{{ $user -> job_name }}</div>
      <div class='userInfo_selfIntroduction card-text'>自己紹介{{ $user -> self_introduction }}</div>
</div>
@endforeach
</div>
@endsection
