<?php include ('head.php');?>
<?php include("sess.php");?>
<body>
	<?php include 'side_bar.php'; ?>
	<form method = "POST" action ="vote_result.php">
				<div class="container justify">
				<div class="row">

				<div class="panel-heading mt-3">
					<center class="text-white bg-primary fs-3">Head Boy</center>
				</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Head Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>
				
		<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Head Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Head Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>
	
	
	
<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Labour Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Labour Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Labour Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Labour Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>
	
<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Assembly Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Assembly Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Assembly Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Assembly Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

	 
<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Punctuality Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Punctuality Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Punctuality Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Punctuality Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

	 
<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Social Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Social Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Social Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Social Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>


<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Food Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Food Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Food Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Food Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Health Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Health Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Health Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Health Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Library Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Library Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Library Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Library Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Sport Boy</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Sport Boy' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Sport Girl</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Sport Girl' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Time Keeper</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Time Keeper' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Janitor</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Janitor' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Fellowship Muslim</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Fellowship Muslim' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>

<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Fellowship Christian</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Fellowship Christian' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
                    }

          ?>
     </div>
    </div>
</div>


<div class="container justify">
		<div class="row">
		<div class="panel-heading mt-3">
				<center class="text-white bg-primary fs-3">Fellowship Muslim</center>
		</div>

                    <?php  
                    $sql = "SELECT * FROM candidate WHERE `position` = 'Fellowship Muslim' ";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                      $candidate_id = $row['candidate_id'];
                    
                      echo '<div class="card mx-3 my-4" style="width: 15.7rem;">
                      
                      <img src="admin/'.$image.'" style="border-radius: 15px;" class="img-fluid">
                              <div class="card-body">
                                <h6 class="card-title"style="color:; font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p>
                                <center><input type = "checkbox" value = "'.$candidate_id.'" name = "hdb_id" class = "hdb">Give Vote</center>
                              </div>
                            </div>';
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
			$(".hdb").on("change", function(){
				if($(".hdb:checked").length == 1)
					{
						$(".hdb").attr("disabled", "disabled");
						$(".hdb:checked").removeAttr("disabled");
					}
				else
					{
						$(".hdb").removeAttr("disabled");
					}
			});
			
			$(".hdg").on("change", function(){
				if($(".hdg:checked").length == 1)
					{
						$(".hdg").attr("disabled", "disabled");
						$(".hdg:checked").removeAttr("disabled");
					}
				else
					{
						$(".hdg").removeAttr("disabled");
					}
			});
			
			$(".lb").on("change", function(){
				if($(".lb:checked").length == 1)
					{
						$(".lb").attr("disabled", "disabled");
						$(".lb:checked").removeAttr("disabled");
					}
				else
					{
						$(".lb").removeAttr("disabled");
					}
			});
			
			$(".lg").on("change", function(){
				if($(".lg:checked").length == 1)
					{
						$(".lg").attr("disabled", "disabled");
						$(".lg:checked").removeAttr("disabled");
					}
				else
					{
						$(".lg").removeAttr("disabled");
					}
			});
			
			$(".ab").on("change", function(){
				if($(".ab:checked").length == 1)
					{
						$(".ab").attr("disabled", "disabled");
						$(".ab:checked").removeAttr("disabled");
					}
				else
					{
						$(".ab").removeAttr("disabled");
					}
			});
			
			$(".ag").on("change", function(){
				if($(".ag:checked").length == 1)
					{
						$(".ag").attr("disabled", "disabled");
						$(".ag:checked").removeAttr("disabled");
					}
				else
					{
						$(".ag").removeAttr("disabled");
					}
				
			});
			$(".pb").on("change", function(){
				if($(".pb:checked").length == 1)
					{
						$(".pb").attr("disabled", "disabled");
						$(".pb:checked").removeAttr("disabled");
					}
				else
					{
						$(".pb").removeAttr("disabled");
					}
			});	
			$(".pg").on("change", function(){
				if($(".pg:checked").length == 1)
				{
					$(".pg").attr("disabled", "disabled");
					$(".pg:checked").removeAttr("disabled");
				}
			else
				{
					$(".pg").removeAttr("disabled");
				}
			});
			$(".sb").on("change", function(){
				if($(".sb:checked").length == 1)
				{
					$(".sb").attr("disabled", "disabled");
					$(".sb:checked").removeAttr("disabled");
				}
			else
				{
					$(".sb").removeAttr("disabled");
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
			$(".fb").on("change", function(){
				if($(".fb:checked").length == 1)
				{
					$(".fb").attr("disabled", "disabled");
					$(".fb:checked").removeAttr("disabled");
				}
			else
				{
					$(".fb").removeAttr("disabled");
				}
			});
			$(".fg").on("change", function(){
				if($(".fg:checked").length == 1)
				{
					$(".fg").attr("disabled", "disabled");
					$(".fg:checked").removeAttr("disabled");
				}
			else
				{
					$(".fg").removeAttr("disabled");
				}
			});
			$(".hb").on("change", function(){
				if($(".hb:checked").length == 1)
				{
					$(".hb").attr("disabled", "disabled");
					$(".hb:checked").removeAttr("disabled");
				}
			else
				{
					$(".hb").removeAttr("disabled");
				}
			});
			$(".hg").on("change", function(){
				if($(".hg:checked").length == 1)
				{
					$(".hg").attr("disabled", "disabled");
					$(".hg:checked").removeAttr("disabled");
				}
			else
				{
					$(".hg").removeAttr("disabled");
				}
			});
			$(".lib").on("change", function(){
				if($(".lib:checked").length == 1)
				{
					$(".lib").attr("disabled", "disabled");
					$(".lib:checked").removeAttr("disabled");
				}
			else
				{
					$(".lib").removeAttr("disabled");
				}
			});
			$(".lig").on("change", function(){
				if($(".lig:checked").length == 1)
				{
					$(".lig").attr("disabled", "disabled");
					$(".lig:checked").removeAttr("disabled");
				}
			else
				{
					$(".lig").removeAttr("disabled");
				}
			});
			$(".spb").on("change", function(){
				if($(".spb:checked").length == 1)
				{
					$(".spb").attr("disabled", "disabled");
					$(".spb:checked").removeAttr("disabled");
				}
			else
				{
					$(".spb").removeAttr("disabled");
				}
			});
			$(".spg").on("change", function(){
				if($(".spg:checked").length == 1)
				{
					$(".spg").attr("disabled", "disabled");
					$(".spg:checked").removeAttr("disabled");
				}
			else
				{
					$(".spg").removeAttr("disabled");
				}
			});
			$(".tk").on("change", function(){
				if($(".tk:checked").length == 1)
				{
					$(".tk").attr("disabled", "disabled");
					$(".tk:checked").removeAttr("disabled");
				}
			else
				{
					$(".tk").removeAttr("disabled");
				}
			});
			$(".jn").on("change", function(){
				if($(".jn:checked").length == 1)
				{
					$(".jn").attr("disabled", "disabled");
					$(".jn:checked").removeAttr("disabled");
				}
			else
				{
					$(".jn").removeAttr("disabled");
				}
			});
			$(".fm").on("change", function(){
				if($(".fm:checked").length == 1)
				{
					$(".fm").attr("disabled", "disabled");
					$(".fm:checked").removeAttr("disabled");
				}
			else
				{
					$(".fm").removeAttr("disabled");
				}
			});
			$(".fc").on("change", function(){
				if($(".fc:checked").length == 1)
				{
					$(".fc").attr("disabled", "disabled");
					$(".fc:checked").removeAttr("disabled");
				}
			else
				{
					$(".fc").removeAttr("disabled");
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
		});	
	</script>
	
<?php include ('script.php');
include ('footer.php');?>
  
</html>

