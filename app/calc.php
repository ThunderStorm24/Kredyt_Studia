<?php
require_once dirname(__FILE__).'/../config.php';

//załaduj kontroler
require_once $conf->root_path.'/app/Srodek.php';

//utwórz obiekt i użyj
$ctrl = new CalcCtrl();
$ctrl->process();


