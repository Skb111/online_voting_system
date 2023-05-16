<?php 
 require '../admin/dbcon.php';
include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
        <div id="page-wrapper">

    <heading class="voters_heading">
        <center><h1>Registered Health Girl Candidates</h1>
           <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "hdb.php">Head Boy</option>
                <option value = "hdg.php">Head Girl</option>
                <option value = "lb.php">Labour Boy</option>
                <option value ="lg.php">Labour Girl</option>
                <option value ="ag.php">Assembly Boy</option>
                <option value ="ag.php">Assembly Girl</option>
                <option value ="pb.php">Punctuality Boy</option>
                <option value ="pg.php">Punctuality Girl</option>
                <option value ="sb.php">Social Boy</option>
                <option value ="sg.php">Social Girl</option>
                <option value ="fb.php">Food Boy</option>
                <option value ="fg.php">Food Girl</option>
                <option value ="hb.php">Health Boy</option>
                <option disabled selected>Health Girl</option>
                <option value = "lib.php">Library Boy</option>
                <option value = "lig.php">Library Girl</option>
                <option value = "spb.php">Sport Boy</option>
                <option value = "spg.php">Sport Girl</option>
                <option value = "tk.php">Time Keeper</option>
                <option value = "jn.php">Janitor</option>
                <option value = "fm.php">Fellowship Muslim</option>
                <option value = "fc.php">Fellowship Christian</option>
                <option value = "ht.php">Hostel</option>
                </select>
            </center>

    <script>
        function page (src){
            window.location=src;
    }
    </script>

    </heading>
            <div class="row">
				
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                 
                        <?php  
                    $sql = "SELECT * FROM candidate WHERE position = 'Health Girl'";
                    $result = $conn->query($sql);
                    
                    // Loop through the results and assign to the Bootstrap card
                    while ($row = $result->fetch_assoc()) {
                      $firstname = $row['firstname'];
                      $lastname = $row['lastname'];
                      $image = $row['img'];
                      $pos = $row['position'];
                    
                      echo '<div class="card text-center" style="width: 17rem; height:17rem; margin-top:2rem;">
                      
                      <img src="../admin/'.$image.'" style="border-radius:; width: 17rem; height:17rem;" class="img-fluid">
                              <div class="card-body" style="margin-bottom:20rem;">
                                <h6 class="card-title text-center"style="font-weight:bold;">Name: ' . $firstname . ' ' . $lastname . '</h6>
                                <p class="card-text" style="color:; font-weight:bold;">Position: <span style="color:blue; font-weight:bold;">'.$pos.'</span> </p> 
                              </div>
                            </div>';
                    }

          ?>

                        <!-- /.panel-body -->
                    </div>

              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <?php include ('../script.php');?>



</body>

</html>

