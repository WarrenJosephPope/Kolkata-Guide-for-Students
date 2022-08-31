<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Annex College, Kolkata</title>
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
		    <img class="bg" src="https://d1kzgg54terghg.cloudfront.net/api_main/public/images/basic-info/1555919002-banner.png"></img>
		     <img class="logo" src="https://image3.mouthshut.com/images/imagesp/925721147s.jpg"></img>
		     <span id="college_name"><a target="_blank" href="https://www.annexcollege.ac.in/">Annex College, Kolkata</a>
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
		    <h1>ABOUT</h1>
		    <p>OUR MISSION<br>
TO BECOME THE WORLD CLASS CENTRE IN PROVIDING GLOBALLY RELEVANT MANAGEMENT AND IT EDUCATION.
<br>
Our Vision<br>
To harness the professional competence of the Nation's human resources by providing world class Management and IT education using state of the art technology. To bring the metamorphosis in the country's Management and IT scenario by reaching the would be managers across the country through a deep-rooted Management and IT development. To create and develop technocrats, entrepreneurs and business leaders who could strive to improve the quality of human life.
			<br><br>
	    	    <span style="float:right;">Annex College, Kolkata<br>
               BD-91, Salt Lake City,<br>
				Sec-I, Kolkata - 700064<br>
				West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.annexcollege.ac.in/contact.php">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG & PG Courses</li>
		            <li id="pg" onclick="pg();">PG Diploma Courses</li>
		            <li id="bed" onclick="bed();">Diploma Certificate Courses</li>
				</ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">UG & PG COURSES OFFERED BY ACMS</h1>
				<p>Graduation Courses<br>
				Master Degree<br>
				Integrated Dual Course<br>
    		          <br>
    		        <a target="_blank" href="https://www.annexcollege.ac.in/ug_pg.php#parentHorizontalTab1">Read more</a>
    		    </p>	
				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
             	<h1 class="course_name">PG DIPLOMA COURSES OFFERED BY ACMS</h1>
				<p>About the Programme<br>
				    		          <br>
    		        <a target="_blank" href="https://www.annexcollege.ac.in/pg_diploma.php">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">DIPLOMA CERTIFICATE COURSES OFFERED BY ACMS</h1>
				<p>About the Programme<br>
    		          <br>
    		        <a target="_blank" href="https://www.annexcollege.ac.in/diploma_certificate.php">Read more</a>
    		    </p>
			</div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
           
            <div class="admit_block">
			
                <h1 class="admit_name"> Admission Related Queries</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.annexcollege.ac.in/admission.php">Read more</a>
                </p>	
				
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placements</h1>
            <div class="place_block">
               <h1 class="admit_name">PLACEMENT </h1>
                <p>SIP & WORK SHOP
Apart from extensive academic programmes at ACMS, Summer Internships projects (SIP) & Industry Visit are organized throughout the year.

These activities not only complement the academic programme exposing them to practical real life solutions but also infuse in students-a sense of discipline and corporate culture.

ACMS is very active in community and social services with special welfare & education programmes as part of its right social commitment. A series of seminars, workshops, cultural programmes,

event management, and sports were part of the activities for the students and working executives to broaden their existence in all corners & the society.
			<br><br>
                    <a target="_blank" href="https://www.annexcollege.ac.in/sip.php">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '7'";
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
					$sql1 = "SELECT * FROM colleges where id = '7'";
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