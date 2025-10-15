<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class Signin extends Controller {
    
    public function index() {

        // show($_POST);

        $data = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = new User();
            
            if($user->validate($_POST)) {
                $user->insert($_POST); // insert is defined in mvc main Controller
                $row = $user->first($_POST);  // take it out fo db and jest ass session
                $_SESSION['user'] = $row;
                redirect('home');
            }
            // if not redirected then $_POST data had unvalid email or password
            $data['errors'] = $user->errors;
        }

        // show($user);
        $this->view('Signin', $data);
    }
}