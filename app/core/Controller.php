<?php
/**
 * This is  class Controller from which all controllers (Home Products) will extend from
 */
namespace App\Core;

class Controller 
{

    public function view($name) {

        $fileName = '../app/views/' . $name . '.view.php';
        
        if (file_exists($fileName)) {
        } else {
            $fileName = '../app/views/404.view.php';
        }
        require_once $fileName;
    }
}