<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Blade</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/bootstrap-alert.js') }}

</head>
<body>
	<div class="container">
		@include('partials.header')
		<div class="row" id="message">
			@if(Session::has('success'))
				<div class="alert alert-success fade in">
            		<button data-dismiss="alert" class="close" type="button">×</button>
            			{{ Session::get('success') }}
          		</div>
          		<script>
          			$('.alert').alert();
          		</script>
			@endif
		</div>	
		<div class="content row">
			@yield('content')	
		</div> <!-- end of content -->
		@include('partials.footer')
	</div>
</body>
</html>