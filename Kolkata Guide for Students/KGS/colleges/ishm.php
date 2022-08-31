<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | International School of Hospitality Management,Kolkata</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/colleges.css"/>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <script src="../Scripts/select.js"></script>
	    <script src="../Scripts/rem_wm.js"></script>
		<?php include '../PHP/header.php'?>
		<div id="college_info">
		    <img class="bg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQm4bFdv5_4MaHykltiEXUtYPbyjWWDbhBOq_Loo1ssRnZQquG-&usqp=CAU"></img>
		     <img class="logo" src="https://d3pcsg2wjq9izr.cloudfront.net/files/45343/images/4-ISHM_Logo_Reg--400.png"></img>
		     <span id="college_name"><a target="_blank" href="https://www.ishm.co.in/">International School of Hospitality Management,Kolkata</a>
                <?php 
    		        if(isset($_SESSION['id']))
    		            echo '<button>Add to Favourites+</button>';
                ?></span>
		</div>
		<div id="college_menu">
		    <ul>
		        <li id="info" class="selected" onclick="info();">About</li>
		        <li id="course" onclick="course();">Courses</li>
		        <li id="admit" onclick="admit();">Admission 2020</li>
		        <li id="review" onclick="review();">Reviews</li>
		    </ul>
		</div>
		<div class="information" id="college_about">
		    <h1>About</h1>
		    <p>  The International School of Hospitality Management (ISHM) is one of the fastest growing & most promising Hospitality Management Institute in Kolkata. ISHM Degrees / Diplomas are based on the philosophy that a commitment to excellence and nest education and training are essential for those who are seeking the most sought-after positions in the highly competitive hospitality industry. <br><br>
	    	    <span style="float:right;">International School of Hospitality Management,Kolkata<br>
                  EN 59, Salt Lake Sector 5<br>
		         Electronics Complex Nearest Busstop : Webel Crossing, Kolkata 700091,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.ishm.co.in/Home/about">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Diploma in Aviation, Hotel & Hospitality Management (1 Year)</h1>
    		    <p>OBJECTIVE : CABIN CREW | AIR-HOSTESS | F&B | CULINARY
    		          <br>
    		        <a target="_blank" href="https://www.ishm.co.in/Diploma-in-Aviation,-Hotel-&-Hospitality-Management-(1-Year)">Read more</a>
    		    </p>
				
				 <h1 class="course_name">BHM Hotel Management (3 Years)</h1>
    		    <p> LEARN & EARN
DURATION : 3 YEARS                                                                                                       ELIGIBILITY: 12th Pass

The degree offered from UGC recognised University & accepted by another International body. Bachelor in Hotel Management (BHM) course seeks to provide adequate knowledge, skill and exposure in the field of Culinary art, Food & Beverage, Guest Relation, Catering Sales that commensurate with the requirements of the industry.
    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/BHM-Hotel-Management-(3-Years)">Read more</a>
    		    </p>
				
				<h1 class="course_name">BHM + BTS DUAL DEGREE in HOTEL MANAGEMENT (3 Years)</h1>
    		    <p>  WORK ABROAD PROGRAM | DUAL DEGREE : BHM + BTS
BHM - HOTEL / HOSPITALITY MANAGEMENT
B.TS - TOURISM STUDIES
DURATION : 3 Year (2.5 Years in India + Final Semester Abroad (or) 1 Year OJT)                           ELIGIBILITY: 12th Pass 

On Job Training Countries to choose - India | UAE | Maldives | Indonesia I Mauritius | Thailand | France | China | Australia


    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/BHM-+-BTS-DUAL-DEGREE-in-HOTEL-MANAGEMENT-(3-Years)">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.B.A in Hospitality Management (3 Years)</h1>
    		    <p>  STUDY ABROAD | TWINNING DEGREE : B.B.A + GDAHM
DURATION: 3YEARS (2.5 Years in India + FInal Semester in Thailand/MALAYSIA)                       ELIGIBILITY: 12th Pass

B.B.A IN HOSPITALITY MANAGEMENT
GRADUATE DIPLOMA IN AIRLINE & HOTEL MANAGEMENT


    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/B.B.A-in-Hospitality-Management-(3-Years)">Read more</a>
    		    </p>
				
				<h1 class="course_name">PGPBM MBA (2 Years)</h1>
    		    <p> DUAL SPECIALISATION :        1. International Business          2. Hotel / Hospitality Management

DURATION: 2 YEARS                                                                                                       ELIGIBILITY: Graduate 

 

On Job Training Countries to choose - India, UAE, Maldives, Mauritius, Thailand, France, China, Australia


    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/PGPBM--MBA-(2-Years)">Read more</a>
    		    </p>
				
				<h1 class="course_name">ADVANCE DIPLOMA in Aviation, Hotel & Hospitality Management (2 Years)</h1>
    		    <p> DURATION: 2 YEARS      <br>                                                                    ELIGIBILITY: 10th/12th Pass<br>

The Advance diploma courses are focused in core areas of Hotel, Airlines & Hospitality Operations. Students are entitled to work with star category hotels and resorts in Malaysia & India.  Students will be trained in Food & Beverage, Housekeeping, Culinary and other operation departments

 
    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/ADVANCE-DIPLOMA-in-Aviation,-Hotel-&-Hospitality-Management-(2-Years)">Read more</a>
    		    </p>
				
				<h1 class="course_name">Hospital Management</h1>
    		    <p> HOSPITAL MANAGEMENT / HOSPITAL ADMINISTRATION In Kolkata<br>
Bachelor in Hospital Management / Bachelor of Hospital Administration + International Graduate Diploma in Health Care Management ( 3 Years )
Master in Hospital Administration + International Graduate Diploma in Health Care Management  ( 2 Years )
 
<br>
 

Course Overview<br>
Managing a present day hospital is a complex task. With rapid changes taking place in medical research and techniques, the facilities and services have also undergone significant changes. Hospital managers are, therefore, faced with managing a vast range of services, changing patient profiles, high cost of procuring and servicing equipment and people management.


    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/Hospital-Management">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.B.A in Aviation Management</h1>
    		    <p>BBA AVIATION MANAGEMENT<br>
BBA in Airport Management / Aviation Managmenet is the course where the students will learn about the fascinating world of airport operations by understanding the airport's role in history, the various agencies, airlines and companies found at an airport along with the important roles airports play in the local and national economies. They will also appreciate the fascinating types of technology used at airports from x-ray machines to runway lighting.


    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/B.B.A-in-Aviation-Management">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.B.A (BACHELOR OF BUSINESS ADMINISTRATION)</h1>
    		    <p>  B.B.A (BACHELOR OF BUSINESS ADMINISTRATION)<br>
BBA is not to be seen only as a first ladder to MBA. Rather, it is a first foray to some enriching on-job experience prior to MBA or higher business studies. The best of B-Schools all over the world value experience and so does employers.
    		         <br>
    		        <a target="_blank" href="https://www.ishm.co.in/B.B.A-(Bachelor-of-Business-Administration)">Read more</a>
    		    </p>
    		    
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admission:</h1>
                <p>For Admission<br>
                    <a target="_blank" href="https://www.ishm.co.in/Home/apply_now">Read more</a>
                </p>
            </div>
            
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '22'";
				$res = mysqli_query($conn, $sql);
				if(mysqli_num_rows($res)>0){
					while($row=mysqli_fetch_array($res)){
						$sql1 = "SELECT * FROM colleges where id = '".$row["college"]."'";
						$res1 = mysqli_query($conn, $sql1);
						$row1 = mysqli_fetch_array($res1);
						$rate = $row["rating"];
						$star = '<div class="star">';
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
							</div></div>
						</div>';
					}
				}else{
					$sql1 = "SELECT * FROM colleges where id = '22'";
					$res1 = mysqli_query($conn, $sql1);
					$row1 = mysqli_fetch_array($res1);
					echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">No reviews have been made for this college yet!</span><br>
								<span class="header">Click <a style="background:none;padding:0;margin:0;width:auto;text-decoration:underline;font-size:20px;" href="/KGS/reviews/write.php">here</a> to write your own review.</span><br><br>
							</div></div>
						</div>';
				}
			?>
        </div>
		<?php include '../PHP/menu.php'?>
		<?php include '../PHP/search.php'?>
	</body>
</html>