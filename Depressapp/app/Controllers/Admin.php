<?php namespace App\Controllers;

include "Base.php";

class Admin extends BaseController{

	public function index()
	{
		return view('Admin/index');
	}

}
