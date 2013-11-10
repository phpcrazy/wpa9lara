<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before' => 'auth', function(){
	return "Hi!";
}));

Route::any('/login',array(
	"as"	=> "user/login",
	"uses"	=> "UserController@loginAction"
	));

Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

/*Route::post('/login', function(){
	$userinfo = array(
		'username'	=> Input::get('username'),
		'password'	=> Input::get('password')
	);
	$rules = array(
		'username'	=> 'required',
		'password'	=> 'required|min:4'
	);
	$validator = Validator::make($userinfo, $rules);
	if($validator->fails()) {
		return Redirect::to('login')->withErrors($validator);	
	}
});
*/

Route::get('/register', function(){
	return View::make('partials.register');
});

Route::post('/register', array(
		'as'		=> 'register',
		'before'	=> array('csrf', 'auth'),
		function() {
			return "Hello Register";	
		}));