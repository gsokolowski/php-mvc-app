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
    
    protected $allowCollumns = [
        'name',
        'age',
        'date'
    ];

}

