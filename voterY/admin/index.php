<?php include ('login_query.php');?>
<?php include ('head.php');?>
<body>
<?php include ('index_banner.php');?>
    <div class="container">
        <div class="row">
		
                    
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                <div class="form-panel" style="margin-top:5rem; margin-left: 8rem; width:50rem;">
                    <center> 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)" class="col-md-6">
                            <option selected disables>System Admin</option>
                            <option value = "../login_teachers.php">Teacher</option>
                            <option value = "../login_parents.php">Parents</option>
                            <option value = "../login.php">Student</option> 
                    </select>
                        
                    </center>
                    
                    <div class="form-heading">
                        <center style="color:black; font-weight:bold;">ADMIN LOGIN</center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form text-center ml-5 col-md-12 align-items-center justify-content-center" >
                                <div class="form-field col-md-12 col-xs-12 col-sm-12">
                                    <label for = "username" >Login ID</label>
                                        <input class="form-control" placeholder="Enter Login ID" name="login_id" type="text" autofocus>
                                </div>
							
                                <div class="form-field col-md-12 col-xs-12 col-sm-12">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-field col-md-12 col-xs-12 col-sm-12 mb-4">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-primary btn-block mb-5" name = "login">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
			
            <?php if(isset($_SESSION['id'])){
        ?>
        <script type="text/javascript">
            console.log(<?= $_SESSION['id']; ?>);
        // alert('WelCome!');
        // window.location = 'candidate.php';
        </script>
        <?php
 } ?>
			 </div>
        </div>
    </div>
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>

  <?php 
  include ('script.php');
  include ('footer.php');
  ?>

</body>

</html>
