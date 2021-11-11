@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div id="lugar-create-container" class="col-md-6 offset-md-3">
    
    <h1>Crie o seu lugar</h1>
    <form action="/admin/conteudo" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o titúlo do seu lugar" required>
    </div><br>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" placeholder="Insira uma descrição" required></textarea>
    </div><br>
    <div class="form-group">
        <label for="">Estilos:</label><br>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button><br><br>
<button type="button" class="btn btn-outline-primary">Primary Outline</button>
<button type="button" class="btn btn-outline-secondary">Secondary Outline</button>
<button type="button" class="btn btn-outline-success">Success Outline</button><br><br>
<button type="button" class="btn btn-outline-danger">Danger Outline</button>
<button type="button" class="btn btn-outline-warning">Warning Outline</button>
<button type="button" class="btn btn-outline-info">Info Outline</button>
<button type="button" class="btn btn-outline-dark">Dark Outline</button><br><br>
        <label for="title">Estilo do botão</label><br>
        <select name="private" id="private">
        <option value="btn btn-primary">Primary</option>
        <option value="btn btn-secondary">Secondary</option>
        <option value="btn btn-success">Success</option>
        <option value="btn btn-danger">Danger</option>
        <option value="btn btn-warning">Warning</option>
        <option value="btn btn-info">Info</option>
        <option value="btn btn-light">Light</option>
        <option value="btn btn-dark">Dark</option>
        <option value="btn btn-outline-primary">Primary Outline</option>
        <option value="btn btn-outline-secondary">Secondary Outline</option>
        <option value="btn btn-outline-success">Success Outline</option>
        <option value="btn btn-outline-danger">Danger Outline</option>
        <option value="btn btn-outline-warning">Warning Outline</option>
        <option value="btn btn-outline-info">Info Outline</option>
        <option value="btn btn-outline-dark">Dark Outline</option>

    </select>
    </div><br>
    
    <div class="form-group">
        <label for="descricao">Nome do Botão</label>
        <input type="text" class="form-control" id="titulobotao" name="titulobotao" placeholder="Insira o titúlo do seu lugar" required>
    </div><br>
    <div class="form-group">
        <label for="descricao">Link do Botão</label>
        <input type="text" class="form-control" id="linkbotao" name="linkbotao" placeholder="Insira o titúlo do seu lugar" required>
    </div><br>
    <div class="form-group">


        <label for="title">Status</label><br>
        <select name="private2" id="private2">
        
        
        <option value="0">Não</option>
        <option value="1">Sim</option>

    </select>
    </div><br>
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