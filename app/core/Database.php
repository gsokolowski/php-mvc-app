<?php

namespace App\Core;

trait Database {

    private $con;
    private $stm;

    // connect to the database
    public function connect() {
        $this->con = new \PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        //echo "Database connection successful";
    }

    // execute sql query and return data as object
    public function executeQuery($sql, $data = []) {

        $this->connect();
        $this->stm = $this->con->prepare($sql);
        show($this->stm);
        $check = $this->stm->execute($data); // passs data for sql placeholders
        if($check) {
            $result = $this->stm->fetchAll(\PDO::FETCH_OBJ); // return all the data from the database as an object
            return  $result;
        }
        return false;
    }

    // execute sql query and return only one row of data as object
    public function getRow($sql, $data = []) {

        $this->connect();
        $this->stm = $this->con->prepare($sql);
        
        $check = $this->stm->execute($data);
        if($check) {
            $result = $this->stm->fetchAll(\PDO::FETCH_OBJ); // return all the data from the database as an object
            return  $result[0];
        }
        return false;
    }
    public function lastInsertId() {
        return $this->con->lastInsertId();
    }

}

