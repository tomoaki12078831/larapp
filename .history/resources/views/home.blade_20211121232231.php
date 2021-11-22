@extends('layouts.layout')

@section('content')
  @include('users.app')
<div class="row">
        <div class="col-sm-4">
        
            <div class="text-center my-4">
                <h3 class="brown border p-2">ユーザ検索</h3>
            </div>
            {!! Form::open(['route' => 'home', 'method' => 'get']) !!}
                
                <div class="form-group">
                    {!! Form::label('want_talk', '話したい言語:') !!}
                    {!! Form::select('want_talk', ['指定なし' => '指定なし'] + Config::get('language') ,'指定なし') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('can_talk', '話すことができる言語:') !!}
                    {!! Form::select('can_talk', ['指定なし' => '指定なし'] + Config::get('language') , '指定なし') !!}
                </div>
                {!! Form::submit('検索', ['class' => 'btn btn-success btn-block']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-sm-8">
            <div class="text-center my-4">
                <h3 class="brown p-2">ユーザ一覧</h3>
            </div>
<div class="container">
@if(!empty($data))
@foreach($data as $item)
<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <div>
      <a href="" class='font-weight-bold'>
        {{ $item -> name }}
      </a>
  </div>
    <div class='userInfo_img'>
      <img src="{{$item -> img_name}}">
    </div>
  </div>
  <div>
      <div class='userInfo_sex card-text'>性別&nbsp;{{ $item -> sex_name }}</div>
      <div class='userInfo_age card-text'>年齢&nbsp;{{ $item -> year_name }}</div>
      <div class='userInfo_area card-text'>地域&nbsp;{{ $item -> pref_name }}</div>
      <div class='userInfo_want_talk card-text'>話したい言語&nbsp;{{ $item -> wantlanguage_name }}</div>
      <div class='userInfo_can_talk card-text'>話せる言語&nbsp;{{ $item -> canlanguage_name }}</div>
      <div class='userInfo_occupation card-text'>職業&nbsp;{{ $item -> job_name }}</div>
      <div class='userInfo_selfIntroduction card-text'>自己紹介&nbsp;{{ $item -> self_introduction }}</div>
  </div>
@endforeach
@endif

{{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}

</div>

@endsection
