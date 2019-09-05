<?php
	require 'config.php';
 
	class db_class{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
 
		public function save($username, $password, $firstname, $lastname, $gender, $age, $contactno, $email, $address){
			
			
			$stmt = $this->conn->prepare("INSERT INTO `student` (username, password, firstname, lastname, gender, age, contactno, email, address) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			//$password=md5($password);
			$stmt->bind_param("sssssssss", $username, $password, $firstname, $lastname, $gender, $age, $contactno, $email, $address);
			
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
 
		public function login($username, $password){
		
			$stmt = $this->conn->prepare("SELECT * FROM `student` WHERE `username` = '$username' && `password` = '$password'") or die($this->conn->error);
			//$password=md5($password);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$valid = $result->num_rows;
				$fetch = $result->fetch_array();
				return array(
					'id'=> $fetch['id'],
					'count'=>$valid
				);
			}
		}

		public function	getfullName1($id){
			$sql4="SELECT username FROM student WHERE id='$id'";
			$result=mysqli_query($this->conn,$sql4);
			$userdata=mysql_fetch_array($result);
			echo $userdata['username'];
		}
 
		public function user_account($id){
			$stmt = $this->conn->prepare("SELECT * FROM `student` WHERE `id` = '$id'") or die($this->conn->error);
			if($stmt->execute()){
				$result = $stmt->get_result();
				$fetch = $result->fetch_array();
				return array(
					'firstname'=> $fetch['firstname'],
					'lastname'=>$fetch['lastname']
				);
			}	
		}

		
	}	
?>
