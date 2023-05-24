<?php 
include ('head.php');
include ('login_query.php');
?>

<body>
    <?php include ('index_banner.php');?>

    <div class="container">
        <div class="row">
           
                <div class="menue">
                    
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel ">
                    <!-- has form in it-->
				
                    
                    <div class="form-panel" style="margin-top:5rem; width:50rem;">
                    <center > 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)" class="col-md-6">
                            <option value = "admin/index.php">System Admin</option>
                            <option value = "login_teachers.php">Teacher</option>
                            <option value = "login_parents.php">Parent</option>
                            <option selected disables>Student</option> 
                        </select>
                    </center>
                        <form role="form" method = "post"  class="index-form text-center ml-5 col-md-12 align-items-center justify-content-center">
                            <div class="form-heading">
                            <center style="color:blue; font-weight:bold;">STUDENT LOGIN</center>
                            </div>
                            
                                
                                <div class="form-field col-md-12 col-xs-12 col-sm-12">
									<label for = "username">Student ID: </label><br/>
										<input class="form-control" placeholder="Enter Student ID" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field col-md-12 col-xs-12 col-sm-12">
									<label for = "username" >Password: </label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div>
                             <br/>
                                <center class="col-md-12 col-xs-12 col-sm-12"><button class="btn btn-lg btn-primary btn-block" name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a  href="register/index.php"><button type="button" class="btn btn-lg btn-primary btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a>
            
                                &nbsp;

                               

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

  <?php include ('script.php');?>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
    <?php    
        include ('footer.php');
    ?>

    <style>
        .index-form {
            margin-left:10rem !important;
        }
    </style>

</body>

</html>
