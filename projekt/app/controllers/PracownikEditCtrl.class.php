<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PracownikEditForm;

class PracownikEditCtrl {

    private $form; 

    public function __construct() {
       
        $this->form = new PracownikEditForm();
    }

   
    public function validateSave() {
       
        $this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędne wywołanie aplikacji');
        $this->form->haslo = ParamUtils::getFromRequest('haslo', true, 'Błędne wywołanie aplikacji');
        $this->form->rola = ParamUtils::getFromRequest('rola', true, 'Błędne wywołanie aplikacji');
        $this->form->imie = ParamUtils::getFromRequest('imie', true, 'Błędne wywołanie aplikacji');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko', true, 'Błędne wywołanie aplikacji');
        

        if (App::getMessages()->isError())
            return false;

        
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->haslo))) {
            Utils::addErrorMessage('Wprowadź haslo');
        }
        if (empty(trim($this->form->rola))) {
            Utils::addErrorMessage('Wprowadź rolę');
        }
        if (empty(trim($this->form->imie))) {
            Utils::addErrorMessage('Wprowadź imie');
        }
        if (empty(trim($this->form->nazwisko))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }

        return !App::getMessages()->isError();

       

        
    }
    
    public function validateEdit() {
      
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_pracownikNew() {
        $this->generateView();
    }

   
    public function action_pracownikEdit() {
       
        if ($this->validateEdit()) {
            try {
               
                $record = App::getDB()->get("pracownik", "*", [
                    "id" => $this->form->id
                ]);
               
                $this->form->id = $record['id'];
                $this->form->ulica = $record['login'];
                $this->form->miasto = $record['haslo'];
                $this->form->telefon = $record['rola'];
                $this->form->mail = $record['imie'];
                $this->form->nazwa = $record['nazwisko'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

       
        $this->generateView();
    }

    public function action_pracownikDelete() {
        
        if ($this->validateEdit()) {

            try {
                
                App::getDB()->delete("pracownik", [
                    "id" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        
        App::getRouter()->forwardTo('pracownicy');
    }

    public function action_pracownikSave() {

        
        if ($this->validateSave()) {
            
            try {

               
                if ($this->form->id == '') {
                    
                    $count = App::getDB()->count("pracownik");
                    if ($count <= 6) {
                        App::getDB()->insert("pracownik", [
                            "login" => $this->form->login,
                            "haslo" => $this->form->haslo,
                            "rola" => $this->form->rola,
                            "imie" => $this->form->imie,
                            "nazwisko" => $this->form->nazwisko
                        ]);
                    } else { 
                       
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); 
                        exit(); 
                    }
                } else {
                   
                    App::getDB()->update("pracownik", [
                        "login" => $this->form->login,
                        "haslo" => $this->form->haslo,
                        "rola" => $this->form->rola,
                        "imie" => $this->form->imie,
                        "nazwisko" => $this->form->nazwisko,
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

            
            App::getRouter()->forwardTo('pracownicy');
        } else {
           
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('PracownikEdit.tpl');
    }

}
