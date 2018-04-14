@extends('layouts.sidebar')

@section('content')
<div class="card">
  <div class="card-header">
    Créditos: 197 Promedio: 79.61 Fecha:  11-04-2018
  </div>
  <div class="card-header">
    Créditos minimos:   334   Créditos máximos:     Porcentaje en créditos:   58.98 %
  </div>
  <div class="card-body">
    <h5 class="card-title">KARDEX</h5>
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