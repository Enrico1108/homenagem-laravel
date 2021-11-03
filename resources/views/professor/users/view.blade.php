@extends('layouts.main')
@section('title', 'Visualizando')
@section('content')

<div id="lugar-create-container" class="col-md-6 offset-md-3">
<h1>Visualizando: {{$user->name}}</h1><br>
    <h3>Nome do Usuário</h3>
    <p>{{$user->name}}</p>

    <h3>Email</h3>
    <p>{{$user->email}}</p>

    <h3>Tipo</h3>

    @if ($user->utype == '1')
    <p>Aluno</p>
    @endif
    @if ($user->utype == '2')
    <p>Professor</p>
    @endif
    @if ($user->utype == '3')
    <p>Administrador</p>
    @endif

    <h3>Turma</h3>

    @if ($user->turma == '1')
    <p>6° Ano</p>
    @endif
    @if ($user->turma == '2')
    <p>7° Ano</p>
    @endif
    @if ($user->turma == '3')
    <p>8° Ano</p>
    @endif
    @if ($user->turma == '4')
    <p>9° Ano</p>
    @endif
    @if ($user->turma == '5')
    <p>Administrador</p>
    @endif



<br>








</div>

@endsection