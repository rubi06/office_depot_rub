@extends('frontend.layout')

@section('content')

<table class="table table-stripped">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		@forelse ($sections as $item)
		<tr>
			<td>{{ $item->name }}</td>
			<td>{{ $item->description }}</td>
		</tr>
		@empty
		<tr>
			<td colspan="2">no hay productos</td>
		</tr>
		@endforelse
	</tbody>
</table>


@endsection