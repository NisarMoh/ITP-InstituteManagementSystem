<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM staff ORDER BY Staff_ID DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Homepage</title>
</head>

<body>
    <h3> <a href="addcheckpage.php" class=" btn btn-warning text-light"> Add Staff </a></h3>


    <table width='80%' border=0 class="table table-striped table-dark">
        <thead>

            <tr bgcolor='#000'>
                <td>Staff_ID</td>
                <td>User Name</td>
                <td>NIC</td>
                <td>Email</td>
                <td>FullName</td>
                <td>LastName</td>
                <td>Qualification </td>
                <td>Salary</td>
                <!-- <td>Ethnic</td>
                <td>Religion</td>
                <td>CivilStatus</td>
                <td>Address</td>
                <td>Gender</td>
                <td>DateofBirth</td>
                <td>PhoneNumber</td> -->
                <td>Admin</td>
                <td>tutor</td>
                <td>cashier</td>
                <td>Edit</td>
                <td>Delete</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $key => $res) {
                //while($res = mysqli_fetch_array($result)) { 

                echo "<tr>";
                echo "<td>" . $res['Staff_ID'] . "</td>";
                echo "<td>" . $res['User_Name'] . "</td>";
                echo "<td>" . $res['NIC'] . "</td>";
                echo "<td>" . $res['Email'] . "</td>";
                echo "<td>" . $res['Full_Name'] . "</td>";
                echo "<td>" . $res['Last_Name'] . "</td>";
                //echo "<td>" . $res['Password'] . "</td>";
                //;
                echo "<td>" . $res['Qualification'] . "</td>";
                echo "<td>" . $res['Salary'] . "</td>";
                // echo "<td>" . $res['Ethnic'] . "</td>";
                // echo "<td>" . $res['Religion'] . "</td>";
                // echo "<td>" . $res['Civil_Status'] . "</td>";
                // echo "<td>" . $res['Address'] . "</td>";
                // echo "<td>" . $res['Gender'] . "</td>";
                // echo "<td>" . $res['DateOfBirth'] . "</td>";
                // echo "<td>" . $res['Phone_Number'] . "</td>";
                echo "<td>" . $res['Administrator'] . "</td>";
                echo "<td>" . $res['Tutor'] . "</td>";
                echo "<td>" . $res['Cashier'] . "</td>";


                echo "<td><a class='btn btn-success' href=\"editcheckpage.php?id=$res[Staff_ID]    \">Edit</a> </td>";
                echo "<td> <a class='btn btn-danger' href=\"delete.php?id=$res[Staff_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
            ?>
    </table>
</body>

</html>