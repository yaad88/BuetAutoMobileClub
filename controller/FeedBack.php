<?php
session_start(); 
require_once('DbConnection.php'); 
//echo "fuck";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$eventName=$_POST['ename'];
	$memid=$_POST['mid'];
	$date=$_POST['date'];
	$feedback=$_POST['feedback'];

	$queryy="Select * from feedback";
	$prev = $conn->query($queryy);

	//$prevFeedBackId=$prev->num_rows;
	//$feedbackId=$prevFeedBackId+1;
	//echo $feedbackId;

	$var="Insert into feedback(EventName,Date,MemberId,FeedBack) values ('".$eventName."','".$date."','".$memid."','".$feedback."')";
	echo $var;
	$prevResult = $conn->query($var);
	if($prevResult===true)
		//echo "fuck";
		header('Location: ProfileCheck.php');
	else
		echo "Error updating record: " . $conn->error;
}
?>