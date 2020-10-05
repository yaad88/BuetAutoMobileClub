<?php 
set_include_path($_SERVER['DOCUMENT_ROOT'].'/raw/controller');
require_once('Search.php');
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Result Page</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
	<style>
	input[type=searchtext] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: transparent;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=searchtext]:focus {
    width: 100%;
}

::placeholder {
    color: white;
    opacity: 1; /* Firefox */
	
</style>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">HOME</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
			
			<div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">About Us</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
			
			<div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Achievements</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
			
			<div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#"></a></li>
                
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#"></a></li>
                
              </ul>
            </div>
           
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="black">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/home-background.jpg');"></div>
      <div class="container">
        <div class="content-center">
		  <div class="h2 text-center mb-2 title">Search for Profiles/ Blogs....</div>
          <form action="./search_result.php" method="post" >
            <input type="searchtext" name="search" placeholder="Search A Member.." style=" color:white">
          </form>
        </div>
      </div>
      
    </div>
  </div>
</div>



<div class="section" id="notifications">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Search Result</div>
    <?php
      $index=0;
      while($index<$memberResult)
      {
        echo 
        '<div class="card">
          <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
              <div class="card-body cc-experience-header">'.
              '<div class="cc-profile-image"><a href="PublicProfile.php?srp='.$member[$index]['MemberID'].'">'.'<img src="'.$member[$index]['ProPic'].'" alt="Image"/></a></div>'.
              '</div>
            </div>
            <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
              <div class="card-body">'.
                '<div class="h5">Result Type: Profile</div>'.
                '<div class="h5">'.$member[$index]['Name'].'</div>'.
                '<p><b>'.'Position in BAC:'.$member[$index]['Position'].'</b></p>'.
                '<footer> click on the photo to go to the persons profile </footer>
              </div>
            </div>
          </div>
        </div>';
        $index=$index+1;
      }

      $index=0;
      while ($index<$blogResult) 
      {
        echo 
        '<div class="card">
          <div class="row">
            <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
              <div class="card-body cc-experience-header">'.
                '<div class="cc-profile-image"><a href="blog-post.php?pid='.$blogs[$index]['PostId'].'">'.'<img src="'.$blogs[$index]['File1'].'" alt="Image"/></a></div>'.
              '</div>
            </div>'.
            '<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
              <div class="card-body">'.
                '<div class="h5">Result Type: Blog</div>'.
                '<div class="h5">'.$blogs[$index]['Name'].'</div>'.
                '<div class="h6">'.$blogs[$index]['Date'].'</div>'.
                '<div class="h6">'.$blogs[$index]['Email'].'</div>'.
              '</div>'.
            '</div>
          </div>
        </div>';
        $index=$index+1;
      }
    ?>
  </div> 
</div>


</div>
</div>
    
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>