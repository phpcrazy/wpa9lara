<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Blade</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::script('js/script.js') }}
</head>
<body>
	<div class="container">
		@include('partials.header')	
		<div class="content">
			@yield('content')	
		</div>
		@include('partials.footer')
	</div>
</body>
</html>