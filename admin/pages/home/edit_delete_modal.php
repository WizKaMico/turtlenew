<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Middlename:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mname" value="<?php echo $row['mname']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Lastname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Birthdate:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="dob" value="<?php echo $row['dob']; ?>" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Contact:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ref:</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" name="ref" id='purpose'>
                            <option value="Association / Club Member">Association / Club Member</option>
                            <option value="Guest">Guest</option>
                            <option value="Sponsored">Sponsored By A Member</option>
                            <option value="Race">Race Sponsor</option>
                        </select>
					</div>
				</div>
                <div id='Sponsored' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Member:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sponmem">
					</div>
                </div>
                <div id='Race' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Sponsor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sponmem">
					</div>   
                </div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Category:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" id="category" name="category">
                            <option value="Kiddie">Kiddie Run</option>
                            <option value="Short">Short Run</option>
                            <option value="Intermediate">Intermediate Run</option>
                            <option value="Open">Open Run</option>
                        </select>
					</div>
				</div>

                <div id='Kiddie' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Short:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Boys (7-9 years old)">Boys (7-9 years old)</option>
                            <option value="Pre-teen boys (10-12 years old)">Pre-teen boys (10-12 years old)</option>
                            <option value="Boys (7-9 years old)">Girls (7-9 years old)</option>
                            <option value="Pre-teen girls (10-12 years old)">Pre-teen girls (10-12 years old)</option>
                        </select>
					</div>
                </div>

                <div id='Short' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Intermediate:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Kiddie">Kiddie Run</option>
                            <option value="Short">Short Run</option>
                            <option value="Intermediate">Intermediate Run</option>
                            <option value="Open">Open Run</option>
                        </select>
					</div>
                </div>

                <div id='Intermediate' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
						<label class="control-label modal-label">Open:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Teen">Teen</option>
                            <option value="Young Men">Young Men</option>
                            <option value="Men">Men</option>
                            <option value="Master Men">Master Men</option>
                            <option value="Senior Men">Senior Men</option>
                            <option value="Teen">Teen</option>
                            <option value="Young Women">Young Women</option>
                            <option value="Women">Women</option>
                            <option value="Master Women">Master Women</option>
                            <option value="Senior Women">Senior Women</option>
                        </select>
					</div>
                </div>

                <div id='Open' class="row form-group" style='display:none;'>
                <div class="col-sm-2">
				 <label class="control-label modal-label">Category:</label>
					</div>
					<div class="col-sm-10">
                      <select class="form-control" name="type">
                            <option value="Mens">Mens</option>
                            <option value="Women">Women</option>
                        </select>
					</div> 
                </div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['fname'].' '.$row['lname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>