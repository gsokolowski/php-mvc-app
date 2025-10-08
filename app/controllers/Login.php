<?php 

namespace App\Controllers;

use App\Core\Controller;

class Login extends Controller {

    public function index($a = '', $b = '', $c ='')  {

        // echo 'This is Login/index page';
        $this->view('Login');
    }
}