<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(isset($_POST['submit']))
				{
					if(!ISSET($_POST['hdb_id']))
					{
						$_SESSION['hdb_id'] = "";
					}
					else
					{
						$_SESSION['hdb_id'] = $_POST['hdb_id'];
					}
					if(!ISSET($_POST['hdg_id']))
					{
						$_SESSION['hdg_id'] = "";
					}
					else
					{
						$_SESSION['hdg_id'] = $_POST['hdg_id'];
					}
					if(!ISSET($_POST['lb_id']))
					{
						$_SESSION['lb_id'] = "";
					}
					else
					{
						$_SESSION['lb_id'] = $_POST['lb_id'];
					}
					if(!ISSET($_POST['lg_id']))
					{
						$_SESSION['lg_id'] = "";
					}
					else
					{
						$_SESSION['lg_id'] = $_POST['lg_id'];
					}
					if(!ISSET($_POST['ab_id']))
					{
						$_SESSION['ab_id'] = "";
					}
					else
					{
						$_SESSION['ab_id'] = $_POST['ab_id'];
					}
					if(!ISSET($_POST['ag_id']))
					{
						$_SESSION['ag_id'] = "";
					}
					else
					{
						$_SESSION['ag_id'] = $_POST['ag_id'];
					}
					if(!ISSET($_POST['pb_id']))
					{
						$_SESSION['pb_id'] = "";
					}
					else
					{
						$_SESSION['pb_id'] = $_POST['pb_id'];
					}
					if(!ISSET($_POST['pg_id']))
					{
						$_SESSION['pg_id'] = "";
					}
					else
					{
						$_SESSION['pg_id'] = $_POST['pg_id'];
					}
					if(!ISSET($_POST['sb_id']))
					{
						$_SESSION['sb_id'] = "";
					}
					else
					{
						$_SESSION['sb_id'] = $_POST['sb_id'];
					}
					if(!ISSET($_POST['sg_id']))
					{
						$_SESSION['sg_id'] = "";
					}
					else
					{
						$_SESSION['sg_id'] = $_POST['sg_id'];
					}
					if(!ISSET($_POST['fb_id']))
					{
						$_SESSION['fb_id'] = "";
					}
					else
					{
						$_SESSION['fb_id'] = $_POST['fb_id'];
					}
					if(!ISSET($_POST['fg_id']))
					{
						$_SESSION['fg_id'] = "";
					}
					else
					{
						$_SESSION['fg_id'] = $_POST['fg_id'];
					}
					if(!ISSET($_POST['hb_id']))
					{
						$_SESSION['hb_id'] = "";
					}
					else
					{
						$_SESSION['hb_id'] = $_POST['hb_id'];
					}
					if(!ISSET($_POST['hg_id']))
					{
						$_SESSION['hg_id'] = "";
					}
					else
					{
						$_SESSION['hg_id'] = $_POST['hg_id'];
					}
					if(!ISSET($_POST['lib_id']))
					{
						$_SESSION['lib_id'] = "";
					}
					else
					{
						$_SESSION['lib_id'] = $_POST['lib_id'];
					}
					if(!ISSET($_POST['lig_id']))
					{
						$_SESSION['lig_id'] = "";
					}
					else
					{
						$_SESSION['lig_id'] = $_POST['lig_id'];
					}
					if(!ISSET($_POST['spb_id']))
					{
						$_SESSION['spb_id'] = "";
					}
					else
					{
						$_SESSION['spb_id'] = $_POST['spb_id'];
					}
					if(!ISSET($_POST['spg_id']))
					{
						$_SESSION['spg_id'] = "";
					}
					else
					{
						$_SESSION['spg_id'] = $_POST['spg_id'];
					}
					if(!ISSET($_POST['tk_id']))
					{
						$_SESSION['tk_id'] = "";
					}
					else
					{
						$_SESSION['tk_id'] = $_POST['tk_id'];
					}
					if(!ISSET($_POST['jn_id']))
					{
						$_SESSION['jn_id'] = "";
					}
					else
					{
						$_SESSION['jn_id'] = $_POST['jn_id'];
					}
					if(!ISSET($_POST['fm_id']))
					{
						$_SESSION['fm_id'] = "";
					}
					else
					{
						$_SESSION['fm_id'] = $_POST['fm_id'];
					}
					if(!ISSET($_POST['fc_id']))
					{
						$_SESSION['fc_id'] = "";
					}
					else
					{
						$_SESSION['fc_id'] = $_POST['fc_id'];
					}
					if(!ISSET($_POST['ht_id']))
					{
						$_SESSION['ht_id'] = "";
					}
					else
					{
						$_SESSION['ht_id'] = $_POST['ht_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>Head Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['hdb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[hdb_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>Head Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['hdg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[hdg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>Labour Boy</center></div>
			<br/>
			<?php
				if(!$_SESSION['lb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lb_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>Labour Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['lg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<div class="panel-heading"><center>Assembly Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['ab_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ab_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Assembly Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['ag_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ag_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Punctuality Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['pb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pb_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Punctuality Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['pg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>Social Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['sb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sb_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Social Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['sg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>Food Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['fb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[fb_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<br />
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Food Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['fg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[fg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Health Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['hb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[hb_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<br/>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Health Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['hg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[hg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Library Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['lib_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lib_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<br />
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Library Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['lig_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lig_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Sport Boy</center></div>
			<br />
			<?php
				if(!$_SESSION['spb_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[spb_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<br />
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Sport Girl</center></div>
			<br />
			<?php
				if(!$_SESSION['spg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[spg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Time Keeper</center></div>
			<br />
			<?php
				if(!$_SESSION['tk_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[tk_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<br />
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Janitor</center></div>
			<br />
			<?php
				if(!$_SESSION['jn_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[jn_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Fellowship Muslim</center></div>
			<br />
			<?php
				if(!$_SESSION['fm_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[fm_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<br/>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>Fellowship Christian</center></div>
			<br />
			<?php
				if(!$_SESSION['fc_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[fc_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>Hostel</center></div>
			<br />
			<?php
				if(!$_SESSION['ht_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ht_id]'")->fetch_array();
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
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>


