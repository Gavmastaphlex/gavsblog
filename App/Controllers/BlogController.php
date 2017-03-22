<?php 

// This is where all the background stuff runs to get our home page to load and show

namespace App\Controllers;
use App\Views\BlogCreateView;

//Tell the controller which view it want to open
use App\Views\BlogView;

//This class name must match the one in your routes
class BlogController extends Controller{

	//This function name must match the one in your routes
	public function show(){
		//Tells PHP which view you want to open
		
		//echo "Home Page";

		$view = new BlogView();
		$view->render();

	}

	public function create(){
		$view = new BlogCreateView;
		$view->render();
	}
}