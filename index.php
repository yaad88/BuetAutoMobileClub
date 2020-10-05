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
	input[type=searchtext] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: transparent;
    background-image: url('./img/searchicon.gif');
    background-position: 10px 10px; 
    background-size: 30px 30px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=searchtext]:focus {
    width: 100%;
}
.mySlides {display:none;}
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
					<ul class="main-menu nav navbar-nav navbar-left">
						<li><a href="index.php"> Home</a></li>
						<li><a href="currentworks.html">CurrentWorks</a></li>
						<li><a href="blog.php">Blogs</a></li>
						<li><a href="sign_up.php">Signup</a></li>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="achievements.html">Achievements</a></li>
						<li style="margin-left:120px">
							<form action="./controller/LogIn.php" method="post" enctype="multipart/form-data">
							<input type="text" placeholder="MemberID"  name="uname" style ="width:130px; color:white">
							<input type="password" placeholder="Password" name="psw" style ="width:120px; margin-left:20px; color:white">        
							<button type="submit" name="submit" style=" font-size:32px margin-left:20px" > <b> Login </b> </button>
							</form>
						
						</li>
						
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
				  <form action="./search_result.php" method="post" >
				  	<input type="searchtext" name="search" placeholder="Search A Member/Blog.." style=" color:white">
				  </form>
					<div class="row">
						<div class="col-md-8">
							
							<h1 class="white-text">Buet Automobile Club</h1>
							<p class="lead white-text">Speed. Power. Progress</p>
							<a class="main-button icon-button" href="https://www.youtube.com/">Here's A Quick Preview!</a>
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2>Welcome to BAC</h2>
							<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-automobile" style="font-size:48px;color:red"></i>
							<div class="feature-content">
								<h4>Speed </h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-bolt" style="font-size:48px;color:red"></i>
							<div class="feature-content">
								<h4>Power</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-line-chart" style="font-size:48px;color:red"></i>
							<div class="feature-content">
								<h4>Progress</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/about.png" alt="">
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		<!-- Courses -->
		
		<!-- /Courses -->

		<!-- Call To Action -->
		<div id="cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h2 class="white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis.</h2>
						<p class="lead white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
						<a class="main-button icon-button" href="#">Get Started!</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call To Action -->

		<!-- Why us -->
		<div id="why-us" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Sponsors</h2>
						<p class="lead">Our proud partners are-</p>
					</div>
					
					
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="./img/img1.png" style="width:100%">
  <img class="mySlides" src="./img/img2.png" style="width:100%">
  <img class="mySlides" src="./img/img3.jpg" style="width:100%">
</div>					


					<!-- feature -->
					<!--<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon edusite/edusite/edusite/img/logo-alt.png"></i>
							<div class="feature-content">
								<h4>Online Courses</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					< feature -->

					<!-- feature -->
					<!--div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Expert Teachers</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->

					<!-- feature -->
					<!--<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
							</div>
						</div>
					</div> 
					<!--/feature -->

				</div>
				<!-- /row -->

				<hr class="section-hr">

				<!-- row -->
				
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Why us -->

		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Bangla Kotha</p>
						<a class="main-button icon-button" href="#">Join Us!</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav" align="left">
						<li><a href="index.php"> Home</a></li>
						<li><a href="currentworks.html">CurrentWorks</a></li>
						<li><a href="blog.php">Blogs</a></li>
						
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="achievements.html">Achievements</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="https://www.facebook.com/buetautomobileclub" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
		
		<script type="text/javascript" src="js/home/jquery.min.js"></script>
		<script type="text/javascript" src="js/home/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/home/main.js"></script>

	</body>
</html>
