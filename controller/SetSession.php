<?php
session_start();
require_once('DbConnection.php');

$qr="SELECT * FROM worker where MemberID=".$_SESSION['memberId'];
	$result=$conn->query($qr);
	//echo $resultQr;
	if($result->num_rows>0)
	{
		$row = $result->fetch_assoc();
		print_r($row);			
			$_SESSION['memberId']=$row['MemberID'];
			$_SESSION['name']=$row['Name'];
			//echo "fuck ".$_SESSION['name']." ";
			$_SESSION['email']=$row['Email'];
			$_SESSION['phone']=$row['ContactNo'];
			$_SESSION['type']=$row['Type'];
			$_SESSION['skills']=$row['Skills'];
			$_SESSION['propic']=$row['ProPic'];
			$_SESSION['loggedIn']='true';

			if (is_null($row['FirstTrait']))
				$_SESSION['first']="";
			else
				$_SESSION['first']=$row['FirstTrait'];
			if (is_null($row['SecondTrait']))
				$_SESSION['second']="";
			else
				$_SESSION['second']=$row['SecondTrait'];
			if (is_null($row['ThirdTrait']))
				$_SESSION['third']="";
			else
				$_SESSION['third']=$row['ThirdTrait'];

			if (is_null($row['Position']))
				$_SESSION['Position']="";
			else
				$_SESSION['Position']=$row['Position'];

			if (is_null($row['FbLink']))
				$_SESSION['fb']="";
			else
				$_SESSION['fb']=$row['FbLink'];

			if (is_null($row['About']))
				$_SESSION['about']="";
			else
				$_SESSION['about']=$row['About'];
			

			echo "fuck ".$_SESSION['type'];
			//print_r($_SESSION);
			header('Location: ProfileCheck.php');
			/*
			if ($_SESSION['type']==='0') 
				header('Location: ../memberprofile.php');
			elseif ($_SESSION['type']==='1') 
				header('Location: ../committeeprofile.php');
			elseif ($_SESSION['type']==='2') 
				header('Location: ../adminprofile.php');
			else
				//echo "fuck " .$_SESSION['type'];
				header('Location: ../moderatorprofile.php');
				*/
			exit();
	}

?>