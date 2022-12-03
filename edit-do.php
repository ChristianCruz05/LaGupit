<?php
			$zz = $_POST['id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$mname = $_POST['Middlename'];
			$address = $_POST['Address'];
			$contct = $_POST['Contact'];
			$role = $_POST['role'];
			
	   include('config.php');
		
	 			$query = 'UPDATE user set first_name ="'.$fname.'",
					last_name ="'.$lname.'", password="'.$mname.'",
					address="'.$address.'",contact_number="'.$contct.'", 
					role="'.$role.'" WHERE
					user_id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "admin.php";
		</script>