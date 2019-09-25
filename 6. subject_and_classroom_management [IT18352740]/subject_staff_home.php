<?php
    include 'subject_action.php';
?>

<?php include '../dashboard_for_staff/session_for_staff.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../dashboard_for_staff/head.inc.php' ?>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="subject_staff_home.css">
<body>

<?php include '../dashboard_for_staff/nav_and_header.inc.php' ?>

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">

                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <!-- [ IMS: page title ] -->
                                            <h5 class="m-b-10">Subject management</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <!-- [ IMS: breadcrumb ] -->
                                            <li class="breadcrumb-item"><a href="../dashboard_for_staff/dashboard.php"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Subject management</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                        <!-- [ Main Content ] start -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5">
                                    <h3 class="text-center text-info">Add Subject</h3>

                                    <!-- [ Form subject ] start -->

                                    <?php require_once 'subject_action.php'; ?>
                                    <?php  error_reporting(E_ERROR|E_PARSE); ?>
                                    <?php  $a  = $_GET['value']; ?>

                                    <form action="subject_action.php" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="sub_id" value="<?php echo $id; ?>">

                                        <!-- subject -->
                                        <label>Subject</label>
                                        <div class="form-group">
                                            <input type="text" name="subject_add" value="<?php echo $subject_add; ?>" class="form-control" placeholder="Enter Subject" required>
                                        </div>

                                        <!-- references -->
                                        <label>References</label>
                                        <div class="form-group">
                                            <textarea type="text" name="reference_add"  value="<?php echo $reference_add; ?>" class="form-control" placeholder="Enter References" rows="3" required maxlength="500"></textarea>
                                        </div>

                                        <!-- Description -->
                                        <label>Description</label>
                                        <div class="form-group">
                                            <textarea type="text" name="description_add"  value ="<?php echo $description_add; ?> "  class="form-control" placeholder="Enter Description" rows="4" required maxlength="1000"></textarea>
                                        </div>

                                        <!-- Amount -->

                                        <label>Add Amount</label>

                                        <div class="form-group">
                                            <input type="number" name="amount_add" class="form-control"  value ="<?php echo $amount_add; ?>  required maxlength="6" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
                                        </div>

                                        <!-- Button -->

                                        <div class="form-group">
                                            <?php
                                            if($update == true):
                                            ?>

                                            <button type = "submit" class = "btn btn-info" name="btn_subject_update" onclick="return confirm('Do you want to update this record')">Update</button>

                                            <?php else:?>

                                            <button type = "submit" class = "btn btn-primary" name="btn_subject_add">Submit</button>

                                            <?php endif; ?>

                                        </div>

                                    </form>
                                </div>
                                <div class="col-md-7">

                                    <h3 class="text-center text-info">Records Present In The Database</h3>

                                    <!--Table -->

                                    <table class="table  table-hover">

                                        <!--view start -->
                                        <?php
                                        $mysqli = new mysqli('localhost', 'root', '', 'institute_management_system')
                                        or die(mysqli_error($mysqli));
                                        $result = $mysqli->query("SELECT * FROM subject") or die($mysqli->error);
                                        ?>

                                        <thead>

                                        <tr>
                                            <th style="text-align: center;">ID</th>
                                            <th style="text-align: center;">Subject</th>
                                            <th style="text-align: center;">Amount</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        while ($row = $result->fetch_assoc()): ?>

                                        <tr>

                                            <td style="text-align: center;"><?php echo $row['sub_id']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['subject']; ?></td>
                                            <td style="text-align: center;"><?php echo $row['amount']; ?></td>
                                            <td>
                                                <div style="text-align: center;">
                                                <a href="subject_action.php?detail=<?php echo $row['sub_id']; ?>" class="badge badge-primary p-2" name="details">Details</a>
                                                <a href="subject_action.php?delete=<?php echo $row['sub_id']; ?>" onclick="return confirm('Do you want to delete this record')" class="badge badge-danger p-2">Delete</a>
                                                <a href="subject_staff_home.php?edit=<?php echo $row['sub_id']; ?>" name="edit" class="badge badge-success p-2">Edit</a>
                                                </div>
                                            </td>
                                        </tr>


                                        <?php endwhile; ?>

                                        </tbody>



                                    </table>

                                    <?php
                                    function pre_r($array){
                                        echo '<pre>';
                                        print_r($array);
                                        echo '</pre>';
                                    }
                                    ?>


                                </div>

                                <?php if(strcmp($a,"success")==0){ ?>
                                    <div class="alert alert-success" >
                                        Data successfully saved
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- [ Main Content ] end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->


<?php include '../dashboard_for_staff/req_js.inc.php' ?>
</body>

</html>

