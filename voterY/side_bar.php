<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color: blue;">
            <div class="navbar-header" style=" display: flex; align-items: flex-end;justify-content: flex-end;">
					<span style="color:white !important; border:2px solid white !important; border-radius:5px; margin-left:2rem;">Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?> </span>               
                    <a href="logout.php"style = "color: white; border:2px solid white !important; border-radius:5px; margin-left:2rem;"> <i class = "fa fa-sign-out" style = "color: white"></i>Logout</a>
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php 
            //    require 'admin/dbcon.php';
            
                $query = $conn->query("SELECT * from voters where voters_id ='$session_id'")or die (mysql_error ());
				$query = $conn->query("SELECT * from p_voters where voters_id ='$session_id'")or die (mysql_error ());
				$query = $conn->query("SELECT * from t_voters where voters_id ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white;">
					<i>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>                     
                </li>
            <li class="dropdown">
                <a href="logout.php"style = "color: white; padding-rignt: 30px;"> <i class = "fa fa-sign-out" style = "color: white"></i>Logout</a>
            </li>
           
            </ul>
			<?php }?>
        </nav>