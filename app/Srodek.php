<?php
require_once dirname(__FILE__).'/../config.php';
include $conf->root_path.'/app/security/check.php';
require_once $conf->root_path.'/app/CalcForm.class.php';

class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)

	public function __construct(){
		$this->form = new CalcForm();
	}

//Porbanie parametrow z formularza
public function getParams(){
	$this->form->k = $_POST ['kwo'];
	$this->form->l = $_POST ['lat'];
	$this->form->p = $_POST ['pro'];
}

//Jesli cos bedzie puste, to przypisz bledy do tablicy message (puste pola)
public function validate() {
if($this->form->k==null || $this->form->l==null || $this->form->p==null){
	$message [] = "<font color='red'><b>PUSTE POLA!!!</b></font><br>";
		if($this->form->k==null){echo "<font color='red'> Nie ustawiono kwoty! 💲 </font><br>";}
		if($this->form->l==null){echo "<font color='red'> Nie ustawiono lat! 👴 </font><br>";}
		if($this->form->p==null){echo "<font color='red'> Nie ustawiono procent! 📊 </font><br>";}
}else{
	$this->process();
}

}
//Jesli nie bedzie puste, wykonaj wszystkie operacje	
public function process(){
	$this->form->k = intval($this->form->k);
	$this->form->l = intval($this->form->l);
	$this->form->p = intval($this->form->p);
	$this->form->lata=$this->form->l*12;

//Podatek 0% czy jest jakis? (Przeszlo cala walidacje, przechodzimy do programu)
	if($this->form->p==0){
		//Podatek 0%
		$this->form->wynik=$this->form->k/$this->form->lata;
		}else{
		//Podatek 1-100%
		$this->form->kwota=0;
		$this->form->kwota=$this->form->p/100*$this->form->k;
		$this->form->suma=$this->form->k+$this->form->kwota;
		$this->form->wynik=($this->form->suma)/$this->form->lata;
		}
}

public function display(){
//Jesli jest jakis podatek
if(isset ($this->form->suma) && isset ($this->form->wynik) && isset ($this->form->lata) && isset ($this->form->kwota)){
echo 'Do splacenia w sumie: '.$this->form->suma.' zl<br>';
echo 'Rata co miesiąc: '.$this->form->wynik.' zl przez: '.$this->form->lata.' miesiecy<br>'; 
echo 'Podatek: '.$this->form->kwota.' zl';
}
//Jesli nie ma podatku
if(isset($this->form->wynik) && isset($this->form->lata) && !isset($this->form->suma) && !isset($this->form->kwota)){
echo 'Do splacenia w sumie: '.$this->form->k.' zl<br>';   
echo 'Rata co miesiąc: '.$this->form->wynik.' zl przez: '.$this->form->lata.' miesiecy<br>';  
echo 'BRAK PODATKU';
}
}
}