<html>
<head>
<meta charset="utf-8" />
<title>Kredyt</title>
</head>
<body style="background-color: #99CCFF">

<?php echo "<p style='text-align: right'> Jesteś zalogowany jako: <b>".$role."</b>"; ?><br>
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a></p>

<div style="background-color: #FFFFFF">
<h1>Kredyt - kalkulator</h1>
<form action="<?php print(_APP_URL);?>/app/Srodek.php" method="post">
<label>Kwota:</label>
<input type="Number" id="kwota" name="kwo" value="<?php echo $k; ?>" min="1" placeholder="1-ile chcesz"></input><br>
<label>Lata:</label>
<input type="Number" id="rok" name="lat" value="<?php echo $l; ?>" min="1" max="30" placeholder="1-30"></input><br>
<label>Procenty:</label>
<input type="Number" id="procent" name="pro" value="<?php echo $p; ?>" min="0" max="100" placeholder="0-100"></input>%<br>
<input type="submit" value="Oblicz"></input>
</form>

<?php
//Jeśli są błędy, wyświetl je
if(isset ($message)){
    foreach($message as $key => $msg){
    echo "<li>".$msg."</li>";
    }
}
//Jesli jest jakis podatek
if(isset ($suma) && isset ($wynik) && isset ($lata) && isset ($kwota)){
echo 'Do splacenia w sumie: '.$suma.' zl<br>';
echo 'Rata co miesiąc: '.$wynik.' zl<br>'; 
echo 'Przez: '.$lata.' miesiecy<br>'; 
echo 'Podatek: '.$kwota.' zl';
}
//Jesli nie ma podatku
if(isset($wynik) && isset($lata) && !isset($suma) && !isset($kwota)){
echo 'Do splacenia w sumie: '.$k.' zl<br>';   
echo 'Rata co miesiąc: '.$wynik.' zl<br>';  
echo 'Przez: '.$lata.' miesiecy<br>'; 
echo 'BRAK PODATKU';
}
?>

<br><br><a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php">Kolejna chroniona strona</a>
</div>

</body>
</html> 