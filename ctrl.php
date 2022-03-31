<?php
require_once 'init.php';

// Oraz wykonanie akcji:
switch ($action) {
	default : // 'Kredyt - view'
		//Wczytanie srodka programu
		$ctrl = new app\controllers\SrodekCtrl();
		//Sprawdzenie czy zalogowany
		include_once $conf->root_path.'/app/security/check.php';
		//Funkcja generująca widok
		$ctrl->generateView ();
	break;
	case 'Kredyt' :
		$ctrl = new app\controllers\SrodekCtrl();
		$ctrl->process ();
	break;
    }