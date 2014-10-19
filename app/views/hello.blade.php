<!docttpe html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
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
	<div id="publicaciones">
		<div class="post">
			{{ HTML::image('assets/img/wireles.jpg')}}
			<h3 class="categoria">GDG</h3>
			<a href=""><h2 class="titulo">Wireles</h2></a>
			<p>lorem</p>
			<a href="" class="mas">MAS</a>
		</div>
		<div class="post">
			{{ HTML::image('assets/img/wireles.jpg')}}
			<h3 class="categoria">GBG</h3>
			<a href="">	<h2 class="titulo">Wireles</h2></a>
			<p>lorem</p>
			<a href="" class="mas">MAS</a>
		</div>
		<div class="post">
			{{ HTML::image('assets/img/wireles.jpg')}}
			<h3 class="categoria">GSA</h3>
			<a href=""><h2 class="titulo">Wireles</h2></a>
			<p>lorem</p>
			<a href="" class="mas">MAS</a>
		</div>
	</div>
</body>
</html>
