@extends('layouts.main')
@section('title', 'Visualizando')
@section('content')

<div id="lugar-create-container" class="col-md-6 offset-md-3">
<h1>Visualizando: {{$lugar->titulo}}</h1><br>
    <h3>Nome do lugar:</h3>
    <p>{{$lugar->titulo}}</p>

    <h3>Descrição</h3>
    <p>{{$lugar->descricao}}</p>

    <h3>Status</h3>

    @if ($lugar->status == '1')
    <p>Ativo</p>
    @endif
    @if ($lugar->status == '0')
    <p>Inativo</p>
    @endif
    <h3>Criado por:</h3>
    <p>{{$lugarowner['name']}}</p>
<br><br>
    <div class="mapaview">
        @php
            echo $lugar->mapa
        @endphp
    </div>






</div>

@endsection