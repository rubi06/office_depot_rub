@extends('front.layout')

@section('content')
	<div class="turnos">
		tomaturnos
	</div>


	<!--contenido 1 office-->
	<div id="contenido1" style="display:;">
		<div class="seccion1">
			<p class="flotante1">PEPEL BOND</p>
			<div class="row encabezados">
				<div class="col-4">&nbsp;</div>
				<div class="col precio">Carta</div>
				<div class="col precio">Oficio</div>
				<div class="col precio">Doble carta</div>
			</div>

			@foreach ($sections as $item)
				<div class="row fila">
					<div class="col-4">{{ $item->name }}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price !!}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price2 !!}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price3 !!}</div>
				</div>
			@endforeach
		</div>

		<div class="seccion2">
			<p class="flotante2">PLOTEO COLOR</p>
			<div class="row encabezados">
				<div class="col-9">&nbsp;</div>
				<div class="col precio">&nbsp;</div>
			</div>

			@foreach ($section02 as $item)
				<div class="row fila">
					<div class="col-9">{{ $item->title }}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price !!}</div>
				</div>
			@endforeach
		</div>
	</div>

	<!--contenido2 office-->
	<div id="contenido2" style="display:;">
		<div class="seccion1">
			<p class="flotante1">PAPEL BOND</p>
			<div class="row encabezados">
				<div class="col-4">&nbsp;</div>
				<div class="col precio">Carta</div>
				<div class="col precio">Oficio</div>
				<div class="col precio">Doble carta</div>
			</div>

			@foreach ($section03 as $item)
				<div class="row fila1">
					<div class="col-4">{{ $item->title }}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price !!}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price2 !!}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price3 !!}</div>
				</div>
			@endforeach
		</div>

		<div class="seccion2">
			<p class="flotante2">PEPEL OPALINA</p>
			<div class="row encabezados">
				<div class="col-4">&nbsp;</div>
				<div class="col precio">Carta</div>
				<div class="col precio">Doble carta</div>
				<div class="col precio">&nbsp;</div>
			</div>

			@foreach ($section04 as $item)
				<div class="row fila2">
					<div class="col-4">{{ $item->title }}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price !!}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price2 !!}</div>
					<div class="col precio">&nbsp;</div>
				</div>
			@endforeach
		</div>

		<div class="seccion3">
			<p class="flotante3">PAPEL COUCHE</p>
			<div class="row encabezados3">
				<div class="col-4">&nbsp;</div>
				<div class="col precio">Carta</div>
				<div class="col precio">Doble carta</div>
				<div class="col precio">&nbsp;</div>
			</div>

			@foreach ($section05 as $item)
				<div class="row fila3">
					<div class="col-4">{{ $item->title }}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price !!}</div>
					<div class="col precio"><span class="quetzal">$</span>{!! $item->price2 !!}</div>
					<div class="col precio">&nbsp;</div>
				</div>
			@endforeach
		</div>
	</div>
	<script></script>
@endsection
