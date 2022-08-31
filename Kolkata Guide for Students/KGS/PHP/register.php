<?php
session_start();
if(isset($_POST['register_submit'])){
	$back = $_POST['back'];
    if($_SESSION["randomnumber"]!=$_POST["otp"]){
        unlink($dir);
	    header("location:/KGS/login.php?back=".$back."&error=incorrectotp");
    }
    require 'dbhandler.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['mail'];
	$pwd = $_POST['pwd'];
	$rpwd = $_POST['pwd_repeat'];
	$back = $_POST['back'];
	$dir = $_POST["dir"];
	if(!isset($_POST['sex'])){
	    unlink($dir);
	    header("location:/KGS/login.php?back=".$back."&error=emptyfields");
		exit();
	}
	$sex = $_POST['sex'];
	$dob = $_POST['dob'];
	$ph = $_POST['ph'];
	
	if(empty($fname)||empty($lname)||empty($email)||empty($pwd)||empty($rpwd)||empty($sex)||empty($ph)||empty($dob)){
		unlink($dir);
		header("location:/KGS/login.php?back=".$back."&error=emptyfields&fname=".$fname."&lname=".$lname."&mail=".$email."&gender=".$sex."&date=".$dob."&phonenumber=".$ph);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)&&(!preg_match("/^[a-zA-Z\']*$/", $fname)||!preg_match("/^[a-zA-Z\']*$/", $lname))){
		unlink($dir);
		header("location:/KGS/login.php?back=".$back."&error=invalidmailandusername");
		exit();
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		unlink($dir);
		header("location:/KGS/login.php?back=".$back."&error=invalidmail&fname=".$fname."&lname=".$lname);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z\']*$/", $fname)||!preg_match("/^[a-zA-Z\']*$/", $lname)){
		unlink($dir);
		header("location:/KGS/login.php?back=".$back."&error=invalidusername&mail=".$email);
		exit();
	}
	else if($sex!=="Male"&&$sex!=="Female"&&$sex!=="Others"){
	    unlink($dir);
	    header("location:/KGS/login.php?back=".$back."&error=invalidgender&mail=".$email);
		exit();
	}
	else if(!preg_match("/^[0-9]*$/", $ph)){
		unlink($dir);
		header("location:/KGS/login.php?back=".$back."&error=invalidphno&mail=".$email);
		exit();
	}
	else if($pwd!==$rpwd){
		unlink($dir);
		header("location:/KGS/login.php?back=".$back."&error=passworderror&fname=".$fname."&lname=".$lname."&mail=".$email);
		exit();
	}
	else{
		$sql = "SELECT email FROM userss WHERE email=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("location:/KGS/login.php?back=".$back."&error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$result_check = mysqli_stmt_num_rows($stmt);
			if($result_check>0){
			    unlink($dir);
				header("location:/KGS/login.php?back=".$back."&error=alreadyregistered");
				exit();
			}
			else{
				$sql = "INSERT INTO userss (fname, lname, email, pwd, ph, dob, sex, dp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)){
				    unlink($dir);
					header("location:/KGS/login.php?back=".$back."&error=sqlerror");
					exit();
				}
				else{
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ssssssss", $fname, $lname, $email, $hashedPwd, $ph, $dob, $sex, $dir);
					mysqli_stmt_execute($stmt);
					header("location:/KGS/login.php?back=".$back."&signup=success");
					mysqli_stmt_close($stmt);
					mysqli_close($conn);
					exit();
				}
			}
		}
	}
}
else{
	header("location:/KGS/login.php?error=formnotsubmitted");
	exit();
}
?>