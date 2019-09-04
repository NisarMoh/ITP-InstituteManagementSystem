<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="firstname">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="lastname">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Address:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="address">
					</div>
				</div>
                                <div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Age:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="age">
					</div>
				</div>
                                <div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-lg-10">
						<input type="email" class="form-control" name="email">
					</div>
				</div>
                                <div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">ContactNo:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="contactno">
					</div>
				</div>
                                 <div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Username:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
                                  <div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Password:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="password">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add" class="btn btn-primary">Save</button>
			</form>
            </div>
 
        </div>
    </div>
</div>

