<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Logowanie</title>
<meta name="Description" content="Opis strony w tym miejscu. Pojawi się w wynikach Google."/>
<meta name="Keywords" content="słowa kluczowe opisujące Twoją stronę">
<link rel="stylesheet" type="text/css" href="<?php print(_APP_ROOT); ?>/app/css/stylelogin.css" />
</head>

<body>
   <div id="wrapper">
   
		 <div id="content">
		 
            <div id="main">
			
			<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
				<h1>Logowanie</h1><br>
					<b>login:</b><br>
					<input type="text" name="login" value="<?php print($form['login']) ?>" /><br><br>
			
					<b>password:</b><br>
					<input type="password" name="password" /><br><br>

					<input type="submit" value="Zaloguj"/>
			</form>

				<div id="bledy">
				
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

				</div>

            </div>
			
		 </div>
		 
		 <div id="copyright">
			&copy; Wszelkie prawa zastrzeżone. <br/> 
            Projekt: <a href="http://www.templatki.net">Darmowe Szablony Stron</a>			    
	     </div>

   </div>
   
</body>
</html>
