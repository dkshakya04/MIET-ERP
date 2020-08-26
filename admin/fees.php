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
	          
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Faculty</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="addfaculty.php">Add New Faculty</a>
                </li>
                <li>
                    <a href="editfaculty.php">Edit Faculty</a>
                </li>
              </ul>
	          </li>
	          <li>
	              <a href="course.php">Manage Course</a>
	          </li>
			  <li class="active">
	              <a href="#">Manage Fees</a>
	          </li>
	          
	         
	        </ul>
	      </div>
    	</nav>

        <!-- Page Content  -->
		
      <div id="content" class="p-4 p-md-2 pt-5">
		<div class="bg-light p-3 border">
			<h3>Manage Fees</h3>
		</div>
        <div class="bg-light p-3 my-2 border text-center">
			<div class="my-3">
			<form action="feespay.php" method="post">
			<table align="center" cellpadding="5">
				<tr>
					<td>Roll No</td>
					<td><input type="text" class="form-control" name="roll"></td>
					<td colspan="2" align="center"> 
						<input type="submit" class="btn btn-primary" name="search" value="Search">
					</td>
					
				</tr>
			</table>
			</form>
			</div>
			<div class="table-responsive">
            <table class="table table-striped table-sm">
			
				<tr>
					<th>Roll No</th>
					<th>Total Fees</th>
					<th>Paid Fees</th>
					<th>Due Fees</th>
					<th>Tools</th>
				</tr>
		<?php
			include('../dbcon.php');
			if(isset($_POST['search']))
			{
				$roll=$_POST['roll'];
				$query="select * from fees where s_rollno='$roll'";
				$result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($result))
				{
		?>
				<tr>
					<td><?php echo $rows['s_rollno'] ?></td>
					<td><?php echo $rows['total_fees'] ?></td>
					<td><?php echo $rows['paid_fees'] ?></td>
					<td><?php echo $rows['due_fees'] ?></td>
					<td><a href="">Pay</a></td>
				</tr>
		
		<?php
				}
			}
			else
			{
				$query="select * from fees order by s_rollno asc";
				$result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($result))
				{
		?>
				<tr>
					<td><?php echo $rows['s_rollno'] ?></td>
					<td><?php echo $rows['total_fees'] ?></td>
					<td><?php echo $rows['paid_fees'] ?></td>
					<td><?php echo $rows['due_fees'] ?></td>
					<td><a href="">Pay</a></td>
				</tr>
		
		<?php
				}
			}
		?>
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
				$rollno = $_POST['rollno'];
				$name = $_POST['name'];
				$fname = $_POST['fname'];
				$dob = $_POST['dob'];
				$mob = $_POST['mob'];
				$email = $_POST['email'];
				$course = $_POST['email'];
				$address = $_POST['address'];
				$query="INSERT INTO student (`s_rollno`, `s_name`, `s_fname`, `s_dob`, `s_mob`, `s_email`, `s_course`, `s_address`) VALUES ('$rollno', '$name', '$fname', '$dob', '$mob', '$email', '$course', '$address')";
				$run=mysqli_query($conn,$query);
				if($run)
				{
					?>
					<script>alert("Student Added Successfully");</script>
					<?php
				}
				else
				{
					echo"error";
				}
			}
?>