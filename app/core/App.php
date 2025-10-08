<?php

namespace App\Core;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class App {


    /** 
     * this is example of url that it will be used in the project $url = http://localhost/garbage/php-mvc/public/home/edit/1
     * home/edit/17 $url[0]/$url[1]/$url[2]
     * so you tell mvc which controller to run - home
     * so you tell mcv which method on this controller to run - edit
     * so you say which record id to update - 17
    **/
    private $controllerName = 'Home'; // default controllerName called controller class
    private $methodName = 'index'; // default $methodName called on controller class

    private function splitUrl() {
        // Get the URL from the query string or default to home
        $url = $_GET['url'] ?? 'home';
        $url = explode('/', trim($url, "/"));
        return $url;
    }

    public function loadController() {

        $url = $this->splitUrl();

        // Select controller as first parameter of the $url array
        $controllerPath = '../app/controllers/' . $this->controllerName . '.php';

        if (file_exists($controllerPath)) {

            require_once $controllerPath;
            $this->controllerName = ucfirst($url[0]);
            unset($url[0]); // remove it from $ure array so you have only parrams passed further
        } else {

            $controllerPath = '../app/controllers/_404.php';
            $this->controllerName = '_404';
            require_once $controllerPath;
        }
        

        $this->controllerName = '\\App\\Controllers\\' . $this->controllerName;
        $controller = new $this->controllerName(); //call Controller class Index Home Products _404


        // Select method of the controller method on a second parameter of the $url array
        if(!empty($url[1])) {
            if(method_exists($controller, $url[1])){ // if that method exists for this particular class
                $this->methodName = $url[1];
                unset($url[1]); // remove it from $ure array so you have only parrams passed further
            }
        }
        // calls controller and the method and an aray of parameters for controller method
        call_user_func_array([$controller, $this->methodName], $url); 
    }

}