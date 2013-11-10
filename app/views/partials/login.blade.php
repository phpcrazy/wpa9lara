@extends('layouts.master')
@section('content')
	{{ Form::open(array(
		'url'			=> 'login',
		'autocomplete'	=> 'off',
		'class'			=> 'form-horizontal'
	)) }}
	@if($errors->has('auth_errors'))
		{{ $errors->get('auth_errors') }}
	@endif
	<div class="control-group">
		@if($errors->has('username'))
			@foreach($errors->get('username') as $error)
				{{ $error }}
			@endforeach
		@endif
		{{ Form::label('username', 'Username', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::text('username', Input::old('username'), array(
				"placeholder"	=> 'john.smith'
			)) }}
		</div>
	</div>
	<div class="control-group">
		@if($errors->has('password'))
			@foreach($errors->get('password') as $error)
				{{ $error }}
			@endforeach
		@endif
		 {{ Form::label("password", 'Password', array('class' => 'control-label')) }}
		<div class="controls">
			{{ Form::password("password", array(
				"placeholder"	=> '********'
			)) }}		
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			{{ Form::submit('login', array('class' => 'btn btn-success')) }}		
		</div>
	</div>
	
	{{ Form::close() }}
@stop
@section('footer')
	@parent
	<script src="//polyfill.io"></script>
@stop