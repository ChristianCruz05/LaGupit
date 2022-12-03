<?php
			$zz = $_POST['id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$pword = $_POST['password'];
			$address = $_POST['Address'];
			$contct = $_POST['ContactNumber'];
			$role = $_POST['role'];
			
	   include('config.php');
		
	 			$query = 'UPDATE user set first_name ="'.$fname.'",
					last_name ="'.$lname.'", password="'.$pword.'",
					address="'.$address.'",contact_number='.$contct.', 
					role="'.$role.'" WHERE
					user_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "admin.php";
		</script>