<?php
       
 include('config.php');
       
       
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$pword = $_POST['password'];
$address = $_POST['Address'];
$contact_number = $_POST['ContactNumber'];
$role = $_POST['role'];

switch ($_GET['action'])
{
    case 'add':
        $query = "INSERT INTO user
								(user_id,first_name, last_name, password, address,contact_number, role)
								VALUES ('Null','" . $fname . "','" . $lname . "','" . $pword . "','" . $address . "','$contact_number','" . $role . "')";
        mysqli_query($db, $query) or die('Error in updating Database');

    break;

}
?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "admin.php";
	</script>