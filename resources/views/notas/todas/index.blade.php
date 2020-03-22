@extends('layouts.app')

@section('content')
	<div class="d-flex flex-wrap justify-content-around">

		@include('notas.todas.modal')

		@foreach($notas as $nota)
			<div class="card border-primary mb-3" style="max-width: 18rem;">
			  <div class="card-header"><b>{{ $nota->titulo }}</b>
			  	<p class="small float-rigth">{{ $nota->created_at }}</p>
			  </div>
			  <div class="card-body text-primary">
			    <p class="card-text">{{ $nota->texto }}</p>
			  </div>
			
			<div class="card-footer">
				<a href="{{ URL::action('NotasController@edit', $nota->id) }}">
					<button type="button" class="btn btn-info btn-sm float-right">
						<i class="far fa-edit"></i>
					</button>
				</a>
				<button type="button" class="btn btn-danger btn-sm float-right mr-1">
					<i class="far fa-trash-alt"></i>
				</button>
			</div>

			</div>
		@endforeach
	</div>
@endsection