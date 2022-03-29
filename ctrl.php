<?php
require_once dirname(__FILE__).'/config.php';



// Pobranie nazwy akcji:
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

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