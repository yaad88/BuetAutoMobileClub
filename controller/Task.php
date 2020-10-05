<?php
session_start(); 
require_once('DbConnection.php'); 
//echo "fuck";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$eventName=$_POST['ename'];
	$memid=$_POST['mid'];
	$date=$_POST['date'];
	$command=$_POST['description'];

	$queryy="Select * from event";
	$prevResult = $conn->query($queryy);

	$prevEventId=$prevResult->num_rows;
	$eventId=$prevEventId+1;
	echo $eventId;

	$var="Insert into event(EventId,EventName,Date,MemberId,Command) values ('".$eventId."','".$eventName."','".$date."','".$memid."','".$command."')";
	echo $var;
	$prevResult = $conn->query($var);
	if($prevResult===true)
		header('Location: ProfileCheck.php');
		//echo "fuck";
	else
		echo "Error updating record: " . $conn->error;
}
?>