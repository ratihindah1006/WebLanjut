<?php namespace App\Controllers;
class Helloworld extends BaseController {
	public function index($name, $npm)
	{
		//echo $this->name;
		echo $name ."<br>";
		echo $npm ."<br>";
		echo "hello Ratih";
	}

	public function show()
	{
		echo "Ratih Indah Wardani"."<br>";
		echo "1817051006";
	}
}