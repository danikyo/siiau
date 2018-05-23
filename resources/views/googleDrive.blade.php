@extends('layouts.appHome')

@section('content')

<div class="card text-center">
  <div class="card-header">
    Datos del GoogleDrive
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ Auth::user()->id }}</h5>
    <p class="card-text">Status: Activo</p>
    <table class="table table-sm">
      <tbody>
        <tr>
          @if(count($idgoogle)>=1)
          <img src="imgooglecolor.jpg" width="350" height="200" >
          @else
          <a href="#ventana1" data-toggle="modal">
          <img src="imgoogledrive.jpg" width="350" height="200" onmouseover="this.src='imgooglecolor.jpg';" onmouseout="this.src='imgoogledrive.jpg';">

          </a>
          @endif


          <a href="#ventana2" data-toggle="modal">
          <button  type="button" class="btn btn-success ">SaveGoogleDrive</button>
          </a>
          <a href="{{ url ('pruebaPdf') }}" class="btn btn-primary">PDF
          </a>

          <a href="#ventana7" data-toggle="modal">
          <button  type="button" class="btn btn-success ">PAGOS</button>
          </a>

        </tr>
        <div class="modal fade " id="ventana1">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
      <div class="modal-header">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Google_Drive_logo.svg" style="width:100px;height:80px;>
        <h4 class="modal-title">Google Drive</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Con Google Drive podras almacenar todos tus documentos que generas durante el semestre de una forma organizada y automatica.</p>
        <img src="https://www.adelaruiz.com/wp-content/uploads/2017/04/docsiconos.png" style="width:100px;height:100px;>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <div class="option">
        <a href="https://accounts.google.com/o/oauth2/v2/auth?client_id={{ $clienteid }}&response_type={{$response_type}}&scope={{$scope }}&redirect_uri={{ $redirect}}&access_type={{ $access_type}}">
        <button  type="button" class="btn btn-primary ">Conectar</button>
        </a>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="ventana2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
<div class="modal-header">
{{ Form:: open(['url' =>'tokenCreation', 'method'=> 'POST']) }}
<h4 class="modal-title">Este es una prueba del Modal</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">

  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>Ayuda a google Drive a registrar tus datos para un mejor almacenamiento .</p>
<input type="text" value="{{ isset( $_GET['code']) ? $_GET['code']: 'Hola' }}" class="form-control" name="code" id="code">
<input type="text" value="{{Auth::user()->id}}" class="form-control" name="userid" id="userid">
</div>
<div class="modal-footer">

  <button type="submit" class="btn btn-primary">ENVIAR</button>

{{ Form:: close() }}
</div>
</div>
</div>
</div>

<div class="modal fade " id="ventana7">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
<div class="modal-header">
  <img src="pagos.png" width="180" height="80" >
<h4 class="modal-title">Agrega una tarjetahanbiente</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <form action="" method="POST" id="card-form">
    <span class="card-errors"></span>
    <div>
      <label>
        <span>Nombre del tarjetahabiente</span>
        <input type="text" size="20" data-conekta="card[name]" >
      </label>
    </div>
    <div>
      <label>
        <span>Número de tarjeta de crédito</span>
        <input type="text" size="20" data-conekta="card[number]" >
      </label>
    </div>
    <div>
      <label>
        <span>CVC</span>
        <input type="text" size="4" data-conekta="card[cvc]" >
      </label>
    </div>
    <div>
      <label>
        <span>Fecha de expiración (MM/AAAA)</span>
        <input type="text" size="2" data-conekta="card[exp_month]" >
      </label>
      <span>/</span>
      <input type="text" size="4" data-conekta="card[exp_year]" >
    </div>
</div>
<div class="modal-footer">
  <button type="submit">Crear token</button>
</form>

</div>
</div>
</div>
</div>






































      </tbody>
    </table>
  </div>
</div>


@endsection
