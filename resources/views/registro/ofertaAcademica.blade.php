@extends('layouts.sidebar')

@section('content')
  <div class="card border-dark mb-3">
    <div class="card-header">Ofeta Académica</div>
    <div class="card-body text-dark">
      <form method="POST" action="#">
        @csrf

        <div class="form-group">
          <h5 class="card-title">Centro Universitario</h5>
          <select class="form-control" id="university" name="university" value="{{ old('university') }}" required autofocus>
            <option>CUCEI</option>
            <option>CUAAD</option>
            <option>CUCEA</option>
            <option>CUCS</option>
            <option>CUCSH</option>
          </select>
        </div>
        <div class="form-group">
          <h5 class="card-title">Carrera</h5>
          <input type="text" class="form-control{{ $errors->has('university') ? ' is-invalid' : '' }}" id="career" name="career" value="{{ old('career') }}" required autofocus>
        </div>
        <div class="form-group">
          <h5 class="card-title">Materia</h5>
          <input type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" id="subject" name="subject" value="{{ old('subject') }}" required autofocus>
        </div>
        <div class="form-group">
          <h5 class="card-title">Ordenar por...</h5>
          <select class="form-control" id="orderBy" name="orderBy" value="{{ old('orderBy') }}" required autofocus>
            <option>Materia</option>
            <option>NRC</option>
            <option>Clave del curso</option>
          </select>
        </div>
        <button type="submit" class="btn btn-outline-dark">Consultar</button>
      </form>
    </div>
  </div>
@endsection