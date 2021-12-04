@extends('layouts.main')
@section('title', 'Login')
@section('content')

<div id="lugar-create-container" class="col-md-6 offset-md-3">
    
    <h1>Crie o usuário</h1>
    <form action="/professor/edit/users/{{$user->id}}" method="POST" >
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titulo">Nome</label>
        <input type="text" class="form-control" id="nome" value="{{$user->name}}" name="nome" placeholder="Insira o titúlo do seu lugar" required>
    </div><br>
    <div class="form-group">
        <label for="email">E-mail</label>
       <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email" placeholder="Insira o Email do novo usuário" required >
    </div><br>
   
    
    <div class="form-group">


        <label for="title">Tipo de Usuário</label><br>
        <select name="private2" class="form-control-select" id="private2">
        
        
        <option value="1" {{$user->utype == '1' ? "selected='selected'" :""}}>Aluno</option>
        <option value="2" {{$user->utype == '2' ? "selected='selected'" :""}}>Professor</option>
        <option value="3" {{$user->utype == '3' ? "selected='selected'" :""}}>Administrador</option>

    </select><br><br>
    </div>

    <div class="form-group">


        <label for="title">Turma</label><br>
        <select name="private3" class="form-control-select" id="private3">
        
        
        <option value="1" {{$user->turma == '1' ? "selected='selected'" :""}}>6° Ano</option>
        <option value="2" {{$user->turma == '2' ? "selected='selected'" :""}}>7° Ano</option>
        <option value="3" {{$user->turma == '3' ? "selected='selected'" :""}}>8° Ano</option>
        <option value="4" {{$user->turma == '4' ? "selected='selected'" :""}}>9° Ano</option>
        <option value="5" {{$user->turma == '5' ? "selected='selected'" :""}}>Administrador</option>

    </select>
    </div>
    <div class="form-group">



    <br><br>
    <input type="submit" class="btn btn-primary" value="Criar Lugar">

</form>



</div>


@endsection