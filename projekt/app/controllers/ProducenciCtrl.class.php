<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\ProducentSearchForm;


class ProducenciCtrl {

    private $form; 
    private $records; 

    public function __construct() {
       
        $this->form = new ProducentSearchForm();
    }
    
    public function action_producenci() {
		        
               
        $search_params = []; 

        $this->form->nazwa = ParamUtils::getFromRequest('nazwa');

        if (isset($this->form->nazwa) || (strlen($this->form->nazwa) > 0)) {

            $search_params['nazwa[~]'] = $this->form->nazwa . '%'; 
        }

        
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
       
        $where ["ORDER"] = "nazwa";
       

        try {
            $this->records = App::getDB()->select("producent", [
                "id",
                "ulica",
                "miasto",
                "telefon",
                "mail",
                "nazwa",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

      
        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('producenci', $this->records);  
        App::getSmarty()->display('Producenci.tpl');
    }

}
        
        
    
    

