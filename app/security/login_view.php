<html>
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
</head>
<body style="background-color: #99CCFF">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
<legend>Logowanie</legend>
login:<br>
<input type="text" name="login" value="<?php print($form['login']) ?>" /><br>
password:<br>
<input type="password" name="password" /><br>
<input type="submit" value="Zaloguj"/>
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		foreach ( $messages as $key => $msg ) {
			echo '<li><font color="red">'.$msg.'</font></li>';
		}
		echo '</ol>';
	}
}
?>

</body>
</html>