<?php  

//This file contains all of our different pages we have in our site

//type try then tab - try all the possible outcomes between the first curly brackets, if nothing is found then the catch part will be activated

//We will mention classes which are in each seperate controller
namespace App\Controllers;
//This will help the PHP know where these classes are so we dont have to write them all in here

// ? is the 'else'

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

try {
	//type switch then tab
	//switch to what ever case matches our variable
	switch ($page) {

		//without the breack the code would run every single case
		case 'home':
				$controller = new HomeController();
				$controller->show();
			break;

			case 'blog':
				$controller = new BlogController();
				$controller->show();
			break;

			case 'blog.create':
				$controller = new BlogController();
				$controller->create();
			break;

			case 'blog.store':
				$controller = new BlogController();
				$controller->store();
			break;
		
		default:
			echo "There isnt any page matching your request";
			break;
	}
	
} catch (Exception $e) {
	echo "There is an error in your routes";
}