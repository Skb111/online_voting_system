<?php

include('admin/dbcon.php');
	
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
		$passwordHashed = md5($password);
		$query = $conn->query("SELECT * FROM t_voters WHERE id_number = '$idno' AND password = '$passwordHashed' ") or die(mysqli_errno());
		$row = $query->fetch_array();
		?>
		<?php
		if ($row){
			$_SESSION['voters_id'] = $row['voters_id'];
			if($row["activated_to_vote"] == 1){
				if($row["status"] == "Voted"){
					?>
					<script type="text/javascript">
					alert('Sorry You Already Voted');
					</script>
					<?php
				}else{
					header('location: teachers_vote.php');
				}
			}else{
				?>
				<script type="text/javascript">
				alert('Your account is not Activated, please contact the election officials');
				</script>
			<?php
			}
		}
		

	
	}
?>