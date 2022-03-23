<?php
require_once dirname(__FILE__).'/../../config.php';

function getParamsLogin(&$form){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['password'] = isset ($_REQUEST ['password']) ? $_REQUEST ['password'] : null;
}
function validateLogin(&$form,&$messages){
	
if ( ! (isset($form['login']) && isset($form['password']))) {
		return false;
	}
	if ( $form['login'] == "") {
		$messages [] = 'pole login jest puste!';
	}
	if ( $form['password'] == "") {
		$messages [] = 'pole haslo jest puste!';
	}
	if (count ( $messages ) > 0) return false;
	
	
	if ($form['login'] == "admin" && $form['password'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['password'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub haslo';
	return false; 
}

$form = array();
$messages = array();

getParamsLogin($form);

if (!validateLogin($form,$messages)) {
	include $conf->root_path.'/app/security/login_view.php';
} else { 
	header("Location: ".$conf->app_url);

}
?>