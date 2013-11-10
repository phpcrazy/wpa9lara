<?php 

class UserTableSeeder extends DatabaseSeeder {
	public function run() {
		$user = array(
			'username'	=> 'john',
			'password'	=> Hash::make('123456'),
			'email'		=> 'john@gmail.com',
			);
		$user2 = array(
			'username'	=> 'doe',
			'password'	=> Hash::make('123456'),
			'email'		=> 'doe@gmail.com'
			);
		DB::table('user')->insert($user);
		User::create($user2);
	}
}

 ?>