@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Ficha del Grupo: {{ $grupo->nombre }}</h2>

	{{-- Mostramos datos del grupo --}}
	<div class="card my-5" style="max-width: 100%;">
	  <div class="row no-gutters">
	    <div class="col-md-4">
	      <img src="{{ asset('images/grupo_' . $grupo->id . '.jpg') }}" class="card-img" alt="{{ $grupo->nombre }}">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h5 class="card-title">{{ $grupo->nombre }}</h5>
	        <p class="card-text">{{ $grupo->descripcion}}</p>


			<div class="card" style="">
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item"><span class="badge badge-secondary mr-3" style="font-size: 0.9em;">Género: </span>{{ $grupo->genero}}</li>
			    <li class="list-group-item"><span class="badge badge-secondary mr-3" style="font-size: 0.9em;">País: </span>{{ $grupo->pais}}</li>
			    <li class="list-group-item"><span class="badge badge-secondary mr-3" style="font-size: 0.9em;">Activos: </span>{{ $grupo->activo}}</li>
			  </ul>
			</div>


	        <p class="card-text"><small class="text-muted">{{ $grupo->email}}</small></p>
	      </div>
	    </div>
	  </div>
	</div>


	{{-- Mostramos los discos del grupo --}}
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Año Salida</th>
	      <th scope="col">PVP</th>
	      <th scope="col">Temas</th>
	      <th scope="col">Formato</th>
	      <th scope="col">Descripción</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($discografia as $disco)
		    <tr>
		      <th scope="row">{{$disco->id}}</th>
		      <td>{{$disco->nombre}}</td>
		      <td align="center">{{$disco->anoSalida}}</td>
		      <td align="right">{{$disco->pvp . ' €'}}</td>
		      <td align="right">{{$disco->numCanciones}}</td>
		      <td>{{$disco->formato}}</td>
		      <td>{{$disco->descripcion}}</td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>



	<a href="{{ url('grupos/index') }}">
		<button class="btn btn-success" type="button">Volver a los grupos</button>
	</a>



</div>
@endsection