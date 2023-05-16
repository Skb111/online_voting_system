<?php 

include ('session.php');

?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color: blue;">
            <div class="navbar-header">
                <a class="navbar-brand" href="" style = "color:white;"><i class = "fa fa-home fa-large" > </i>HOME | Admin Portal</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php 
				$query = $conn->query("SELECT * from user where user_id ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white; border:2px solid white; border-radius:5px;">
					<i>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>
                </li>
           
            </ul>
			<?php }?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#" class = "bg-success" ><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li>

                        <li>
                            <a href="candidate.php" class = "bg-success" ><i class = "fa fa-user fa-fw"></i> View Student Candidates</a>
                         
                        </li>
                        <li>
                            <a href="teachers.php" class = "bg-success" ><i class = "fa fa-user fa-fw"></i> Teachers Candidates</a>
                         
                        </li>
                        <li>
                            <a href="parents.php" class = "bg-success" ><i class = "fa fa-user fa-fw"></i> Parents Candidates</a>
                         
                        </li>
						<li>
                          <a href="voters.php" class = "bg-success" ><i class = "fa fa-user fa-fw"></i> View Voters</a>
                        </li>
                        <li>
                          <a href="current_students.php" class = "bg-success" ><i class = "fa fa-user fa-fw"></i>Students</a>
                        </li>
                        <li>
                          <a href="current_teachers.php" class = "bg-success" ><i class = "fa fa-user fa-fw bg-success"></i>Teachers</a>
                        </li>
                        <li>
                          <a href="current_parents.php" class = "bg-success" ><i class = "fa fa-user fa-fw bg-success"></i>Parents</a>
                        </li>
						
                        <li>
                            <a href="canvassing.php" class = "bg-success" ><i class="fa fa-download fa-fw"></i>Election Reports</a>
                        </li>
                        <li>
                            <a href="teachers_canvassing.php" class = "bg-success" ><i class="fa fa-download fa-fw"></i>Teachers Election Reports</a>
                        </li>
                        <li>
                            <a href="parents_canvassing.php" class = "bg-success" ><i class="fa fa-download fa-fw"></i>Parents Election Reports</a>
                        </li>
                        <li>
                            <a href="user.php" class = "bg-success" > <i class = "fa fa-users" ></i> View User</a>
                        </li>
                        <li>
                            <a href="teachers_voters.php" class = "bg-success" > <i class = "fa fa-users" ></i> View Teachers Voters</a>
                        </li>
                        <li>
                            <a href="parents_voters.php" class = "bg-success" > <i class = "fa fa-users" ></i> View Parents Voters</a>
                        </li>
                        <li>
                            <a href="login_times.php" class = "bg-success" > <i class = "fa fa-users" ></i>User Login Time</a>
                        </li>
                        <li>
                           <a href="logout.php" class = "bg-success" > <i class = "fa fa-sign-out" ></i>Logout</a>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

                        <!-- <div class="dropdown show">
                            <a href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink">
                                Dropdwown
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Action</a>
                            </div>
                        </div> -->
