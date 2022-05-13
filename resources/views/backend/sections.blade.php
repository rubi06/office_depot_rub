@extends('backend.layout')

@section('content')

<table class="table table-stripped">
	<thead>
		<tr>
			<th colspan="2">Secciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($sections as $section)
			<tr>
				<td>{{ $section->name }}</td>
				<td>{{ $section->description }}</td>
			</tr>
		@endforeach

	</tbody>
</table>

@endsection