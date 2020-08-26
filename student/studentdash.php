<?php
	session_start();
	include('../dbcon.php');
	$rollno = $_SESSION['s_user']; 
	$query = "select * from student where s_rollno='$rollno'";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_fetch_assoc($result);
	$query2 = "select * from fees where s_rollno='$rollno'";
	$result2 = mysqli_query($conn,$query2);
	$rows2 = mysqli_fetch_assoc($result2);
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>MIET-ERP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css" />
	
    <link rel="stylesheet" href="../bootstrap/css/style.css">
  </head>
<body>
<div class="p-2 sticky-top bg-dark">
	<div class="row container-fluid">
		<div class="col align-self-center">
		<button type="button" id="sidebarCollapse" class="btn btn-info">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only"></span>MIET-ERP
	        </button>
		</div class="col">
		<div>
		<a class="btn btn-danger" href="../index.php" role="button">Log out</a>
		</div>
	</div>
</div>
		
<div class="wrapper d-flex align-items-stretch" style="background-color:lightgray;">
	<nav class="bg-info" id="sidebar">
		<div class="p-4">
		<div class="container p-3 text-center">
				<img src="../images/logo.jpg" height="60px" width="100px">
			</div>
			
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
              <a href="#">Dashboard</a>
	          </li>
			  <li>
              <a href="studentprofile.php">Profile</a>
	          </li>
			  <li>
              <a href="#">Attendence</a>
	          </li>
			  <li>
              <a href="#">Fees</a>
	          </li>
			  
	          <!--li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
			  <li>
	              <a href="#">About</a>
	          </li>
	          
	          <li>
              <a href="#">Contact</a>
	          </li-->
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
		
		<div id="content" class="p-4 p-md-2 pt-5">
			<div class="navbar bg-light p-3">
				<h3>Student Dashboard</h3>
				<h3><?php echo "(".$rows['s_name'].")"; ?></h3>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="container p-3 my-3 bg-info text-white"><h1>75%</h1>Attendence</div>
				</div>
				<div class="col-sm-3">
					<div class="container p-3 my-3 bg-info text-white"><h1><?php echo $rows2['due_fees'] ?></h1>Fees Due</div>
				</div>
				<div class="col-sm-3">
					<div class="container p-3 my-3 bg-info text-white"><h1>0</h1>Book Issue</div>
				</div>
				<div class="col-sm-3">
					<div class="container p-3 my-3 bg-info text-white"><h1>0 Event</h1>Upcoming Event</div>
				</div>
			</div>
        <div class="bg-light p-3 my-3 border">
			
				<img src="../images/school.jpg" height="100%" width="100%">
		</div>
	</div>
	  



</div>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/proper.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/main.js"></script>
  </body>
</html>