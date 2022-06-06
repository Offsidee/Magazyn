<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('mainpage'); 
App::getRouter()->setLoginRoute('accessdenied'); 

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('accessdenied', 'LoginCtrl');

Utils::addRoute('materialy', 'MaterialyCtrl');
Utils::addRoute('mainpage', 'MainPageCtrl');
Utils::addRoute('producenci', 'ProducenciCtrl');
Utils::addRoute('pracownicy', 'PracownicyCtrl');

Utils::addRoute('materialNew',     'MaterialEditCtrl',	['user','admin']);
Utils::addRoute('materialEdit',    'MaterialEditCtrl',	['user','admin']);
Utils::addRoute('materialSave',    'MaterialEditCtrl',	['user','admin']);
Utils::addRoute('materialDelete',  'MaterialEditCtrl',	['admin']);

Utils::addRoute('producentNew',     'ProducentEditCtrl',	['user','admin']);
Utils::addRoute('producentEdit',    'ProducentEditCtrl',	['user','admin']);
Utils::addRoute('producentSave',    'ProducentEditCtrl',	['user','admin']);
Utils::addRoute('producentDelete',  'ProducentEditCtrl',	['admin']);

Utils::addRoute('pracownikNew',     'PracownikEditCtrl',	['admin']);
Utils::addRoute('pracownikEdit',    'PracownikEditCtrl',	['admin']);
Utils::addRoute('pracownikSave',    'PracownikEditCtrl',	['admin']);
Utils::addRoute('pracownikDelete',  'PracownikEditCtrl',	['admin']);






