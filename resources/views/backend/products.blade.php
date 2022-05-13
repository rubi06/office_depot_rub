@extends('backend.layout')

@section('content')

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