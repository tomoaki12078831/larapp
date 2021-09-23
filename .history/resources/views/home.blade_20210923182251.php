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
      <div class='userInfo_sex card-text'>{{ $user -> sex_name }}</div>
      <div class='userInfo_age card-text'>{{ $user -> year_name }}</div>
      <div class='userInfo_area card-text'>{{ $user -> pref_name }}</div>
      <div class='userInfo_want_talk card-text'>{{ $user -> wantlanguage_name }}</div>
      <div class='userInfo_can_talk card-text'>{{ $user -> canlanguage_name }}</div>
      <div class='userInfo_occupation card-text'>{{ $user -> job_name }}</div>
      <div class='userInfo_selfIntroduction card-text'>{{ $user -> self_introduction }}</div>
</div>
@endforeach
</div>
@endsection
