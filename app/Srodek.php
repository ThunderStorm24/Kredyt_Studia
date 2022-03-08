<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

$k = $_POST ['kwo'];
$l = $_POST ['lat'];
$p = $_POST ['pro'];

//Jesli cos bedzie puste, to przypisz bledy do tablicy message
if($k==null || $l==null || $p==null){
	$message [] = "<font color='red'><b>Uzupelnij wszystkie pola!!!</b><br>";
		if($k==null){$message [] = "Nie ustawiono kwoty! 💲<br>";}
		if($l==null){$message [] = "Nie ustawiono lat! 👴<br>";}
		if($p==null){$message [] = "Nie ustawiono procent! 📊<br>";}
	echo "</font>";
//Jesli nie bedzie puste, wykonaj wszystkie operacje
	}else{
		
$k = intval($k);
$l = intval($l);
$p = intval($p);
$lata=$l*12;

//Podatek 0% czy jest jakis?
if($p==0){
	$wynik=$k/$lata;
}else{
	$kwota=0;
	$kwota=$p/100*$k;
	$suma=$k+$kwota;
	$wynik=($suma)/$lata;
	}
}

include 'Kredyt.php';
