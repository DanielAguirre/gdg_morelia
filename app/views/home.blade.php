<!docttpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'GDG Morelia')</title>
	<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
	{{ HTML::style('assets/css/stylus/estilo.css')}}
</head>
<body>
	<div id="contenedor">
		<div class="buscar">
			<div id="buscar">
				<input type="text" id="buscar" placeholder="Buscar">
			</div>
			<a href="">GDG</a>			
		</div>
		<div id="contenido">
			{{HTML::image('assets/img/gdg-morelia.png')}}
			<h2 id="descripcion">Promovemos el desarrollo tecnológico local a través de las plataformas de Google.</h2>
		</div>
	</div>
	@yield('content')
	
</body>
</html>
