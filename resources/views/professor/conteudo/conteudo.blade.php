@extends('layouts.main')
@section('title', 'Login')
@section('content')




<div id="lugar-create-container" class="col-md-6 offset-md-3">
 
  
  <a href="conteudo/create"><button class="btn btn-success">Criar Conteúdo</button></a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Título</th>
      
      <th scope="col">Status</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    
  @foreach($conteudos as $lugar)
    <tr>
      <th scope="row">{{$lugar->titulo}}</th>
      
      @if($lugar->status == 1)
      <td>
          Ativo
          </td>
            
            @endif

            @if($lugar->status == 0)
      <td>
          Inativo
          </td>
            
            @endif

            <td><a href="conteudo/edit/{{$lugar->id}}"><button class="btn btn-primary" >Editar</button></a><br><br>
    <a href="conteudo/view/{{$lugar->id}}"><button class="btn btn-success" >Visualizar</button></a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
  


</div>



@endsection