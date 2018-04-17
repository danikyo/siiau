@extends('layouts.sidebar')

@section('content')

<div class="card text-center">
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

<div class="card">
  <div class="card-header">
    Créditos: 197 Promedio: 79.61 Fecha:  11-04-2018
  </div>
  <div class="card-header">
    Créditos minimos:   334   Créditos máximos:     Porcentaje en créditos:   58.98 %
  </div>
  <div class="card-body">
    <table class="table table-active">
      <thead>
        <tr>
          <th scope="col">MATERIA</th>
          <th scope="col">CREDITOS</th>
          <th scope="col">CALIFICACIÓN</th>
          <th scope="col">CICLO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Programación</td>
          <td>8</td>
          <td>OCHENTA Y DOS</td>
          <td>2015A</td>
        </tr>
        <tr>
          <td>Teoría de la computación</td>
          <td>8</td>
          <td>NOVENTA</td>
          <td>2015A</td>
        </tr>

      </tbody>
    </table>
  </div>
</div>
@endsection