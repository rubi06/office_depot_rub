@extends('backend.layout')

@section('content')

<h1>Crear nuevo producto</h1>

<form action="{{ route('productsection.index') }}" method="post">
	@csrf {{--genera token--}}

	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">titulo</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="product">
	</div>

	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">precio</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="price">
	</div>
	<button type="submit">Enviar</button>
</form>

@endsection