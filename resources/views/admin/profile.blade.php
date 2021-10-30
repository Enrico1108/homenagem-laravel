@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div id="lugar-create-container" class="col-md-6 offset-md-3">

<label for="nome">Nome:</label>

<p>{{$user->name}}</p>

<label for="email">Email:</label>

<p>{{$user->email}}</p>

<img src=" {{ $user->profile_photo_url }}" alt="">

{{ $user }}
   



</div>

@endsection