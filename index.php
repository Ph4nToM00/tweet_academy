<?php

session_start();

class Rooter
{
	public function call()
	{
		if (!isset($_GET['action'])) {
			$this->showHome();
		} else {
			switch ($_GET['action']) {

				case 'register':
					$this->showRegister();
					break;
				case 'home':
					$this->showHome();
					break;
				case 'login':
					$this->showLogin();
					break;
				case 'my_profil':
					$this->showMyProfil();
					break;
				case 'edit_profil':
					$this->showEditProfil();
					break;
				case 'disconnect':
					$this->showDisconnect();
					break;
				default:
					$this->show404();
					break;
			}
		}
	}

	private function showRegister()
	{
		if (!isset($_SESSION['email']))
			header('location: view/register.php');
	}
	private function showHome()
	{
		if (isset($_SESSION['email']))
			header('location: view/home.php');
	}
	private function show404()
	{
		header('location: view/error_404.php');
	}
	private function showLogin()
	{
		if (!isset($_SESSION['email']))
			header('location: view/login.php');
	}
	private function showMyProfil()
	{
		if (isset($_SESSION['email']))
			header('location: view/profil.php');
	}
	private function showEditProfil()
	{
		if (isset($_SESSION['email']))
			header('location: view/edit_profil.php');
	}

	private function showDisconnect()
	{
		if (isset($_SESSION['email']))
			header('location: view/disconnect.php');
	}
}


$rooter = new Rooter();
$rooter->call();
