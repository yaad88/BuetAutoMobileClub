<?php
require_once('DbConnection.php');
//echo "fuck";
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "buetautomobileclub";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";
//$sql = "SELECT * FROM worker";
//$result = $conn->query($sql);
//if ($result->num_rows>0) {
//    echo "Query ran successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			
			//echo "Okk";
			$username = $_POST['uname'];
			//echo $username."\n";
			$password = $_POST['psw'];//$this->input->get("psw");
			//echo $password."\n";
			//echo "password ".$_POST['psw'];
			$mail = $_POST['mail'];//$this->input->get("mail");
			//echo $mail."\n";
			$memid = $_POST['memid'];//$this->input->get("memid");
			//echo $memid."\n";
			$skills=$_POST['skills'];//$this->input->get("skills");
			//echo $skills."\n";
			$type=$_POST['type'];//$this->input->get("type");
			//echo $type."\n";
			//$image=$_POST['pic'];//$this->input->get("pic");
			$contact=$_POST['contact'];//$this->input->get("contact");
			//echo $contact."\n";
			$original=$_FILES["pic"]["name"]."\n";
			//echo $original;
			$target_dir="../uploads/";
			$fileType=pathinfo($_FILES["pic"]["name"]);

			$target_file=$target_dir . $memid ."." . $fileType['extension'] ;
			$save_file="./uploads/" . $memid ."." . $fileType['extension'] ;
			//echo $target_file;
			$upload_ok=1;
			move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);


			$queryy="Select * from worker where MemberID=".$memid;
			$prevResult = $conn->query($queryy);
			if($prevResult->num_rows>0)
				echo "User already exists";
			else
				$var="Insert into worker(MemberID,Name,Email,Type,Password,ProPic,Skills,ContactNo) values ('".$memid."','".$username."','".$mail."','".$type."','".$password."','".$save_file."','".$skills."','".$contact."')";
			if($conn->query($var)===true)
			{
				echo 
				"
				<script>
    			window.location='../index.php'
					
				</script>



				";
				//redirect("../index.php");
			}	//echo "successfully inserted into database";


		}

?>