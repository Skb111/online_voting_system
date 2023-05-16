<?php include ('head.php');?>
<?php include("sess.php");?>
<body>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center> Head Boy </center>
                        </div>
                        <div class="panel-body" style = "background-color:; display:block;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Head Boy'") or die(mysqli_error());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "hdb_id" class = "hdb">Give Vote</center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center> Head Girl </center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Head Girl'") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<center><img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px"></center>
		    <center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "hdg_id" class = "hdg">Give Vote</center>
		</div>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Labour Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Labour Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "lb_id" class = "lb">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Labour Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Labour Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "lg_id" class = "lg">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Assembly Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Assembly Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "ab_id" class = "ab">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Assembly Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Assembly Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "ag_id" class = "ag">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	 
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Punctuality Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Punctuality Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "pb_id" class = "pb">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Punctuality Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Punctuality Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "pg_id" class = "pg">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	 
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Social Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Social Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sb_id" class = "sb">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Social Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Social Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sg_id" class = "sg">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>


	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Food Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Food Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "fb_id" class = "fb">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Food Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Food Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "fg_id" class = "fg">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Health Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Health Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "hb_id" class = "hb">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Health Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Health Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "hg_id" class = "hg">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Library Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Library Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "lib_id" class = "lib">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Library Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Library Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "lig_id" class = "lig">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Sport Boy</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Sport Boy'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "spb_id" class = "spb">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Sport Girl</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Sport Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "spg_id" class = "spg">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Time Keeper</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Time Keeper'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "tk_id" class = "tk">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Janitor</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Janitor'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "jn_id" class = "jn">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Fellowship Muslim</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Fellowship Muslim'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "fm_id" class = "fm">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Fellowship Christian</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Fellowship Christian'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "fc_id" class = "fc">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>

     <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>Hostel</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Hostel'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Level: </strong> ".$fetch['year_level']."<br/><strong>Party: </strong> ".$fetch['party']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "ht_id" class = "ht">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
     <hr/>
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		<script type = "text/javascript">
			alert("Welcome!!!");
		</script>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
</body>
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".hdb").on("change", function(){
				if($(".hdb:checked").length == 1)
					{
						$(".hdb").attr("disabled", "disabled");
						$(".hdb:checked").removeAttr("disabled");
					}
				else
					{
						$(".hdb").removeAttr("disabled");
					}
			});
			
			$(".hdg").on("change", function(){
				if($(".hdg:checked").length == 1)
					{
						$(".hdg").attr("disabled", "disabled");
						$(".hdg:checked").removeAttr("disabled");
					}
				else
					{
						$(".hdg").removeAttr("disabled");
					}
			});
			
			$(".lb").on("change", function(){
				if($(".lb:checked").length == 1)
					{
						$(".lb").attr("disabled", "disabled");
						$(".lb:checked").removeAttr("disabled");
					}
				else
					{
						$(".lb").removeAttr("disabled");
					}
			});
			
			$(".lg").on("change", function(){
				if($(".lg:checked").length == 1)
					{
						$(".lg").attr("disabled", "disabled");
						$(".lg:checked").removeAttr("disabled");
					}
				else
					{
						$(".lg").removeAttr("disabled");
					}
			});
			
			$(".ab").on("change", function(){
				if($(".ab:checked").length == 1)
					{
						$(".ab").attr("disabled", "disabled");
						$(".ab:checked").removeAttr("disabled");
					}
				else
					{
						$(".ab").removeAttr("disabled");
					}
			});
			
			$(".ag").on("change", function(){
				if($(".ag:checked").length == 1)
					{
						$(".ag").attr("disabled", "disabled");
						$(".ag:checked").removeAttr("disabled");
					}
				else
					{
						$(".ag").removeAttr("disabled");
					}
				
			});
			$(".pb").on("change", function(){
				if($(".pb:checked").length == 1)
					{
						$(".pb").attr("disabled", "disabled");
						$(".pb:checked").removeAttr("disabled");
					}
				else
					{
						$(".pb").removeAttr("disabled");
					}
			});	
			$(".pg").on("change", function(){
				if($(".pg:checked").length == 1)
				{
					$(".pg").attr("disabled", "disabled");
					$(".pg:checked").removeAttr("disabled");
				}
			else
				{
					$(".pg").removeAttr("disabled");
				}
			});
			$(".sb").on("change", function(){
				if($(".sb:checked").length == 1)
				{
					$(".sb").attr("disabled", "disabled");
					$(".sb:checked").removeAttr("disabled");
				}
			else
				{
					$(".sb").removeAttr("disabled");
				}
			});
			$(".sg").on("change", function(){
				if($(".sg:checked").length == 1)
				{
					$(".sg").attr("disabled", "disabled");
					$(".sg:checked").removeAttr("disabled");
				}
			else
				{
					$(".sg").removeAttr("disabled");
				}
			});
			$(".fb").on("change", function(){
				if($(".fb:checked").length == 1)
				{
					$(".fb").attr("disabled", "disabled");
					$(".fb:checked").removeAttr("disabled");
				}
			else
				{
					$(".fb").removeAttr("disabled");
				}
			});
			$(".fg").on("change", function(){
				if($(".fg:checked").length == 1)
				{
					$(".fg").attr("disabled", "disabled");
					$(".fg:checked").removeAttr("disabled");
				}
			else
				{
					$(".fg").removeAttr("disabled");
				}
			});
			$(".hb").on("change", function(){
				if($(".hb:checked").length == 1)
				{
					$(".hb").attr("disabled", "disabled");
					$(".hb:checked").removeAttr("disabled");
				}
			else
				{
					$(".hb").removeAttr("disabled");
				}
			});
			$(".hg").on("change", function(){
				if($(".hg:checked").length == 1)
				{
					$(".hg").attr("disabled", "disabled");
					$(".hg:checked").removeAttr("disabled");
				}
			else
				{
					$(".hg").removeAttr("disabled");
				}
			});
			$(".lib").on("change", function(){
				if($(".lib:checked").length == 1)
				{
					$(".lib").attr("disabled", "disabled");
					$(".lib:checked").removeAttr("disabled");
				}
			else
				{
					$(".lib").removeAttr("disabled");
				}
			});
			$(".lig").on("change", function(){
				if($(".lig:checked").length == 1)
				{
					$(".lig").attr("disabled", "disabled");
					$(".lig:checked").removeAttr("disabled");
				}
			else
				{
					$(".lig").removeAttr("disabled");
				}
			});
			$(".spb").on("change", function(){
				if($(".spb:checked").length == 1)
				{
					$(".spb").attr("disabled", "disabled");
					$(".spb:checked").removeAttr("disabled");
				}
			else
				{
					$(".spb").removeAttr("disabled");
				}
			});
			$(".spg").on("change", function(){
				if($(".spg:checked").length == 1)
				{
					$(".spg").attr("disabled", "disabled");
					$(".spg:checked").removeAttr("disabled");
				}
			else
				{
					$(".spg").removeAttr("disabled");
				}
			});
			$(".tk").on("change", function(){
				if($(".tk:checked").length == 1)
				{
					$(".tk").attr("disabled", "disabled");
					$(".tk:checked").removeAttr("disabled");
				}
			else
				{
					$(".tk").removeAttr("disabled");
				}
			});
			$(".jn").on("change", function(){
				if($(".jn:checked").length == 1)
				{
					$(".jn").attr("disabled", "disabled");
					$(".jn:checked").removeAttr("disabled");
				}
			else
				{
					$(".jn").removeAttr("disabled");
				}
			});
			$(".fm").on("change", function(){
				if($(".fm:checked").length == 1)
				{
					$(".fm").attr("disabled", "disabled");
					$(".fm:checked").removeAttr("disabled");
				}
			else
				{
					$(".fm").removeAttr("disabled");
				}
			});
			$(".fc").on("change", function(){
				if($(".fc:checked").length == 1)
				{
					$(".fc").attr("disabled", "disabled");
					$(".fc:checked").removeAttr("disabled");
				}
			else
				{
					$(".fc").removeAttr("disabled");
				}
			});
			$(".ht").on("change", function(){
				if($(".ht:checked").length == 1)
				{
					$(".ht").attr("disabled", "disabled");
					$(".ht:checked").removeAttr("disabled");
				}
			else
				{
					$(".ht").removeAttr("disabled");
				}
			});
		});	
	</script>
	
<?php include ('script.php');
include ('footer.php');?>
  
</html>

