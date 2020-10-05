<?php 
session_start();
//echo $_SERVER['DOCUMENT_ROOT'];
$memId=$_SESSION['memberId'];
set_include_path($_SERVER['DOCUMENT_ROOT'].'/raw/controller');
require_once('DbConnection.php'); 
$var= "SELECT * FROM event WHERE MemberId=".$memId;
$result=$conn->query($var);
$numOfTask=$result->num_rows;
$eventList = array();
if($numOfTask>0)
{
  $index=0;
  while ($row=$result->fetch_assoc()) {
    $eventList[$index]=array('EventId'=>$row['EventId'],'EventName'=>$row['EventName'],
    					'Date'=>$row['Date'],'Command'=>$row['Command']);
    $index=$index+1;
  }
}
//print_r($array);
$index=0;
$var= "SELECT * FROM feedback WHERE MemberId=".$memId;
$result=$conn->query($var);
$numOfFeedback=$result->num_rows;
$feedbackList = array();
if($numOfFeedback>0)
{
  $index=0;
  while ($row=$result->fetch_assoc()) {
  	//$eventId=$row['EventName'];
  	//$x=$conn->query("SELECT EventName FROM event WHERE EventId=".$eventId);
  	//$er=$x->fetch_assoc();
  	//$eName=$er['EventName'];
    $feedbackList[$index]=array('EventName'=>$row['EventName'],'MemberId'=>$row['MemberId'],
    	'Date'=>$row['Date'],'FeedBack'=>$row['FeedBack']);
    $index=$index+1;
  }
}
$index=0;
?>
