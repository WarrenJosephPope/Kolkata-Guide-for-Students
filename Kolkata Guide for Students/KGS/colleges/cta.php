<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | CTA - Contemporary Training Academy,Kolkata</title>
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
		    <img class="bg" src="https://contemporaryacademy.in/img/sharer-main.jpg"></img>
		     <img class="logo" src="https://contemporaryacademy.in/img/CTA-logo.png"></img>
		     <span id="college_name"><a target="_blank" href="https://contemporaryacademy.in/">CTA - Contemporary Training Academy,Kolkata</a>
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
		        <li id="place" onclick="place();">Placement</li>
		        <li id="review" onclick="review();">Reviews</li>
		    </ul>
		</div>
		<div class="information" id="college_about">
		    <h1>About</h1>
		    <p> The Contemporary Training Academy has been instituted to cater to the growing demand for trained Service oriented professionals. It is the Vision of the Academy to fill the skills and knowledge required by the New Age Service Industry by addressing the gaps between an Educational Institution and the Organization. This is achievable through distinctive training modules, qualified faculty and cutting edge infrastructure.
			<br><br>
	    	    <span style="float:right;">CTA - Contemporary Training Academy,Kolkata<br>
                  8 Ho Chi Minh Sarani,Harrington Mansion,<br>
		        Next to 22 Camac Street, Kolkata 700 071<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://contemporaryacademy.in/about-us">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Courses</li>
		            <li id="pg" onclick="pg();">Programmes Duration</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">12 Months Advanced Diploma Course in Aviation & Hospitality Management Introduction:</h1>
    		    <p>Module 1: CABIN CREW TRAINING<br>
Offers you intensive Learning Elements an in flight training in realizing your Professional and Personal Development to help you achieve your flight attendant dream. This course also includes Hospitality Management in the Hotel Industry.<br>

Module 2: SOARING IN THE SKY - CABIN CREW AND IN-FLIGHT SERVICES<br>
Provides intensive training on Airlines Orientation covering all Airline Rules & Regulations, First Step into Aviation, Cabin Familiarization, Galley Management and Announcement Delivery.
Fundamentals of In-flight Service will focus on elements that contribute to Excellence in Service Management; from Specific Duties and Responsibilities, Airline Food & Beverage, Customer Care Fundamentals, Service Procedures and Delivery to Aviation Safety. The Contemporary Training Academy (CTA) is an assurance that your Flight to Learning will always be smooth and fulfilling.


    		          <br>
    		        <a target="_blank" href="https://contemporaryacademy.in/programmes">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
                 <h1 class="course_name"> </h1>
    		    <p>12 Months Advanced Diploma Course in Aviation & Hospitality Management
5 days per week *
2 hours per day (flexible timings available)
* Specialized Developmental Sessions on Saturdays

LEARNING OUTCOME - AVIATION PERSPECTIVES
    		          <br>
    		        <a target="_blank" href="https://contemporaryacademy.in/programmes#programmes-duration">Read more</a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://contemporaryacademy.in/apply">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Application Form</h1>
                <p><br>
You can contact us with anything related to our Courses, Enquires, Placements, etc. We'll get in touch with you as soon as possible.

                    <a target="_blank" href="https://contemporaryacademy.in/apply">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Employment</h1>
            <div class="place_block">
                <p>At Contemporary Training Academy we don’t believe that the job is done till its done. Our responsibility extends beyond the boundaries of the classroom and into the domain of creating pathways for you to realize your dreams.

Having the proud lineage of Kingfisher Airlines, we are in the best position to offer placement opportunities in a variety of Aviation functions, be it Cabin Crew or Ground Personnel. We also invite other Airlines to conduct campus interviews for our students who are nurtured to be the future Service Professionals.
				<br>
                    <a target="_blank" href="https://contemporaryacademy.in/employment">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '11'";
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
					$sql1 = "SELECT * FROM colleges where id = '11'";
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