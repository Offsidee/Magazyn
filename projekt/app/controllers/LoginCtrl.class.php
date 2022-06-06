<?php 
namespace app\controllers;

use app\forms\LoginForm;
 use core\App; 
 use core\Utils;
  use core\RoleUtils;
   use core\ParamUtils;
    use core\Router;
    use core\Messages;
use PDOException;

    class LoginCtrl { private $form; public $rola; public function __construct() { $this ->form=new LoginForm();
    }

    public function validate() {

    $this ->form ->login=ParamUtils::getFromRequest('login');
    $this ->form ->haslo=ParamUtils::getFromRequest('haslo');


    if ( !isset($this -> form -> login)) return false;

    if (empty($this -> form -> login)) {
    Utils::addErrorMessage('Nie podano loginu');
    }

    if (empty($this -> form -> haslo)) {
    Utils::addErrorMessage('Nie podano hasła');
    }

    if (App::getMessages() -> isError()) return false;

    try {

    $this ->record=App::getDB() -> get("pracownik", ["login", "haslo", "rola"],
    ["login"=> $this -> form -> login,
    "haslo"=> $this -> form -> haslo,
    ]);

    $this ->rola=$this ->record["rola"];

    }

    catch (PDOException $e) {
    Utils::addErrorMessage("Nie znaleziono użytkownika!");
    }

    if ($this -> record==null) {
    Utils::addErrorMessage("Użytkownik nie istnieje");
    }

    return !App::getMessages() ->isError();
    }


    public function action_login() {
    if ($this -> validate()) {
    RoleUtils::addRole($this -> rola);
    Utils::addErrorMessage('Poprawnie zalogowano do systemu');
    App::getRouter() -> redirectTo("mainpage");
    }

    else {

    $this ->generateView();
    }
    }

    public function action_accessdenied() {

    Utils::addErrorMessage('Nie posiadasz uprawnień!');
    App::getRouter() -> redirectTo("login");

    }

    public function action_logout() {
        Utils::addErrorMessage("Wylogowano z systemu");

    session_destroy();

    App::getRouter() -> redirectTo('login');
    }

    public function generateView() {
    App::getSmarty() -> assign('form', $this -> form);
    App::getSmarty() -> display('Login.tpl');
    }
    }