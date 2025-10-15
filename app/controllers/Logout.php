<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class Logout extends Controller {

    public function index()  {

        if(!empty($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        redirect('home');
    }
}