@extends('layouts.master')
@section('content')

{{ Form::open(array(
	'method' => 'post', 
	'route' => 'register',
	'class'	=> 'form-horizontal' )) }}

	<div class='control-group' id="inputUsername">
		{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::text('username') }}
			@if($errors->has('username'))
					<script>
						$('#inputUsername').addClass('error');
					</script>
					@foreach($errors->get('username') as $username_errors)
						<span class="help-inline">
							{{ $username_errors }}
						</span>
					@endforeach
				@endif
		</div>
	</div>
	<div class='control-group' id="inputEmail">
		{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::text('email') }}
				@if($errors->has('email'))
					<script>
						$('#inputEmail').addClass('error');
					</script>
					@foreach($errors->get('email') as $email_errors)
						<span class="help-inline">
							{{ $email_errors }}
						</span>
					@endforeach
				@endif
		</div>
	</div>
	<div class='control-group' id="inputPassword">
		{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::password('password') }}
			@if($errors->has('password'))
					<script>
						$('#inputPassword').addClass('error');
					</script>
					@foreach($errors->get('password') as $password_errors)
						<span class="help-inline">
							{{ $password_errors }}
						</span>
					@endforeach
				@endif
		</div>
	</div>
	<div class='control-group'  id="inputcPassword">
		{{ Form::label('confirmed_password', 'Confirm Password', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::password('confirmed_password') }}
			@if($errors->has('confirmed_password'))
					<script>
						$('#inputcPassword').addClass('error');
					</script>
					@foreach($errors->get('confirmed_password') as $cp_errors)
						<span class="help-inline">
							{{ $cp_errors }}
						</span>
					@endforeach
				@endif
		</div>
	</div>
	
	<div class="control-group">
		<div class="controls">
			{{ Form::submit('Submit', array('class' => 'btn btn-success')) }}	
		</div>
	</div>
	
	{{ Form::close() }}
@stop
@section('footer')
	@parent
	<script src="//polyfill.io"></script>
@stop