
<?php 
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT'].'/raw/controller');
require_once('DbConnection.php');

$var= "SELECT * FROM blog";
$result=$conn->query($var);
$numOfBlog=$result->num_rows;

$blogList = array();
if($numOfBlog>0)
{
  $index=0;
  while ($row=$result->fetch_assoc()) {
    $blogList[$index]=array('postId'=>$row['PostId'],'Name'=>$row['Name'],
    					'Date'=>$row['Date'],'Email'=>$row['Email'],
    					'Files'=>$row['NumberOfFile']);
    if($row['NumberOfFile']>0)
    	array_push($blogList[$index],$row['File1']);
    //$i=0;
    //while ($i<$row['NumberOfFile'] ) 
    //{
    //	$j=$i+1;
    //	$filename="File".$j;
    //	array_push($blogList[$index],$row["'".$filename."'"]);
    //	$i=$i+1;    
    //}
    //$i=0;
    $index=$index+1;
  }
  //print_r($blogList);
}
$index=0;

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Blogs</title>

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
						<a class="logo" href="index.php">
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
						<li><a href="currentworks.html" style ="color:black; ">Current Works</a></li>
						<li><a href="aboutus.html" style ="color:black; ">About Us</a></li>
						
						<li><a href="achievements.html" style ="color:black; ">Achievements</a></li>
						
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
							<li><a href="index.html">Home</a></li>
							<li>Blog</li>
						</ul>
						<h1 class="white-text">Blog Page</h1>
						<form action="./controller/Blog.php" method="post" enctype="multipart/form-data">
							<input type="text" placeholder="Enter Blog Title" name="uname" style ="color:white; ">

							<input type="text" placeholder="Enter Your Name" name="email" style ="color:white; margin-top: 20px ">
							
							<textarea id = "myTextArea" name="blog" placeholder="Whats on your mind" rows = "300" cols = "300" style="margin-top:20px;color:white;"> </textarea>
							
							<input type="file" name="file[]" accept="image/*" multiple="multiple" />
							<button type="submit" style="margin-left:30px; margin-top: 20px; height: 60px; width: 150px; font-size:32px" > <b> Submit </b> </button>
						</form>

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

						<!-- row -->
						<div class="row">

							<!-- single blog -->
							<?php 
								while ($index<$numOfBlog) 
								{
									echo 
									'<div class="col-md-6">
										<div class="single-blog">
											<div class="blog-img">
												<a href="'.'blog-post.php'.'?pid='.$blogList[$index]['postId'].'">'.
												   '<img src="'.$blogList[$index][0].'" height="300" width="200" alt="">'.
												'</a>'.
											'</div>'.
											'<h4><a href="blog-post.php">'.$blogList[$index]['Name'].'</a></h4>'.
											'<div class="blog-meta">
												<span class="blog-meta-author">By: <a href="#">'.$blogList[$index]['Email'].'</a></span>
												<div class="pull-right">
													<span>'.$blogList[$index]['Date'].'</span>
												</div>
											</div>
										</div>
									</div>';
									$index=$index+1;
								}
								$index=0;
							?>
						</div>
						<!-- /row -->

						<!-- row -->
						
						<!-- /row -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
		
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/home/jquery.min.js"></script>
		<script type="text/javascript" src="js/home/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/home/main.js"></script>

	</body>
</html>
