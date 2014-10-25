<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>
	{{HTML::style('assets/css/admin.css')}}
</head>
<body>
	<div id="login">		
		{{ Form::open(array('url' => 'foo/bar')) }}	
			<div>
			{{Form::label("",'' ,array('class'=>'icon-user'))}}
			{{Form::text('username',null,array('placeholder'=>'Usuario'))}}
			</div>
			<div>
			{{Form::label("",'', array('class'=>'icon-lock'))}}
			{{Form::password('password',array('placeholder'=>'********'))}}
			</div>
			{{Form::submit('log in')}}
		{{ Form::close() }}	
	</div>
</body>
</html>
