<?php

$mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
or die(mysqli_errno($mysqli));
$output = '';

if(isset($_POST['query'])){
    $search =$_POST['query'];

    $stmt=$mysqli->prepare("SELECT * FROM subject WHERE subject LIKE CONCAT('%',?,'%')");
        $stmt->bind_param("ss", $search);
}
else{
    $stmt=$mysqli->prepare("SELECT * FROM subject");
}
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
    $output = "<thead>
                                                                <tr>

                                                                <th>Subject</th>
                                                                <th>Subject</th>
                                                                <th>Subject</th>
                                                                <th>Subject</th>
                                                                </tr>
                                                                </thead>
    <tbody>";
    while ($row=$result->fetch_assoc()){
        $output .="<tr>
                         <td>" .$row['subject']; "</td>
                         <td>" .$row['subject'];" </td>
                         <td>" .$row['subject'];" </td>
                         <td>" .$row['subject'];" </td>
                   </tr>";
    }
    $output .="</tbody>";
    echo $output;
    
    
}
            else{
            echo"<h3> No Records Found!</h3>";
            }
             ?>