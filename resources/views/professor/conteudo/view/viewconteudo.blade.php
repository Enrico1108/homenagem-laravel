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
<br>


<h3>Preview Botão:</h3>
<button type="button" class="{{$conteudo->estilobtn}}">{{$conteudo->nomebtn}}</button>
<br><br>
<p>Link de redirecionamento: {{$conteudo->linkbtn}}</p>







</div>

@endsection