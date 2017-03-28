<?php  

namespace App\Views;

class RegisterFormView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "register";
		//What is the page title
		$page_title = "Register User";
		//What is the description of the page
		$page_desc = "This is where you register";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/register.inc.php";
	}
}