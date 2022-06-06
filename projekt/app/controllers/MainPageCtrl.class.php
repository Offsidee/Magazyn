<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class MainPageCtrl {
    
    public function action_mainpage() {
		        
        
            
        App::getSmarty()->display("MainPage.tpl");
        
    }
    
}
