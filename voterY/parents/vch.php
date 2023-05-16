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
        <center><h1>Registered VICE CHAIRMAN</h1>
             <center>
             <select onchange = "page(this.value)">
             <option disabled selected>Select Parents Group</option>
                <option value = "chm.php">CHAIRMAN</option>
                <option disabled selected>VICE CHAIRMAN</option>
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
<p/>

    </heading>
            <div class="row">
				
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
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
											$query = $conn->query("SELECT * FROM parents WHERE `position` = 'Vice Chairman'");
												while($row = $query->fetch_array()){
													$parents_id=$row['parents_id'];
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
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->



              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <?php include ('script.php');?>



</body>

</html>

