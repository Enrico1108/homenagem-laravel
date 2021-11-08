@extends('layouts.main')
@section('title', $lugares->titulo)
@section('content')


<div class="titulonovo">
<h1>{{$lugares->titulo}}</h1><br><br>

</div>
    
<div class="imagem-cont">
  <img src="/img/conteudo/{{$lugares->foto}}" alt="">
</div>


  <br>
  <br>
<div class="desc-cont">

  <p>{{$lugares->descricao}}</p>
</div>


  

<div class="lugares">

<button class="{{$lugares->estilobtn}}" onclick="window.location.href='{{$lugares->linkbtn}}';">{{$lugares->nomebtn}}</button>
 
  <br><br><br>

  </div>
@endsection