@extends('backend.layout')

@section('content')

<h1>Crear nueva seccion</h1>

<form action="{{ route('section.index') }}" method="post">
	@csrf {{--genera token--}}

	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">titulo</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="name">
	</div>

	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">descripcion</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="description">
	</div>
	<button type="submit">Enviar</button>
</form>

@endsection