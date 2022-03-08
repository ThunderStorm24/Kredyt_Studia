<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Chroniona strona</title>
</head>
<body>
<a href="<?php print(_APP_ROOT); ?>/app/Kredyt.php" class="pure-button">Powrot do kalkulatora</a>
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>

<h3>To jest inna chroniona strona aplikacji internetowej</h3>
</body>
</html>