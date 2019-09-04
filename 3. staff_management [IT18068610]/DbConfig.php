<?php
// filename include/connection.php
class BB
{
    private $DB_SERVER = "localhost";
    private $DB_USERNAME = "root";
    private $DB_PASSWORD = "";
    private $DB_DATABASE = "oop1";

    public function DBconnection()
    {
        static $conn;
        if ($conn === NULL) {
            $conn = new mysqli($this->DB_SERVER, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_DATABASE);
        }
        return $conn;
    }
}
