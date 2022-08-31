<?php
    session_start();
?>
<!DOCTYPE html>
<html
    <head>
		<title>Kolkata Student Guide | Write a Review</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/review.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<script src="../Scripts/rem_wm.js"></script>
		<script>
		    function validateForm(){
		        if(document.getElementById("comments").value==""||document.getElementById("comments").value==null){
		            alert("Please enter your comments!");
		            return false;
		        }
		        if(document.getElementById("ph").value.length!=10){
		            alert("Invalid phone number!");
		            return false;
		        }
		        for(var i = 0; i < 10; i++){
		            if(document.getElementById("ph").value.charAt(i)<'0'||document.getElementById("ph").value.charAt(i)>'9'){
		                alert("Invalid phone number!");
		                return false;
		            }
		        }
		        if(document.getElementById("col").value=="0"){
		            alert("Please choose a college");
		            return false;
		        }
		        if(document.getElementById("comments").value.length < 100){
		            alert("Please write at least 100 words");
		            return false;
		        }
		        return true;
		    }
		</script>
	    <?php include "../PHP/header.php"?>
	    <div id="page">
	        <h1>Write a review</h1>
	        <form method="post" action="../PHP/review.php" onsubmit="return validateForm()">
	            <label for="name">Name</label><br><input required placeholder="Enter your name" type="text" id="name" name="name" <?php if(isset($_SESSION['id'])){echo "value = '".$_SESSION["fname"]." ".$_SESSION["lname"]."'";} ?>><br>
	            <label for="mail">E-Mail</label><br><input required placeholder="Enter your email" type="email" id="mail" name="mail" <?php if(isset($_SESSION['id'])){echo "value = '".$_SESSION["mail"]."'";} ?>><br>
	            <label for="ph">Phone Number</label><br><input required <?php if(isset($_SESSION['id'])){echo "value = '".$_SESSION["ph"]."'";} ?> placeholder="Enter your phone number" type="tel" id="ph" name="ph"><br>
	            <select id="col" name="college">
	                <option value="0" style="display:none">Select a college</option>
	                <?php
	                    include "../PHP/dbhandler.php";
	                    $sql = "SELECT * FROM colleges ORDER BY name";
	                    $res = mysqli_query($conn, $sql);
	                    while($row=mysqli_fetch_array($res)){
	                        echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
	                    }
	                ?>
	            </select><br>
	            <label for="comments">Write your review</label><br>
	            <textarea required id="comments" name="comments" placeholder="Write your review"></textarea><br>
	            <div id="rating">
	                <input type="radio" value="5" name="star" id="star1"><label for="star1"></label>
	                <input type="radio" value="4" name="star" id="star2"><label for="star2"></label>
	                <input type="radio" value="3" name="star" id="star3"><label for="star3"></label>
	                <input type="radio" value="2" name="star" id="star4"><label for="star4"></label>
	                <input checked type="radio" value="1" name="star" id="star5"><label for="star5"></label>
	            </div>
	            <button type="submit" name="submit_review">Submit</button>
	        </form>
			<br>
	    </div>
	    <?php require '../PHP/menu.php'; ?>
	    <?php require '../PHP/search.php' ?>
	</body>
</html>