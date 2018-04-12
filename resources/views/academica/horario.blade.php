@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header btn">
    IMPRIMIR
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">h</th>
      <th scope="col">Martes</th>
      <th scope="col">Miércoles</th>
      <th scope="col">Jueves</th>
      <th scope="col">Viernes</th>
      <th scope="col">Sábado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Materia 1 <br> 13:00 - 15:00</td>
      <td>Administración de bases de datos <br> 15:00 - 17:00</td>
      <td>Materia 2 <br> 11:00 - 13:00</td>
      <td>Programación <br> 09:00 - 11:00</td>
    </tr>
    <tr>
      <td>Metodos matemáticos II <br> 17:00 19:00</td>
      <td>Inteligencia artificial <br> 17:00 - 19:00</td>
      <td>Programación <br> 13:00 - 15:00</td>
    </tr>
    <tr>
      <td>Administración de bases de datos <br> 19:00 - 21:00</td>
      <td>Inteligencia artificial <br> 19:00 - 21:00</td>
      <td>Materia 2 <br> 17:00 - 19:00</td>
      <td>Materia 1 <br> 17:00 - 19:00</td>
    </tr>
    <tr>
      <td>Administración de bases de datos <br> 21:00 - 22:00</td>
      <td></td>
      <td>Materia 2 <br> 19:00 - 21:00</td>
      <td>Materia 3 <br> 19:00 - 21:00</td>
    </tr>
  </tbody>
</table>
@endsection