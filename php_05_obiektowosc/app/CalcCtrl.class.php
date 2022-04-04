<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;  
	private $form;  
	private $result; 

	
	public function __construct(){
		
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	
	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
	}
	

	public function validate() {
	
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->z ))) {
			
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano liczby 1');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano liczby 2');
		}
	
		if ($this->form->z == "") {
			$this->msgs->addError('Nie podano liczby 3');
		}
		
		
		if (! $this->msgs->isError()) {
			
			
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->z )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			
			$this->form->x = doubleval($this->form->x);
			$this->form->y = doubleval($this->form->y);
			$this->form->z = doubleval($this->form->z);
			$this->msgs->addInfo('Parametry poprawne.');
				
			

			$this->form->y=$this->form->y/100;

			$wynik= $this->form->x * $this->form->y * $this->form->z/365;

			$this->result=round($wynik, 2);
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		$smarty->assign('page_title','Kalkulator lokaty');
		$smarty->assign('page_header','Podaj dane');		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
