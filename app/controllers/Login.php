<?php 

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class Login extends Controller {

    public function index($a = '', $b = '', $c ='')  {

        $data = [];
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {        
            $user = new User();
            
            //show($_POST);
            // get user by email
            $row = $user->first($_POST); // first is defined in mvc main Controller need to receve and array so $_POST is and array
            //show($row);

            // verify user passord from db wirh user password passed in post
            if(!empty($row)) {
                if($row->password == $_POST['password'])
                {
                    // authenticate this user as it is a valicd email and password
                    $_SESSION['user'] = $row;
                    redirect('home');
                }
            }

            // if not redirected then $_POST data had unvalid email or password
            if(!empty($_POST)) {
                $user->errors['email'] = "This emial or password is not valid";
                $data['errors'] = $user->errors;        
            }

        }

        // echo 'This is Login/index page';
        $this->view('Login', $data);
    }
}