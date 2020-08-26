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
		<div class="col">
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
              <a href="admindash.php">Dashboard</a>
	          </li>
			  <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Student</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
				
			   <li>
                    <a href="addstudent.php">Add New Student</a>
              </li>
              <li>
                    <a href="editstudent.php">Edit Student</a>
              </li>
                </ul>
	          </li>
	          
	          <li class="active">
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Faculty</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li class="active">
                    <a href="#">Add New Faculty</a>
                </li>
                <li>
                    <a href="editfaculty.php">Edit Faculty</a>
                </li>
              </ul>
	          </li>
	          <li>
	              <a href="course.php">Manage Course</a>
	          </li>
			  <li>
	              <a href="fees.php">Manage Fees</a>
	          </li>
	          
	         
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
		
      <div id="content" class="p-4 p-md-2 pt-5">
		<div class="bg-light p-3 border">
			<h3>Add New Faculty</h3>
		</div>
        <div class="bg-light p-3 my-2 border text-center">
			<form action="addfaculty.php" method="post">
			<table align="center" cellpadding="5">
				<tr>
					<td>Faculty Id</td>
					<td><input type="text" class="form-control" name="fid"></td>
				</tr>
				<tr>
					<td>Faculty Name</td>
					<td><input type="text" class="form-control" name="name"></td>
				</tr>
				<tr>
					<td>Faculty Mobile No.</td>
					<td><input type="text" class="form-control" name="mobile"></td>
				</tr>
				</tr>
					<td>Faculty Email</td>
					<td><input type="email" class="form-control" name="email"></td>
				</tr>
				<tr>
					<td>Faculty Address</td>
					<td><input type="text" class="form-control" name="address"></td>
				
				<tr>
					<td>Faculty Course</td>
					<td><input type="text" class="form-control" name="course"></td>
				</tr>
				<tr>
					<td>Date of Joining</td>
					<td><input type="date" class="form-control" name="doj"></td>
				</tr>
				<tr>
					<td>Experience</td>
					<td><input type="number" class="form-control" name="exp"></td>
					<td>Year</td>
				</tr>
				
				
				
				<tr>
					<td colspan="2" align="center"> 
						<input type="submit" class="btn btn-primary" name="submit" value="Submit">
						<a class="btn btn-danger" href="addfaculty.php">Reset</a>
					</td>
					
				</tr>
			</table>
			</form>
		</div>
		
	  



</div>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/proper.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/main.js"></script>
  </body>
</html>

<?php
	
			include('../dbcon.php');
			if(isset($_POST['submit']))
			{
				$fid = $_POST['fid'];
				$name = $_POST['name'];
				$mobile = $_POST['mobile'];
				$email = $_POST['email'];
				$address = $_POST['address'];
				$course = $_POST['course'];
				$doj = $_POST['doj'];
				$exp = $_POST['exp'];
				$query="INSERT INTO `faculty` (`f_id`, `f_name`, `f_mob`, `f_email`, `f_address`, `f_course`, `f_doj`, `f_exp`) VALUES ('$fid', '$name', '$mobile', '$email', '$address', '$course', '$doj', '$exp')";
				$run=mysqli_query($conn,$query);
				if($run)
				{
					?>
					<script>alert("Faculty Added Successfully");</script>
					<?php
				}
				else
				{
					echo"error";
				}
			}
?>