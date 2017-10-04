<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{    

	public function home()
	{
		$links = [
			"http://platzi" => "Curso laravel",
			"http://platzi2" => "Curso laravel 2"
		];

	    return view('welcome', [
	    	//"teacher"=> "Edward Acu",
	    	"links" =>$links,
	    ]);
	}

	public function about()
	{
		return view("about");
	}
}
