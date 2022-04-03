<?php
use app\security\User;	

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;

if ( ! (isset($user) && isset($user->login) && isset($user->role)) ){
	$ctrl = new app\security\Login();
	$ctrl->generateView();
	exit();
}

?>
