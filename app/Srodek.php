<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

$k = $_POST ['kwo'];
$l = $_POST ['lat'];
$p = $_POST ['pro'];

//Jesli cos bedzie puste, to przypisz bledy do tablicy message (puste pola)
if($k==null || $l==null || $p==null){
	$message [] = "<font color='red'><b>PUSTE POLA!!!</b></font><br>";
		if($k==null){$message [] = "<font color='red'> Nie ustawiono kwoty! 💲 </font><br>";}
		if($l==null){$message [] = "<font color='red'> Nie ustawiono lat! 👴 </font><br>";}
		if($p==null){$message [] = "<font color='red'> Nie ustawiono procent! 📊 </font><br>";}
		include 'Kredyt.php';
		return false;
}

//Jesli nie bedzie puste, wykonaj wszystkie operacje	
$k = intval($k);
$l = intval($l);
$p = intval($p);
$lata=$l*12;

//Admin ma inne uprawnienia niz uzytkownik (kwota > 10000 lata > 10 i procenty > 50 w porownaniu do uzytkownika) (panel admina/uzytkownika)
if($k>10000 || $l>10 || $p>50){
	if($role!='admin'){
		$message [] = "<font color='red'><b>BLEDNE DANE DLA UZYTKOWNIKA!!!</b></font><br>";
		if($k>10000){$message [] = "<font color='red'> Nie jestes adminem, nie mozesz uzyc kwoty wiekszej niz 10 000! </font>";}
		if($l>10){$message [] = "<font color='red'> Nie jestes adminem, nie mozesz wziasc kredytu na wiecej niz 10 lat! </font>";}
		if($p>50){$message [] = "<font color='red'> Nie jestes adminem, nie mozesz wziasc kredytu na wiecej niz 50 % podatku </font>";}
		include 'Kredyt.php';
		return false;
	}
}

//Podatek 0% czy jest jakis? (Przeszlo cala walidacje, przechodzimy do programu)
	if($p==0){
		$wynik=$k/$lata;
		}else{
		$kwota=0;
		$kwota=$p/100*$k;
		$suma=$k+$kwota;
		$wynik=($suma)/$lata;
		}

include 'Kredyt.php';
