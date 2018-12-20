<!DOCTYPE html>
<html>
<head>
	<title></title>
	<base href="{{ asset('storage/app/admin') }}/">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="base/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="login/css/login.css">
</head>

<body>
	{{-- MAIN --}}
	<div id="login-container">
		<div id="grey-background"></div>
		<div id="logo"></div>
		<div id="form-container">
			<form method="post">
				<h4>Welcum bak!</h4>
				<label>
					<input required="" class="login-input" type="text" name="email" placeholder="email@cphonevn.com">
					@if( $errors->any() || session()->has('error') )
					<div>
						<span>
							@foreach( $errors->all() as $error) {{$error}}. 
							@endforeach
							{{session('error')}}
						</span>
					</div>
					@endif
				</label>
				<label>
					<input required="" class="login-input" type="password" name="password" placeholder="******">
				</label>
				<input type="checkbox" name="remember" value="Remember Me"> Remember me?
				<button class="login-btn">LOG IN</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
	{{-- MAIN --}}

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cgroup-background').toggleClass('transform-background');
			setInterval( function(){
				$('#cgroup-background').toggleClass('transform-background');
			}, 15000 );
		});
	</script>
</body>
</html>