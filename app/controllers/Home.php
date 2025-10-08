<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class Home extends Controller
{
    
    public function index($a = '', $b = '', $c ='') {

        echo 'Method index was called';
        
        show($a);
        show($b);
        show($c);

        $model = new User;

        // find all from table
        $result = $model->findAll();
        show($result);

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


        echo "home controller loaded and method index called --";
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
