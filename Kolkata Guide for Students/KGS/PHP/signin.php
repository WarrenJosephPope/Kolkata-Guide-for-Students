<?php
	if(isset($_POST['login_submit'])){
		require 'dbhandler.php';
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		if(empty($email)||empty($password)){
			header("location:/KGS/login.php?error=emptyfields&email=".$email);
			exit();
		}
		else{
			$sql = "SELECT * FROM userss WHERE email=?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("location:/KGS/login.php?error=sqlerror");
				exit();	
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if($row = mysqli_fetch_assoc($result)){
					$pwdchk = password_verify($password, $row['pwd']);
					if($pwdchk==false){
						header("location:/KGS/login.php?error=wrongpassword");
						exit();
					}
					else if($pwdchk==true){
						session_start();
						$_SESSION['id'] = $row['id'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['lname'] = $row['lname'];
						$_SESSION['mail'] = $row['email'];
						$_SESSION['dob'] = $row['dob'];
						$_SESSION['sex'] = $row['sex'];
						$_SESSION['ph'] = $row['ph'];
						$_SESSION['dp'] = $row['dp'];
						header("location:".$_POST['back']);
						exit();
					}
					else{
						header("location:/KGS/login.php?error=sqlerror");
						exit();
					}
				}
				else{
					header("location:/KGS/login.php?error=nouser");
					exit();
				}
			}
		}
	}
	else{
		header("location:/KGS/login.php");
		exit();
	}
?>