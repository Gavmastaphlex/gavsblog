<?php  

namespace App\Views;

class ContactView extends View {

	public function render(){

		//extract all of the data from the controller
		extract($this->data);
		//What page is it
		$page = "contact";
		//What is the page title
		$page_title = "Contact Page";
		//What is the description of the page
		$page_desc = "Contains all of the contact details";
		//include the master page
		include "pages/master.inc.php";

	}

	protected function content(){
		//extract the data from the controller
		extract($this->data);
		//Choose which page to load from our pages folder
		include "pages/contact.inc.php";
	}
}