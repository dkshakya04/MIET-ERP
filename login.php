<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Miet | ERP </title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
	
</head>

<body>
<br>	
	<div class="container-fluid" align="center">
		<a href="index.php"><img align="left" src="images/logo.jpg" height="60px" width="100px"></a>
		<div align="right">
			<a class="btn" href="index.php"><strong>Home</strong></a>
		</div>
	</div>
    <br>



<div class="container-fluid"  style="background-color:lightgray;">

<div class="row p-3 justify-content-around justify-content-center">
	<div class="col-sm-3 bg-info p-4 my-4">
			<center><img src="images/profile_logo.png" height="60px" width="60px">	
			<h3>Student Login</h3></center>
			<form action="" method="post">
				
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" name="s_user" placeholder="Enter username" required>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="s_pass" placeholder="Enter password" required>
				</div>
				<center><input type="submit" class="btn btn-primary" value="login" name="s_login"></center>
			</form>
	
	</div>
	<div class="col-sm-3  bg-success p-4 my-4">
			<center><img src="images/profile_logo.png" height="60px" width="60px">
			<h3>Faculty Login</h3></center>
			<form action="" method="post">
				
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" name="f_user" placeholder="Enter username" required>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="f_pass" placeholder="Enter password" required>
				</div>
				<center><input type="submit" class="btn btn-primary" value="login" name="f_login"></center>
			</form>
	</div>
	<div class="col-sm-3  bg-danger p-4 my-4">
			<center><img src="images/profile_logo.png" height="60px" width="60px">	
			<h3>Admin Login</h3></center>
			<form action="" method="post">
				
				<div class="form-group">
					<label>Username:</label>
					<input type="text" class="form-control" name="a_user" placeholder="Enter username" required>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="a_pass" placeholder="Enter password" required>
				</div>
				
				<center><input type="submit" class="btn btn-primary" value="login" name="a_login"></center>
			</form>

	</div>
	</div>
</div>
	<div class="container-fluid text-center">
		Meerut Institute of Engineering & Technology<br>
		N.H. 58, Delhi-Roorkee Highway, Meerut - 250005. UP (India)
	</div>
	
</body>
</html>

<?php
			session_start();
			include('dbcon.php');
			if(isset($_POST['s_login']))
			{
				$username = $_POST['s_user'];
				$password = $_POST['s_pass'];
				$_SESSION['s_user']=$username;
				$query = "select * from s_login where username = '$username' AND password = '$password'";
				$query_run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($query_run);
				if($row<1)
				{
					?>
					<script>alert("Incorrect username or password");</script>
					<?php
				}
				else
				{
					header('Location:student/studentdash.php');
				}
			}
			
			if(isset($_POST['f_login']))
			{
				$username = $_POST['f_user'];
				$password = $_POST['f_pass'];
				$_SESSION['f_user']=$username;
				$query = "select * from f_login where username = '$username' AND password = '$password'";
				$query_run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($query_run);
				if($row<1)
				{
					?>
					<script>alert("Incorrect username or password");</script>
					<?php
				}
				else
				{
					header('Location:faculty/facultydash.php');
				}
			}
			
			if(isset($_POST['a_login']))
			{
				$username = $_POST['a_user'];
				$password = $_POST['a_pass'];
				$query = "select * from admin where username = '$username' AND password = '$password'";
				$query_run = mysqli_query($conn,$query);
				$row = mysqli_num_rows($query_run);
				if($row<1)
				{
					?>
					<script>alert("Incorrect username or password");</script>
					<?php
				}
				else
				{
					header('Location:admin/admindash.php');
				}
			}
?>
