@extends('layouts.sidebar')

@section('content')
<div class="card">
  <div class="card-header">
    La información corresponde a las materias de la malla curricular de la carrera "Ingeniería en informática".
  </div>
  <div class="card-body">
    <h5 class="card-title">MATERIAS</h5>
    <table class="table table-active">
      <thead>
        <tr>
          <th scope="col">MATERIA</th>
          <th scope="col">CREDITOS</th>
          <th scope="col">CLAVE DE LA MATERIA</th>
          <th scope="col">CURSADA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Programación</td>
          <td>8</td>
          <td>I5324</td>
          <td>SI</td>
        </tr>
        <tr>
          <td>Teoría de la computación</td>
          <td>8</td>
          <td>I5345</td>
          <td>NO</td>
        </tr>

      </tbody>
    </table>
  </div>
</div>
@endsection