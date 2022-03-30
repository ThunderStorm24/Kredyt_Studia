<?php
require_once 'init.php';

// Oraz wykonanie akcji:
switch ($action) {
	default : // 'Kredyt - view'
		//Wczytanie srodka programu
		include_once $conf->root_path.'/app/controllers/Srodek.php';
		//Sprawdzenie czy zalogowany
		include_once $conf->root_path.'/app/security/check.php';
		//Funkcja generująca widok
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'Kredyt' :
		include_once $conf->root_path.'/app/controllers/Srodek.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
    }