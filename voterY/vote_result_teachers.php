<?php include ('head.php');?>
<?php include ('sess_teacher.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(isset($_POST['submit']))
				{
					if(!isset($_POST['hod_id']))
					{
						$_SESSION['hod_id'] = "";
					}
					else
					{
						$_SESSION['hod_id'] = $_POST['hod_id'];
					}
					if(!isset($_POST['exm_id']))
					{
						$_SESSION['exm_id'] = "";
					}
					else
					{
						$_SESSION['exm_id'] = $_POST['exm_id'];
					}
					if(!isset($_POST['cons_id']))
					{
						$_SESSION['cons_id'] = "";
					}
					else
					{
						$_SESSION['cons_id'] = $_POST['cons_id'];
					}
					if(!isset($_POST['msd_id']))
					{
						$_SESSION['msd_id'] = "";
					}
					else
					{
						$_SESSION['msd_id'] = $_POST['msd_id'];
					}
					if(!isset($_POST['dis_id']))
					{
						$_SESSION['dis_id'] = "";
					}
					else
					{
						$_SESSION['dis_id'] = $_POST['dis_id'];
					}
					if(!isset($_POST['dac_id']))
					{
						$_SESSION['dac_id'] = "";
					}
					else
					{
						$_SESSION['dac_id'] = $_POST['dac_id'];
					}
					if(!isset($_POST['spd_id']))
					{
						$_SESSION['spd_id'] = "";
					}
					else
					{
						$_SESSION['spd_id'] = $_POST['spd_id'];
					}
					if(!isset($_POST['hoc_id']))
					{
						$_SESSION['hoc_id'] = "";
					}
					else
					{
						$_SESSION['hoc_id'] = $_POST['hoc_id'];
					}
					if(!isset($_POST['ht_id']))
					{
						$_SESSION['ht_id'] = "";
					}
					else
					{
						$_SESSION['ht_id'] = $_POST['ht_id'];
					}
					if(!isset($_POST['sg_id']))
					{
						$_SESSION['sg_id'] = "";
					}
					else
					{
						$_SESSION['sg_id'] = $_POST['sg_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>HOD</center></div>
			<br />
			<?php
				if(!$_SESSION['hod_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[hod_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>EXAM DIRECTOR</center></div>
			<br />
			<?php
				if(!$_SESSION['exm_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[exm_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>COUNSELLOR</center></div>
			<br/>
			<?php
				if(!$_SESSION['cons_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[cons_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>MUSIC DIRECTOR</center></div>
			<br />
			<?php
				if(!$_SESSION['msd_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[msd_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<div class="panel-heading"><center>DISCIPLINARIAN</center></div>
			<br />
			<?php
				if(!$_SESSION['dis_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[dis_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>DRAMA AND CHOROGRAPHY</center></div>
			<br />
			<?php
				if(!$_SESSION['dac_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[dac_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>SPORT DIRECTOR</center></div>
			<br />
			<?php
				if(!$_SESSION['spd_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[spd_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>HEAD OF CLUB</center></div>
			<br />
			<?php
				if(!$_SESSION['hoc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[hoc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>HEAD TEACHER</center></div>
			<br />
			<?php
				if(!$_SESSION['ht_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[ht_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>SOCIAL GIRL</center></div>
			<br />
			<?php
				if(!$_SESSION['sg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `teachers` WHERE `teachers_id` = '$_SESSION[sg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			
			<br />
			</div>
	</center>
                                    <div class="modal-body">
										<p><center>Are you sure you want to submit your Votes? </center></p>
                                    </div>
									
									<div class="modal-footer"><center>
								<a href = "submit_teachers.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "teachers_vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>


