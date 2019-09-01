<?php

include_once '../DatabaseConnection.php';
include_once 'Apple.php';

class AppleCRUD
{//CRUD Operational Model Class


    public $conn; // Database connection

    /**
     * AppleCRUD constructor.
     */
    public function __construct()
    {
        $this->conn = DatabaseConnection::getInstance()->getConnection();
    }

    /**
     * Create apple record in the database
     * @param $apple
     * @return bool
     */
    public function insert($apple){

        $sql = "INSERT INTO apple (name, age) 
                    VALUES ('".$apple->getName()."', '".$apple->getAge()."')";

        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }


}