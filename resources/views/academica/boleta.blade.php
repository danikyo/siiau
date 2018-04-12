@extends('layouts.app')

@section('content')
La informacion que aparece aqui es referente al ciclo escolar 201810, y que puede ser modificable, para cualquier duda al respecto puedes acudir con tu cordinador de carrera o bien a la coordinación de control escolar de tu centro universitario. Si en la columna de "KARDEX" te aparece un SI la información la puedes consultar en tu kardex.

<table class="table">
  <thead>
    <tr>
      <th scope="col">NRC</th>
      <th scope="col">CLAVE</th>
      <th scope="col">MATERIA</th>
      <th scope="col">ORDINARIO</th>
      <th scope="col">KARDEX</th>
      <th scope="col">EXTRAORDINARIO</th>
      <th scope="col">KARDEX</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>12345</td>
      <td>I5432</td>
      <td>Teoría de la computación</td>
      <td>SI</td>
      <td>SI</td>
      <td>NO</td>
      <td>NO</td>
    </tr>
    <tr>
      <td>11111</td>
      <td>I5555</td>
      <td>Programación</td>
      <td>SI</td>
      <td>SI</td>
      <td>NO</td>
      <td>NO</td>
    </tr>

  </tbody>
</table>
@endsection