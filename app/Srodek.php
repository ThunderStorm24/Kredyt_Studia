<?php
$k = $_POST ['kwo'];
$l = $_POST ['lat'];
$p = $_POST ['pro'];

if($k==null || $l==null || $p==null){
	echo "Uzupelnij wszystkie pola!!!<br>";
	if($k==null){echo "Nie ustawiono kwoty!<br>";}
	if($l==null){echo "Nie ustawiono lat!<br>";}
	if($p==null){echo "Nie ustawiono procent!<br>";}
	}else{
$k = intval($k);
$l = intval($l);
$p = intval($p);

$lata=$l*12;
$kwota=0;

if($p==0){
	$wynik=$k/$lata;
}else{
$kwota=$p/100*$k;
$suma=$k+$kwota;
$wynik=($suma)/$lata;
}

}
include 'Kredyt.php';


?>
<br>
<a href="Kredyt.php">Powrot</a>