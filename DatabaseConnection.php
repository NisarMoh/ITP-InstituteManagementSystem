<?php


class DatabaseConnection
{//Singleton database connection

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "institute_management_system";

    private $connection;
    private static $instance; //The single instance

    /*
    Get an instance of the database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$instance) { // If no instance then make one
            self::$instance = new self();
        }

        return self::$instance;
    }

    /*
    Constructor
    */
    private function __construct() {

        // Create connection
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Check connection
        if($this->connection->connect_error) {
            die("<br>MySQL database connection failed: " . $this->connection->connect_error);
        }
    }

    /*
    Clone is empty to prevent duplication of connection
    */
    private function __clone() { }

    /*
    Get mysqli connection
    */
    public function getConnection() {
        return $this->connection;
    }
}