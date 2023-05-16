<?php 

include ('session.php');
?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Teachers List</h3>
					
                </div>
				
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Teachers</button>
				<?php include ('add_teachers_modal.php');?>
                 <a href="teachers_excel.php"><button type="button" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i>Export to Excel</button></a>
                
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
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
                                         
                                            
                                            <th>Image</th>
                                            <th>Position</th>
                                            <th>Email</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
											$bool = false;
											$query = $conn->query("SELECT * FROM teachers ORDER BY teachers_id DESC");
												while($row = $query->fetch_array()){
													$teachers_id=$row['teachers_id'];
										?>
											<td width="50"><img src="<?php echo $row['img']; ?>" width="50" height="50" class="img-rounded"></td>
											<td><?php echo $row ['position'];?></td>
                                            <td><?php echo $row ['email'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['phone'];?></td>
                                            <td><?php echo $row ['gender'];?></td>
                                            
                                            
                                            <td style="text-align:center">
											
												 <a rel="tooltip"  title="Delete" id="<?php echo $teachers_id; ?>" href="#delete_user<?php echo $teachers_id; ?>" data-target="#delete_user<?php echo $teachers_id?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
											 <?php include ('delete_teachers_modal.php'); ?>
												  <a rel="tooltip"  title="Edit" id="<?php echo $row['teachers_id'] ?>" href="#edit_candidate<?php echo $row['teachers_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	
												
											</td>
														
											    <?php 
													
													require 'edit_teachers_modal.php';
												?>
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

</body>

</html>

