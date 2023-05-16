<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Parents</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option selected disabled>Select Parents Group</option>
								<option>Chairman</option>
								<option>Vice Chairman</option>
								<option>Treasurer</option>
								<option>Secretrary</option>
								<option>PRO</option>
								<option>Event Coordinator</option>
								<option>Membership Coordinator</option>
								<option>Fundraising Coordinator</option>
								<option>Advocacy Chairman</option>
								<option>Teacher Appreciation Coordinator</option>
							</select>
					</div>
					<div class="form-group">
						<label>Email</label>
							<input class="form-control" type ="text" name = "email" placeholder="Please enter email" required="true">
					</div>

										
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label>Phone</label>
						<input class="form-control"  type = "text" name = "phone" placeholder="Please enter phone" required="true">
					</div>
															
					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
											
											
					<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image"required> 
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
										
										
										
			<?php 
				// require_once 'dbcon.php';
				include ('session.php');
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];					
					$email=$_POST['email'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$phone=$_POST['phone'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO parents(position,email,firstname,lastname,phone,gender,img)values('$position','$email','$firstname','$lastname','$phone','$gender','$location')")or die($conn->error);
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>