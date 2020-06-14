<?php namespace App\Controllers;



class Account extends BaseController
{

	public function index()
	{
		return view('login');
	}

	public function login(){
		var_dump($this->request->getPost());
		var_dump($_POST);
		return "teste";
	}

}
