@extends('layouts.main')
@section('title', 'Usuários')
@section('content')
<div id="lugar-create-container" class="col-md-6 offset-md-3">
 
  <a href="users/create"><button class="btn btn-success">Criar Usuário</button></a><br><br>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Tipo</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>

    
  @foreach($users as $users)
    <tr>
      <th scope="row">{{$users->name}}</th>
      <td>{{$users->email}}</td>

      @php
      
  @endphp

      @if($users->utype == 1)
      <td>
          Aluno
          </td>
            
            @endif

            @if($users->utype == 2)
      <td>
          Professor
          </td>
            
            @endif
            @if($users->utype == 3)
      <td>
          Administrador
          </td>
            
            @endif
      <td><a href="users/edit/{{$users->id}}"><button class="btn btn-primary" >Editar</button></a><br><br>
    <a href="users/view/{{$users->id}}"><button class="btn btn-success" >Visualizar</button></a></td>
      <td></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
  


</div>
@endsection