<?php

namespace App\Models;

use App\Core\Model;

class User
{

    use Model; // trait Model

    // Model Properties are defined here
    protected $table = 'users';
    protected $limit = 10;
    protected $offset = 0;
    protected $orderColumn = 'id';
    protected $orderType = 'asc';
    public $errors = [];
    
    protected $allowCollumns = [
        'name',
        'age',
        'date',
        'email',
        'password',
        'terms'
    ];

    public function validate($data) {
        $this->errors = [];
        
        if(empty($data['email'])) {

            $this->errors['email'] =  "Email is required";
        } else {
            
            if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)) {
                $this->errors['email'] = "This emial is not valid";
            }
        }


        if(empty($data['password'])) {
            
            $this->errors['password'] =  "Password is required";
        } else {

            if(strlen($data['password']) < 5) {
                $this->errors['password'] =  "Password requiers 6 characters";
            }
        }

        if(!isset($data['terms'])) {
            $this->errors['terms'] = "Please accept Terms and Conditions";
        }
        
        if(empty($this->errors)) {
            return true;
        }
        return false;
    }
}

