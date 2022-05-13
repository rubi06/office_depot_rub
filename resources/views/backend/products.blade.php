@extends('backend.layout')

@section('content')

<a class="btn btn-primary" href="http://localhost/office_depot_rub/public/product/create" role="button">Nuevo producto</a>

<table class="table table-stripped">
	<thead>
		<tr>
			<th colspan="2">Productos</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($products as $product)
			<tr>
				<td>{{ $product->name }}</td>
				<td>{{ $product->price }}</td>
			</tr>
		@endforeach

	</tbody>
</table>

@endsection