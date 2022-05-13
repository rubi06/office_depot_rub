@extends('frontend.layout')

@section('content')

<table class="table table-stripped">
	<thead>
		<tr>
			<th>Seccion</th>
			<th>Producto</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($sections as $se)
		@foreach ($products as $pro)
		<tr>
			<td>{{ $se->name }}</td>
		
			<td>{{ $pro->product }}</td>
			<td>{{ $pro->price }}</td>
		</tr>
			
		@endforeach
			
		@endforeach
		
	</tbody>
</table>
@endsection