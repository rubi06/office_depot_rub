@extends('frontend.layout')

@section('content')
	<table class="table table-stripped">
		<thead>
			<tr>
				<th colspan="2">{{ $section01->name }}</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($section01->products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->price }}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th colspan="2">{{ $section02->name }}</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($section02->products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->price }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
