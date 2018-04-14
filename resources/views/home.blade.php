@extends('layouts.sidebar')

@section('content')

<div class="card text-center">
  <img class="card-img-top mx-auto" src="images/example.png" alt="Card image cap" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ Auth::user()->name }}</h5>
    <p class="card-text">Status: <i class="text-success">Activo</i></p>
    <table class="table table-sm">
      <tbody>
        <tr>
          <th class="bg-info" scope="row">Admisión</th>
          <td colspan="2" class="table-info">2014 A</td>
        </tr>
        <tr>
          <th class="bg-info" scope="row">Nivel</th>
          <td colspan="2" class="table-info">Licenciatura</td>
        </tr>
        <tr>
          <th class="bg-info" scope="row">Carrera</th>
          <td colspan="2" class="table-info">Ingeniería en informática</td>
        </tr>
        <tr>
          <th class="bg-info" scope="row">Centro</th>
          <td colspan="2" class="table-info">Centro de Ciencias Exactas e Ingenierías</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection