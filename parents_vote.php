<?php include ('head.php');?>
<?php include("sess_parents.php");?>
<body>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>
	<form method = "POST" action = "vote_result_parents.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>CHAIRMAN</center>
                        </div>
                        <div class="panel-body" style = "background-color:; display:block;">
						<?php
							$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Chairman'") or die(mysqli_error());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
							
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['parents_id'] ?>" name = "chm_id" class = "chm">Give Vote</center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center> VICE CHAIRMAN</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Vice Chairman'") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<center><img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" heigadc = "150px" width = "150px"></center>
		    <center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['parents_id'] ?>" name = "vch_id" class = "vch">Give Vote</center>
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
			<center>TREASURER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Treasurer'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['parents_id'] ?>" name = "trs_id" class = "trs">Give Vote</center>
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
			<center>SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Secretary'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['parents_id'] ?>" name = "sec_id" class = "sec">Give Vote</center>
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
			<center>PRO</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'PRO'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['parents_id'] ?>" name = "pro_id" class = "pro">Give Vote</center>
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
			<center>EVENT COORDINATOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Event Coordinator'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['parents_id'] ?>" name = "evc_id" class = "evc">Give Vote</center>
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
			<center>MEMBERSHIP COORDINATOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Membership Coordinator'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['parents_id'] ?>" name = "mmc_id" class = "mmc">Give Vote</center>
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
			<center>FUNDRAISING COORDINATOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Fundraising Coordinator'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['parents_id'] ?>" name = "fnc_id" class = "fnc">Give Vote</center>
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
			<center>ADVOCACY CHAIRMAN</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Advocacy Chairman'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['parents_id'] ?>" name = "adc_id" class = "adc">Give Vote</center>
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
			<center>TEACHER APPRECIATION COORDINATOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `parents` WHERE `position` = 'Teacher Appreciation Coordinator'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" heigadc = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['parents_id'] ?>" name = "tac_id" class = "tac">Give Vote</center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
     <hr/>
		
		<center><button class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		<!-- <script type = "text/javascript">
			alert("Welcome!!!");
		</script> -->
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
</body>

  <script type = "text/javascript">
		$(document).ready(function(){
			$(".chm").on("change", function(){
				if($(".chm:checked").length == 1)
					{
						$(".chm").attr("proabled", "proabled");
						$(".chm:checked").removeAttr("proabled");
					}
				else
					{
						$(".chm").removeAttr("proabled");
					}
			});
			
			$(".vch").on("change", function(){
				if($(".vch:checked").length == 1)
					{
						$(".vch").attr("proabled", "proabled");
						$(".vch:checked").removeAttr("proabled");
					}
				else
					{
						$(".vch").removeAttr("proabled");
					}
			});
			
			$(".trs").on("change", function(){
				if($(".trs:checked").length == 1)
					{
						$(".trs").attr("proabled", "proabled");
						$(".trs:checked").removeAttr("proabled");
					}
				else
					{
						$(".trs").removeAttr("proabled");
					}
			});
			
			$(".sec").on("change", function(){
				if($(".sec:checked").length == 1)
					{
						$(".sec").attr("proabled", "proabled");
						$(".sec:checked").removeAttr("proabled");
					}
				else
					{
						$(".sec").removeAttr("proabled");
					}
			});
			
			$(".pro").on("change", function(){
				if($(".pro:checked").length == 1)
					{
						$(".pro").attr("proabled", "proabled");
						$(".pro:checked").removeAttr("proabled");
					}
				else
					{
						$(".pro").removeAttr("proabled");
					}
			});
			
			$(".evc").on("change", function(){
				if($(".evc:checked").length == 1)
					{
						$(".evc").attr("proabled", "proabled");
						$(".evc:checked").removeAttr("proabled");
					}
				else
					{
						$(".evc").removeAttr("proabled");
					}
				
			});
			$(".mmc").on("change", function(){
				if($(".mmc:checked").length == 1)
					{
						$(".mmc").attr("proabled", "proabled");
						$(".mmc:checked").removeAttr("proabled");
					}
				else
					{
						$(".mmc").removeAttr("proabled");
					}
			});	
			$(".fnc").on("change", function(){
				if($(".fnc:checked").length == 1)
				{
					$(".fnc").attr("proabled", "proabled");
					$(".fnc:checked").removeAttr("proabled");
				}
			else
				{
					$(".fnc").removeAttr("proabled");
				}
			});
			$(".adc").on("change", function(){
				if($(".adc:checked").length == 1)
				{
					$(".adc").attr("proabled", "proabled");
					$(".adc:checked").removeAttr("proabled");
				}
			else
				{
					$(".adc").removeAttr("proabled");
				}
			});
			$(".tac").on("change", function(){
				if($(".tac:checked").length == 1)
				{
					$(".tac").attr("proabled", "proabled");
					$(".tac:checked").removeAttr("proabled");
				}
			else
				{
					$(".tac").removeAttr("proabled");
				}
			});
					});	
	</script>
	<?php include ('script.php');
include ('footer.php');?>
  
</adcml>

