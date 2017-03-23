<?php  

namespace App\Views;

class AboutView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "about";
		//What is the page title
		$page_title = "About Page";
		//What is the description of the page
		$page_desc = "Lets delve into everything about us!";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/about.inc.php";
	}
}