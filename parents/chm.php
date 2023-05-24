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
        <center><h1>Registered CHAIRMAN</h1>
    </heading>
           <center>
           <select onchange = "page(this.value)">
            <option disabled selected>Select Parents Group</option>
                <option disabled selected>CHAIRMAN</option>
                <option value = "vch.php">VICE CHAIRMAN</option>
                <option value = "trs.php">TREASURER</option>
                <option value = "sec.php">SECRETARY</option>
                <option value = "pro.php">PRO</option>
                <option value = "evc.php">EVENT COORDINATOR</option>
                <option value = "mmc.php">MEMBERSHIP COORDINATOR</option>
                <option value = "fnc.php">FUNDRAISING COORDINATOR</option>
                <option value = "adc.php">ADVOCACY CHAIRMAN</option>
                <option value = "tac.php">TEACHER APPRECIATION COORDINATOR</option>
                </select>
            </center>

    <script>
        function page (src){
            window.location=src;
    }
    </script>

    
            <div class="row">
				
                    <div class="panel panel-default">
                       
                         <!-- /.panel-heading -->
                 
                         <?php  
                    $sql = "SELECT * FROM parents WHERE position = 'Chairman'";
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

