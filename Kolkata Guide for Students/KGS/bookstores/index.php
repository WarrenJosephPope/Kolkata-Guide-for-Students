<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Bookstores</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/bookstores.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<script src="../Scripts/rem_wm.js"></script>
		<script>
		    function switch_menu(){
		        if(document.getElementById("submenu").style.display == "block")
		            document.getElementById("submenu").style.display = "none";
                else
                    document.getElementById("submenu").style.display = "block";
		    }
		</script>
		<?php include '../PHP/header.php' ?>
		<div id="page">
		    <div class="course_container">
                <ul>
                    <li onclick="switch_menu()"><a><span><?php
                        if(empty($_GET["location"]))
                            echo "Select Location";
                        else{
                            include "../PHP/dbhandler.php";
                            $sql = "SELECT * from bookstore where loclink = '".$_GET["location"]."'";
                            $res = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($res);
                            echo $row["location"];
                        }
                    ?><img style="float:right;height:20px;margin-right : 10px" src="https://www.freeiconspng.com/uploads/white-down-arrow-png-2.png"></img></a>
                        <div id="submenu" class="sub_menu">
                            <ul>
                                <li><a href="../bookstores/">All</a></li>
                                <?php
                                    include "../PHP/dbhandler.php";
                                    $sql = "SELECT DISTINCT location, loclink FROM bookstore ORDER BY location;";
                                    $res = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($res)){
                                        echo "<li><a href='../bookstores/?location=".$row["loclink"]."'>".$row["location"]."</a></li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </li>
                </ul>
	        </div>
	        <?php
	            include '../PHP/dbhandler.php';
	            $msql = "SELECT * FROM bookstore";
    	        if(empty($_GET["location"]))
    	            $sql = "";
	            else
                    $sql = " WHERE loclink = '".$_GET["location"]."'";
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
        	            echo '<div class="block">
        	                <div class="background_container">
        	                    <img src="'.$row["bg"].'" class="background"></img>
            	                <div class="header">'.$row["name"].' - <span class="description">'.$row["location"].'</span></div>
                            </div><br>
        	                <a target="_blank" href="'.$row["link"].'">View More</a>
                        </div><br><br>';
    	            }
    	        }
    	        else{
    	            echo '<div class="error">Sorry! No match for bookstores found. :(</div>';
    	        }
    	    ?>
    	    <?php
    	        echo "<div style='text-align:center;' id='page_number'>";
	            if(!isset($_GET["page"]))
					$_GET["page"] = 1;
				for($page=1; $page<=$no_of_pages; $page++){
	                if($page==$_GET["page"])
						echo "<u>";
					if(isset($_GET["location"]))
	                    echo "<a href='../bookstores/?location=".$_GET["location"]."&page=".$page."'>".$page."</a>";
                    else
                        echo "<a href='../bookstores/?page=".$page."'>".$page."</a>";
					if($page==$_GET["page"])
						echo "</u>";
				}
	            echo "</div>";
    	    ?>
		</div>
		<?php include '../PHP/menu.php'; ?>
		<?php include '../PHP/search.php'?>
	</body>
</html>