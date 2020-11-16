<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		return view('Pages/projectAdd');
	}

	public function detail()
	{
		return view('Pages/projectDetail');
	}

	public function edit()
	{
		return view('Pages/projectEdit');
	}


	

	//--------------------------------------------------------------------

}
