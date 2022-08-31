<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Login/Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/loginpage.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/header.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<script src="Scripts/signtoggle.js"></script>
		<?php include 'PHP/header.php' ?>
		<?php 
		    if(empty($_GET["back"]))
		        $_GET["back"] = "/index.php";
        ?>
        <?php
            if(isset($_GET["error"])){
                echo '<div class="error">';
                if($_GET["error"]=="incorrectotp")
                    echo 'Incorrect OTP';
                if($_GET["error"]=="alreadyregistered")
                    echo 'Already registered';
                if($_GET["error"]=="wrongpassword")
                    echo 'Wrong password entered';
                if($_GET["error"]=="nouser")
                    echo 'This email has not been registered';
                echo '</div>';
            }
        ?>
		<div class="form_holder" id="login" <?php if(isset($_POST["verify"])){echo 'style="display : none"';} ?>>
			<form action="PHP/signin.php" method="post">
				<span class="form_heading">Login</span><br>
				<input type="text" name="email" placeholder="Email" required><br>
				<input type="password" name="pwd" placeholder="Password" required><br>
				<input type="hidden" name="back" value=<?php echo '"'.$_GET["back"].'"' ?>>
				<button type="submit" name="login_submit">Login</button>
			</form>
			<span class="form_text">Not a member yet? <a onclick="signup()">Sign up</a></span>
		</div>
		<?php
		    if(isset($_POST["verify"])){
		        $dir = "DP/";
			    $image = $_FILES["dp"]["name"];
            	$temp_name = $_FILES["dp"]["tmp_name"];
            	if($image!=""){
            	    if(file_exists($dir.$_POST["mail"])){
            	        unlink($dir.$_POST["mail"]);
            	    }
            	    $fdir = $dir.$_POST["mail"];
            	    move_uploaded_file($temp_name, $fdir);
            	}else{
            	    $fdir = "DP/default.png";
            	}
		        $randomnumber = rand(1000, 9999);
                $_SESSION["randomnumber"] = $randomnumber;
                mail($_POST["mail"], "OTP", "Your 4 digit code is ".$randomnumber);
                echo '
                <div class="form_holder">
                    <form id="form" method="post" action="PHP/register.php" enctype="multipart/form-data">
                        <span class="form_heading">Enter OTP</span><br>
                        <input type="hidden" name="fname" value="'.$_POST["fname"].'">
                        <input type="hidden" name="lname" value="'.$_POST["lname"].'">
                        <input type="hidden" name="mail" value="'.$_POST["mail"].'">
                        <input type="hidden" name="pwd" value="'.$_POST["pwd"].'">
                        <input type="hidden" name="pwd_repeat" value="'.$_POST["pwd_repeat"].'">
                        <input type="hidden" name="back" value="'.$_POST["back"].'">
                        <input type="hidden" name="sex" value="'.$_POST["sex"].'">
                        <input type="hidden" name="dob" value="'.$_POST["dob"].'">
                        <input type="hidden" name="ph" value="'.$_POST["ph"].'">
                        <input type="hidden" name="dir" value="'.$fdir.'">
                        <input id="otp" type="text" name="otp" placeholder="OTP"><br>
                        <button type="submit" name="register_submit">Submit</button>
                    </form>
                </div>';   
		    }
        ?>
		<div class="form_holder" id="register">
			<form id="register_form" method="post" enctype="multipart/form-data">
				<span class="form_heading">Register</span><br>
				<input type="text" name="fname" placeholder="First Name" required><br>
				<input type="text" name="lname" placeholder="Last Name" required><br>
				<input type="text" name="mail" placeholder="Email" required><br>
				<input type="password" name="pwd" placeholder="Password" required><br>
				<input type="password" name="pwd_repeat" placeholder="Re-type Password" required><br>
				<input type="tel" name="ph" placeholder="Phone number" required><br>
				<input type="date" name="dob" placeholder="Date" required><br>
				<input type="hidden" name="back" value=<?php echo '"'.$_GET["back"].'"'; ?>>
				<select form="register_form" class="gender" name="sex" placeholder="Gender" required>
				    <option value="" disabled selected>Select your option</option>
				    <option>Female</option>
				    <option>Male</option>
				    <option>Other</option>
				</select><br>
				<input type="file" name="dp" id="dp"  accept=".jpg, .png, .gif"><br>
				<button type="submit" name="verify">Register</button>
			</form>
			<span class="form_text">Already a member? <a onclick="signin()">Sign in</a></span>
		</div>
		<?php include 'PHP/menu.php'; ?>
		<?php include 'PHP/search.php'?>
	</body>
</html>