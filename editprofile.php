<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Edit Profile</title>

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
    opacity: 1; /* Firefox */
}
</style>
    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.html">
							<img src="./img/logo-alt1.png" alt="logo">
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
						<li><a href="index.php" style ="color:black; ">Home</a></li>
						<li><a href="controller/ProfileCheck.php" style ="color:black; ">Profile</a></li>
						<li><a href="currentworks.html" style ="color:black; ">Current Works</a></li>
						<li><a href="aboutus.html" style ="color:black; ">About Us</a></li>
						<li><a href="blog.php" style= "color:black;"> Blogs</a></li>
						
						<li><a href="achievement.html" style ="color:black; ">Achievements</a></li>
						<li><a href="controller/Logout.php" style ="color:red; margin-left:20px ">Logout!</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						
						<h1 class="white-text">Edit Your Profile</h1>
						<form action="./controller/EditProfile.php" method="post" enctype="multipart/form-data">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Edit Username: </h3> 
							<input name="uname" type="text" value="<?php echo $_SESSION['name'] ?>" style="margin-top:20px;color:white;">

							<h3 align="left" style="margin-top:20px;color:white;"> Edit Email: </h3> 
							<input name="mail" value="<?php echo $_SESSION['email'] ?>" type="email" style="margin-top:20px;color:white;">

							<h3 align="left" style="margin-top:20px;color:white;"> Enter Old Password: </h3> 
							<?php if($_SESSION['mismatch']==true)
									echo '<h3 align="left" style="margin-top:20px;color:red;"> Wrong Old Password Given!</h3>';
									$_SESSION['mismatch']=false;
							?>
							<input id="psw" name="psw" type="password" style="margin-top:20px;color:white;">


							<h3 align="left" style="margin-top:20px;color:white;"> Enter New  Password: </h3> 
							<input id="pswnew" name="pswnew" type="password" style="margin-top:20px;color:white;" > 
							
							<h3 align="left" style="margin-top:20px;color:white;"> Confirm  New Password: </h3> 
							<input id="confirm_password" name="confirm_password" type="password" style="margin-top:20px;color:white;" >

							<h3 align="left" style="margin-top:20px;color:white;"> Your Facebook Link: </h3> 
							<input name="fb" value="<?php echo $_SESSION['fb'] ?>" type="text" style="margin-top:20px;color:white;">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Position in BAC: </h3> 
							<input name="position" value="<?php echo $_SESSION['Position'] ?>" type="text" style="margin-top:20px;color:white;">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Enter Contact No: </h3> 
							<input name="phone" value="<?php echo $_SESSION['phone'] ?>" type="number" style="margin-top:20px;color:white;">
							
							
							<h3 align="left" style="margin-top:20px;color:white;"> Choose photo: </h3> 
							<h3>
							<input name="editpic" value="<?php echo $_SESSION['propic'] ?>" type="file" accept="image/*" style="margin-top:20px;color:white;">
							</h3>
							
							<h3 align="left" style="margin-top:20px;color:white;"> Skills: </h3> 
							<input name="skill" value="<?php echo $_SESSION['skills'] ?>" type="text" style="margin-top:20px;color:white;">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Write something about yourself: </h3> 
							<textarea name = "about" value="<?php echo $_SESSION['about'] ?>"  rows = "80" cols = "80" style="margin-top:20px;color:white;"> </textarea>
							
							<h3  style="color:white; margin-top:20px; "> <b> Three Catchphrases That Define You: </b> </h3>
							<h3>
							<input type="text" value="<?php echo $_SESSION['first'] ?>" placeholder="First trait" name="first" style="color:white; width:200px; margin-top:20px">
							<input type="text" value="<?php echo $_SESSION['second'] ?>" placeholder="Second trait" name="second" style="color:white; width:200px; margin-left:20px">
							<input type="text" value="<?php echo $_SESSION['third'] ?>" placeholder="Third trait" name="third" style="color:white; width:200px; margin-left:20px">
							</h3>
							
							
							<p><button type="submit" style="margin-left:30px; margin-top: 20px; height: 60px; width: 150px; font-size:32px" > <b> Submit </b> </button></p>
							</form>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		
		<!-- /Blog -->

		<!-- Footer -->
		
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>


		<script>
		var password = document.getElementById("pswnew"),confirm_password = document.getElementById("confirm_password");
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
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
