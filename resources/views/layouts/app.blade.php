<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Siiau') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
</head>
<body>
    @guest
    @else
    <div class="wrapper">
      <!--Sidebar Holder-->
      <nav id=sidebar>
        <!--Sidebar Header-->
        <div class="sidebar-header">
          LOGO UDG
        </div>

        <!--Sidebar Body-->
        <ul class="list-unstyled components">
          <li class="active">
            <a href="#subAcademica" data-toggle="collapse" aria-expanded="false">Académica</a>
            <ul class="collapse list-unstyled" id="subAcademica">
              <li><a href="/horario">Horario</a></li>
              <li><a href="#">Materias</a></li>
              <li><a href="/boleta">Boleta</a></li>
              <li><a href="#">Constancia</a></li>
              <li><a href="/kardex">Kardex</a></li>
            </ul>
          </li>
          <li class="active">
            <a href="#subRegistro" data-toggle="collapse" aria-expanded="false">Registro</a>
            <ul class="collapse list-unstyled" id="subRegistro">
              <li><a href="/registrar_materias">Registrar Materias</a></li>
              <li><a href="/registro_movilidad">Registro Movilidad</a></li>
              <li><a href="/servicio_social">Servicio Social</a></li>
              <li><a href="/oferta_academica">Oferta Académica</a></li>
              <li><a href="/pre_registro">Pre-registro</a></li>
            </ul>
          </li>
          <li class="active">
            <a href="#subServicios" data-toggle="collapse" aria-expanded="false">Servicios</a>
            <ul class="collapse list-unstyled" id="subServicios">
              <li><a href="#">Google Drive</a></li>
            </ul>
          </li>
          <li class="active">
            <a href="#subTramites" data-toggle="collapse" aria-expanded="false">Tramites</a>
            <ul class="collapse list-unstyled" id="subTramites">
              <li><a href="#">Solicitar Credencial</a></li>
              <li><a href="#">Artículo 33</a></li>
              <li><a href="#">Artículo 34</a></li>
              <li><a href="#">Siatce</a></li>
            </ul>
          </li>
          <li class="active">
            <a href="#subConfiguracion" data-toggle="collapse" aria-expanded="false">Configuración</a>
            <ul class="collapse list-unstyled" id="subConfiguracion">
              <li><a href="#">Cambio de NIP</a></li>
              <li><a href="#">Métodos de Pago</a></li>
            </ul>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="#" class="article" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesión') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
      </nav>
      
      <!--Page Content Holder-->
      <div id="content">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-info navbar-btn">
                  <i class="fas fa-align-justify"></i>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li><a class="btn btn-outline-info"   href="#">Orden de Pago</a></li>
                            <li><a class="btn btn-outline-info"" href="#">Notificaciones</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <p class="invisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

    @endguest

        @yield('content')
      </div>
    </div>
    <!--Jquery, popper and custom script-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript">
       $(document).ready(function () {
           $('#sidebarCollapse').on('click', function () {
               $("#sidebar").button('toggle');
               $('#sidebarCollapse').toggleClass('active');
           });
       });
    </script>
</body>
</html>
