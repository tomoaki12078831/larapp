@extends('layouts.app')

@section('content')
ユーザー一覧<br>
<table>
    <tr><th>ユーザー名</th><th>性別</th><th>年齢</th><th>場所</th><th>話したい言語</th><th>話すことができる言語</th><th>職業</th><th>自己紹介</th></tr>
@foreach($users as $user)
<tr>
      <td class='userInfo_name'>{{ $user -> name }}</td>
      <td class='userInfo_sex'>{{ $user -> sex_name }}</td>
      <td class='userInfo_age'>{{ $user -> year_name }}</td>
      <td class='userInfo_area'>{{ $user -> pref_name }}</td>
      <td class='userInfo_want_talk'>{{ $user -> wantlanguage_name }}</td>
      <td class='userInfo_can_talk'>{{ $user -> canlanguage_name}}</td>
      <td class='userInfo_occupation'>{{ $user -> job_name}}</td>
      <td class='userInfo_selfIntroduction'>{{ $user -> self_introduction }}</td>
</tr>
@endforeach
</table>
@endsection
