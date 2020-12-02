<?php 

class Daftar extends Controller{
	
	public function index()
	{
		$data['title'] = "Sign Up";
		$this->views('login/daftar', $data);
	}
}


