<?php 

// This is where all the background stuff runs to get our home page to load and show

namespace App\Controllers;

use App\Views\Error404View;

//This class name must match the one in your routes
class ErrorController extends Controller{

	//This function name must match the one in your routes
	public function error404(){

		$view = new Error404View();
		$view->render();


	}
}