<?php

namespace app\controllers;

use app\controllers\CalcForm;

class SrodekCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)

	public function __construct(){
		$this->form = new CalcForm();
	}

//Porbanie parametrow z formularza
public function getParams(){
	$this->form->k = $_POST ['kwo'];
	$this->form->l = $_POST ['lat'];
	$this->form->p = $_POST ['pro'];
	$this->validate();
}

//Jesli cos bedzie puste, to przypisz bledy do tablicy message (puste pola)
public function validate() {
if($this->form->k==null || $this->form->l==null || $this->form->p==null){
		if($this->form->k==null){getMessages()->addError('Nie ustawiono kwoty! 💲');}
		if($this->form->l==null){getMessages()->addError('Nie ustawiono lat! 👴 ');}
		if($this->form->p==null){getMessages()->addError('Nie ustawiono procent! 📊');}
}

}
//Jesli nie bedzie puste, wykonaj wszystkie operacje	
public function process(){
	$this->getParams();
	$this->form->k = intval($this->form->k);
	$this->form->l = intval($this->form->l);
	$this->form->p = intval($this->form->p);
	$this->form->lata=($this->form->l)*12;
	if($this->form->lata==0){$this->form->lata=12;}

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
		$this->form->wynik = number_format((float) $this->form->wynik, 2, '.', '');
		$this->generateView();
}

public function generateView(){
		global $conf;
		
		getSmarty()->assign('page_title','Kredyt');
		getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		
		getSmarty()->display('Kredyt.html');
	}
}