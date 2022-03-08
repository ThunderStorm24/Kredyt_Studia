<html>
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
</head>
<body>

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form stacked">
<legend>Logowanie</legend>
login:<br>
<input type="text" name="login" value="<?php print($form['login']) ?>" /><br>
password:<br>
<input type="password" name="password" /><br>
<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</body>
</html>