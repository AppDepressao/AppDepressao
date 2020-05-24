<?php namespace App\Controllers;

//$db = \Config\Database::connect();
class Home extends BaseController
{
	public function index()
	{
		return view('Home/index');
	}


	public function novoQuestionarioModal(){
		return view('Home/_novoQuestionarioModal');
	}

	public function termosModal(){
		return view('Home/_termosModal');
	}
	

	//--------------------------------------------------------------------

}
