@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div id="lugar-create-container" class="col-md-6 offset-md-3">

<label for="nome">Nome:</label>

<p>{{$user->name}}</p>

<label for="email">Email:</label>

<p>{{$user->email}}</p>

<img src=" {{ $user->profile_photo_url }}" alt=""><br><br>
<label for="'">Turma:</label>

@if($user->turma == '1')

<p>6° Ano</p>

@endif
@if($user->turma == '2')

<p>7° Ano</p>

@endif

@if($user->turma == '3')

<p>8° Ano</p>

@endif

@if($user->turma == '4')

<p>9° Ano</p>

@endif

@if($user->turma == '5')

<p>Administrador</p>

@endif


<label for="">Tipo de Usuário</label>

@if($user->utype == '1')

<p>Aluno</p>

@endif

@if($user->utype == '2')

<p>Professor</p>

@endif

@if($user->utype == '3')

<p>Administrador</p>

@endif  



</div>

@endsection