<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Events/To-Dos</title>

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
						<li><a href="#" style ="color:black; ">Profile</a></li>
						
						<li><a href="blog.html" style ="color:black; ">About Us</a></li>
						<li><a href="contact.html" style ="color:black; ">Current Works</a></li>
						<li><a href="contact.html" style ="color:black; ">Achievements</a></li>
						<li><a href="contact.html" style ="color:red; margin-left:20px ">Logout!</a></li>
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
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li>Event</li>
						</ul>
						<h1 class="white-text">Assign Task</h1>
						<form action="./controller/Task.php" method="post" enctype="multipart/form-data">

							<input type="text" placeholder="Enter MemberId" name="mid" style ="color:white;  ">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Enter Date </h3> 
							<input name="date" type="date" style="margin-top:20px;color:white;">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Enter Event name </h3> 
							<input name="ename" type="text" style="margin-top:20px;color:white;">
							
							<h3 align="left" style="margin-top:20px;color:white;"> Place Task</h3> 
							<textarea name = "description" placeholder="Event Description" rows = "80" cols = "80" style="margin-top:20px;color:white;"> </textarea>
							
							
							<button type="submit" style="margin-left:30px; margin-top: 20px; height: 60px; width: 150px; font-size:32px" > <b> Submit </b> </button>
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
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
