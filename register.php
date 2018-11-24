<?php
 require './index.html';
 session_start();
require_once('dbconfig/config.php');
	

?>


<head>
	<title> STUDENT HUB</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
</head>
<body>
    <div class="sign-up">
        <h1>SIGN UP</h1>
        <form class="form-inline" action="register.php" method="post">
    
        <div class="textbox">
        <label class="sr-only" for="exampleInputEmail3">Username</label>
        <i class="fa fa-user" ></i>;
        <input type="text" class="form-control" id="user" placeholder="Enter Username" name="username" required>
        </div>
       <!--     
        <div class="textbox">
        <label class="sr-only" for="exampleInputEmail3">Email address</label>
        <i class="fa fa-user" aria-hidden="true"></i>;
        <input type="email" class="form-control" id="user" placeholder="Email" name="email">
        </div>
       -->
        
    <div class="textbox">
        <label class="sr-only" for="exampleInputPassword3">Password</label>
        <i class="fa fa-lock" ></i>;
        <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="password" required>
    </div>
    
     <div class="textbox">
        <label class="sr-only" for="exampleInputPassword3">Password</label>
        <i class="fa fa-lock" ></i>;
        <input type="password" class="form-control" id="pass2" placeholder="Enter Password" name="cpassword" required>
    </div>       
    
    
    <button name="register" class="btn" type="submit">Sign Up</button>    
    </form>
    </div>
    <?php
			if(isset($_POST['register']))//$_POST is global variable
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from users where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into users values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: index.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>
</html>


