
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Unvoted Teachers Page</h3>
					
                </div>
				
				<?php 
					$count = $conn->query("SELECT COUNT(*) as total FROM `t_voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `t_voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `t_voters` WHERE `status` = 'Unvoted'")->fetch_array();
                    $count3 = $conn->query("SELECT COUNT(*) as total FROM `t_voters` WHERE `gender` = 'Male'  AND `status` =  'Unvoted' ")->fetch_array();
                    $count4 =  $conn->query("SELECT COUNT(*) as total FROM `t_voters` WHERE `gender` = 'Female' AND `status` =  'Unvoted' ")->fetch_array();
				?>
				<a href="teachers_voters.php" class = "btn btn-primary btn-outline">ALL Teachers (<?php echo $count['total']?>)</a>
				<a href="teachers_voted.php" class = "btn btn-success btn-outline"> Voted(<?php echo $count1['total']?>)</a>
				<a href="teachers_unvoted.php" class = "btn btn-danger btn-outline">Unvoted(<?php echo $count2['total']?>) </a><p><br clear = all><p/>
                <a href=" " class = "btn btn-danger btn-outline"><i class = "fa fa-paw"></i> Males Voted(<?php echo $count3['total']?>)</a> 
                <a href=" " class = "btn btn-danger btn-outline"><i class = "fa fa-paw"></i> Females Voted(<?php echo $count4['total']?>)</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                
				<br/>
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading"><i class = "fa fa-users"></i>
														Teachers List
													</div>     
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                           <th>Teachers ID</th>
                                            <th>Names</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Account</th>
                                            <th>Date Registered</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
										<?php 
											$query = $conn->query("SELECT * FROM t_voters where status = 'Unvoted' ");
											while($row = $query->fetch_array()){
												$voters_id=$row ['voters_id'];
										?>
										<tr class="odd gradeX">
											    <td><?php echo $row ['id_number'];?></td>
                                                <td><?php echo $row ['firstname']." ". $row ['lastname'];?></td>
                                                <td><?php echo $row ['gender'];?></td>
                                                <td><?php echo $row ['email'];?></td>
                                                <td><?php echo $row ['phone'];?></td>
                                                <td><?php echo $row ['account'];?></td>
                                                <td><?php echo $row ['date'];?></td>   
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
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

    <?php include ('script.php');?>
    <?php include ('edit_teachers_modal.php');?>
	
</body>

</html>

