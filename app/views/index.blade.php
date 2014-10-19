@extends('home')

@section('content')
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
@stop