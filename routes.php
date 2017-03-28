<?php  

//This file contains all of our different pages we have in our site

//type try then tab - try all the possible outcomes between the first curly brackets, if nothing is found then the catch part will be activated

//We will mention classes which are in each seperate controller
namespace App\Controllers;

use App\Models\Exceptions\ModelNotFoundException;

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

			case 'about':
				$controller = new AboutController();
				$controller->show();
			break;

			case 'contact':
				$controller = new ContactController();
				$controller->show();
			break;

			case 'blog.post':
				$controller = new BlogController();
				$controller->SingleBlogPost();
			break;

			case 'blog.all':
				$controller = new BlogController();
				$controller->AllBlogPost();
			break;

			case 'blog.edit':
				$controller = new BlogController();
				$controller->edit();
			break;

			case 'blog.update':
				$controller = new BlogController();
				$controller->update();
			break;

			case 'blog.remove':
				$controller = new BlogController();
				$controller->remove();
			break;

			case 'register':
				$controller = new AuthenticationController();
				$controller->register();
			break;

			case 'login':
				$controller = new AuthenticationController();
				$controller->login();
			break;

			case 'auth.store':
				$controller = new AuthenticationController();
				$controller->store();
			break;

			case 'auth.attempt':
				$controller = new AuthenticationController();
				$controller->attempt();
			break;

			case 'logout':
				$controller = new AuthenticationController();
				$controller->logout();
			break;

		
		default:
			throw new ModelNotFoundException();
			break;
	}
	
} catch (ModelNotFoundException $e) {
	$controller = new ErrorController();
	$controller->error404();
}