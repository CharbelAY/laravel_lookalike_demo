<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{
    public function login(){
        $this->setLayout("auth");
       return $this->render("login");
    }
    public function register(Request $request){
        $registerModel = new User();
        $this->setLayout("auth");
        if($request->isPost()){
            $registerModel->loadModel($request->getBody());
            if($registerModel->valid() && $registerModel->register()){
                return "Success";
            }
            return $this->render("register",["model"=>$registerModel]);
        }
        return $this->render("register",["model"=>$registerModel]);
    }
}