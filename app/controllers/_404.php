<?php

namespace App\Controllers;
use App\Core\Controller;

class _404 extends Controller
{
    
    public function index() {
        echo "404 error - controller not found";
        $this->view('404');
    }
}
// call this class from App.php
