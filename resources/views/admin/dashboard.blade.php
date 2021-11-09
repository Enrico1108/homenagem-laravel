@extends('layouts.main')
@section('title')
@section('content')

<div id="lugar-create-container" class="col-md-6 offset-md-3">

    <h3>Olá {{$user->name}}!</h3><br><br>
<h3> Seja bem vindo a Dashboard está disponiveis essas opções: </h3><br><br>


<button type="button" class="btn btn-primary" onclick="window.location.href='/admin/lugar';">Lugares</button>
<button type="button" class="btn btn-success" onclick="window.location.href='/admin/conteudo';">Conteudo</button>
<button type="button" class="btn btn-warning" onclick="window.location.href='/admin/users';">Usuários</button>
<button type="button" class="btn btn-danger" onclick="window.location.href='/admin/profile';">Perfil</button>
</div>

@endsection