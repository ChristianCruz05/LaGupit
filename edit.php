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
          <div id="wrapper">

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
                <a class="navbar-brand" href="index.php">Dashboard</a>
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
                        <h4 class="page-header">
                           
                        </h4>
                       
                    </div>
                </div>
                <!-- /.row -->


             <?php
              include "config.php"; 
              $query = 'SELECT * FROM user
                            WHERE
                            user_id ='.$_GET['id'];
                          $result = mysqli_query($db, $query) or die(mysqli_error($db));
                            while($row = mysqli_fetch_array($result))
                            {   
                              $zz= $row['user_id'];
                              $i= $row['first_name'];
                              $a=$row['last_name'];
                              $b=$row['password'];
                              $c=$row['address'];
                              $d=$row['contact_number'];
                              $e=$row['role'];
                          
                            }
                            
                            $id = $_GET['id'];
              ?>

             <div class="col-lg-12">
                  <h4>Edit Records</h4>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit-do.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $a; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Password" name="Middlename" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address" value="<?php echo $c; ?>">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact Number" name="Contact" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                             <label>Role</label>
                              <input class="form-control" name="role" value="<?php echo $e; ?>">
                            </div>  
                            <button type="submit" class="btn btn-default">Update Record</button>

                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</main>
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="./js/bootstrap.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
