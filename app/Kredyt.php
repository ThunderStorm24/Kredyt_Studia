<html>
<head>
<meta charset="utf-8" />
<title>Kredyt</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/Srodek.php" method="post">
<label>Kwota:</label>
<input type="Number" id="kwota" name="kwo" value="<?php echo $k; ?>" min="1"></input><br>
<label>Lata:</label>
<input type="Number" id="rok" name="lat" value="<?php echo $l; ?>" min="1" max="30"></input><br>
<label>Procenty:</label>
<input type="Number" id="procent" name="pro" value="<?php echo $p; ?>" min="0" max="100"></input>%<br>
<input type="submit" value="Oblicz"></input>
</form>

<?php
//Jeśli są błędy, wyświetl je
if(isset ($message)){
    foreach($message as $key => $msg){
    echo $msg;
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

</body>
</html> 