<!DOCTYPE html>
<html
    <head>
		<title>Kolkata Student Guide | Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/pgreg.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <script src="../Scripts/rem_wm.js"></script>
	    <?php include '../PHP/header.php' ?>
	    <h1>Rent Your Property</h1>
	    <form id="register_pg" method="post" action="../PHP/register_pg.php" enctype="multipart/form-data">
	        <label for="name">Name</label><br><input type="text" name="name" id="name"><br>
	        <label for="phone">Contact Number</label><br><input type="number" name="phone" id="phone"><br>
	        <label for="email">E-Mail</label><br><input type="email" name="email" id="email"><br>
	        <label for="price">Price</label><br><input type="number" name="price" id="price"><br>
	        <label>Gender : </label>
	        <label for="male">Male</label><input checked id="male" value="male" type="radio" name="gender">
            <label for="female">Female</label><input id="female" type="radio" value="female" name="gender">
            <label for="both">Both</label><input id="both" value="both" type="radio" name="gender"><br>
	        <label for="close">Close Time</label><br><input id="close" type="text" name="closetime"><br>
	        <label for="dep">Deposit Amount</label><br><input type="number" id="dep" name="depamount"><br>
	        <label for="not">Notice Period(in months)</label><br><input id="not" type="number" name="noticeperiod"><br>
	        <label for="seat">Seats</label><br><input type="number" id="seat" name="seats"><br>
	        <label id="wifi">WIFI</label><input id="wifi" type="checkbox" name="wifi"><br>
	        <label for="ac">A.C.</label><input id="ac" type="checkbox" name="ac"><br>
	        <label for="food">Food</label><input id="food" type="checkbox" name="food"><br>
	        <label for="pow">Power Backup</label><input id="pow" type="checkbox" name="powerbackup"><br>
	        <label for="room">Room Cleaning</label><input id="room" type="checkbox" name="roomcleaning"><br>
	        <label for="park">Parking</label><input id="park" type="checkbox" name="parking"><br>
	        <label for="gey">Geyser</label><input id="gey" type="checkbox" name="geyser"><br>
	        <label for="vis">Visitors Allowed</label><input id="vis" type="checkbox" name="visitors"><br>
	        <label for="opp">Opposite Gender Allowed</label><input id="opp" type="checkbox" name="oppgender"><br>
	        <label for="smoke">Smoking</label><input id="smoke" type="checkbox" name="smoking"><br>
	        <label for="drink">Drinking</label><input id="drink" type="checkbox" name="drinking"><br>
	        <label for="mus">Loud Music Allowed</label><input id="mus" type="checkbox" name="loudmusic"><br>
	        <label for="party">Parties</label><input type="checkbox" name="party" id="party"><br>
	        <label for="image">Upload Pictures</label><br><input type="file" name="imgToUpload[]" id="image" multiple accept=".jpg, .png, .gif" /><br>
	        <label for="loc">Location</label><br><input id="loc" type="text" name="location"><br>
	        <label>Description : </label><br><textarea form="register_pg" name="description"></textarea><br>
	        <button type="reset">Reset</button><button name="reg_pg" type="submit">Submit</button>
	    </form>
	    <?php require '../PHP/search.php' ?>
	</body>
</html>