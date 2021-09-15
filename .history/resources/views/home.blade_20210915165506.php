@extends('layouts.app')

@section('content')

@foreach($users as $user)
{{$user->name}}<br>
{{$user->area}}<br>
{{$user->age}}<br>
{{$user->want_talk}}<br>
{{$user->can_talk}}<br>
{{$user->occupation}}<br>
<$user->self_introduction}}<br>
@endforeach

@endsection
