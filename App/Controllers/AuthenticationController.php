<?php 

// This is where all the background stuff runs to get our home page to load and show

namespace App\Controllers;

//Tell the controller which view it want to open
use App\Views\RegisterFormView;
use App\Views\LoginFormView;

use App\Models\User;

//This class name must match the one in your routes
class AuthenticationController extends Controller{

	//This function name must match the one in your routes
	public function register(){

		$user = $this->getUserFormData();

		$view = new RegisterFormView(['user' => $user]);
		$view->render();

	}

	public function login(){

		$user = $this->getUserFormData();

		$view = new LoginFormView(['user' => $user]);
		$view->render();

	}

	public function attempt(){
		if(static::$auth->attempt($_POST['email'], $_POST['password'])){
			//Login Successful

			header("Location: ./");
			exit();

		}

		header("Location:.\?page=login&error=true");
		exit();
	}

	public function logout(){

		static::$auth->logout();
		header('Location: ./');
		exit();
	}

	public function store(){

		$user = new User($_POST);
		if(! $user->isValid()) {
			$_SESSION['user.form'] = $user;
			header("Location: .\?page=register");
			exit();
		}

		$user->save();
		header("Location: .\?page=login");


	}

	protected function getUserFormData($id = null) {
		if(isset($_SESSION['user.form'])) {
			$user = $_SESSION['user.form'];
			unset($_SESSION['user.form']);
		} else {
			$user = new User($id);
		}

		return $user;
	}



}