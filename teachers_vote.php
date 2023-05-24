<?php include ('head.php');?>
<?php include("sess_teacher.php");?>
<body>
	<?php include 'side_bar.php'; ?>
    <div id="wrapper">
    </div>
	<form method = "POST" action = "vote_result_teachers.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center> HOD </center>
                        </div>
                        <div class="panel-body" style = "background-color:; display:block;">
						<?php
							$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'HOD'") or die(mysqli_error());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['teachers_id'] ?>" name = "hod_id" class = "hod">Give Vote</center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center> Exam Director </center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Exam Director'") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<center><img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px"></center>
		    <center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['teachers_id'] ?>" name = "exm_id" class = "exm">Give Vote</center>
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
			<center>COUNSELLOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Counsellor'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['teachers_id'] ?>" name = "cons_id" class = "cons">Give Vote</center>
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
			<center>MUSIC DIRECTOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Music Director'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
						<center><input type = "checkbox" value = "<?php echo $fetch['teachers_id'] ?>" name = "msd_id" class = "msd">Give Vote</center>
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
			<center>DISCIPLINARIAN</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Disciplinarian'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['teachers_id'] ?>" name = "dis_id" class = "dis">Give Vote</center>
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
			<center>Drama And CHOROGRAPHY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Drama and Chorography'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['teachers_id'] ?>" name = "dac_id" class = "dac">Give Vote</center>
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
			<center>Sport Director</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Sport Director'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['teachers_id'] ?>" name = "spd_id" class = "spd">Give Vote</center>
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
			<center>Head Of Clubs</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Head Of Clubs'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['teachers_id'] ?>" name = "hoc_id" class = "hoc">Give Vote</center>
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
			<center>Head Teachers</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Head Teachers'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['teachers_id'] ?>" name = "ht_id" class = "ht">Give Vote</center>
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
					$query = $conn->query("SELECT * FROM `teachers` WHERE `position` = 'Social Girl'") or die(mysqli_errno());
					while($fetch = $query->fetch_array())
					{
				?>
						<div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
						<center><?php echo "<strong>Names: </strong>".$fetch['firstname']." ".$fetch['lastname']."<br/><strong>Gender: </strong> ".$fetch['gender']."<br/><strong>Email: </strong> ".$fetch['email']."<br/><strong>phone: </strong> ".$fetch['phone']?></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['teachers_id'] ?>" name = "sg_id" class = "sg">Give Vote</center>
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
			$(".hod").on("change", function(){
				if($(".hod:checked").length == 1)
					{
						$(".hod").attr("disabled", "disabled");
						$(".hod:checked").removeAttr("disabled");
					}
				else
					{
						$(".hod").removeAttr("disabled");
					}
			});
			
			$(".exm").on("change", function(){
				if($(".exm:checked").length == 1)
					{
						$(".exm").attr("disabled", "disabled");
						$(".exm:checked").removeAttr("disabled");
					}
				else
					{
						$(".exm").removeAttr("disabled");
					}
			});
			
			$(".cons").on("change", function(){
				if($(".cons:checked").length == 1)
					{
						$(".cons").attr("disabled", "disabled");
						$(".cons:checked").removeAttr("disabled");
					}
				else
					{
						$(".cons").removeAttr("disabled");
					}
			});
			
			$(".msd").on("change", function(){
				if($(".msd:checked").length == 1)
					{
						$(".msd").attr("disabled", "disabled");
						$(".msd:checked").removeAttr("disabled");
					}
				else
					{
						$(".msd").removeAttr("disabled");
					}
			});
			
			$(".dis").on("change", function(){
				if($(".dis:checked").length == 1)
					{
						$(".dis").attr("disabled", "disabled");
						$(".dis:checked").removeAttr("disabled");
					}
				else
					{
						$(".dis").removeAttr("disabled");
					}
			});
			
			$(".dac").on("change", function(){
				if($(".dac:checked").length == 1)
					{
						$(".dac").attr("disabled", "disabled");
						$(".dac:checked").removeAttr("disabled");
					}
				else
					{
						$(".dac").removeAttr("disabled");
					}
				
			});
			$(".spd").on("change", function(){
				if($(".spd:checked").length == 1)
					{
						$(".spd").attr("disabled", "disabled");
						$(".spd:checked").removeAttr("disabled");
					}
				else
					{
						$(".spd").removeAttr("disabled");
					}
			});	
			$(".hoc").on("change", function(){
				if($(".hoc:checked").length == 1)
				{
					$(".hoc").attr("disabled", "disabled");
					$(".hoc:checked").removeAttr("disabled");
				}
			else
				{
					$(".hoc").removeAttr("disabled");
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
					});	
	</script>
	<?php include ('script.php');
include ('footer.php');?>
</html>

