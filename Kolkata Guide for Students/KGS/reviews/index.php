<?php
    session_start();
?>
<!DOCTYPE html>
<html
    <head>
		<title>Kolkata Student Guide | Write a Review</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/review1.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
			function switch_menu1(){
		        if(document.getElementById("submenu1").style.display == "block")
		            document.getElementById("submenu1").style.display = "none";
                else
                    document.getElementById("submenu1").style.display = "block";
		    }
			
			function switch_menu2(){
		        if(document.getElementById("submenu2").style.display == "block")
		            document.getElementById("submenu2").style.display = "none";
                else
                    document.getElementById("submenu2").style.display = "block";
		    }
			function sortOrder(){
				var arrow = document.getElementsByClassName("arrow")[0];
				if(arrow.style.transform === "rotate(180deg)")
					arrow.style.transform = "rotate(0deg)";
				else
					arrow.style.transform = "rotate(180deg)";
			}
		</script>
		<?php include "../PHP/header.php";
			if(!isset($_GET["sort"]))
				$_GET["sort"] = "college";
			if(!isset($_GET["ord"]))
				$_GET["ord"] = "ASC";
			if(!isset($_GET["page"]))
				$_GET["page"] = 1;
		?>
	    <div id="page">
	        <h1>Reviews</h1>
            <div class="course_container">
                <ul>
                    <li onclick="switch_menu()"><a><span><?php
                        if(empty($_GET["id"]))
                            echo "Select a College";
                        else{
                            include "../PHP/dbhandler.php";
                            $sql = "SELECT * from colleges where id = '".$_GET["id"]."'";
                            $res = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($res);
                            echo $row["name"];
                        }
                    ?><img style="float:right;height:20px;margin-right : 10px" src="https://www.freeiconspng.com/uploads/white-down-arrow-png-2.png"></img></a>
                        <div id="submenu" class="sub_menu">
                            <ul>
                                <li><a href="../reviews/">All</a></li>
                                <?php
                                    include "../PHP/dbhandler.php";
									$sql = "SELECT * FROM colleges ORDER BY name";
									$res = mysqli_query($conn, $sql);
                                    while($row=mysqli_fetch_array($res)){
                                        echo "<li><a href='../reviews/?id=".$row["id"]."'>".$row["name"]."</a></li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </li>
                </ul>
	        </div>
			<div class="course_container cont1">
                <ul>
                    <li onclick="switch_menu1()"><a><span><?php
                        if(empty($_GET["sort"]))
                            echo "Sort by college";
                        else
                            echo "Sort by ".$_GET["sort"];
                    ?><img style="float:right;height:20px;margin-right : 10px" src="https://www.freeiconspng.com/uploads/white-down-arrow-png-2.png"></img></a>
                        <div id="submenu1" class="sub_menu sub1">
                            <ul>
                                <li><a href=<?php if(isset($_GET["id"])){echo "../reviews/?id=".$_GET["id"]."&sort=college";}else{echo "../reviews/?sort=college";}?>>Colleges</a></li>
                                <li><a href=<?php if(isset($_GET["id"])){echo "../reviews/?id=".$_GET["id"]."&sort=rating";}else{echo "../reviews/?sort=rating";}?>>Rating</a></li>
                                <li><a href=<?php if(isset($_GET["id"])){echo "../reviews/?id=".$_GET["id"]."&sort=date";}else{echo "../reviews/?sort=date";}?>>Date</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
	        </div>
			<div class="course_container cont1">
                <ul>
                    <li onclick="switch_menu2()"><a><span><?php
                        if(empty($_GET["ord"])||$_GET["ord"]=="ASC")
                            echo "Ascending";
                        else
                            echo "Descending";
                    ?><img style="float:right;height:20px;margin-right : 10px" src="https://www.freeiconspng.com/uploads/white-down-arrow-png-2.png"></img></a>
                        <div id="submenu2" class="sub_menu sub1">
                            <ul>
                                <li><a href=<?php if(isset($_GET["id"])){echo "../reviews/?id=".$_GET["id"]."&sort=".$_GET["sort"]."&ord=ASC";}else{echo "../reviews/?sort=".$_GET["sort"]."&ord=ASC";}?>>Ascending</a></li>
                                <li><a href=<?php if(isset($_GET["id"])){echo "../reviews/?id=".$_GET["id"]."&sort=".$_GET["sort"]."&ord=DESC";}else{echo "../reviews/?sort=".$_GET["sort"]."&ord=DESC";}?>>Descending</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
	        </div>
	        <?php
	            include "../PHP/dbhandler.php";
	            if(isset($_GET["id"])){
	                $sql = "SELECT * FROM reviews WHERE college = '".$_GET["id"]."'";
					$res = mysqli_query($conn, $sql);
	                if(mysqli_num_rows($res)>0){
	                    $five = 0;
    	                $four = 0;
    	                $three = 0;
    	                $two = 0;
    	                $one = 0;
    	                while($row=mysqli_fetch_array($res)){
    	                    if($row["rating"]=="5")
    	                        $five++;
                            else if($row["rating"]=="4")
                                $four++;
                            else if($row["rating"]=="3")
                                $three++;
                            else if($row["rating"]=="2")
                                $two++;
                            else if($row["rating"]=="1")
                                $one++;
                            else
                                echo "Error!";
    	                }
    	                $tot = $five+$four+$three+$two+$one;
    	                $tot_rate = (round((($five*5)+($four*4)+($three*3)+($two*2)+($one))/$tot, 2))*20;
    	                echo "<div class='block' style='padding:0 10px;'>
    	                    <div class='cont'><div class='text'>5 Stars</div><div class='num'><div class='bar' style='background:#4CAF50;width:".($five*100/$tot)."%'></div></div></div>
    	                    <br>
    	                    <div class='cont'><div class='text'>4 Stars</div><div class='num'><div class='bar' style='background:#2196F3;width:".($four*100/$tot)."%'></div></div></div>
    	                    <br>
    	                    <div class='cont'><div class='text'>3 Stars</div><div class='num'><div class='bar' style='background:#00bcd4;width:".($three*100/$tot)."%'></div></div></div>
    	                    <br>
    	                    <div class='cont'><div class='text'>2 Stars</div><div class='num'><div class='bar' style='background:#ff9800;width:".($two*100/$tot)."%'></div></div></div>
    	                    <br>
    	                    <div class='cont'><div class='text'>1 Stars</div><div class='num'><div class='bar' style='background:#f44336;width:".($one*100/$tot)."%'></div></div></div>
    	                    <div class='cont'><div class='text1'>Total Rating </div><div class='hold'><div class='rate_amt' style='width:".$tot_rate."%'></div><img src='../Pictures/star_rate.png' class='star_rate'></img></div></div>
    	                </div>";   
	                }
	                else{
						$sql1 = "SELECT * FROM colleges WHERE id = '".$_GET["id"]."'";
						$res1 = mysqli_query($conn, $sql1);
						$row1 = mysqli_fetch_array($res1);
	                    echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">Sorry. No reviews for this college was found :(</span>
							</div></div>
	                    </div>';
	                }
	            }
	            $sql = "SELECT * FROM reviews";
	            if(isset($_GET["id"]))
	                $sql .= " WHERE college = '".$_GET["id"]."'";
				$sql .= " ORDER BY ".$_GET["sort"]." ".$_GET["ord"];
				$res = mysqli_query($conn, $sql);
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
				
                $res = mysqli_query($conn, $sql.$limit_sql);
				if(mysqli_num_rows($res)>0){
					while($row=mysqli_fetch_array($res)){
						$sql1 = "SELECT * FROM colleges where id = '".$row["college"]."'";
						$res1 = mysqli_query($conn, $sql1);
						$row1 = mysqli_fetch_array($res1);
						$rate = $row["rating"];
						$star = '<div class="star">';
						$date = date_create($row["date"]);
						for($i = 1; $i <= 5; $i++){
							if($i <= $rate)
								$star .= '<span class="checked"></span>';
							else
								$star .= '<span class="unchecked"></span>';
						}
						$star .= '</div>';
						echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">Review for '.$row1["name"].'</span><a class="mailLink" href = "mailto:'.$row["email"].'?subject = Feedback&body = Message">'.$row["email"].'</a><br>
								<span class="header">By '.$row["name"].'</span><br><br>'.$star.'
								<br><br>
								<div class="desc">'.$row["comment"].'</div>
								<div style="margin-top:10px;width:100%;text-align:right;text-shadow : 0 2px 5px rgba(255, 255, 255, 0.7);" class="header">Posted On '.date_format($date, "jS M, Y").'</div>
							</div></div>
						</div>';
					}
				}
	        ?>
			<br><br>
			<?php
    	        echo "<div style='text-align:center;' id='page_number'>";
	            for($page=1; $page<=$no_of_pages; $page++){
					if($page==$_GET["page"])
						echo "<u>";
					if(isset($_GET["id"]))
	                    echo "<a href='../reviews/?id=".$_GET["id"]."&page=".$page."&sort=".$_GET["sort"]."&ord=".$_GET["ord"]."'>".$page."</a>";
                    else
                        echo "<a href='../reviews/?page=".$page."&sort=".$_GET["sort"]."&ord=".$_GET["ord"]."'>".$page."</a>";
					if($page==$_GET["page"])
						echo "</u>";
	            }
	            echo "</div>";
    	    ?>
	    </div>
	    <?php require '../PHP/menu.php'; ?>
	    <?php require '../PHP/search.php' ?>
	</body>
</html>