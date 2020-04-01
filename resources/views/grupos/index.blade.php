@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Lista de Grupos <a href="XXX/create"><button type="button" class="btn btn-success float-right">Agregar Grupo</button></a></h2>
	<h6>
		@if($search)
			<div class="alert alert-primary" role="alert">
			  Los resultados para tu búsqueda '{{ $search}}' son:
			</div>
		@endif
	</h6>
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Año Formación</th>
	      <th scope="col">Género</th>
	      <th scope="col">País</th>
	     {{--  <th scope="col">Activo</th>
	      <th scope="col">Descripción</th>
	      <th scope="col">Correo</th>
	      <th scope="col">Foto</th> --}}
	      <th scope="col">opciones</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($grupos as $grupo)
		    <tr>
		      <th scope="row">{{$grupo->id}}</th>
		      <td>{{$grupo->nombre}}</td>
		      <td>{{$grupo->anoFormacion}}</td>
		      <td>{{$grupo->genero}}</td>
		      <td>{{$grupo->pais}}</td>
		      {{-- <td>{{$grupo->activo}}</td>
		      <td>{{$grupo->descripcion}}</td>
		      <td>{{$grupo->email}}</td>
		      <td>{{$grupo->foto}}</td> --}}
		      <td>
		      	<form action="" method="POST">
		      		@csrf
		      		@method('DELETE')
		      		<a href="{{ url('grupos/ficha', $grupo->id) }}"><button type="button" class="btn btn-secondary">Ver</button></a>
		      		<a href=""><button type="button" class="btn btn-primary">Editar</button></a>
		      		<button type="submit" class="btn btn-danger">Eliminar</button>
		      	</form> 
		     </td>
		    </tr>
	    @endforeach
	  </tbody>
	</table>
	 <div class="row">
	 	<div class="mx-auto">
	 		{{ $grupos->links() }}
	 	</div>
	 </div>
</div>
@endsection