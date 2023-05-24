
<?php 
include ('login_query_parents.php');
include ('head.php');
?>
<body>
    <?php include ('index_banner.php');?>

    <div class="container">
        <div class="row">
           
                <div class="menue">
                    
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel">
                    <!-- has form in it-->
				
                    <div class="form-panel" style="margin-top:5rem; margin-left:8rem; width:50rem;">
                        <center>
                        <i>Login As:</i>
                        <select onchange = "page(this.value)" class="col-md-6">
                            <option value = "admin/index.php">System Admin</option>
                            <option value = "login_teachers.php">Teachers</option>
                            <option selected disables>Parents</option>
                            <option value = "login.php" >Student Voter</option> 
                        </select>
                        <p>
                    </center>
                        <form role="form" method = "post" class="index-form">
                            <div class="form-heading">
                            <center style="color:green; font-weight:bold;">Parents Login</center>
                            </div>
                            
                                
                                <div class="form-field">
									<label for = "username">Parents ID: </label><br/>
										<input class="form-control" placeholder="Enter Parent ID" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div>
                             <br/>
                                <center><button class="btn btn-lg btn-success btn-block " name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a  href="register_parents/index.php"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a>
            
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

</body>

</html>
