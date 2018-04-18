@extends('layouts.sidebar')

@section('content')
<div class="card border-dark mb-3">
	<div class="card-header"><h1>Pre Registro</h1><h6 class="text-success">Activo</h6></div>
	<div class="card-body text-dark">
	  <form method="POST" action="#">
	    @csrf

	    <div class="form-group">
	      <h5 class="card-title">NRC de la materia</h5>
	      <input type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" id="subject" name="subject" value="{{ old('subject') }}" required autofocus>
	    </div>
	    <div class="form-group">
	      <h5 class="card-title">Turno</h5>
	      <select class="form-control" id="orderBy" name="orderBy" value="{{ old('orderBy') }}" required autofocus>
	        <option>Matutino</option>
	        <option>Vespertino</option>
	      </select>
	    </div>
	    <button type="submit" class="btn btn-outline-dark">Agregar una nueva</button>
	    <button type="submit" class="btn btn-outline-primary">Enviar</button>
	  </form>
	</div>
</div>
@endsection