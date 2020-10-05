<?php
session_start(); 
if ($_SESSION['type']==='0') 
  header('Location: ../memberprofile.php');
elseif ($_SESSION['type']==='1') 
  header('Location: ../committeeprofile.php');
elseif ($_SESSION['type']==='2') 
  header('Location: ../adminprofile.php');
else
  //echo "fuck " .$_SESSION['type'];
  header('Location: ../moderatorprofile.php');
exit();
?>