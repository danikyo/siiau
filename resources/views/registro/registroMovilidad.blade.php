@extends('layouts.sidebar')

@section('content')
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title text-success">AGENDA DISPONIBLE</h5>
    <table class="table table-active table-responsive-lg">
      <thead>
        <tr>
          <th scope="col">NRC</th>
          <th scope="col">Materia</th>
          <th scope="col">Horario</th>
          <th scope="col">Días</th>
          <th scope="col">Profesor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>50815</td>
          <td>Diseño VII</td>
          <td>11:00 - 13:00</td>
          <td>M-I</td>
          <td>Luna Abundis, Jose Antonio</td>
        </tr>
        <tr>
          <td>50811</td>
          <td>Expresión Gráfica II</td>
          <td>12:00 - 15:00</td>
          <td>V</td>
          <td>Gonzalez Perez, Rafael</td>
        </tr>

      </tbody>
    </table>

    <table class="table table-active table-responsive-lg">
      <thead>
        <tr>
          <th scope="col">NRC</th>
          <th scope="col">Materia</th>
          <th scope="col">Horario</th>
          <th scope="col">Días</th>
          <th scope="col">Profesor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>51315</td>
          <td>Programación</td>
          <td>09:00 - 11:00</td>
          <td>L-I</td>
          <td>Nombre genérico</td>
        </tr>
        <tr>
          <td>56811</td>
          <td>Estructuras de Datos II</td>
          <td>17:00 - 19:00</td>
          <td>M-J</td>
          <td>Gutierrez Arriaga, Roberto</td>
        </tr>

      </tbody>
    </table>
    <a href="#" class="btn btn-outline-primary">Inscribirse</a>
  </div>
</div>
</div>
@endsection