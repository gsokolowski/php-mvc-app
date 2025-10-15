<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Log; //trait loaded by composer.json autoload 
use App\Models\User;


class Home extends Controller
{
    use Log; //trait

    public function index($a = '', $b = '', $c ='') {

        $arr[] = 'My logger is now ready  9999';
        $arr[] = 'My logger is now ready  10000';
        $this->logMe('Home',$arr); // from Trait Log{}

        //echo 'Method index was called';
        

        // eee
        //show($_SESSION);
        //echo $_SESSION['user']->email;
        // $user = $_SESSION['user'];
        // echo $user->email;

        // show($a);
        // show($b);
        // show($c);

        // $model = new User;
        // $result = $model->findAll();
        // show($result);

        // testing where() model function
        // $data['id'] = 1;
        // $dataNot['name'] = 'Dominika';
        // $result = $model->where($data,$dataNot);
        // show($result);

        // testing first() model function
        // $data['id'] = 1;
        // $dataNot['name'] = 'Dominika';
        // $result = $model->first($data,$dataNot);
        // show($result);

        // testing insert() model function
        // $data['name'] = 'Simone';
        // $data['age'] = '18';
        // $data['date'] = date('Y-m-d');
        // $result = $model->insert($data);
        // show($result);

        // testing update() model function
        // $data['name'] = 'Mariane';
        // $data['age'] = '111';
        // $result = $model->update(3,$data);
        // show($result);

        // testing delete
        // $result = $model->delete(15);
        // show($result);


        //echo "home controller loaded and method index called --";
        $this->view('Home');
    }

    public function edit($a = '', $b = '', $c ='') {
        echo 'Method edit was called';

        show($a);
        show($b);
        show($c);
        $model = new User;
        

    }
}
// call this class from App.php
