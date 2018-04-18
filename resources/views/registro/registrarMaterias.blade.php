@extends('layouts.sidebar')

@section('content')
<div class="card">
	<div class="card-header text-center">
		<p>
			<h1>Registro de materias</h1> 
		</p>
	</div>
  	<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="scheduler-tab" data-toggle="tab" href="#scheduler" role="tab" aria-controls="scheduler" aria-selected="true">Agenda</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false">Oferta Académica</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="scheduler" role="tabpanel" aria-labelledby="scheduler-tab">
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

	  <div class="tab-pane fade container" id="academic" role="tabpanel" aria-labelledby="academic-tab">
	  	<div class="card border-dark mb-3">
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
	  </div>
	</div>
</div>
@endsection