<?php
require_once 'init.php';
getConf()->login_action = 'login';

// Oraz wykonanie akcji:
switch ($action) {
	default : // 'Kredyt - view'
	control('app\\controllers', 'SrodekCtrl','generateView', ['user','admin']);
	break;
	case 'login': // logowanie
		control('app\\security', 'Login',	'doLogin');
	break;
	case 'logout' : // akcja NIEPUBLICZNA
		control('app\\security' , 'Login',	'doLogout',		['user','admin']);
	break;
	case 'Kredyt' : //Wykonanie obliczeń oraz wyświetlenie widoku
		control(null, 'SrodekCtrl',	'process',		['user','admin']);
	break;
    }