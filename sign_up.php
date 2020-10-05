<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Welcome to BAC</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/home/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/home/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/home/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			::placeholder {
    		color: white;
    		opacityity: 1; /* Firefox */
			}
		</style>

    </head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" >
							<img src="./img/logo-alt1.png"  alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php"> Home</a></li>
						<li><a href="currentworks.html">CurrentWorks</a></li>
						<li><a href="blog.php">Blogs</a></li>
						
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="achievements.html">Achievements</a></li>
						
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Home -->
		<div  class="hero-area section">
		

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
			<!-- /Backgound Image -->
			
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<h1 class="white-text" >Signup</h1>
							<form action="./controller/SignUp.php" method="post" enctype="multipart/form-data">
							

							<h3 align="left" style="margin-top:20px;color:white;"> Enter Username: </h3> 
							<input  name="uname" type="text" style="margin-top:20px;color:white;" required>

							 

							<h3 align="left" style="margin-top:20px;color:white;"> Enter Mail: </h3> 
							<input name="mail" type="email" style="margin-top:20px;color:white;" required>


							<h3 align="left" style="margin-top:20px;color:white;"> Enter MemberID: </h3> 
							<input name="memid" pattern="^\d{7}$" title="Invalid MemberID" type="password" style="margin-top:20px;color:white;" required>	

							<h3 align="left" style="margin-top:20px;color:white;"> Enter Password: </h3> 
							<input id="psw" name="psw" type="password" style="margin-top:20px;color:white;" required> 
							
							<h3 align="left" style="margin-top:20px;color:white;"> Confirm Password: </h3> 
							<input id="confirm_password" name="confirm_password" type="password" style="margin-top:20px;color:white;" required>

							<h3 align="left" style="margin-top:20px;color:white;"> Enter Contact No: </h3> 
							<input name="contact" type="number" style="margin-top:20px;color:white;" required>
							
							 <h3 align="left" style="color:white; margin-top:20px; "> <b> Select Membership Type: </b> </h3>
							<h3 align="left">
							<select name="type" style ="margin-top:20px; ; ">
								<option value="0">General Member</option>
								<option value="1">Committee Member</option>
								<option value="2">Admin Panel</option>
								<option value="3">Moderator</option>
							</select>
							</h3>


							<h3 align="left" style="margin-top:20px;color:white;"> Choose photo: </h3> 
							<h3>
							<input name="pic" type="file" accept="image/*" style="margin-top:20px;color:white;" required>
							</h3>

							<h3 align="left" style="margin-top:20px;color:white;"> Skills: </h3> 
							<input name="skills" type="text" style="margin-top:20px;color:white;">	
							
							
							 
							 <!--echo $this->session->flashdata('msg');
							//echo form_open_multipart('SignUp/upload_file');-->
							<button type="submit" name="submit" style="margin-left:30px; margin-top: 20px; height: 60px; width: 150px; font-size:32px" value="upload"> <b> Submit </b> </button>
							</form>
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->

		
		<!-- jQuery Plugins -->	
		<script>
		var password = document.getElementById("psw"),confirm_password = document.getElementById("confirm_password");
		function validatePassword()
		{
  			if(password.value != confirm_password.value) 
  			{
    			confirm_password.setCustomValidity("Passwords Don't Match");
  			} 
  			else 
  			{
    			confirm_password.setCustomValidity('');
  			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
		</script>	
		<script type="text/javascript" src="js/home/jquery.min.js"></script>
		<script type="text/javascript" src="js/home/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/home/main.js"></script>

	</body>
</html>