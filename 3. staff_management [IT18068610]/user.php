<?php
//include "DbConfig.php";
//include "mysql_db_connection.inc.php";

//check mysql db connection on the initial page
include '../DatabaseConnection.php';



class User
{
        public $db;
        /*** for registration process ***/
        public function __construct()
        {
                $this->db=DatabaseConnection::getInstance()->getConnection();
                //  $obj11 = new BB;
                // $this->db = $obj11->DBconnection();

        }


        public function reg_user($NIC, $Email, $Full_Name, $Last_Name,$User_Name,$Password,$Qulalification,$Ethnic,$Religion,$Civil_Status,$Address,$Gender,$DateOfBirth,$Phone_Number)
        {
                 $Password = md5($Password);
                // $Confirm_Pass=md5($Confirm_Pass);
                $sql = "SELECT * FROM staff WHERE User_Name='$User_Name' OR Email='$Email'";
                //checking if the username or email is available in db
                $check =  $this->db->query($sql);
                $count_row = $check->num_rows;
                //if the username is not in db then insert to the table
                if ($count_row == 0) {

                        $sql1 = "INSERT INTO staff SET NIC='$NIC', Email='$Email', Full_Name='$Full_Name', User_Name='$User_Name', Last_Name='$Last_Name', Password='$Password', Qualification='$Qulalification', Ethnic='$Ethnic', Religion='$Religion', Civil_Status='$Civil_Status', Address='$Address', Gender='$Gender', DateOfBirth='$DateOfBirth', Phone_Number='$Phone_Number'";
                        
                        $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");

                        return $result;
                } else {
                        return false;
                }
        }
        
        /*** for login process ***/

        public function check_login($emailusername, $password)
        {

                 $password = md5($password);

                $sql2 = "SELECT Staff_ID from staff WHERE Email='$emailusername' or User_Name='$emailusername' and Password='$password'";

                //checking if the username is available in the table

                $result = mysqli_query($check =  $this->db, $sql2);

                $user_data = mysqli_fetch_array($result);

                $count_row = $result->num_rows;
               


                if ($count_row == 1) {

                        // this login var will use for the session thing
                        $_SESSION['login'] = true;

                        $_SESSION['Staff_ID'] = $user_data['Staff_ID'];

                        return true;
                } else {

                        return false;
                }
        }

        /*** for showing the username or fullname ***/

        public function get_fullname($Staff_ID)
        {

                $sql3 = "SELECT User_Name FROM staff WHERE Staff_ID = '$Staff_ID'";

                $result = mysqli_query($this->db, $sql3);

                $user_data = mysqli_fetch_array($result);

                echo $user_data['User_Name'];
        }

        /*** starting the session ***/

        public function get_session()
        {

                return $_SESSION['login'];
        }

        public function user_logout()
        {

                $_SESSION['login'] = FALSE;

                session_destroy();
        }
}
