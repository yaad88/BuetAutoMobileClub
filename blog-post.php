<?php
session_start();
//echo $_SERVER['DOCUMENT_ROOT'];
set_include_path($_SERVER['DOCUMENT_ROOT'].'/raw/controller');
require_once('DbConnection.php'); 
if(isset($_GET["pid"]))
{
	$postId=$_GET["pid"];
	//echo "FUCKING POSTID is ".$postId;
	$qr="SELECT * FROM blog where PostId=".$postId;
	$result=$conn->query($qr);
	$row=$result->fetch_assoc();
	$numberOfFile=$row['NumberOfFile'];
	$files=array();
	$x=1;
	while ($x<=$numberOfFile)
	{
		$files[$x-1]=$row['File'.$x];
		$x=$x+1;
	}
	$x=0;


}
?>
<!DOCTYPE html>
<html lang="en">


	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Read Blog</title>

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
		* {
    box-sizing: border-box;
}



/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.imgrow:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.imgcontainer {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.imgclosebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
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

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a> <?php echo $row['Name'];?> </a></li>
						</ul>
						<h1 class="white-text"><?php echo $row['Name'];?></h1>
						<ul class="blog-post-meta">
							<li class="blog-meta-author">By : <a href="#"><?php echo $row['Email'];?></a></li>
							<li><?php echo $row['Date'];?></li>
							
						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- blog post -->
						<div class="blog-post">
							<?php
							echo $row['Blog'];
							?>
						</div>
						<!-- /blog post -->

						

						
						
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>


		<div style="text-align:center">
  <h2>Image Gallery</h2>
  <p>Click on the images below:</p>
</div>

<div class="imgrow">
<?php
	$i=0;
	while($i<$numberOfFile)
	{
		echo '<div class="column">
    			<img src="'.$files[$i].'" alt="Nature" style="width:100%" onclick="myFunction(this);">
  			  </div>';
		$i=$i+1;
	}

?>
</div>

<div class="imgcontainer">
  <span onclick="this.parentElement.style.display='none'" class="imgclosebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>
<!-- The four columns -->
		<!-- /Blog -->

		<!-- Footer -->
		
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->

		<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>
		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/home/jquery.min.js"></script>
		<script type="text/javascript" src="js/home/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/home/main.js"></script>

	</body>
</html>
