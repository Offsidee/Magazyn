<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\MaterialSearchForm;
use core\ParamUtils;


class MaterialyCtrl {

    private $form; 
    private $records; 

    public function __construct() {
       
        $this->form = new MaterialSearchForm();
    }
    
    public function action_materialy() {
		        
               
        $search_params = []; 
       
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa');

        if (isset($this->form->nazwa) || (strlen($this->form->nazwa)>0) ) {
            
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
            $this->records = App::getDB()->select("material", [
                "id",
                "typ",
                "ilosc",
                "dlugosc",
                "nazwa",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

       
        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('materialy', $this->records);  
        App::getSmarty()->display('Materialy.tpl');
    }

}
        
        
    
    

