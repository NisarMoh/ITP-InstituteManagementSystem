<?php
include('../DatabaseConnection.php');
	 /**
	  * 
	  */

	 class File 
	 {
	 	var
	 	$student_id,
	 	$file_name,
	 	$file_subject,
	 	$file_dt,
	 	$file;
	 	


	 	public function insert_into_student()
	 	{

	 		
	 		$target_dir="student_uplodes/";
	 		$target_file=$target_dir.basename($_FILES["upfile"]["name"]);
	 		$filetype= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	 		if($_FILES["upfile"]["size"]>2000000)
	 		{
	 			
				
	 			//echo "File size too large";
				include('./Alert/danger_size.html');
	 			
	 		}

	 		else if($filetype != "rar" && $filetype != "pdf")
	 		{
	 			
	 		
	 		
	 			//echo "File type not valid";
				include('./Alert/danger_type.html');

	 			

	 		}

	 		else 
	 		{

	 			$tempname=$_FILES["upfile"]["tmp_name"];
	 			$origanalname=$_FILES["upfile"]["name"];
	 			$file=$_FILES["upfile"]["name"];

	 			move_uploaded_file($_FILES["upfile"]["tmp_name"],$target_file);

	 			date_default_timezone_set("Asia/Colombo");
	 			date("Y-m-d h:i:sa");

	 			$this->file_dt=date("Y-m-d h:i:sa");

				$db = DatabaseConnection::getInstance();
				$mysqli = $db->getConnection(); 
				
				$sql="insert into student_assignment ( StudentID,FileName,SubjectID,assignment_directory,Date_Time) values ('$this->student_id','$this->file_name','$this->file_subject','$file','$this->file_dt') ";	
				$result = $mysqli->query($sql);	 	
				
	 				if($result)
	 				{
	 					//echo "File uploaded sucessfuly";
						include('./Alert/success.html');
	 				}
	 				else
	 				{
	 					//echo "Try check your details";
						include('./Alert/warning.html');
	 				}
	 				
	 		}
	 		



	 		
	 		
	 		# code...
	 	}

	
	 	

	
	 }

?>