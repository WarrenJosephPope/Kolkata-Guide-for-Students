<?php
    session_start();
?>
<!DOCTYPE html>
<html
    <head>
		<title>Kolkata Student Guide | Paying Guest Accomodation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/payguest.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<script src="../Scripts/rem_wm.js"></script>
	    <?php include "../PHP/header.php"?>
	    <div id="page">
	        <h1>Search For PGs</h1>
	        <div style="margin-top : 10px;width : 100%; text-align : center;"><a class="reg" href="/pg/register.php">Click here to register your PG</a></div>
    	    <form method="post" id="filters">
    	        <?php
    	            if(isset($_POST["reset"])){
    	                $_POST["reset"] = null;
    	                $_POST["seats"] = $_POST["gender"] = $_POST["min"] = $_POST["max"] = "default";
    	                $_POST["wifi"] = $_POST["ac"] = $_POST["food"] = $_POST["powerbackup"] = $_POST["roomcleaning"] = $_POST["smoking"] = $_POST["drinking"] = $_POST["parking"] = $_POST["geyser"] = $_POST["visitors"] = $_POST["oppgender"] = $_POST["loudmusic"] = $_POST["party"] = "off";
    	            }
    	        ?>
    	        <select name="seats" id="seats">
        	        <option <?php if(isset($_POST["seats"])&&$_POST["seats"]=="default"){echo "selected";} ?> value="default">Occupancy</option>
        	        <option <?php if(isset($_POST["seats"])&&$_POST["seats"]=="1"){echo "selected";} ?> value="1">1</option>
        	        <option <?php if(isset($_POST["seats"])&&$_POST["seats"]=="2"){echo "selected";} ?> value="2">2</option>
        	        <option <?php if(isset($_POST["seats"])&&$_POST["seats"]=="3"){echo "selected";} ?> value="3">3</option>
        	        <option <?php if(isset($_POST["seats"])&&$_POST["seats"]=="other"){echo "selected";} ?> value="other">other</option>
        	    </select>
        	    <select name="gender" id="gender">
        	        <option <?php if(isset($_POST["gender"])&&$_POST["gender"]=="default"){echo "selected";} ?> value="default">Gender</option>
        	        <option <?php if(isset($_POST["gender"])&&$_POST["gender"]=="male"){echo "selected";} ?> value="male">Male</option>
        	        <option <?php if(isset($_POST["gender"])&&$_POST["gender"]=="female"){echo "selected";} ?> value="female">Female</option>
        	        <option <?php if(isset($_POST["gender"])&&$_POST["gender"]=="both"){echo "selected";} ?> value="both">Both</option>
        	    </select>
        	    <select name="min" id="min">
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="default"){echo "selected";} ?> value="default">₹Min</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="5000"){echo "selected";} ?> value="5000">₹5000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="10000"){echo "selected";} ?> value="10000">₹10,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="15000"){echo "selected";} ?> value="15000">₹15,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="20000"){echo "selected";} ?> value="20000">₹20,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="25000"){echo "selected";} ?> value="25000">₹25,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="30000"){echo "selected";} ?> value="30000">₹30,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="35000"){echo "selected";} ?> value="35000">₹35,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="40000"){echo "selected";} ?> value="40000">₹40,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="45000"){echo "selected";} ?> value="45000">₹45,000</option>
        	        <option <?php if(isset($_POST["min"])&&$_POST["min"]=="50000"){echo "selected";} ?> value="50000">₹50,000</option>
        	    </select>
    	        <select name="max" id="max">
        	       <option <?php if(isset($_POST["max"])&&$_POST["max"]=="default"){echo "selected";} ?> value="default">₹Max</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="5000"){echo "selected";} ?> value="5000">₹5000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="10000"){echo "selected";} ?> value="10000">₹10,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="15000"){echo "selected";} ?> value="15000">₹15,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="20000"){echo "selected";} ?> value="20000">₹20,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="25000"){echo "selected";} ?> value="25000">₹25,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="30000"){echo "selected";} ?> value="30000">₹30,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="35000"){echo "selected";} ?> value="35000">₹35,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="40000"){echo "selected";} ?> value="40000">₹40,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="45000"){echo "selected";} ?> value="45000">₹45,000</option>
        	        <option <?php if(isset($_POST["max"])&&$_POST["max"]=="50000"){echo "selected";} ?> value="50000">₹50,000</option>
        	    </select>
        	    <div class="amenity"><label for="wifi">WIFI</label><input <?php if(isset($_POST["wifi"])&&$_POST["wifi"]=="on"){echo "checked";} ?> type="checkbox" name="wifi" id="wifi"></div>
        	    <div class="amenity"><label for="ac">A.C.</label><input <?php if(isset($_POST["ac"])&&$_POST["ac"]=="on"){echo "checked";} ?> type="checkbox" name="ac" id="ac"></div>
        	    <div class="amenity"><label for="food">Food</label><input <?php if(isset($_POST["food"])&&$_POST["food"]=="on"){echo "checked";} ?> type="checkbox" name="food" id="food"></div>
        	    <div class="amenity"><label for="power">Power Backup</label><input <?php if(isset($_POST["powerbackup"])&&$_POST["powerbackup"]=="on"){echo "checked";} ?> type="checkbox" name="powerbackup" id="power"></div>
        	    <div class="amenity"><label for="room">Room Cleaning</label><input <?php if(isset($_POST["roomcleaning"])&&$_POST["roomcleaning"]=="on"){echo "checked";} ?> type="checkbox" name="roomcleaning" id="room"></div>
        	    <div class="amenity"><label for="parking">Parking</label><input <?php if(isset($_POST["parking"])&&$_POST["parking"]=="on"){echo "checked";} ?> type="checkbox" name="parking" id="parking"></div>
        	    <div class="amenity"><label for="geyser">Geyser</label><input <?php if(isset($_POST["geyser"])&&$_POST["geyser"]=="on"){echo "checked";} ?> type="checkbox" name="geyser" id="geyser"></div>
        	    <div class="amenity"><label for="visitors">Visitors Allowed</label><input <?php if(isset($_POST["visitors"])&&$_POST["visitors"]=="on"){echo "checked";} ?> type="checkbox" name="visitors" id="visitors"></div>
        	    <div class="amenity"><label for="opp">Opposite Gender Allowed</label><input <?php if(isset($_POST["oppgender"])&&$_POST["oppgender"]=="on"){echo "checked";} ?> type="checkbox" name="oppgender" id="opp"></div>
        	    <div class="amenity"><label for="smoking">Smoking</label><input <?php if(isset($_POST["smoking"])&&$_POST["smoking"]=="on"){echo "checked";} ?> type="checkbox" name="smoking" id="smoking"></div>
        	    <div class="amenity"><label for="drinking">Drinking</label><input <?php if(isset($_POST["drinking"])&&$_POST["drinking"]=="on"){echo "checked";} ?> type="checkbox" name="drinking" id="drinking"></div>
        	    <div class="amenity"><label for="loud">Loud Music Allowed</label><input <?php if(isset($_POST["loudmusic"])&&$_POST["loudmusic"]=="on"){echo "checked";} ?> type="checkbox" name="loudmusic" id="loud"></div>
        	    <div class="amenity"><label for="party">Parties Allowed</label><input <?php if(isset($_POST["party"])&&$_POST["party"]=="on"){echo "checked";} ?> type="checkbox" name="party" id="party"></div>
        	    <button name="reset" type="submit">Reset</button>
        	    <button name="submit" type="submit">Submit</button>
    	    </form>
    	    <div id="pglist">
    	    <?php
    	        include '../PHP/dbhandler.php';
    	        $msql = "SELECT * FROM payguest";
    	        $sql = "";
    	        if(isset($_POST["submit"])){
    	            $_GET["page"] = 1;
    	            $set = false;
    	            if(isset($_POST["seats"])&&$_POST["seats"]!="default"){
    	                if($_POST["seats"]=="other"){
    	                    if($set==false){
    	                        $sql = $sql." where seats > '3'";
    	                        $set = true;
    	                    }
    	                    else{
    	                        $sql = $sql." and seats > '3'";
    	                    }
    	                }
    	                else{
    	                    if($set==false){
    	                        $sql = $sql." where seats = '".$_POST["seats"]."'";
    	                        $set = true;
    	                    }
    	                    else{
    	                        $sql = $sql." and seats = '".$_POST["seats"]."'";
    	                    }
    	                }
    	            }
    	            if(isset($_POST["gender"])&&$_POST["gender"]!="default"){
    	                if($set==false){
    	                    $sql = $sql." where gender = '".$_POST["gender"]."'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and gender = '".$_POST["gender"]."'";
    	                }
    	            }
    	            if(isset($_POST["min"])&&$_POST["min"]!="default"){
    	                if($set==false){
    	                    $sql = $sql." where price >= '".$_POST["min"]."'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and price >= '".$_POST["min"]."'";
    	                }
    	            }
    	            if(isset($_POST["max"])&&$_POST["max"]!="default"){
    	                if($set==false){
    	                    $sql = $sql." where price <= '".$_POST["max"]."'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and price <= '".$_POST["max"]."'";
    	                }
    	            }
    	            if(isset($_POST["wifi"])){
    	                if($set==false){
    	                    $sql = $sql." where wifi = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and wifi = '1'";
    	                }
    	            }
    	            if(isset($_POST["ac"])){
    	                if($set==false){
    	                    $sql = $sql." where ac = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and ac = '1'";
    	                }
    	            }
    	            if(isset($_POST["food"])){
    	                if($set==false){
    	                    $sql = $sql." where food = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and food = '1'";
    	                }
    	            }
    	            if(isset($_POST["powerbackup"])){
    	                if($set==false){
    	                    $sql = $sql." where powerbackup = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and powerbackup = '1'";
    	                }
    	            }
    	            if(isset($_POST["roomcleaning"])){
    	                if($set==false){
    	                    $sql = $sql." where roomcleaning = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and roomcleaning = '1'";
    	                }
    	            }
    	            if(isset($_POST["parking"])){
    	                if($set==false){
    	                    $sql = $sql." where parking = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and parking = '1'";
    	                }
    	            }
    	            if(isset($_POST["geyser"])){
    	                if($set==false){
    	                    $sql = $sql." where geyser = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and geyser = '1'";
    	                }
    	            }
    	            if(isset($_POST["visitors"])){
    	                if($set==false){
    	                    $sql = $sql." where visitors = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and visitors = '1'";
    	                }
    	            }
    	            if(isset($_POST["oppgender"])){
    	                if($set==false){
    	                    $sql = $sql." where oppgender = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and oppgender = '1'";
    	                }
    	            }
    	            if(isset($_POST["smoking"])){
    	                if($set==false){
    	                    $sql = $sql." where smoking = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and smoking = '1'";
    	                }
    	            }
    	            if(isset($_POST["drinking"])){
    	                if($set==false){
    	                    $sql = $sql." where drinking = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and drinking = '1'";
    	                }
    	            }
    	            if(isset($_POST["loudmusic"])){
    	                if($set==false){
    	                    $sql = $sql." where loudmusic = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and loudmusic = '1'";
    	                }
    	            }
    	            if(isset($_POST["party"])){
    	                if($set==false){
    	                    $sql = $sql." where party = '1'";
    	                    $set = true;
    	                }
    	                else{
    	                    $sql = $sql." and party = '1'";
    	                }
    	            }
    	        }
    	        if(isset($_POST["reset"])){
    	            $sql = "";
    	            $_GET["page"] = 1;
    	        }
    	        $res = mysqli_query($conn, $msql.$sql) or die();
    	        $no_of_results = mysqli_num_rows($res);
    	        $res_per_page = 10;
    	        $no_of_pages = ceil($no_of_results/$res_per_page);
    	        
    	        if(!isset($_GET["page"])){
    	            $cur_page = 1;
    	        }
    	        else{
    	            $cur_page = $_GET["page"];
    	        }
    	        
    	        $starting_limit_number = ($cur_page-1)*$res_per_page;
    	        $limit_sql = " LIMIT ".$starting_limit_number.", ".$res_per_page;
    	        $res = mysqli_query($conn, $msql.$sql.$limit_sql) or die(mysqli_error($conn));
    	        $no_of_results = mysqli_num_rows($res);
    	        
    	        if($no_of_results > 0){
    	            while($row = mysqli_fetch_array($res)){
                        $gen = $row["gender"]=="male"?"Boys":($row["gender"]=="female"?"Girls":"Boys And Girls");
                        $id = $row["id"];
                        $sql1 = "SELECT * FROM images where id = ".$id;
                        $res1 = $conn->query($sql1);
                        $img_path = "";
                        while($row1 = $res1->fetch_assoc()){
                            $img_path = $row1["name"];
                            break;
                        }
        	            echo '<div class="block">
        	                <img src="../PGPics/'.$id.'_'.$img_path.'" class="pics"></img>
        	                <span class="price">₹'.$row["price"].'</span> Onwards
        	                <span class="gender">For '.$gen.'</span><br><br>
        	                <span class="location">Paying Guest in '.$row["location"].'</span><br><br>
        	                <span class="facilities">Key Facilities</span>';
        	                if($row["wifi"]==1){
        	                    echo '<img class="icons" src="../Pictures/wifi.png"></img>';
        	                }else{
        	                    echo '<img class="icons" src="../Pictures/no_wifi.png"></img>';
        	                }
    	                    if($row["food"]==1){
        	                    echo '<img class="icons" src="../Pictures/tray.png"></img>';
    	                    }else{
    	                        echo '<img class="icons" src="../Pictures/no_tray.png"></img>';
    	                    }
    	                    if($row["ac"]==1){
        	                    echo '<img class="icons" src="../Pictures/ac.png"></img>';
    	                    }else{
    	                        echo '<img class="icons" src="../Pictures/no_ac.png"></img>';
    	                    }
    	                    if($row["geyser"]==1){
        	                    echo '<img class="icons" src="../Pictures/geyser.png"></img>';
    	                    }else{
    	                        echo '<img class="icons" src="../Pictures/no_geyser.png"></img>';
    	                    }
    	                    if($row["parking"]==1){
        	                    echo '<img class="icons" src="../Pictures/park.png"></img>';
    	                    }else{
    	                        echo '<img class="icons" src="../Pictures/no_park.png"></img>';
    	                    }
                        echo '<br><br>
                            <span class="description">'.$row["description"].'</span><br><br>
                            <a href="../pg/info.php?id='.$id.'">View More</a>
                            <form method="post" action="../pg/owner.php">
                                <input type="hidden" name="name" value="'.$row["name"].'">
                                <input type="hidden" name="phone" value="'.$row["phone"].'">
                                <input type="hidden" name="email" value="'.$row["email"].'">
                                <button type="submit" name="submit" value="'.$id.'">Contact Owner</button>
                            </form>
                        </div><br><br>';
    	            }
    	        }
    	        else{
    	            echo '<div class="error">Sorry! No paying guest accomodation could be found. :(</div>';
    	        }
    	    ?>
    	    </div>
    	    <?php
    	        echo "<div style='text-align:center;' id='page_number'>";
	            if(!isset($_GET["page"]))
					$_GET["page"] = 1;
				for($page=1; $page<=$no_of_pages; $page++){
	                if($page == $_GET["page"])
						$style = "text-decoration : underline";
					else
						$style = "text-decoration : none";
					echo "<a style='".$style."' href='../pg/pglist.php?page=".$page."'>".$page."</a>";
	            }
	            echo "</div>";
    	    ?>
	    </div>
	    <?php require '../PHP/menu.php'; ?>
	    <?php require '../PHP/search.php' ?>
	</body>
</html>