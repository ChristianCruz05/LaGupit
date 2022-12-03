<!--La Gupit Landing Page (unfinished)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="/dist/output.css" rel="stylesheet">

    	
		<!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,900&display=swap" rel="stylesheet">
    
		<!--CSS-->
        


		<!--SCRIPTS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--STYLE-->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');
      @import url('./css/bootstrap.css');
      @import url('./css/plugins/morris.css');
      div{
        font-family: 'Questrial', sans-serif;
      }   

      header {
        background-color: #2C2828;
      }

      body {
        background-image: url("/assets/images/landingpagebg.png");
        background-repeat: no-repeat;
        background-size: cover;
      }      

      .div-login {
        background-color: #DBBAB5;
      }

      button {
        background-color: #BC604D;
      }

      button:hover {
        background-color: #9d5141;
      }
    </style>
    <title>ADMIN PAGE</title>
    
</head>
<body>
<main>

		<div id="wrapper container-fluid">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand bg-dark text-light" href="admin.php">LAGUPIT ADMIN PAGE</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           USER DATABASE
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-6">
                  <h4>User Information</h4>
                      <div class="col-lg-6">
                       <?php include 'config.php'; ?>

                        <?php $results = mysqli_query($db, "SELECT * FROM user"); ?>
                        </div>
            </div>
            <div class="col-lg-6">
                  <a href="add.php"class="btn btn-outline-dark">Add New User</a>
            </div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Comment</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
             <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['address']; ?></td>
             <td><?php echo $row['contact_number']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['user_id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="del.php?id=<?php echo $row['user_id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
<?php if(isset($_GET['m'])):?>
        <div class="flash-data" data-flashdata="<?= $_GET['m'];?>"></div>
?>
<?php endif;?>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
</main>
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="./js/bootstrap.min.js"></script> -->

    <!-- Morris Charts JavaScript -->
    <!-- <script src="./js/plugins/morris/raphael.min.js"></script>
    <script src="./js/plugins/morris/morris.min.js"></script>
    <script src="./js/plugins/morris/morris-data.js"></script> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/notifications.js"></script>
</body>
</html>
