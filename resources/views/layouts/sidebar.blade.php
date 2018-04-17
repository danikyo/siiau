<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Siiau') }}</title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ url('css/sb-admin.css') }}">

    <link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top sbcm" id="mainNav">
    <a class="navbar-brand" href="/home">SIIAU <img src="{{ url('images/logo.png') }}" style="width: 1rem; margin-bottom: 5px;"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="siiauAccordion" style="background-color: #1A237E;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Académica">
          <a  class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAcademica" data-parent="#siiauAccordion">
            <i class="fa fa-fw fa-mortar-board"></i>
            <span class="nav-link-text">Académica</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAcademica">
            <li><a class="sbc" href="{{ url('horario') }}">Horario</a></li>
            <li><a class="sbc" href="{{ url('materias') }}">Materias</a></li>
            <li><a class="sbc" href="{{ url('boleta') }}">Boleta</a></li>
            <li><a class="sbc" href="{{ url('constancia') }}">Constancia</a></li>
            <li><a class="sbc" href="{{ url('kardex') }}">Kardex</a></li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registro">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRegistro" data-parent="#siiauAccordion">
            <i class="fa fa-fw fa-clock-o sbc-text"></i>
            <span class="nav-link-text sbc-text">Registro</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseRegistro">
            <li><a class="sbc" href="{{ url('registrar_materias') }}">Registrar Materias</a></li>
            <li><a class="sbc" href="{{ url('registro_movilidad') }}">Registro Movilidad</a></li>
            <li><a class="sbc" href="{{ url('servicio_social') }}">Servicio Social</a></li>
            <li><a class="sbc" href="{{ url('oferta_academica') }}">Oferta Academica</a></li>
            <li><a class="sbc" href="{{ url('pre_registro') }}">Pre Registro</a></li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Servicios">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseServicios" data-parent="#siiauAccordion">
            <i class="fa fa-fw fa-cloud sbc-text"></i>
            <span class="nav-link-text sbc-text">Servicios</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseServicios">
            <li><a class="sbc" href="{{ url('servicios/google') }}">Google Drive</a></li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tramites">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTramites" data-parent="#siiauAccordion">
            <i class="fa fa-fw fa-credit-card sbc-text"></i>
            <span class="nav-link-text sbc-text">Tramites</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseTramites">
            <li><a class="sbc" href="{{ url('tramites/credencial') }}">Solicitar Credencial</a></li>
            <li><a class="sbc" href="{{ url('tramites/art34') }}">Artículo 34</a></li>
            <li><a class="sbc" href="{{ url('tramites/art35') }}">Artículo 35</a></li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Configuración">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseConfiguracion" data-parent="#siiauAccordion">
            <i class="fa fa-fw fa-cog sbc-text"></i>
            <span class="nav-link-text sbc-text">Configuración</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseConfiguracion">
            <li><a class="sbc" href="{{ url('configuracion/nip') }}">Cambio de NIP</a></li>
            <li><a class="sbc" href="{{ url('configuracion/pagos') }}">Método de pago</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item sbc">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left sbc-text"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell sbc-text"></i>
            <span class="d-lg-none">Notificaciones
              <span class="badge badge-pill badge-warning">6 nuevas</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Nuevas Notificaciones:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-info fa-fw"></i>¡Ya está lista tu orden de pago!</strong>
              </span>
              <span class="small float-right text-muted">09:21 AM</span>
              <div class="dropdown-message small">Ahora puedes consultar tu orden de pago.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-info fa-fw"></i>Ya casi comienzan las clases.</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Recuerda que este 20 de agosto comienza tu semstre, ¡mucho éxito!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-info fa-fw"></i>Nueva calificación</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">El profesor [inserte aquí nombre del profesor] ya subió tu calificación, haz click aquí para verla.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Ver todas las notificaciones</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-money"></i>Orden de pago
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Descargar</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('help') }}">
            <i class="fa fa-fw fa-question-circle"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#sessionModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      @yield('content')
      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      <div style="height: 1000px;"></div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Universidad de Guadalajara</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="sessionModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">¿Estás seguro que quieres cerrar sesión?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecciona "Cerrar sesión" si estás seguro de que deseas cerrar sesión.</div>
          <div class="modal-footer">
            <button class="btn btn-outline-dark" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!--script src="js/jquery.min.js"></script-->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <!--script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script-->
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <!--script src="js/sb-admin.min.js"></script-->
    <script src="{{ url('js/sb-admin.min.js') }}"></script>
    <!-- Toggle between fixed and static navbar-->

    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
