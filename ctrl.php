<?php
require_once 'init.php';

// Oraz wykonanie akcji:
switch ($action) {
	default : // 'Kredyt - view'
		//Sprawdzenie czy zalogowany
		include 'check.php';
		//Wczytanie srodka programu
		$ctrl = new app\controllers\SrodekCtrl();
		//Funkcja generująca widok
		$ctrl->generateView ();
	break;
	case 'login':
		$ctrl = new app\security\Login();
		$ctrl->doLogin();
	break;
	case 'logout' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\security\Login();
		$ctrl->doLogout();
	break;
	case 'Kredyt' :
		$ctrl = new app\controllers\SrodekCtrl();
		$ctrl->process ();
	break;
    }