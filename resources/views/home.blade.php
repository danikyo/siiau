@extends('layouts.sidebar')

@section('content')

<div class="card text-center">
  <img class="card-img-top mx-auto rounded-circle border img-fluid" src="{{ url('images/user.png') }}" alt="Card image cap Responsive image" style="width: 250px; height: 250px">
  <div class="card-body">
    <h5 class="card-title">{{ Auth::user()->name }}</h5>
    <p class="card-text">Status: <i class="text-success">Activo</i></p>
    <table class="table table-borderless table-condensed border border-white table-active">
      <tbody>
        <tr>
          <th class="" scope="row">Admisión</th>
          <td colspan="2" class="">2014 A</td>
        </tr>
        <tr>
          <th class="" scope="row">Nivel</th>
          <td colspan="2" class="">Licenciatura</td>
        </tr>
        <tr>
          <th class="" scope="row">Carrera</th>
          <td colspan="2" class="">Ingeniería en informática</td>
        </tr>
        <tr>
          <th class="" scope="row">Centro</th>
          <td colspan="2" class="">Centro de Ciencias Exactas e Ingenierías</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection