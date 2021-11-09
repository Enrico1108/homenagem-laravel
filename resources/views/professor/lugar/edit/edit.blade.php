@extends('layouts.main')
@section('title', 'Home')
@section('content')


<div id="lugar-create-container" class="col-md-6 offset-md-3">
    
    <h1>Editando</h1>
    <form action="/professor/lugar/edit/{{$lugar->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titulo">Lugar</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Insira o titúlo do seu lugar" value="{{$lugar->titulo}}" required>
    </div><br>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" placeholder="Insira uma descrição" required>{{$lugar->descricao}}</textarea>
    </div><br>
    <div class="form-group">
        <label for="mapa">Lugar</label>
        <input type="text" class="form-control" id="mapa" name="mapa" placeholder="Insira um mapa (Código HTML)" value="{{$lugar->mapa}}" required>
    </div><br>
    <div class="form-group">
        <label for="title">O Evento está ativo?</label>
        <select name="private" id="private">
        <option value="0">Não</option>
        <option value="1"{{$lugar->status == '1' ? "selected='selected'" :""}}>Sim</option>
    </select>
    </div>
    
    
    <div class="form-group">
        <label for="">Imagem:</label><br>
        
        <img src="/img/lugares/{{$lugar->foto}}" alt="" class="img-preview">
    </div>
    <br><br>
    <input type="submit" class="btn btn-primary" value="Editar Lugar">

</form>



</div>

@endsection