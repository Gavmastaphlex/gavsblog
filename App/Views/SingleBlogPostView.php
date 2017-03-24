<?php  

namespace App\Views;

class SingleBlogPostView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "blogpost";
		//What is the page title
		$page_title = "Blogpost";
		//What is the description of the page
		$page_desc = "This is the blog post Page";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/singleblogpost.inc.php";
	}
}