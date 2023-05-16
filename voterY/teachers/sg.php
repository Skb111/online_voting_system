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
        <center><h1>Registered Social Girl</h1>
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
                <option value = "hoc.php">HEAD OF CLUBS</option>
                <option value = "ht.php">HEAD TEACHERS</option>
                <option disabled selected>SOCIAL GIRL</option>
                </select>
            </center>

    <script>
        function page (src){
            window.location=src;
    }
    </script>
    <p/>

    </heading>
            <div class="row">
				
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                     
                        <div class="panel-body">
                            
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">

                                    <thead class="thead">                                     
                                   
                                         <tr>
                                            <th>Image</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                        <?php 
                                            // require '../admin/dbcon.php';
                                            $bool = false;
                                            $query = $conn->query("SELECT * FROM teachers WHERE `position` = 'Social Girl'");
                                                while($row = $query->fetch_array()){
                                                    $teachers_id=$row['teachers_id'];
                                        ?>
                                            
                                            <td width="50"><img src="../admin/<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['phone'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                        </tr>
                                        
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- /.table-responsive -->
                            
                        </div>
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

