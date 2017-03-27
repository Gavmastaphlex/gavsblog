<?php  

namespace App\Views;

class AllBlogView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "allblog";
		//What is the page title
		$page_title = "View All Blogs";
		//What is the description of the page
		$page_desc = "This page shows all blogs";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/allblog.inc.php";
	}
}