@extends('backend.layout')

@section('content')

<table class="table table-stripped">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		@forelse ($prices as $item)
		<tr>
			<td>{{ $item->product }}</td>
			<td>{{ $item->price }}</td>
		</tr>
		@empty
		<tr>
			<td colspan="2">no hay precioss</td>
		</tr>
		@endforelse
	</tbody>
</table>


<form action="{{ route('price.index') }}" method="post">
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