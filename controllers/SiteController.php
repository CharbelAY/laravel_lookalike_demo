<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home(){
        $this->setLayout("main");
        $params = [
            "name"=>"Charbelino",
        ];
        return  $this->render("home",$params);
    }

    public function handle_contact(Request $request){
        $this->setLayout("main");
        $samir = $request->getBody();
        var_dump($samir);
    }

    public function contact(){
        $this->setLayout("main");
        return $this->render("contact");
    }
}