<?php
    session_start();
    if(!isset($_POST['submit'])&&!isset($_POST['msgsubmit'])&&!isset($_POST['otpsubmit'])){
        header("location:../pg/pglist.php");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Pay Guest Information</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/pginfo.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<script src="../Scripts/rem_wm.js"></script>
		<?php include '../PHP/header.php' ?>
        <div id="page">
            <div class="block">
                <?php
                    if(!isset($_POST["msgsubmit"])&&!isset($_POST["confirmation"])&&!isset($_POST["otpsubmit"])){
                        $name = $_POST["name"];
                        $phone = $_POST["phone"];
                        $email = $_POST["email"];
                        echo '<div class="header">Name : '.$name.'<br>Phone No. : '.$phone.'<br>E-Mail : '.$email.'</div><br><br>
                            <form id="form" method="post">
                            <div style="width : 100%; text-align : center">Enter Your Information</div>
                                <input type="hidden" name="to" value="'.$email.'">
                                <label for="name">Name</label><br><input id="name" type="text" name="name"><br>
                                <label for="mail">E-Mail</label><br><input id="mail" type="email" name="header"><br>
                                <label for="sub">Subject</label><br><input id="sub" type="text" name="subject"><br>
                                <label for="message">Message</label><br><textarea id="message" name="message"></textarea><br>
                                <button type="submit" name="msgsubmit">Submit</button>
                            </form>
                            ';   
                    }else if(!isset($_POST["confirmation"])&&!isset($_POST["otpsubmit"])){
                        $randomnumber = rand(1000, 9999);
                        $_SESSION["randomnumber"] = $randomnumber;
                        mail($_POST["header"], "OTP", "Your 4 digit code is ".$randomnumber);
                        echo '<form id="form" method="post">
                            <div style="width : 100%; text-align : center">Enter Your Information</div>
                            <input type="hidden" name="name" value="'.$_POST["name"].'">
                            <input type="hidden" name="to" value="'.$_POST["to"].'">
                            <input type="hidden" name="header" value="'.$_POST["header"].'">
                            <input type="hidden" name="subject" value="'.$_POST["subject"].'">
                            <input type="hidden" name="message" value="'.$_POST["message"].'">
                            <label for="otp">Enter OTP</label><br><input id="otp" type="text" name="otp" placeholder="OTP"><br>
                            <button type="submit" name="otpsubmit">Submit</button>
                        </form>';
                    }else{
                        if($_POST["otp"]==$_SESSION["randomnumber"]){
                            $msg = $_POST["message"];
                            $to = $_POST["to"];
                            $subject = $_POST["subject"]."\r\n";
                            $header = "From: ".$_POST["name"]."<".$_POST["header"].">\r\n";
                            $header .= "Reply-To: ".$_POST["header"]."\r\n";
                            $msg = wordwrap($msg, 70);
                            mail($to, $subject, $msg, $header);
                            echo '<div id="error">
                                Your message has been delivered!
                            </div>';
                        }else{
                            echo '<div id="error">
                                OTP Verification Failed!
                            </div>';   
                        }
                        unset($_SESSION["randomnumber"]);
                    }
                ?>
            </div>
        </div>
		<?php include '../PHP/menu.php'; ?>
		<?php include '../PHP/search.php'?>
	</body>
</html>