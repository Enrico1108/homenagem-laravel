@extends('layouts.main')
@section('title', 'Home')
@section('content')

@if ($busca != '')
<p>O usuario está buscando por: {{$busca}}</p>
@else

<div id="events-container" class="col-md-12">
<h2>Lugares</h2>
<div id="cards-container" class="row">
    @foreach($lugares as $lugar)
    <div class="card col-md3">
        <img src="img/lugares/{{$lugar->foto}}" alt="{{$lugar->titulo}}">
        <div class="card-body">
        <h5 class="card-title">{{$lugar->titulo}}</h5>
        <a href="/lugar/{{$lugar->id}}" class="btn btn-primary">Saber Mais</a>
        </div>

    </div>

    

    @endforeach
</div>
</div>
<div id="events-container" class="col-md-12">
<h2>Conteúdos</h2>
<div id="cards-container" class="row">
    @foreach($conteudo as $lugar1)
    <div class="card col-md3">
        <img src="img/lugares/{{$lugar1->foto}}" alt="{{$lugar1->titulo}}">
        <div class="card-body">
        <h5 class="card-title">{{$lugar1->titulo}}</h5>
        <a href="/conteudo/{{$lugar1->id}}" class="btn btn-primary">Saber Mais</a>
        </div>

    </div>

    

    @endforeach
</div>

</div>

@endif



@endsection