<?php 

// This is where all the background stuff runs to get our home page to load and show

namespace App\Controllers;

//Tell the controller which view it want to open
use App\Views\HomeView;

//This class name must match the one in your routes
class HomeController extends Controller{

	//This function name must match the one in your routes
	public function show(){
		//Tells PHP which view you want to open
		
		//echo "Home Page";

		$view = new HomeView();
		$view->render();

	}
}