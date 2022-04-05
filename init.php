<?php
require_once 'core/Config.class.php';
$conf = new core\Config();
include 'config.php';

function &getConf(){ global $conf; return $conf; }

//Ładowanie definicji Messages i stworzenie obiektu msgs
require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){ global $msgs; return $msgs; }

//Przygotowanie Smarty, twórz tylko raz
$smarty = null;	
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){
		//Smarty i konfigurację i messages
		include_once 'lib/smarty/Smarty.class.php';
		$smarty = new Smarty();	
		//przypisanie konfiguracji a potem mess do smarty (getConf());(getMessages());
		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());
		//lokalizacja widoków (aby nie podawać ścieżek przy ich załączaniu)
		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php'; //Zaladowac i stworzyc loader klas (do automatycznego ladowania klas)
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/functions.php';

session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$action = getFromRequest('action');
