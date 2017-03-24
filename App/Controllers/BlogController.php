<?php 

// This is where all the background stuff runs to get our home page to load and show

namespace App\Controllers;

use App\Views\BlogCreateView;
use App\Views\SingleBlogPostView;
//Tell the controller which view it want to open
use App\Views\BlogView;
use App\Models\Blog;


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

		//Run the get form data function and put result into variable
		//Check to see if there is any data we need to fill the form with

		$blogPost = $this->getFormData();

		$view = new BlogCreateView(['blogPost' => $blogPost]);
		$view->render();
	}

	public function store(){
		// var_dump($_POST);
		//create a new instance of the model
		$blogPost = new Blog($_POST);

		//Validate the form

		if (! $blogPost->isValid()) {

			// Return to the previous page

			$_SESSION['blog.create'] = $blogPost;
			header("Location:.\?page=blog.create");
		} 

		// Check to see if image uploaded is ok
		// If the image is uploaded then go to the saveImage

		// the first parameter is exactly what the name of the field is in the HTML form

		if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
			
			$blogPost->saveImage($_FILES['image']['tmp_name']);
		}

		//Run the save function in the database controller

		$blogPost->save();

		//Go to that Blog post
		header("Location:./?page=blog.post&id=".$blogPost->id);


	}




	public function SingleBlogPost() {

		//Get the blog post that has the relevant ID
		$blogPost = new Blog((int)$_GET['id']);
		$view = new SingleBlogPostView(['blogPost' => $blogPost]);
		$view->render();

	}






	public function getFormData($id = null) {
		// if there is a session called blog.create
		if(isset($_SESSION['blog.create'])) {
			$blogPost = $_SESSION['blog.create'];
			//remove session called blog.create
			unset($_SESSION['blog.create']);
		} else {
			$blogPost = new Blog((int)$id);
		}
		return $blogPost;

	}



}