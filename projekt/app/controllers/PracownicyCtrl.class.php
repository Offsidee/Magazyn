<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\PracownikSearchForm;
use core\ParamUtils;


class PracownicyCtrl {

    private $form; 
    private $records; 

    public function __construct() {
       
        $this->form = new PracownikSearchForm();
    }
    
    public function action_pracownicy() {
		        
               
        $search_params = [];
       
        $this->form->nazwa = ParamUtils::getFromRequest('nazwisko');

        if (isset($this->form->nazwisko) || (strlen($this->form->nazwisko)>0) ) {
            
            $search_params['nazwisko[~]'] = $this->form->nazwisko . '%'; 
        }
        
        
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "nazwisko";
        

        try {
            $this->records = App::getDB()->select("pracownik", [
                "id",
                "login",
                "haslo",
                "rola",
                "imie",
                "nazwisko",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('pracownicy', $this->records);  
        App::getSmarty()->display('Pracownicy.tpl');
    }

}