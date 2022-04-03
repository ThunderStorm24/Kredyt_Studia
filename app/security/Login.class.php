<?php
namespace app\security;

use app\security\User;
use app\security\SecurityForm;

class Login{
	private $form;

public function __construct(){
	$this->form = new SecurityForm();
}

public function getParams(){
	$this->form->login=getFromRequest('login');
	$this->form->password = getFromRequest('password');
}

public function validate(){
	if ($this->form->login == "") {getMessages()->addError ( 'Nie podano loginu' );}
	if ($this->form->password == "") {getMessages()->addError ( 'Nie podano hasła' );}
}

public function loging(){
	if ($this->form->login == "admin" && $this->form->password == "admin") {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	$user = new User($this->form->login, 'admin');
	$_SESSION['user'] = serialize($user);
	}
	else if ($this->form->login == "user" && $this->form->password == "user") {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	$user = new User($this->form->login, 'user');
	$_SESSION['user'] = serialize($user);	
	}
	else
	{
		getMessages()->addError('Niepoprawny login lub hasło');
	}
	return ! getMessages()->isError();
}

public function doLogin(){
	$this->getParams();
	$this->validate();
		if ($this->loging()){
			header("Location: ".getConf()->app_url."/");
		} else {
			$this->generateView(); 
		}
}

public function doLogout(){
	if (session_status() == PHP_SESSION_NONE) {
			session_start();
	}
	session_destroy();
	$this->generateView();	
}

public function generateView(){
		
			getSmarty()->assign('page_title','Strona logowania');
			getSmarty()->assign('form',$this->form);
			getSmarty()->display('Logowanie.html');		
}
}
?>