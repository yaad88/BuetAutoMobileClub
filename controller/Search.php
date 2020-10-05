<?php
session_start(); 
require_once('DbConnection.php'); 

//echo "fuck";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$search=$_POST['search'];
	//echo $search;
	$qr="SELECT MemberID,Name,Position,ProPic FROM worker where Name like "."'%".$search."%'";
	$result=$conn->query($qr);
	$memberResult=$result->num_rows;
	$member=array();
	$index=0;
	while($row=$result->fetch_assoc())
	{
		$member[$index]=array('MemberID'=>$row['MemberID'],'Name'=>$row['Name'],'Position'=>$row['Position'],
			'ProPic'=>$row['ProPic']);
		$index=$index+1;
		//print_r($row);
	}
	

	$qr="SELECT PostId,File1,Name,Date,Email FROM blog where Blog like "."'%".$search."%'";
	$result=$conn->query($qr);
	$blogResult=$result->num_rows;
	$blogs=array();
	$index=0;
	while($row=$result->fetch_assoc())
	{
		$blogs[$index]=array('PostId'=>$row['PostId'],'File1'=>$row['File1'],'Name'=>$row['Name'],
			'Date'=>$row['Date'],'Email'=>$row['Email']);
		$index=$index+1;
		//print_r($row);
	}
	$index=0;
}
?>