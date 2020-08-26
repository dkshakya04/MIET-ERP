<?php
	session_start();
	include('../dbcon.php');
	$fid = $_SESSION['f_user']; 
	$query = "select * from faculty where f_id='$fid'";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_fetch_assoc($result);
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
	<nav class="bg-danger" id="sidebar">
		<div class="p-4">
		<div class="container p-3 text-center">
				<img src="../images/logo.jpg" height="60px" width="100px">
			</div>
			
	        <ul class="list-unstyled components mb-5">
	          <li>
              <a href="facultydash.php">Dashboard</a>
	          </li>
			  <li class="active">
              <a href="#">Profile</a>
	          </li>
			  <li>
              <a href="#">Attendence</a>
	          </li>
			  
			  
	          <!---li>
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
			<div class="bg-light p-3 border">
				<h3>Profile</h3>
			</div>
        <div class="bg-light p-3 my-3 border">
				<div class="navbar">
        		
				<img src="../images/profile_logo.png" height="100px" width="100px">
				<a class="btn btn-primary" href="change_password.php">Change Password</a>

			</div>
			<table class="col-6 table" align="center">
    			<tr>
        			<th>Roll No.</th>
        			<td><?php echo $rows['f_id']; ?></td>
      			</tr>
    			<tr>
        			<th>Name</th>
        			<td><?php echo $rows['f_name']; ?></td>
      			</tr>
    			<tr>
        			<th>Mobile No.</th>
        			<td><?php echo $rows['f_mob']; ?></td>
      			</tr>
    			<tr>
        			<th>Email</th>
       	 			<td><?php echo $rows['f_email']; ?></td>
      			</tr>
      			<tr>
        			<th>Address</th>
       				<td><?php echo $rows['f_address']; ?></td>
      			</tr>
    			<tr>
        			<th>Course</th>
        			<td><?php echo $rows['f_course']; ?></td>
      			</tr>
      			
      		</table>
      
		   
			
		</div>
      </div>
	  



</div>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/proper.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/main.js"></script>
  </body>
</html>