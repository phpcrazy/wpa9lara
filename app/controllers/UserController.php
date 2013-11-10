<?php 

use Illuminate\Support\MessageBag;

class UserController extends BaseController {
	public function loginAction()
	{
		if(Request::server("REQUEST_METHOD")=="POST")
		{
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
			} else {
				if(Auth::attempt($userinfo)) {
					return Redirect::to('/');
				} else {
					$data['auth_errors'] = 'You\'re login data is incorrect!';
					return Redirect::to('login')->withErrors($data);
				}
			}
		}
		return View::make("partials.login");		
	}
}

 ?>