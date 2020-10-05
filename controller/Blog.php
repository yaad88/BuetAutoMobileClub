<?php
session_start(); 
require_once('DbConnection.php'); 

//echo "fuck";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$email=$_POST['email'];
	$name=$_POST['uname'];
	$blog=$_POST['blog'];

	//echo "Email: ".$email.'\n';
	//echo "Author: ".$name.'\n';
	//echo "Blog: ".$blog.'\n';
	$qr="SELECT * FROM blog";
	$result=$conn->query($qr);
	$numOfPreviousPost=$result->num_rows;

	$postId=$numOfPreviousPost+1;
	echo "New post id is ".$postId;

	$numberOfFiles=count($_FILES['file']['name']);
	$index=0;
	$target_dir="../uploads/";

	$dbFileArray=array();

	while ($index < $numberOfFiles ) 
	{
		//$fileType=pathinfo($_FILES["file"]["name"][$index]);
		$fileName=$_FILES["file"]["name"][$index];
		$target_file=$target_dir."post".$postId."-".$fileName;
		$save_file="./uploads/"."post".$postId."-".$fileName;
		move_uploaded_file($_FILES["file"]["tmp_name"][$index], $target_file);

		$dbFileArray[$index]=$save_file;
		//echo "saved in db as ".$dbFileArray[$index]."\r\n";
		//echo "saved as".$target_file."\r\n";

		$index=$index+1;
	}
	$index=0;
	$serial=1;
	$qr="Insert into blog(PostId,Name,Email,Blog,Date,NumberOfFile";
	while ( $serial<=$numberOfFiles){
		$qr=$qr.",File".$serial;
		$serial=$serial+1;
	}
	$qr=$qr.")";

	$serial=1;

	$qr=$qr." values ("."'".$postId."'".","."'".$name."'".","."'".$email."'".",".
				"'".$blog."'".","."'".date("Y-m-d")."'".","."'".$numberOfFiles."'";
	$index=0;
	while ( $index<$numberOfFiles){
		$qr=$qr.",'".$dbFileArray[$index]."'";
		$index=$index+1;
	}
	$qr=$qr.")";
	echo $qr;
	if($conn->query($qr)==true)
		echo "fuck";
	else
		echo "error".$conn->error;
}
?>