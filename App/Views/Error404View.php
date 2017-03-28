<?php  

namespace App\Views;

class Error404View extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "Error 404";
		//What is the page title
		$page_title = "error 404";
		//What is the description of the page
		$page_desc = "404 Page Not Found";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/Error404.inc.php";
	}
}