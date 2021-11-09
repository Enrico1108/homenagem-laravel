<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <link rel="stylesheet" href="/css/reset.css">

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
         <!-- JavaScript Bundle with Popper -->
         <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    </head>
    <body>
    <ul>
    <li><a class="active" href="/">Home</a></li>
    <li><a href="/lugares">Tour Literário</a></li>
    <li><a href="/tourarquitetonico">8°</a></li>
    <li><a href="/setimo">7°</a></li>
    <li><a href="/sexto">6°</a></li>
    <li><a href="/sobre">Sobre Nós</a></li>
    @guest
    <li><a href="/login">Login</a></li>
    
    @endguest
    @auth
    @php
    $user = auth()->user();

    @endphp
    <div class="navbartest">
        @if ($user->utype == '3')
        <li><a href="/admin/dashboard">Dashboard</a></li>
        
    @endif
    @if ($user->utype == '2')
        <li><a href="/professor/dashboard">Dashboard</a></li>
        
    @endif
    @if ($user->utype == '1')
    <li><a href="/user/dashboard">Dashboard</a></li>
    </div>
    @endif
   
    <li><form action="/logout" method="POST">
    @csrf
    <a href="/logout" onclick="event.preventDefault();
    this.closest('form').submit();">Sair</a>
  
  
  </form></li>
        @php
        $user = auth()->user();
        @endphp

        <div class="fotoperfil">

  <li>  <img src=" {{ $user->profile_photo_url }}" alt=""></li>
    </div>

    

    @endauth

    
  </ul>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>
       <footer>
           
        <a href="https://colegioprogresso.com.br/"><p>Colégio Progresso</p></a>
       </footer>
       <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
