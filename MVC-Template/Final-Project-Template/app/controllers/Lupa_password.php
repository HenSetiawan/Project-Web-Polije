<?php 


class Lupa_password extends Controller{
	
	public function index()
	{
		$data['title'] = "Forgot Password";
		$this->views('login/lupa_password', $data);
	}
}