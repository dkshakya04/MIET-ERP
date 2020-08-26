
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
              <a href="studentdash.php">Dashboard</a>
	          </li>
			  <li class="active">
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
			      	  	
			<div class="bg-light p-3 border">
				<h3>Change Password</h3>
			</div>
      <div class="bg-light p-3 my-3 border">
        <div class="navbar">  		
          <img src="../images/profile_logo.png" height="100px" width="100px">
        </div>
        <div class="row justify-content-center p-3">
        <div class="col-md-4 p-3 my-3">
          <form action="change_password.php" method="post">    
            Old Password:
            <input type="password" class="form-control" name="old_pass" required>
            New Password:
            <input type="password" class="form-control" name="new_pass" required>
            Confirm New Password:
            <input type="password" class="form-control" name="c_new_pass" required>
            <center><input type="submit" class="btn btn-primary my-3" name="update" value="Update">
            <a class="btn btn-info my-3" href="studentprofile.php">Back</a></center>
         </form>
       </div>
     </div>
  	  </div>
    </div>
</div>
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/proper.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/main.js"></script>
  </body>
</html>

<?php
  session_start();
  include('../dbcon.php');
  if(isset($_POST['update']))
  {
    $rollno = $_SESSION['s_user'];
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $c_new_pass = $_POST['c_new_pass'];
    $qu="select * from s_login where username='$rollno'";
    $res=mysqli_query($conn,$qu);
    $row=mysqli_fetch_assoc($res);
    $pass=$row['password'];
    if($old_pass==$pass)
    {
        if($new_pass==$c_new_pass)
        {
          $password=$new_pass;
          $query ="update s_login set password = '$password' where `s_login`.`username` = '$rollno';";
          $result = mysqli_query($conn,$query);
        ?>
          <script>alert("Password Changed Successfully.");</script>
        <?php

        }
        else
        {
        ?>            
           <script>alert("Password Not Matched");</script>
        <?php
        }
    }
    else
    {
        ?>
          <script>alert("Incorrect Old Password");</script>
        <?php
    } 
    
   
  }          
?>