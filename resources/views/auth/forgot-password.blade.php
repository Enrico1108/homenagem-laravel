@extends('layouts.main')
@section('title', 'Login')
@section('content')

        <div class="mb-4 text-sm text-gray-600">
            <p>Esqueceu a senha? Não se preocupe digite seu email e enviaremos uma nova senha!</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div id="lugar-create-container" class="col-md-6 offset-md-3">
            <div class="tituloforms">
            <h1>Login</h1><br><br>
            </div>

        

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <label for="email" >{{ __('Email') }}</label><br><br>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>


            <br><br>
                <input type="submit" class="btn btn-primary" value="Reenviar nova senha">
        
        </form>
</div>

@endsection