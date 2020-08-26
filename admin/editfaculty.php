
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
                    <a href="#">Edit Student</a>
              </li>
                </ul>
	          </li>
	          
	          <li class="active">
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Faculty</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="addfaculty.php">Add New Faculty</a>
                </li>
                <li class="active">
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
			<h3>Edit Faculty</h3>
		</div>
        <div class="bg-light p-3 my-2 border text-center">
				<div class="my-3">
			<form action="editfaculty.php" method="post">
			<table align="center" cellpadding="5">
				<tr>
					<td>Faculty Id</td>
					<td><input type="text" class="form-control" name="fid"></td>
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
					<th>Id</th>
					<th>Name</th>
					<th>Mobile No</th>
					<th>Email</th>
					<th>Address</th>
					<th>Course</th>
					<th>Date of Joining</th>					
					<th>Experience</th>
					<th>Tools</th>
				</tr>
		<?php
			include('../dbcon.php');
			if(isset($_POST['search']))
			{
				$fid=$_POST['fid'];
				$query="select * from faculty where f_id='$fid'";
				$result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($result))
				{
		?>
				<tr>
					<td><?php echo $rows['f_id'] ?></td>
					<td><?php echo $rows['f_name'] ?></td>
					<td><?php echo $rows['f_mob'] ?></td>
					<td><?php echo $rows['f_email'] ?></td>
					<td><?php echo $rows['f_address'] ?></td>
					<td><?php echo $rows['f_course'] ?></td>
					<td><?php echo $rows['f_doj'] ?></td>
					<td><?php echo $rows['f_exp'] ?></td>
					
					<td>Edit/Delete</td>
				</tr>
		
		<?php
				}
			}
			else
			{
				$query="select * from faculty order by f_id asc";
				$result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($result))
				{
		?>
				<tr>
					<td><?php echo $rows['f_id'] ?></td>
					<td><?php echo $rows['f_name'] ?></td>
					<td><?php echo $rows['f_mob'] ?></td>
					<td><?php echo $rows['f_email'] ?></td>
					<td><?php echo $rows['f_address'] ?></td>
					<td><?php echo $rows['f_course'] ?></td>
					<td><?php echo $rows['f_doj'] ?></td>
					<td><?php echo $rows['f_exp'] ?></td>
					
					<td>Edit/Delete</td>
				</tr>
		
		<?php
				}
			}
		?>
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

