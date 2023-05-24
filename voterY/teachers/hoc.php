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
        <center><h1>Registered HEAD OF CLUBS</h1>
           <center>
           <select onchange = "page(this.value)">
            <option disabled selected>Select Teachers Group</option>
                <option value = "hod.php">HOD</option>
                <option value = "exm.php">EXAM DIRECTOR</option>
                <option value = "cons.php">COUNSELLOR</option>
                <option value = "msd.php">MUSIC DIRECTOR</option>
                <option value = "dis.php">DISCIPLINARIAN</option>
                <option value = "dac.php">DRAMA AND CHOROGRAPHY</option>
                <option value = "spd.php">SPORT DIRECTOR</option>
                <option disabled selected>HEAD OF CLUBS</option>
                <option value = "ht.php">HEAD TEACHERS</option>
                <option value = "sg.php">Social Girl</option>
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
                    $sql = "SELECT * FROM teachers WHERE position = 'Head Of Clubs'";
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

