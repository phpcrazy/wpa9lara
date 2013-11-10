@extends('layouts.master')
@section('content')

{{ Form::open(array(
		'method' 	=> 'post',
		'route'		=> 'register'
		)) }}
	{{ Form::token() }}

	{{ Form::text('hi') }}
	
	{{ Form::submit('Submit') }}
{{ Form::close() }}
@stop