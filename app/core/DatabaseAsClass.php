<?php

namespace App\Core;

class DatabaseAsClass {

    private $dbh;
    private $stmt;

    // connect to the database
    public function connect() {
        $this->dbh = new \PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        echo "Database connection successful";
    }

    // prepare the query
    public function query($query, $data = []) {
        $this->stmt = $this->dbh->prepare($query);
        return $this;
    }

    // execute the query
    public function execute() {
        return $this->stmt->execute();
    }

    // fetch all the data from the database
    public function fetchAll() {
        $check = $this->execute();
        
        if($check) {
            $result = $this->stmt->fetchAll(\PDO::FETCH_OBJ); // return all the data from the database as an object
        } else {
            $result = 'Query failed';
        }
        return  $result; 
    }

    // fetch a single row from the database
    public function single() {
        $check = $this->execute();

        if($check) {
            $result = $this->stmt->fetch(\PDO::FETCH_OBJ); // return a single row from the database as an object
        } else {
            $result = 'Query failed';
        }
        return  $result; 
    }

    // count the number of rows in the database
    public function rowCount() {
        return $this->stmt->rowCount();
    }

    // get the last inserted id from the database
    public function lastInsertId() {
        return $this->dbh->lastInsertId();
    }

}

// $db = new Database();
// $db->connect();
// $query = "SELECT * FROM users";
// $db->query( $query, [] );
// $check = $db->execute();
// $result = $db->fetchAll();
// show($result);





