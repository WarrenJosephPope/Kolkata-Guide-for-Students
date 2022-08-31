<?php
    session_start();
    if(!isset($_GET['id'])){
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
    		<?php
    		    include "../PHP/dbhandler.php";
    		    $id = $_GET['id'];
    		    $sql = "SELECT * FROM payguest where id = '".$id."'";
    		    $res = mysqli_query($conn, $sql);
    		    if(mysqli_num_rows($res)==0){
    		        echo '<div class="block" id="error">
    		            <span>Sorry! Cannot find matching results :(</span>
    		            <br><br><a href="pglist.php">Click here to search for PG accomodation</a>
    		            <br>
    		        </div>';
    		    }
    		    else{
        		    $row = mysqli_fetch_array($res);
        		    $food=$row["food"]=="1"?"Available":"Unavailable";
        		    $wifi=$row["wifi"]=="1"?"Available":"Unavailable";
        		    $ac=$row["ac"]=="1"?"Available":"Unavailable";
        		    $parking=$row["parking"]=="on"?"Available":"Unavailable";
        		    $powerbackup=$row["powerbackup"]=="on"?"Available":"Unavailable";
        		    $wifi_path = "../Pictures/no_wifi.png";
        		    $ac_path = "../Pictures/no_ac.png";
        		    $food_path = "../Pictures/no_tray.png";
        		    $power_path = "../Pictures/no_power.png";
        		    $room_path = "../Pictures/no_room.png";
        		    $park_path = "../Pictures/no_park.png";
        		    $geyser_path = "../Pictures/no_geyser.png";
        		    $visitors_path = "../Pictures/no_visitors.png";
        		    $opp_path = "../Pictures/no_opp.png";
        		    $smoke_path = "../Pictures/no_smoke.png";
        		    $drink_path = "../Pictures/no_drink.png";
        		    $music_path = "../Pictures/no_music.png";
        		    $party_path = "../Pictures/no_party.png";
        		    if($row["wifi"]=="1"){
        		        $wifi_path = "../Pictures/wifi.png";
        		    }
        		    if($row["ac"]=="1"){
        		        $ac_path = "../Pictures/ac.png";
        		    }
        		    if($row["food"]=="1"){
        		        $food_path = "../Pictures/tray.png";
        		    }
        		    if($row["powerbackup"]=="1"){
        		        $power_path = "../Pictures/power.png";
        		    }
        		    if($row["roomcleaning"]=="1"){
        		        $room_path = "../Pictures/room.png";
        		    }
        		    if($row["parking"]=="1"){
        		        $park_path = "../Pictures/park.png";
        		    }
        		    if($row["geyser"]=="1"){
        		        $geyser_path = "../Pictures/geyser.png";
        		    }
        		    if($row["visitors"]=="1"){
        		        $visitors_path = "../Pictures/visitors.png";
        		    }
        		    if($row["oppgender"]=="1"){
        		        $opp_path = "../Pictures/opp.png";
        		    }
        		    if($row["smoking"]=="1"){
        		        $smoke_path = "../Pictures/smoke.png";
        		    }
        		    if($row["drinking"]=="1"){
        		        $drink_path = "../Pictures/drink.png";
        		    }
        		    if($row["loudmusic"]=="1"){
        		        $music_path = "../Pictures/music.png";
        		    }
        		    if($row["party"]=="1"){
        		        $party_path = "../Pictures/party.png";
        		    }
        		    if($row["depamount"]=="0"){
        		        $row["depamount"] = "-";
        		    }else{
        		        $row["depamount"] = "₹".$row["depamount"];
        		    }
        		    if($row["noticeperiod"]=="0"){
        		        $row["noticeperiod"] = "-";
        		    }else if($row["noticeperiod"]=="1"){
        		        $row["noticeperiod"] .= " Month";
        		    }else{
        		        $row["noticeperiod"] .= " Months";
        		    }
            	    echo '<div id="bas_det" class="block">
            		    <div class="header">Paying Guest, '.$row["location"].', Kolkata</div><br><br>
            		    <span class="desc">'.ucfirst($row["description"]).'</span><br><br>
            		    <table>
            		        <tr>
            		            <td>Deposit Amount</td>
            		            <td>Rent</td>
            		            <td>Food Availability</td>
            		            <td>A.C. Rooms</td>
            		        </tr>
            		        <tr>
            		            <td>'.$row["depamount"].'</td>
            		            <td>₹'.$row["price"].'</td>
            		            <td>'.$food.'</td>
            		            <td>'.$ac.'</td>
            		        </tr>
            		    </table>
            		    <br>
            		    <table>
            		        <tr>
            		            <td>Parking</td>
            		            <td>Notice Period</td>
            		            <td>Available For</td>
            		            <td>Total Number of Beds</td>
            		        </tr>
            		        <tr>
            		            <td>'.$parking.'</td>
            		            <td>'.$row["noticeperiod"].'</td>
            		            <td>'.ucfirst($row["gender"]).'</td>
            		            <td>'.$row["seats"].'</td>
            		        </tr>
            		    </table>
            		</div><br><br>
            		<div id="amenity" class="block">
                        <div class="header">Amenities</div><br><br>
                        <table>
                            <tr>
                                <td><img class="icon" src="'.$wifi_path.'"></img></td>
                                <td><img class="icon" src="'.$ac_path.'"></img></td>
                                <td><img class="icon" src="'.$food_path.'"></img></td>
                                <td><img class="icon" src="'.$power_path.'"></img></td>
                                <td><img class="icon" src="'.$park_path.'"></img></td>
                            </tr>
                            <tr>
                                <td>WIFI</td>
                                <td>A.C.</td>
                                <td>Food</td>
                                <td>Power Backup</td>
                                <td>Parking</td>
                            </tr>
                        </table>
                        <br><br>
                        <table>
                            <tr>
                                <td><img class="icon" src="'.$geyser_path.'"></img></td>
                                <td><img class="icon" src="'.$visitors_path.'"></img></td>
                                <td><img class="icon" src="'.$opp_path.'"></img></td>
                                <td><img class="icon" src="'.$smoke_path.'"></img></td>
                                <td><img class="icon" src="'.$drink_path.'"></img></td>
                            </tr>
                            <tr>
                                <td>Geyser</td>
                                <td>Visitors Allowed</td>
                                <td>Opposite Gender Allowed</td>
                                <td>Smoking Allowed</td>
                                <td>Drinking Allowed</td>
                            </tr>
                        </table>
                        <br><br>
                        <table>
                            <tr>
                                <td><img class="icon" src="'.$music_path.'"></img></td>
                                <td><img class="icon" src="'.$party_path.'"></img></td>
                                <td><img class="icon" src="'.$room_path.'"></img></td>
                            </tr>
                            <tr>
                                <td>Loud Music Allowed</td>
                                <td>Parties Allowed</td>
                                <td>Room Cleaning</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div><br><br>
                    <div id="gallery" class="block">
                    <div class="header">Gallery</div><br><br>
                    <table>';
                    $sql = "SELECT * from images where id = '".$id."'";
                    $res = mysqli_query($conn, $sql);
                    $cnt = 0;
                    $rows = "";
                    while($row = mysqli_fetch_array($res)){
                        $cnt++;
                        $rows = $rows.'<td><a href="../PGPics/'.$id.'_'.$row["name"].'"><img src = "../PGPics/'.$id.'_'.$row["name"].'"></img></a></td>';
                        if($cnt%4==0){
                            echo '<tr>'.$rows.'</tr>';
                            $rows = "";
                        }
                    }
                    if($cnt%4!=0){
                        while($cnt%4!=0){
                            $rows = $rows.'<td></td>';
                            $cnt++;
                        }
                        echo '<tr>'.$rows.'</tr>';
                    }
                    echo '</table>
                        </div>';
    		    }
            ?>
    		</div>
		<br><br>
		<?php include '../PHP/menu.php'; ?>
		<?php include '../PHP/search.php'?>
	</body>
</html>