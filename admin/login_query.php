<?php
	require_once 'dbcon.php';
	

	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$login_id = $_POST['login_id'];
	
		
		$query = $conn->query("SELECT * FROM user WHERE username = 	'$username' AND password = '$password' AND user_id = '$login_id' ") or die($conn->error);
		$fetch = $query->fetch_array();
																		
			if (!$fetch) {
				?>
				<script type="text/javascript">
				alert('Username/Password Error!');
				window.location = 'index.php';
				</script>
				<?php
			} else{	
				$_SESSION['id'] = $fetch['user_id'];
				if(isset($_SESSION['id'])){
				header("location: ../admin/dashboard/index.html");
			}else{
				?>
				<script type="text/javascript">
					console.log("there is an error");
				</script>
				<?php
			}
		}
	}
	?>