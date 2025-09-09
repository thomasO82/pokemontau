<?php

class Router {
    public function start(){
        try {
            $uri = $_SERVER['REQUEST_URI']; 
            if ($uri != '/') {
                $controller = ucfirst(explode('/',$uri)[1].'Controller'); 
                if (class_exists($controller)) { 
                    $instanceController = new $controller();
                    $instanceController->index();
                }else{
                    echo '404';
                }
            }else{
                $instanceController = new MainController();
                $instanceController->index();
            }
           
        } catch (Exception $err) {
            echo $err->getMessage();
            die;
        }
    }
}

