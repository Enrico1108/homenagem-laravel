@extends('layouts.main')
@section('title', 'Visualizando')
@section('content')

<div id="lugar-create-container" class="col-md-6 offset-md-3">
<h1>Visualizando: {{$conteudo->titulo}}</h1><br>
    <h3>Nome do lugar:</h3>
    <p>{{$conteudo->titulo}}</p>

    <h3>Descrição</h3>
    <p>{{$conteudo->descricao}}</p>

    <h3>Status</h3>

    @if ($conteudo->status == '1')
    <p>Ativo</p>
    @endif
    @if ($conteudo->status == '0')
    <p>Inativo</p>
    @endif
    <h3>Criado por:</h3>
    <p>{{$conteudoowner['name']}}</p>
    <h3>Turma</h3>
    @if ($conteudo->turma == '1')
    <p>6° Ano</p>
    @endif
    @if ($conteudo->turma == '2')
    <p>7° Ano</p>
    @endif
    @if ($conteudo->turma == '3')
    <p>8° Ano</p>
    @endif
    @if ($conteudo->turma == '4')
    <p>9° Ano</p>
    @endif
    @if ($conteudo->turma == '5')
    <p>Administrador</p>
    @endif
<br>


<h3>Preview Botão:</h3>
<button type="button" class="{{$conteudo->estilobtn}}" onclick="window.location.href='{{ $conteudo->linkbtn}}';">{{ $conteudo->nomebtn  }}</button>
<br><br>
<p>Link de redirecionamento: {{$conteudo->linkbtn}}</p>

<label for="image">Imagem</label><br><br>
        <img src="/img/conteudo/{{$conteudo->foto}}" alt="" class="img-preview">





</div>

@endsection