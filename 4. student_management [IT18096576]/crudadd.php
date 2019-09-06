<?php
//start session
//session_start();
//require_once 'session.php';
//crud with database connection
include_once('Crud.php');

$crud = new Crud();

//fetch data
$sql = "SELECT * FROM student";
$result = $crud->read($sql);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

	<?php
	if (isset($_SESSION['message'])) {
		?>
		<div class="alert alert-info text-center">
			<?php echo $_SESSION['message']; ?>
		</div>
	<?php

		unset($_SESSION['message']);
	}

	?>
	<a href="#add" data-toggle="modal" class="btn btn-primary">Add New</a><br><br>
	<table class="table table-bordered table-striped" style="width: 100%;">
		<thead>
			<tr>
				<th class="w-25">ID</th>
				<th class="w-25">Firstname</th>
				<th class="w-25">Lastname</th>
				<th class="w-25">Address</th>
				<th class="w-25">Age</th>
				<th class="w-25">Email</th>
				<th class="w-25">ContactNO</th>
				<th class="w-25">Username</th>
				<th class="w-25">Password</th>


				<th>Edit</th>
				<th>Delete</th>

			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($result as $key => $row) {
				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contactno']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>


					<td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success">Edit</a></td>
					<td><a href="#delete<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
					</td>
					<?php include('action_modal.php'); ?>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>

	<?php include('add_modal.php'); ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>