<?php

include_once '../DatabaseConnection.php';

include_once 'Assessment.php';
include_once 'Online_assessment.php';
include_once 'Written_assessment.php';

class AssessmentCRUD
{//CRUD Operational Model Class

    public $conn; // Database connection

    /**
     * AssessmentCRUD constructor.
     */
    public function __construct()
    {
        $this->conn = DatabaseConnection::getInstance()->getConnection();
    }

    public function insertOnlineAssessment(Online_assessment $onlineAss){

        $review = 0;
        if($onlineAss->getEvaluationType() === "quiz"){
            $review = 1;
        }

        $sql = "INSERT INTO assessment (Evaluation_type, Assessment_title, Subject, Classroom, DateTime) 
                    VALUES ('".$onlineAss->getEvaluationType()."', '".$onlineAss->getAssessmentTitle()."', '".$onlineAss->getSubject()."', '".$onlineAss->getClassroom()."'
                    , '".$onlineAss->getDateTime()."')";

        if ($this->conn->query($sql) === TRUE) {
            $sql2="SELECT AssessmentID FROM assessment ORDER BY AssessmentID DESC LIMIT 1";
            $result = $this->conn->query($sql2);
            $row = $result->fetch_assoc();
            $last_id = $row["AssessmentID"];

            echo "New record created successfully. Last inserted ID is: " . $last_id;

            $sql3 = "INSERT INTO online_assessment (AssessmentID, Duration, Review) 
                    VALUES ('".$last_id."', '".$onlineAss->getDuration()."', '".$review."')";

            if ($this->conn->query($sql3)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function selectAssessmentByType($type){
        $sql = "SELECT * FROM assessment a, online_assessment o WHERE a.AssessmentID=o.AssessmentID AND Evaluation_type like '".$type."'";
        $result = $this->conn->query($sql);

        $ret = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $onlineAss = new Online_assessment($row["Evaluation_type"],$row["Assessment_title"],$row["Subject"],$row["Classroom"],
                    $row["DateTime"],$row["Duration"]);
                $onlineAss->setAssessmentID($row["AssessmentID"]);
                array_push($ret,$onlineAss);
            }

            return $ret;
        }
        else{
            return false;
        }
    }

    public function selectAssessmentByID($id){
        $sql = "SELECT * FROM assessment a, online_assessment o WHERE a.AssessmentID=o.AssessmentID AND a.AssessmentID like '".$id."'";
        $result = $this->conn->query($sql);

        $row = $result->fetch_assoc();
        $onlineAss = new Online_assessment($row["Evaluation_type"],$row["Assessment_title"],$row["Subject"],$row["Classroom"],
                    $row["DateTime"],$row["Duration"]);
                $onlineAss->setAssessmentID($row["AssessmentID"]);
                $onlineAss->setSubmitted($row["TimeStamp"]);


        return $onlineAss;

    }

    public function deleteAssessmentByID($id){
        // sql to delete a record
        $sql = "DELETE FROM assessment WHERE AssessmentID='".$id."'";

        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }




}