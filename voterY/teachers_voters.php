<?php 
include_once "admin/dbcon.php";
include ('head.php');?>

<body>
 <?php include ('view_banner.php');?>
<div class="col-lg-6">

     
    <center>
        <div class="voters_notice">
            <p><strong><i>NOTE</i>:</strong> Registered Teachers</p>
        </div>
        <strong><h3>Registered Teachers List</h3></strong>

    </center>

 &nbsp;

                    <div class="tables-body">
                            <div class="table_back">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">
                                    <thead class="thead">
                                        <tr>
                                         
                                            <th>Teachers ID</th>
                                            <th>Names</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Account</th>
                                            <th>Status</th>
                                            <th>Date Registered</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											
											$query = $conn->query("SELECT * FROM t_voters ORDER BY voters_id DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['voters_id'];
										?>
                                      
											<tr >
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['firstname']." ". $row1 ['lastname'];?></td>
                                                <td><?php echo $row1 ['gender'];?></td>
                                                <td><?php echo $row1['email'];?></td>
												<td><?php echo $row1 ['phone'];?></td>
                                                <td><?php echo $row1 ['account'];?></td>
												<td><?php echo $row1 ['status'];?></td>
												<td><?php echo $row1 ['date'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>

                             </div>
                    </div>
         

</div>                          
        <?php 
            include ('script.php');
        ?>                     
</body>
</html>