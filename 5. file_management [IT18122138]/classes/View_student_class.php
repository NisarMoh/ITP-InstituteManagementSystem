<?php 
    include('./db/db.php');


class ViewFile extends dbconn
{

	Var $ViewFile_subject;
	
	public function getAllstAssignment()
	{
		$sql="SELECT * FROM tutor_materials  WHERE SubjectID= '$this->ViewFile_subject' "; 
		$result=$this->connection()->query($sql);
		return $result;
	}
}

?>