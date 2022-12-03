
<?php
       
       include('config.php');
       
        ?>  

<body>
<?php
			if (!isset($_GET['do']) || $_GET['do'] != 1) {

					$query = 'DELETE FROM user
							WHERE
							user_id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "admin.php";
			</script>				
				
			<?php
			//break;
				}		
			?>
</body>
</html>