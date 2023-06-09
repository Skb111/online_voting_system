<?php
require_once 'dbcon.php';
include_once('head.php');
?>

<body>

	<div id="wrapper">
		<?php
		include('index_banner.php');
		?>
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="row">

				<div class="form-panel">

					<div class="form-body col-md-4 mx-auto">

						<form method="post" enctype="multipart/form-data">


							<div class="voters_notice">
								<p><strong><i>NOTE</i>:</strong> if you did not registered for online voting, your name will not appear on list below and
									you can not vote using the online system.</p>
							</div>
							<div class="form-heading">
								<center>Students Registeration</center>
							</div>
							<div class="form-field">
								<label>Student ID</label><br />
								<input class="form-control" type="text" name="id_number" placeholder="Student ID" required="true">

							</div>

							<div class="form-field">
								<label>Password</label><br />
								<input class="form-control" type="password" name="password" id="pass" placeholder="Password" required="true" />
							</div>
							<div class="form-field">
								<label>Retype Password</label><br />
								<input class="form-control" type="password" name="password1" id="pass" placeholder="Retyp Password" required="true" />
							</div>

							<div class="form-field">
								<label>First Name</label><br />
								<input class="form-control" type="text" name="firstname" placeholder="First Name" required="true">
							</div>

							<div class="form-field">
								<label>Last Name</label><br />
								<input class="form-control" type="text" name="lastname" placeholder="Last Name" required="true">
							</div>

							<div class="form-field">
								<label>Gender</label> <br />
								<select class="form-control" name="gender">
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>

							<div class="form-field">
								<label>Program of Study <i>(enter initials only i.e CSC, ACC,BFN, EDU..)</i></label><br />
								<input class="form-control" type="text" name="prog_study" placeholder="E.g CSC, ACC,BFN, EDU" required="true">
							</div>

							<div class="form-field">
								<label>Select Study Level</label> <br />
								<select class="form-control" name="year_level">
									<option>1st Year</option>
									<option>2nd Year</option>
									<option>3rd Year</option>
									<option>4th Year</option>

								</select>
							</div>
							<br />
							<center><button name="save" type="submit">Create An Account</button></center>
							<div class="link">
								<h2>
									<center><a href="../login.php" style="font-size:16px; border:1px solid blue; padding:10px 16px; border-radius:5px; text-decoration:none;">Login to vote</a></center>
								</h2>
							</div>

					</div>


					</form>

					<?php //PHP script to insert signup data into database
					include_once 'signUpData.php';

					?>

				</div>

				</form>

			</div>
		</div>

		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->
	<?php
	
	?>

	</div>

</body>

</html>