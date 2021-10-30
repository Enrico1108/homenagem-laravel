@extends('layouts.main')
@section('title', 'Login')
@section('content')
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div id="lugar-create-container" class="col-md-6 offset-md-3">
            <div class="tituloforms">
            <h1>Login</h1><br><br>
            </div>
       
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Email') }}</label><br><br>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div><br>

            <div class="form-group">
                <label for="password" >{{ __('Password') }}<br><br>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div><br>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>

                @endif
                <br><br>
                <input type="submit" class="btn btn-primary" value="Logar">

            </div>
        </form>
</div>
@endsection