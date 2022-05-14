<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>front</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="turnos">
        <p>tomaturno</p>
    </div>

    {{--
		*********************************************************************
		**                        Bloque 01
		*********************************************************************
	--}}
    <div id="contenido1" style="display:;">
        <div class="seccion1">
            <p class="flotante1">PEPEL BOND</p>
            <div class="row encabezados">
                <div class="col-4">&nbsp;</div>
                <div class="col precio">Carta</div>
                <div class="col precio">Oficio</div>
                <div class="col precio">Doble carta</div>
            </div>

            @foreach ($section01->products as $product)
                <div class="row fila">
                    <div class="col-4">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach

            <div class="seccion2">
                <p class="flotante2">PLOTEO COLOR</p>
                <div class="row encabezados">
                    <div class="col-9">&nbsp;</div>
                    <div class="col precio">&nbsp;</div>
                </div>

                @foreach ($section02->products as $product)
                    <div class="row fila">
                        <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                    </div>
                @endforeach
            </div>
        </div>
	</div>
	{{--
		*********************************************************************
		**                        Bloque 02
		*********************************************************************
	--}}
	<div id="contenido2">
        <div class="seccion1">
            <p class="flotante1">PAPEL BOND</p>
            <div class="row encabezados">
                <div class="col-4">&nbsp;</div>
                <div class="col precio">Carta</div>
                <div class="col precio">Oficio</div>
                <div class="col precio">Doble carta</div>
            </div>

            @foreach ($section03->products as $product)
                <div class="row fila">
                    <div class="col-4">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
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

            @foreach ($section04->products as $product)
                <div class="row fila">
                    <div class="col-4">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
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

            @foreach ($section05->products as $product)
                <div class="row fila">
                    <div class="col-4">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
    </div>
	{{--
		*********************************************************************
		**                        Bloque 03
		*********************************************************************
	--}}
	<div id="contenido3">
        @foreach ($section06->products as $product)
        <div class="seccion1">
            <div class="encabezados">{{ $product->name }}</div>
            <div class="precio"><span class="quetzal">$</span>{{ $product->price }}</div>
        </div>
        @endforeach
    </div>
	{{--
		*********************************************************************
		**                        Bloque 04
		*********************************************************************
	--}}
	<div id="contenido4">
        @foreach ($section06->products as $product)
        <div class="seccion1">
            <div class="encabezados">{{ $product->name }}</div>
            <div class="precio"><span class="quetzal">$</span>{{ $product->price }}</div>
        </div>
        @endforeach
		{{-- 
    </div>
        @foreach ($section07->products as $product)
        <div class="seccion2">
            <div class="precio"><span class="quetzal">$</span>{{ $product->price }}</div>
            <div class="encabezados">{{ $product->name }}</div>
        </div>
        @endforeach
		
		@foreach ($section08->products as $product)
        <div class="seccion2">
            <div class="precio"><span class="quetzal">$</span>{{ $product->price }}</div>
            <div class="encabezados">{{ $product->name }}</div>
        </div>
        @endforeach
		@foreach ($section09->products as $product)
        <div class="seccion2">
            <div class="precio"><span class="quetzal">$</span>{{ $product->price }}</div>
            <div class="encabezados">{{ $product->name }}</div>
        </div>
        @endforeach
		@foreach ($section10->products as $product)
        <div class="seccion2">
            <div class="precio"><span class="quetzal">$</span>{{ $product->price }}</div>
            <div class="encabezados">{{ $product->name }}</div>
        </div>
        @endforeach
		--}}
    </div>
	{{--
		*********************************************************************
		**                        Bloque 05
		*********************************************************************
	--}}
	<div id="contenido5">
        <div class="seccion1">
            <p class="flotante1">PAQUETERÍA</p>
            <div class="row encabezados">
                <div class="col-9">&nbsp;</div>
                <div class="col precio">&nbsp;</div>
            </div>

            @foreach ($section11->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>

        <div class="seccion2">
            <p class="flotante2">SNIPE QUARTZ</p>
            <div class="row encabezados">
                <div class="col-10">&nbsp;</div>
                <div class="col precio">&nbsp;</div>
            </div>

            @foreach ($section12->products as $product)
                <div class="row fila">
                    <div class="col-10">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
    </div>
	{{--
		*********************************************************************
		**                        Bloque 06
		*********************************************************************
	--}}
	<div id="contenido6">
		<div class="seccion1">
			<p class="flotante1">ENMICADO</p>
			<div class="row encabezados">
				<div class="col-6">&nbsp;</div>
				<div class="col precio">Carta</div>
			</div>

			@foreach ($section13->products as $product)
                <div class="row fila">
                    <div class="col-6">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
		</div>

		<div class="seccion2">
			<p class="flotante2">FOTO REVELADO</p>
			<div class="row encabezados">
				<div class="col-6">&nbsp;</div>
				<div class="col precio">Carta</div>
			</div>

			@foreach ($section14->products as $product)
                <div class="row fila">
                    <div class="col-6">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
		</div>

		<div class="seccion3">
			@foreach ($section15->products as $product)
			<div class="row fila">
				<div class="col-6">{{ $product->name }}</div>
				<div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
			</div>
		@endforeach
		</div>
	</div>
	{{--
		*********************************************************************
		**                        Bloque 07
		*********************************************************************
	--}}
	<div id="contenido7">
        <div class="seccion1">
            <p class="flotante1">PLAYERAS</p>
            <div class="row encabezados">
                <div class="col-7">&nbsp;</div>
                <div class="col precio">&nbsp;</div>
                <div class="col precio">&nbsp;</div>
            </div>

            @foreach ($section16->products as $product)
                <div class="row fila">
                    <div class="col-7">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>

        <div class="seccion2">
        <img src="{{ asset('layout10/Playera.gif') }}" alt="">
            <p class="flotante2">GAFETE</p>
            <div class="row encabezados">
                <div class="col-8">&nbsp;</div>
                <div class="col precio">Carta</div>
            </div>

            @foreach ($section17->products as $product)
                <div class="row fila">
                    <div class="col-8">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
            
        <div class="seccion3">
            <p class="flotante3">IMPRESIÓN EN PAPEL TRANSFER</p>
            <div class="row encabezados">
                <div class="col-9">&nbsp;</div>
                <div class="col precio">Carta</div>
                <div class="col precio">Carta</div>
            </div>

            @foreach ($section18->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
    </div>
	{{--
		*********************************************************************
		**                        Bloque 08
		*********************************************************************
	--}}
	<div id="contenido8">
        <div class="seccion1">
        <img src="{{ asset('layout11/Boton.gif') }}" alt="">
            <p class="flotante1">BOTONES</p>
                
            @foreach ($section19->products as $product)
                <div class="row fila">
                    <div class="col-7">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>

        <div class="seccion2">
        <img src="{{ asset('layout11/Tazas.gif') }}" alt="">
            <p class="flotante2">TAZAS</p>
                
            @foreach ($section20->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>

        <div class="seccion3">
            <p class="flotante3">MARCO DEPIEDRA</p>

            @foreach ($section21->products as $product)
                <div class="row fila">
                    <div class="col-10">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
    </div>
	{{--
		*********************************************************************
		**                        Bloque 09
		*********************************************************************
	--}}
	<div id="contenido9">
        <div class="seccion1">
            <p class="flotante1">PASTA GB PLAK</p>
            <div class="row encabezados">
                <div class="col-6">&nbsp;</div>
                <div class="col precio">Carta</div>
                
            </div>

            @foreach ($section22->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>

        <div class="seccion2">
            <p class="flotante2">PASTA GB PLAK</p>
            <div class="row encabezados">
                <div class="col-6">&nbsp;</div>
                <div class="col precio">Carta</div>
            </div>

            @foreach ($section23->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
    </div>
	{{--
		*********************************************************************
		**                        Bloque 10
		*********************************************************************
	--}}
	<div id="contenido10">
        <div class="seccion1">
            <p class="flotante1">PEPEL BOND</p>
            <div class="row encabezados">
                <div class="col-6">&nbsp;</div>
                <div class="col precio">Carta</div>
                <div class="col precio">Oficio</div>
            </div>

            @foreach ($section24->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>

        <div class="seccion2">
            @foreach ($section25->products as $product)
                <div class="row fila">
                    <div class="col-9">{{ $product->name }}</div>
                    <div class="col precio"><span class="quetzal">$</span>{{ $product->price }}</div>
                </div>
            @endforeach
        </div>
    </div>

	<script>
		$(document).ready(function(){
			myTimeout = setInterval(toggle, 5000);
			
			function toggle(){
				if($("#contenido1").is(":hidden")){
					$('#contenido1').show();
					$('#contenido2').hide();
                    $('#contenido3').hide();
                    $('#contenido4').hide();
                    $('#contenido5').hide();
                    $('#contenido6').hide();
                    $('#contenido7').hide();
                    $('#contenido8').hide();
                    $('#contenido9').hide();
                    $('#contenido10').hide();
				}else{
					$('#contenido1').hide();
					$('#contenido2').show();
                    $('#contenido3').hide();
                    $('#contenido4').hide();
                    $('#contenido5').hide();
                    $('#contenido6').hide();
                    $('#contenido7').hide();
                    $('#contenido8').hide();
                    $('#contenido9').hide();
                    $('#contenido10').hide();
				}
                
				
			}

		});
	</script>

</body>

</html>
