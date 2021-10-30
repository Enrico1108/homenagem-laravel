@extends('layouts.main')
@section('title', $lugares->titulo)
@section('content')


<div class="titulonovo">
<h1>{{$lugares->titulo}}</h1><br><br>

</div>
    



  <br>
  <br>
<div class="descricaonova">
<p>{{$lugares->descricao}}</p>

</div>
  

<div class="lugares">

   <br><br> <h1>Mapa:</h1>
   @php
   echo $lugares->mapa
   @endphp
 
  <br><br><br>

  </div>
@endsection