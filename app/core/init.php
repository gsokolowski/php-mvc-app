<?php

spl_autoload_register(function($classPath){
    
    $parts = explode("\\", $classPath); // Split the string by backslash
    $className = end($parts); // Get the last element
    $filePath = "../app/models/".ucfirst($className).".php";
    require_once $filePath;
});
require_once 'config.php';
require_once 'functions.php';
require_once 'Database.php'; // class
require_once 'Model.php'; // class
require_once 'Controller.php'; // class
require_once 'App.php';
