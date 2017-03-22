<?php  

namespace App\Views;

class BlogCreateView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "blog";
		//What is the page title
		$page_title = "Blog";
		//What is the description of the page
		$page_desc = "This is the blog Page";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/blog.inc.php";
	}
}