<?php

class dbconn
{

	private $host;
	private $username;
	private $password;
	private $db_name;

	protected function connection()
	{
	$this->host="localhost";
	$this->username="root";
	$this->password="";
	$this->db_name="oop1";

		$conn= new mysqli($this->host,$this->username,$this->password,$this->db_name);
		return $conn;
	}
	
}
	

?>