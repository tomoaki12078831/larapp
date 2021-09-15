@extends('layouts.app')

@section('content')

@foreach($users as $user)
<div class='userInfo_name'>{{ $user -> name }}</div>
      <div class='userInfo_sex'>{{ $user -> sex_name }}</div>
      <div class='userInfo_age'>{{ $user -> year_name }}</div>
      <div class='userInfo_area'>{{ $user -> pref_name }}</div>
      <div class='userInfo_want_talk'>{{ $user -> wantlanguage_name }}</div>
      <div class='userInfo_can_talk'>{{ $user -> canlanguage_name}}</div>
      <div class='userInfo_occupation'>{{ $user -> job_name}}</div>
      <div class='userInfo_selfIntroduction'>{{ $user -> self_introduction }}</div>
@endforeach

@endsection
