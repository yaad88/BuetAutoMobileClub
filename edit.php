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
    opacity: 1; /* Firefox */
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
						<a class="logo" href="index.html">
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
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Achievements</a></li>
						<li><a href="#">Blogs</a></li>
						<li><a href="blog.html">CurrentWorks</a></li>
						<li><a href="blog.html" style="color:red; margin-left:20px;"><b>LogOut! <b/></a></li>
						
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Edit Your Profile</h1>
							<form action="index.php/SignUp">
							<input type="text" placeholder="Enter Username" name="uname" style ="color:white; width:520px; " required>
							<p> <input type="text" placeholder="Your Position in BAC" name="position" style ="margin-top:20px; color:white; width:520px "  > </p>
							<p style="color:white; margin-top:20px; "> <b> Three Catchphrases That Define You: </b> </p>
							<input type="text" placeholder="First trait" name="first" style="color:white; width:200px; margin-top:20px">
							<input type="text" placeholder="Second trait" name="second" style="color:white; width:200px; margin-left:20px">
							<input type="text" placeholder="Third trait" name="third" style="color:white; width:200px; margin-left:20px">
							
							<input type="number" placeholder="Enter Your Mobile-No" name="contact" style ="margin-top:20px; color:white; width:520px " required> 
							<p style="color:white; margin-top:20px; "> <b> Select Membership Type: </b> </p>
							<select name="type" style ="margin-top:10px; ; ">
								<option value="0">General Member</option>
								<option value="1">Committee Member</option>
								<option value="2">Admin Panel</option>
								<option value="3">Moderator</option>
							</select>
							<p style="color:white; margin-top:20px; "> <b> Select a photo: </b> </p>
							<input type="file" name="pic" accept="image/*"style ="margin-top:20px; color:white; " required>
							<input type="text" placeholder="Enter Your Skills" name="skills" style ="margin-top:20px; color:white; width:520px; " >
							<input type="text" placeholder="Write something about yourself....introduce yourself to us!" name="about" style ="margin-top:20px; color:white; width:520px; " >
							
							<button type="submit" name="submit" style="margin-left:205px; margin-top: 20px; height: 60px; width: 150px; font-size:32px" > <b> Submit </b> </button>
							</form>
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		
        <script>
			var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
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
