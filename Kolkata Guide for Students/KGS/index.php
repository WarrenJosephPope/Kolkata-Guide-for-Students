<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/slider.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/header.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="CSS/homepage.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'PHP/header.php'; ?>
		<div id="container">
			<div id="slideshow">
				<img src="Pictures/b1.jpeg"></img>
				<img src="Pictures/b2.jpg"></img>
				<img src="Pictures/b3.jpg"></img>
				<img src="Pictures/b1.jpeg"></img>
			</div>
		</div>
		<h1 align="center" class="info_header">EXPLORE EVERYTHING A STUDENT NEEDS TO KNOW</h1>
		<div id="art_menu">
			<div class = "blocks">
				<a href="colleges">
					<img src = "Pictures/college.png"></img><br>
					<span class="block_text">Find College</span>
				</a>
			</div>
			
			<div class = "blocks">
				<a href="pg/pglist.php">
					<img src = "Pictures/hostel.png"></img><br>
					<span class="block_text">PG Accomodation</span>
				</a>
			</div>
			
			<div class = "blocks">
				<a href="reviews">
					<img src = "Pictures/review.png"></img><br>
					<span class="block_text">Top Reviews</span>
				</a>
			</div><br>
			
			<div class = "blocks">
				<a href="pg/register.php">
					<img src = "Pictures/hostel.png"></img><br>
					<span class="block_text">Register your PG</span>
				</a>
			</div>
			
			<div class = "blocks">
				<a href="reviews/write.php">
					<img src = "Pictures/review.png"></img><br>
					<span class="block_text">Write a review<span>
				</a>
			</div>
			
			<div class = "blocks">
				<a href="bookstores">
					<img src = "Pictures/shop.png"></img><br>
					<span class="block_text">Book Stores</span>
				</a>
			</div>
		</div>
		<div id="future">
			<img class="future_pic" src = "Pictures/admissions.png"></img>
			<div class="text1">Explore Your Future</div><br>
			<div class="text2">Select for college</div>
			<table id="future_container">
				<tr>
    				<td class="blocks">
    					<a href="colleges/?course=Engineering">
    						<img src="Pictures/engineer.png"></img><br>
    						<span class="block_text">ENGINEERING</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Engineering'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Medical">
    						<img src="Pictures/medical.png"></img><br>
    						<span class="block_text">MEDICAL</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Medical'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Agriculture">
    						<img src="Pictures/agriculture.png"></img><br>
    						<span class="block_text">AGRICULTURE</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Agriculture'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Architecture">
    						<img src="Pictures/architecture.png"></img><br>
    						<span class="block_text">ARCHITECTURE</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Architecture'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Arts">
    						<img src="Pictures/arts.png"></img><br>
    						<span class="block_text">ARTS</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Arts'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
				</tr>
				<tr>
				    <td class="blocks">
    					<a href="colleges/?course=Commerce">
    						<img src="Pictures/commerce.png"></img><br>
    						<span class="block_text">COMMERCE</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Commerce'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Dental">
    						<img src="Pictures/dental.png"></img><br>
    						<span class="block_text">DENTAL</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Dental'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Design">
    						<img src="Pictures/design.png"></img><br>
    						<span class="block_text">DESIGN</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Design'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Education">
    						<img src="Pictures/education.png"></img><br>
    						<span class="block_text">EDUCATION</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Education'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/? course=Law">
    						<img src="Pictures/law.png"></img><br>
    						<span class="block_text">LAW</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Law'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
				</tr>
				<tr>
				    <td class="blocks">
    					<a href="colleges/?course=Pharmacy">
    						<img src="Pictures/pharmacy.png"></img><br>
    						<span class="block_text">PHARMACY</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Pharmacy'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Science">
    						<img src="Pictures/science.png"></img><br>
    						<span class="block_text">SCIENCE</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Science'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=Computers">
    						<img src="Pictures/computer.png"></img><br>
    						<span class="block_text">COMPUTER APPLICATIONS</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Computers'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=MassCom">
    						<img src="Pictures/masscom.png"></img><br>
    						<span class="block_text">MASS COMMUNICATIONS</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'MassCom'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/?course=VetSc">
    						<img src="Pictures/vet.png"></img><br>
    						<span class="block_text">VETERINARY SCIENCES</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'VetSc'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
				</tr>
				<tr>
				    <td class="blocks">
    					<a href="colleges/?course=HotMan">
    						<img src="Pictures/hotman.png"></img><br>
    						<span class="block_text">HOTEL MANAGEMENT</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'HotMan'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
    				<td class="blocks">
    					<a href="colleges/? course=Vocational">
    						<img src="Pictures/voc.png"></img><br>
    						<span class="block_text">VOCATIONAL COURSES</span>
    						<span class="block_info"><?php
    						    include 'PHP/dbhandler.php';
    						    $sql = "SELECT colleges FROM courses where name = 'Vocational'";
    						    $res = mysqli_query($conn, $sql);
    						    $row = mysqli_fetch_array($res);
                                $token = strtok($row[0], " ");
                                $cnt = 0;
                                while ($token !== false)
                                {
                                    $cnt++;
                                    $token = strtok(" ");
                                }
                                echo $cnt." Colleges";
    						?></span>
    					</a>
    				</td>
				</tr>
			</table>
		</div>
		<?php include 'PHP/menu.php'?>
		<?php include 'PHP/search.php'?>
	</body>
</html>