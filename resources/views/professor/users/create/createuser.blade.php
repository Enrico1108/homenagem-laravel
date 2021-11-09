@extends('layouts.main')
@section('title', 'Login')
@section('content')

<div id="lugar-create-container" class="col-md-6 offset-md-3">
    
    <h1>Crie o usuário</h1>
    <form action="/professor/users/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="titulo">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o titúlo do seu lugar" required>
    </div><br>
    <div class="form-group">
        <label for="email">E-mail</label>
       <input type="email" class="form-control" name="email" id="email" placeholder="Insira o Email do novo usuário" required >
    </div><br>
    <div class="form-group">
        <label for="senha">Senha</label>
       <input type="password" class="form-control" name="senha" id="senha" placeholder="Insira o Email do novo usuário" required >
    </div><br>
    
    <div class="form-group">


        <label for="title">Tipo de Usuário</label><br>
        <select name="private2" class="form-control-select" id="private2">
        
        
        <option value="1">Aluno</option>


    </select><br><br>
    </div>

    <div class="form-group">


        <label for="title">Turma</label><br>
        <select name="private3" class="form-control-select" id="private2">
        
        
        <option value="1">6° Ano</option>
        <option value="2">7° Ano</option>
        <option value="3">8° Ano</option>
        <option value="4">9° Ano</option>
        

    </select>
    </div>
    <div class="form-group">



    <br><br>
    <input type="submit" class="btn btn-primary" value="Criar Usuário">

</form>



</div>


@endsection