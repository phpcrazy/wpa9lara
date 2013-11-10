<?php 

class MyController extends BaseController {

	protected $layout = 'layouts.master';
	
	public function index() {
		$this->layout->header = View::make('blog.header')
								->with('title', 'Myanmar Links');
		$this->layout->content = View::make('blog.profile', array('test' => 'Test'));
		$this->layout->footer = View::make('blog.footer');
	}
}

 ?>