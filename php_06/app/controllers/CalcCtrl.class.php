<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form;   
	private $result;

	
	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	
	public function getParams(){
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}
	
	
	public function validate() {
		
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->z ))) {
			
			return false;
		}
		
		
		if ($this->form->x == "") {
			getMessages()->addError('Nie podano liczby 1');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano liczby 2');
		}
		if ($this->form->z == "") {
			getMessages()->addError('Nie podano liczby 3');
		}

		
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->x )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->z )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			
			$this->form->x = doubleval($this->form->x);
			$this->form->y = doubleval($this->form->y);
			$this->form->z = doubleval($this->form->z);
			getMessages()->addInfo('Parametry poprawne.');
				
			$this->form->y=$this->form->y/100;

			$wynik= $this->form->x * $this->form->y * $this->form->z/365;

			$this->result->result=round($wynik, 2);
			
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	
	public function generateView(){
				
		getSmarty()->assign('page_title','Kalkulator lokaty');
		
		getSmarty()->assign('page_header','Podaj dane');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
