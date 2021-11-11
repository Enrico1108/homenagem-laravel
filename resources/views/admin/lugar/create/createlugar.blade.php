@extends('layouts.main')
@section('title', 'Home')
@section('content')


<div id="lugar-create-container" class="col-md-6 offset-md-3">
    
    <h1>Crie o seu lugar</h1>
    <form action="/admin/lugar" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="titulo">Lugar</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o titúlo do seu lugar" required>
    </div><br>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" placeholder="Insira uma descrição" required></textarea>
    </div><br>
    <div class="form-group">
        <label for="mapa">Lugar</label>
        <input type="text" class="form-control" id="mapa" name="mapa" placeholder="Insira um mapa (Código HTML)" required>
    </div><br>
    <div class="form-group">
        <label for="title">O Evento está ativo?</label>
        <select name="private" id="private">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
    </div>
    <div class="form-group">


        <label for="title">Turma</label><br>
        <select name="private4" id="private4">
        
        

        <option value="1">6° Ano</option>
        <option value="2">7° Ano</option>
        <option value="3">8° Ano</option>
        <option value="4">9° Ano</option>
        

    </select>
    </div><br>
    
    <div class="form-group">
        <label for="image">Imagem</label><br><br>
        <input type="file" class="form-control-file" id="image" name="image" required>
    </div>
    <br><br>
    <input type="submit" class="btn btn-primary" value="Criar Lugar">

</form>



</div>

@endsection