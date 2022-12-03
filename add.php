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

             <div class="col-lg-12">
                  <h4>Add new Records</h4>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transaction.php?action=add">
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="firstname">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastname">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Password" name="password">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Address" name="Address">
                            </div> 
                            <div class="form-group">
                              <input class="form-control" placeholder="Contact Number" name="ContactNumber">
                            </div> 
                            <div class="form-group">
                             <label>Role</label>
                              <input class="form-control" rows="3"  name="role"></input>
                            </div>  
                            <button type="submit" class="btn btn-default add_btn">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


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

    <!-- Morris Charts JavaScript -->
    <!-- <script src="./js/plugins/morris/raphael.min.js"></script>
    <script src="./js/plugins/morris/morris.min.js"></script>
    <script src="./js/plugins/morris/morris-data.js"></script> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/notifications.js"></script>
</body>
</html>
