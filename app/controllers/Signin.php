<?php 

namespace App\Controllers;

use App\Core\Controller;

class Signin extends Controller {
    
    public function index() {
        $this->view('Signin');
    }
}