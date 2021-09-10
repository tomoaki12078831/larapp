@extends('layouts.layout')

@section('content')
<div class="loginPage">
  <div class="container">
    <div class="loginPage_contents">

    <h1 class="h3 loginPage_contents_title">もっと言葉を好きになる</h1>
    <h2 class="h5 loginPage_contents_details">あなたが学びたい言語を話せる人を見つけるマッチングサイト<h2>
    <div class="btn loginPage_contents_btn"><a class="text-white" href="{{ route('login') }}">メールアドレスでログインする</a></div>
    
    </div>
  </div>
</div>
@endsection