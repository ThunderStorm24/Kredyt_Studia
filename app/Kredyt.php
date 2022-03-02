<html>
<head>

</head>
<body>

<form action="Srodek.php" method="post">
<label>Kwota:</label>
<input type="Number" id="kwota" name="kwo" value="<?php echo $k; ?>"></input><br>
<label>Lata:</label>
<input type="Number" id="rok" name="lat" value="<?php echo $l; ?>"></input><br>
<label>Procenty:</label>
<input type="Number" id="procent" name="pro" value="<?php echo $p; ?>"></input>%<br>
<input type="submit" value="Oblicz"></input>
</form>

<?php
if(isset ($suma) && isset ($wynik) && isset ($lata) && isset ($kwota)){
echo 'Do splacenia w sumie: '.$suma.' zl<br>';
echo 'Rata co miesiąc: '.$wynik.' zl<br>'; 
echo 'Przez: '.$lata.' miesiecy<br>'; 
echo 'Podatek: '.$kwota.' zl';
}
?>


</body>
</html>