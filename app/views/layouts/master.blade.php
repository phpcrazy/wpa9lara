<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Blade</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::script('js/jquery.min.js') }}
</head>
<body>
	<div class="container">
		@include('partials.header')	
		<div class="content row">
			@yield('content')	
		</div> <!-- end of content -->
		@include('partials.footer')
	</div>
</body>
</html>