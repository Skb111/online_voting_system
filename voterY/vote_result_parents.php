<?php include ('head.php');?>
<?php include ('sess_parents.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(isset($_POST['submit']))
				{
					if(!isset($_POST['chm_id']))
					{
						$_SESSION['chm_id'] = "";
					}
					else
					{
						$_SESSION['chm_id'] = $_POST['chm_id'];
					}
					if(!isset($_POST['vch_id']))
					{
						$_SESSION['vch_id'] = "";
					}
					else
					{
						$_SESSION['vch_id'] = $_POST['vch_id'];
					}
					if(!isset($_POST['trs_id']))
					{
						$_SESSION['trs_id'] = "";
					}
					else
					{
						$_SESSION['trs_id'] = $_POST['trs_id'];
					}
					if(!isset($_POST['sec_id']))
					{
						$_SESSION['sec_id'] = "";
					}
					else
					{
						$_SESSION['sec_id'] = $_POST['sec_id'];
					}
					if(!isset($_POST['pro_id']))
					{
						$_SESSION['pro_id'] = "";
					}
					else
					{
						$_SESSION['pro_id'] = $_POST['pro_id'];
					}
					if(!isset($_POST['evc_id']))
					{
						$_SESSION['evc_id'] = "";
					}
					else
					{
						$_SESSION['evc_id'] = $_POST['evc_id'];
					}
					if(!isset($_POST['mmc_id']))
					{
						$_SESSION['mmc_id'] = "";
					}
					else
					{
						$_SESSION['mmc_id'] = $_POST['mmc_id'];
					}
					if(!isset($_POST['fnc_id']))
					{
						$_SESSION['fnc_id'] = "";
					}
					else
					{
						$_SESSION['fnc_id'] = $_POST['fnc_id'];
					}
					if(!isset($_POST['adc_id']))
					{
						$_SESSION['adc_id'] = "";
					}
					else
					{
						$_SESSION['adc_id'] = $_POST['adc_id'];
					}
					if(!isset($_POST['tac_id']))
					{
						$_SESSION['tac_id'] = "";
					}
					else
					{
						$_SESSION['tac_id'] = $_POST['tac_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-rigadc:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>CHAIRMAN</center></div>
			<br />
			<?php
				if(!$_SESSION['chm_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[chm_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>VICE CHAIRMAN</center></div>
			<br />
			<?php
				if(!$_SESSION['vch_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[vch_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>TREASURER</center></div>
			<br/>
			<?php
				if(!$_SESSION['trs_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[trs_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['sec_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[sec_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<div class="panel-heading"><center>PRO</center></div>
			<br />
			<?php
				if(!$_SESSION['pro_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[pro_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>EVENT COORDINATOR</center></div>
			<br />
			<?php
				if(!$_SESSION['evc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[evc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>MEMBERSHIP COORDINATOR</center></div>
			<br />
			<?php
				if(!$_SESSION['mmc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[mmc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>FUNDRAISING COORDINATOR</center></div>
			<br />
			<?php
				if(!$_SESSION['fnc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[fnc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>ADVOCACY CHAIRMAN</center></div>
			<br />
			<?php
				if(!$_SESSION['adc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[adc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>TEACHER APPRECIATION COORDINATOR</center></div>
			<br />
			<?php
				if(!$_SESSION['tac_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `parents` WHERE `parents_id` = '$_SESSION[tac_id]'")->fetch_array();
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
								<a href = "submit_parents.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "parents_vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</adcml>


