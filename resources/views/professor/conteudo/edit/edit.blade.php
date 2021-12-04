@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div id="lugar-create-container" class="col-md-6 offset-md-3">
    
    <h1>Editando</h1>
    <form action="/professor/conteudo/edit/{{$lugar->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o titúlo do seu lugar" value="{{$lugar->titulo}}" required>
    </div><br>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" placeholder="Insira uma descrição" required>{{$lugar->descricao}}</textarea>
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
            <option value="btn btn-primary" {{$lugar->estilobtn == 'btn btn-primary' ? "selected='selected'" :""}}>Primary</option>
            <option value="btn btn-secondary" {{$lugar->estilobtn == 'btn btn-secondary' ? "selected='selected'" :""}}>Secondary</option>
            <option value="btn btn-success" {{$lugar->estilobtn == 'btn btn-success' ? "selected='selected'" :""}}>Success</option>
            <option value="btn btn-danger" {{$lugar->estilobtn == 'btn btn-danger' ? "selected='selected'" :""}}>Danger</option>
            <option value="btn btn-warning" {{$lugar->estilobtn == 'btn btn-warning' ? "selected='selected'" :""}}>Warning</option>
            <option value="btn btn-info" {{$lugar->estilobtn == 'btn btn-info' ? "selected='selected'" :""}}>Info</option>
            <option value="btn btn-light" {{$lugar->estilobtn == 'btn btn-light' ? "selected='selected'" :""}}>Light</option>
            <option value="btn btn-dark" {{$lugar->estilobtn == 'btn btn-dark' ? "selected='selected'" :""}}>Dark</option>
            <option value="btn btn-outline-primary" {{$lugar->estilobtn == 'btn btn-outline-primary' ? "selected='selected'" :""}}>Primary Outline</option>
            <option value="btn btn-outline-secondary" {{$lugar->estilobtn == 'btn btn-outline-secondary' ? "selected='selected'" :""}}>Secondary Outline</option>
            <option value="btn btn-outline-success" {{$lugar->estilobtn == 'btn btn-outline-success' ? "selected='selected'" :""}}>Success Outline</option>
            <option value="btn btn-outline-danger" {{$lugar->estilobtn == 'btn btn-outline-danger' ? "selected='selected'" :""}}>Danger Outline</option>
            <option value="btn btn-outline-warning" {{$lugar->estilobtn == 'btn btn-outline-warning' ? "selected='selected'" :""}}>Warning Outline</option>
            <option value="btn btn-outline-info" {{$lugar->estilobtn == 'btn btn-outline-info' ? "selected='selected'" :""}}>Info Outline</option>
            <option value="btn btn-outline-dark" {{$lugar->estilobtn == 'btn btn-outline-dark' ? "selected='selected'" :""}}>Dark Outline</option>

    </select>
    </div><br>
    
    <div class="form-group">
        <label for="descricao">Nome do Botão</label>
        <input type="text" class="form-control" id="titulobotao" name="titulobotao" placeholder="Insira o titúlo do seu lugar" value="{{$lugar->nomebtn}}"required>
    </div><br>
    <div class="form-group">
        <label for="descricao">Link do Botão</label>
        <input type="text" class="form-control" id="linkbotao" name="linkbotao" placeholder="Insira o titúlo do seu lugar" value="{{$lugar->linkbtn}}" required>
    </div><br>
    <div class="form-group">


        <label for="title">Status</label><br>
        <select name="private2" id="private2">
        
        
        <option value="0">Não</option>
        <option value="1" {{$lugar->status == '1' ? "selected='selected'" :""}}>Sim</option>

    </select>
    </div><br>
    
    <div class="form-group">
        <label for="image">Imagem</label><br><br>
        
    <br><br>
    <input type="submit" class="btn btn-primary" value="Editar Conteúdo">

</form>



</div>
@endsection