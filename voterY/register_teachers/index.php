<?php
include_once '../admin/dbcon.php';
include('head.php'); ?>

<body>

	<div id="wrapper">
		<?php
		include('index_banner.php');
		?>
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="row">

				<div class="form-panel">

					<div class="form-body">

						<form method="post" enctype="multipart/form-data">
							<div class="voters_notice">
								<p><strong><i>NOTE</i>:</strong> Only teachers with an ID from the admin can apply.</p>
							</div>
							<div class="form-heading">
								<center>Teachers Registeration</center>
							</div>
							<div class="form-field">
								<label>Teachers ID</label><br />
								<input class="form-control" type="text" name="id_number" placeholder="Teachers ID" required="true">

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
								<label>Email <i>(abc@gmail.com)</i></label><br />
								<input class="form-control" type="email" name="email" placeholder="abc@gmail.com" required="true">
							</div>

							<div class="form-field">
								<label>Phone</label> <br />
								<input class="form-control" type="text" name="phone" placeholder="123456789" required="true">
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
	include('footer.php');
	?>

	</div>
	<!-- /#wrapper -->


	<style>
		a:hover {
			background: blue;
			color: white !important;
		}
	</style>
</body>

</html>