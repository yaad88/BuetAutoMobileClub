<?php
set_include_path($_SERVER['DOCUMENT_ROOT'].'/raw/controller');
require_once('Profile.php');
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Profile</title>
    <meta name="description" content="property of BAC and Emblem Bangladesh"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="loggedIndex.php" rel="tooltip">BAC Home</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>

              <div class="navbar-translate"><a class="navbar-brand" href="controller/Logout.php" rel="tooltip" style="color:red">Logout</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Basic Info</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#notifications">To-Dos</a></li>
                
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
          <div class="cc-profile-image"><a href="#"><img src="<?php echo $_SESSION['propic'];?>" alt="Image"/></a></div>
          <div class="h2 title"><?php echo $_SESSION['name'];?></div>
          <p class="category text-white"><?php echo $_SESSION['first'].",".$_SESSION['second'].
          ",".$_SESSION['third'];?></p>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href=<?php echo $_SESSION['fb'];?> rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="editprofile.php" rel="tooltip" title="Edit Profile"><i class="fa fa-edit"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Position in BAC:</div>
            <?php echo $_SESSION['Position'];?>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Member ID:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['memberId'];?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['email'];?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['phone'];?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Skills:</strong></div>
              <div class="col-sm-8"><?php echo $_SESSION['skills'];?></div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">About Me</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <?php echo $_SESSION['about'];?>
    </div>
  </div>
</div>

<div class="section" id="notifications">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Tasks</div>
    <?php 
    while($index<$numOfTask)
    {    
      echo '
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">'.
                  '<p>'.$eventList[$index]['Date'].'</p>'.
                  
                  '<div class="h5">'.$eventList[$index]['EventName'].'</div>'.
                '</div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">'.$eventList[$index]['EventName'].'</div>
                  <p>'.$eventList[$index]['Command'].'</p>
                </div>
              </div>
            </div>
          </div>';
          $index=$index+1;
    }
    $index=0;
    ?>
  </div>
</div>

<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Feedbacks</div>
    <?php 
    while($index<$numOfFeedback)
    {    
      echo '
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">'.
                  '<p align="center" style="color:white">'.$feedbackList[$index]['Date'].'</p>'.
                  '<div class="h5" align="center" style="color:white">'.$feedbackList[$index]['EventName'].'</div>'.
                '</div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">'.$feedbackList[$index]['EventName'].'</div>
                  <p>'.$feedbackList[$index]['FeedBack'].'</p>
                </div>
              </div>
            </div>
          </div>';
          $index=$index+1;
    }
    $index=0;
    ?>
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