@extends('layouts.appHome')

@section('content')
<div class="card text-center">
  <div class="card-header">
    Datos del Estudiante
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ Auth::user()->name }}</h5>
    <p class="card-text">Status: Activo</p>
    <table class="table table-sm">
      <tbody>
        <tr>
          <th class="table-dark" scope="row">Admisión</th>
          <td colspan="2">2014 A</td>
        </tr>
        <tr>
          <th class="table-dark" scope="row">Nivel</th>
          <td colspan="2">Licenciatura</td>
        </tr>
        <tr>
          <th class="table-dark" scope="row">Carrera</th>
          <td colspan="2">Ingeniería en informática</td>
        </tr>
        <tr>
          <th class="table-dark" scope="row">Centro</th>
          <td colspan="2">Centro de Ciencias Exactas e Ingenierías</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
