@extends('layouts.master')
@section('content')

{{ Form::open(array(
	'method' => 'post', 
	'route' => 'register',
	'class'	=> 'form-horizontal' )) }}

	@if($errors)
		{{ var_dump($errors) }}
	@endif
	<div class='control-group'>
		{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::text('username', Input::old('username'), array(
				"placeholder"	=> 'username'
			)) }}
		</div>
	</div>
	<div class='control-group'>
		{{ Form::label('email', 'Email', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::text('email', Input::old('email'), array(
				"placeholder"	=> 'user@email.com'
			)) }}
		</div>
	</div>
	<div class='control-group'>
		{{ Form::label('password', 'Password', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::password('password') }}
		</div>
	</div>
	<div class='control-group'>
		{{ Form::label('confirmed_password', 'Confirm Password', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::password('confirmed_password') }}
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