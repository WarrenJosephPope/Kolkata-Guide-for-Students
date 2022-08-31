<?php
if(isset($_POST['reg_pg'])){
	require '/KGS/PHP/dbhandler.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$gender = $_POST['gender'];
	$closetime = $_POST['closetime'];
	$depamount = $_POST['depamount'];
	$noticeperiod = $_POST['noticeperiod'];
	$seats = $_POST['seats'];
	$wifi = isset($_POST['wifi'])?1:0;
	$ac = isset($_POST['ac'])?1:0;
	$food = isset($_POST['food'])?1:0;
	$powerbackup = isset($_POST['powerbackup'])?1:0;
	$roomcleaning = isset($_POST['roomcleaning'])?1:0;
	$parking = isset($_POST['parking'])?1:0;
	$geyser = isset($_POST['geyser'])?1:0;
	$visitors = isset($_POST['visitors'])?1:0;
	$oppgender = isset($_POST['oppgender'])?1:0;
	$smoking = isset($_POST['smoking'])?1:0;
	$drinking = isset($_POST['drinking'])?1:0;
	$loudmusic = isset($_POST['loudmusic'])?1:0;
	$party = isset($_POST['party'])?1:0;
	$location = $_POST['location'];
	$description = $_POST['description'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO payguest (name, price,  gender, closetime, depamount, noticeperiod, seats, wifi, ac, food, powerbackup, roomcleaning, parking, geyser, visitors, oppgender, smoking, drinking, loudmusic, party, location, description, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location:/KGS/pg/register.php?error=sqlerror");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "sissiiiiiiiiiiiiiiiissis", $name, $price, $gender, $closetime, $depamount, $noticeperiod, $seats, $wifi, $ac, $food, $powerbackup, $roomcleaning, $parking, $geyser, $visitors, $oppgender, $smoking, $drinking, $loudmusic, $party, $location, $description, $phone, $email);
		mysqli_stmt_execute($stmt) or die(mysqli_error($conn));
		
    	$sql = "SELECT * FROM payguest";
    	$res = $conn->query($sql);
    	$id = 1;
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $id = $row["id"];
            }
        }
    	$dir = "/KGS/PGPics/";
    	$count = count($_FILES["imgToUpload"]["name"]);
    	for($i=0; $i < $count; $i=$i+1){
    	    $image = $_FILES["imgToUpload"]["name"][$i];
        	$temp_name = $_FILES["imgToUpload"]["tmp_name"][$i];
        	if($image!=""){
        	    if(file_exists($dir.$image)){
        	        $image = time().'_'.$image;
        	    }
        	    $fdir = $dir.$id."_".$image;
        	    move_uploaded_file($temp_name, $fdir);
        	}
        	$sql = "INSERT IGNORE INTO images(id, name) values ('".$id."', '".$image."')";
        	mysqli_query($conn, $sql) or die(mysqli_error($conn));   
    	}
		header("location:/KGS/pg/register.php?registration=success");
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
		exit();
	}
}
else{
	header("location:/KGS/pg/register.php");
	exit();
}
?>