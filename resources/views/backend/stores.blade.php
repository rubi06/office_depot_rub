@extends('backend.layout')

@section('content')

<table class="table table-stripped">
	<thead>
		<tr>
			<th colspan="2">Tiendas</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($stores as $store)
			<tr>
				<td>{{ $store->name }}</td>
				<td>{{ $store->description }}</td>
			</tr>
		@endforeach

	</tbody>
</table>

@endsection