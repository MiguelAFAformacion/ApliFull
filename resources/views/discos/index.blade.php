@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Lista General de Discos <a href="XXX/create"><button type="button" class="btn btn-success float-right">Agregar Disco</button></a></h2>
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
	      <th scope="col">Año Salida</th>
	      <th scope="col">PVP</th>
	      <th scope="col">Temas</th>
	      <th scope="col">Formato</th>
	      <th scope="col">Descripción</th>
	    {{--  <th scope="col">Foto</th>
	       <th scope="col">opciones</th> --}}
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($discos as $disco)
		    <tr>
		      <th scope="row">{{$disco->id}}</th>
		      <td>{{$disco->nombre}}</td>
		      <td align="center">{{$disco->anoSalida}}</td>
		      <td align="right">{{$disco->pvp . ' €'}}</td>
		      <td align="right">{{$disco->numCanciones}}</td>
		      <td>{{$disco->formato}}</td>
		      <td>{{$disco->descripcion}}</td>
{{--		      <td>{{$disco->foto}}</td>
 		      <td>
		      	<form action="" method="POST">
		      		@csrf
		      		@method('DELETE')
		      		<a href=""><button type="button" class="btn btn-secondary">Ver</button></a>
		      		<a href=""><button type="button" class="btn btn-primary">Editar</button></a>
		      		<button type="submit" class="btn btn-danger">Eliminar</button>
		      	</form> 
		     </td> --}}
		    </tr>
	    @endforeach
	  </tbody>
	</table>
	 <div class="row">
	 	<div class="mx-auto">
	 		{{ $discos->links() }}
	 	</div>
	 </div>
</div>
@endsection