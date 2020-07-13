<?php namespace App\Controllers;

include "Base.php";

class Home extends BaseController{

	public function index()
	{
		$session = session();
		if($session->get('cod_usuario') == NULL){
			return redirect()->to('/Account');
		}
		return view('Home/index');
	}

	public function novoQuestionarioModal(){
		return view('Home/_novoQuestionarioModal');
	}

	public function termosModal(){
		return view('Home/_termosModal');
	}

	public function info(){
		return view('Home/info');
	}

}
