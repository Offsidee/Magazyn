<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\ProducentEditForm;

class ProducentEditCtrl {

    private $form; 

    public function __construct() {
        
        $this->form = new ProducentEditForm();
    }

    
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->ulica = ParamUtils::getFromRequest('ulica', true, 'Błędne wywołanie aplikacji');
        $this->form->miasto = ParamUtils::getFromRequest('miasto', true, 'Błędne wywołanie aplikacji');
        $this->form->telefon = ParamUtils::getFromRequest('telefon', true, 'Błędne wywołanie aplikacji');
        $this->form->mail = ParamUtils::getFromRequest('mail', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwa = ParamUtils::getFromRequest('nazwa', true, 'Błędne wywołanie aplikacji');
        

        if (App::getMessages()->isError())
            return false;

        
        if (empty(trim($this->form->ulica))) {
            Utils::addErrorMessage('Wprowadź ulicę');
        }
        if (empty(trim($this->form->miasto))) {
            Utils::addErrorMessage('Wprowadź miasto');
        }
        if (empty(trim($this->form->telefon))) {
            Utils::addErrorMessage('Wprowadź telefon');
        }
        if (empty(trim($this->form->mail))) {
            Utils::addErrorMessage('Wprowadź mail');
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

    public function action_producentNew() {
        $this->generateView();
    }

   
    public function action_producentEdit() {
        
        if ($this->validateEdit()) {
            try {
               
                $record = App::getDB()->get("producent", "*", [
                    "id" => $this->form->id
                ]);
                
                $this->form->id = $record['id'];
                $this->form->ulica = $record['ulica'];
                $this->form->miasto = $record['miasto'];
                $this->form->telefon = $record['telefon'];
                $this->form->mail = $record['mail'];
                $this->form->nazwa = $record['nazwa'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        
        $this->generateView();
    }

    public function action_producentDelete() {
        
        if ($this->validateEdit()) {

            try {
                
                App::getDB()->delete("producent", [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        
        App::getRouter()->forwardTo('producenci');
    }

    public function action_producentSave() {

        
        if ($this->validateSave()) {
           
            try {

               
                if ($this->form->id == '') {
                    
                    $count = App::getDB()->count("producent");
                    if ($count <= 6) {
                        App::getDB()->insert("producent", [
                            "ulica" => $this->form->ulica,
                            "miasto" => $this->form->miasto,
                            "telefon" => $this->form->telefon,
                            "mail" => $this->form->mail,
                            "nazwa" => $this->form->nazwa
                        ]);
                    } else { 
                        
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); 
                        exit(); 
                    }
                } else {
                   
                    App::getDB()->update("producent", [
                        "ulica" => $this->form->ulica,
                        "miasto" => $this->form->miasto,
                        "telefon" => $this->form->telefon,
                        "nazwa" => $this->form->nazwa,
                        "mail" => $this->form->mail,
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

            
            App::getRouter()->forwardTo('producenci');
        } else {
           
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('ProducentEdit.tpl');
    }

}
