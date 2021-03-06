<?php


namespace app\core;


class Controller
{

    public string $layout = "auth";

    public function setLayout($layout){
        $this->layout=$layout;
    }
    public function render($view,$params=[]){
        return Application::$app->router->render_view($view,$params);
    }

}