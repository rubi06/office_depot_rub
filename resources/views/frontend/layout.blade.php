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
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

		<link  rel="stylesheet"  href="{{asset('css/style.css')}}">
</head>

<body>
	<div class="turnos">
        <p>tomaturno</p>
    </div>
	<div class="container">
		@yield('content')
	</div>
	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sed vel magni exercitationem facere amet nulla placeat animi cupiditate modi quos fugiat reprehenderit ad eum maxime hic illum, laborum obcaecati.</p>
</body>

</html>