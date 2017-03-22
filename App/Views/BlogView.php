<?php  

namespace App\Views;

class BlogView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "blog.create";
		//What is the page title
		$page_title = "Add new blog post";
		//What is the description of the page
		$page_desc = "Add new blog post";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/blogcreate.inc.php";
	}
}