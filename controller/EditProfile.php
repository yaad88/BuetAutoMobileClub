<?php
session_start();
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
$sql = "SELECT * FROM worker WHERE MemberID=".$_SESSION['memberId'];
$result = $conn->query($sql);
$row=$result->fetch_assoc();
//if ($result->num_rows>0) {
//    echo "Query ran successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			
			echo "And given Pass".$_POST['psw'];
			if ($row['Password']!=$_POST['psw'])
			{
				echo $row['Password']." And given Pass".$_POST['psw'];
				$_SESSION['mismatch']=true;
				header('Location: ../editprofile.php');
				exit();
			}
			else
				$pass=$_POST['pswnew'];
			if($row['Name']!=$_POST['uname'])
				$username = $_POST['uname'];
			else
				$username = $row['Name'];
			//echo "password ".$_POST['psw'];

			if($row['Email']!=$_POST['mail'])
				$mail = $_POST['mail'];
			else
				$mail = $row['Email'];//$this->input->get("mail");
			//echo $mail."\n";


			if($row['FbLink']!=$_POST['fb'])
				$fblink = $_POST['fb'];
			else
				$fblink = $row['FbLink'];

			//$fbLink = $_POST['fb'];//$this->input->get("memid");
			//echo $memid."\n";

			if($row['Skills']!=$_POST['skill'])
				$skills = $_POST['skill'];
			else
				$skills = $row['Skills'];

			//$skills=$_POST['skill'];//$this->input->get("skills");
			//echo $skills."\n";

			if($row['Position']!=$_POST['position'])
				$positionInBac = $_POST['position'];
			else
				$positionInBac = $row['Position'];


			//$positionInBac=$_POST['position'];//$this->input->get("type");
			//echo $type."\n";
			//$image=$_POST['pic'];//$this->input->get("pic");

			if($row['ContactNo']!=$_POST['phone'])
				$contact = $_POST['phone'];
			else
				$contact = $row['ContactNo'];

			//$contact=$_POST['phone'];//$this->input->get("contact");
			echo $contact."\n";


			if($row['About']!=$_POST['about'])
				$about = $_POST['about'];
			else
				$about = $row['About'];

			//$about=$_POST['about'];

			if($row['FirstTrait']!=$_POST['first'])
				$first = $_POST['first'];
			else
				$first = $row['FirstTrait'];

			//$first=$_POST['first'];


			if($row['SecondTrait']!=$_POST['second'])
				$second = $_POST['second'];
			else
				$second = $row['SecondTrait'];

			if($row['ThirdTrait']!=$_POST['third'])
				$third = $_POST['third'];
			else
				$third = $row['ThirdTrait'];
			//$second=$_POST['second'];

			//$third=$_POST['third'];
			if (isset($_FILES["editpic"]) && $_FILES['editpic']['size'] > 0) 
			{
				$original=$_FILES["editpic"]["name"]."\n";
			//echo $original;
				$target_dir="../uploads/";
				$fileType=pathinfo($_FILES["editpic"]["name"]);

				$target_file=$target_dir . $_SESSION['memberId'] ."." . $fileType['extension'] ;
			
				$save_file="./uploads/" . $_SESSION['memberId'] ."." . $fileType['extension'] ;
				$upload_ok=1;
				if(file_exists($target_file)) unlink($target_file);
				move_uploaded_file($_FILES["editpic"]["tmp_name"], $target_file);
			}
			else
				$save_file=$row['ProPic'];
			//echo $target_file;
			

			$queryy="UPDATE worker SET Name="."'".$username."',".
									  "Email="."'".$mail."',".
									  "Password="."'".$pass."',".
									  "FbLink="."'".$fblink."',".
									  "Skills="."'".$skills."',".
									  "Position="."'".$positionInBac."',".
									  "ProPic="."'".$save_file."',".
									  "ContactNo="."'".$contact."',".
									  "About="."'".$about."',".
									  "FirstTrait="."'".$first."',".
									  "SecondTrait="."'".$second."',".
									  "ThirdTrait="."'".$third."'".
									  "where MemberID=".$_SESSION['memberId'];

			echo $queryy;
			//$queryy="UPDATE worker
			//SET Name = 'Alfred Schmidt', Email= 'vog@gmail.com'
			//WHERE MemberID = 420";
			$prevResult = $conn->query($queryy);

			if($prevResult===true)
			{
				//include 'SetSession.php';
				header('Location: SetSession.php');
			}	//echo "fuck";
			else
				echo "Error updating record: " . $conn->error;
		}

?>