<?php 
include('../DatabaseConnection.php');


class ViewFile 
{

	Var $ViewFile_subject;
	
	public function getAllstAssignment()
	{
		$db = DatabaseConnection::getInstance();
		$mysqli = $db->getConnection(); 
		$sql="SELECT * FROM student_assignment WHERE SubjectID= '$this->ViewFile_subject' "; 
		$result = $mysqli->query($sql);		
		return $result;
	}
}

?>