
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_candidate<?php  echo $parents_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Parents</center>
						</div>    
					</div>
				</h4>
			</div>
			
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
				     <img src= <?php echo $row ['img']?> width="50" height="50" class="img-rounded">
					<input type="hidden" name="parents_id" value="<?php echo $row['parents_id'] ?>">
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position" value = "<?php echo $row ['position']?>">
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
							<input class="form-control" type ="text" name = "email" value = "<?php echo $row ['email']?>">
					</div>
	
				
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row ['firstname']?>">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row ['lastname']?>">
					</div>
					
					<div class="form-group">
						<label>Phone</label>
						<input class="form-control"  type = "text" name = "phone" value = "<?php echo $row ['phone']?>">
					</div>
					
					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option><?php echo $row ['gender']?></option>
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
					<div class="form-group">
									<label>Image</label>
									<input type="file" name="image"> 
					</div>
					<button name = "update" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		
		if(isset($_POST['update'])){
			$bool = true;
			$position=$_POST['position'];
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$phone=$_POST['phone'];
			$gender=$_POST['gender'];
			$parents_id=$_POST['parents_id'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
		
	
			$conn->query("UPDATE parents SET position = '$position', firstname = '$firstname', lastname = '$lastname', phone = '$phone', gender = '$gender',img='$location' WHERE parents_id = '$parents_id'")or die($conn->error);
			echo "<script> window.location='parents.php' </script>";
		}	
	?>
								
<?php
	}
?>