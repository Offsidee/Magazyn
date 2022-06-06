<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\MaterialEditForm;

class MaterialEditCtrl {

    private $form; 

    public function __construct() {
        
        $this->form = new MaterialEditForm();
    }

    public function validateSave() {
        
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->typ = ParamUtils::getFromRequest('typ', true, 'Błędne wywołanie aplikacji');
        $this->form->ilosc = ParamUtils::getFromRequest('ilosc', true, 'Błędne wywołanie aplikacji');
        $this->form->dlugosc = ParamUtils::getFromRequest('dlugosc', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa', true, 'Błędne wywołanie aplikacji');
        

        if (App::getMessages()->isError())
            return false;

       
        if (empty(trim($this->form->typ))) {
            Utils::addErrorMessage('Wprowadź typ');
        }
        if (empty(trim($this->form->ilosc))) {
            Utils::addErrorMessage('Wprowadź ilosc');
        }
        if (empty(trim($this->form->dlugosc))) {
            Utils::addErrorMessage('Wprowadź dlugosc');
        }
        if (empty(trim($this->form->nazwa))) {
            Utils::addErrorMessage('Wprowadź nazwę');
        }
            return !App::getMessages()->isError();
        
            

       

        
    }
    
    public function validateEdit() {
       
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_materialNew() {
        $this->generateView();
    }

   
    public function action_materialEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
               
                $record = App::getDB()->get("material", "*", [
                    "id" => $this->form->id
                ]);
               
                $this->form->id = $record['id'];
                $this->form->typ = $record['typ'];
                $this->form->ilosc = $record['ilosc'];
                $this->form->dlugosc = $record['dlugosc'];
                $this->form->nazwa = $record['nazwa'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

    
        $this->generateView();
    }

    public function action_materialDelete() {
       
        if ($this->validateEdit()) {

            try {
             
                App::getDB()->delete("material", [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

       
        App::getRouter()->forwardTo('materialy');
    }

    public function action_materialSave() {

       
        if ($this->validateSave()) {
           

            

            try {

                
                if ($this->form->id == '') {
                   
                    $count = App::getDB()->count("material");
                    if ($count <= 6) {
                        App::getDB()->insert("material", [
                            "typ" => $this->form->typ,
                            "ilosc" => $this->form->ilosc,
                            "dlugosc" => $this->form->dlugosc,
                            "nazwa" => $this->form->nazwa
                        ]);
                    } else { 
                        
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); 
                        exit(); 
                    }
                } else {
                   
                    App::getDB()->update("material", [
                        "typ" => $this->form->typ,
                        "ilosc" => $this->form->ilosc,
                        "dlugosc" => $this->form->dlugosc,
                        "nazwa" => $this->form->nazwa
                            ], [
                        "id" => $this->form->id
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

           
            App::getRouter()->forwardTo('materialy');
        } else {
            
            $this->generateView();
            
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('MaterialEdit.tpl');
    }

}
