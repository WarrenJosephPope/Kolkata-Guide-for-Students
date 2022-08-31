<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | JT Aviation Academy</title>
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
		    <img class="bg" src="https://content3.jdmagicbox.com/comp/kolkata/l5/033pxx33.xx33.190814092816.a4l5/catalogue/jt-aviation-academy-gariahat-kolkata-institutes-for-aviation-yukb7ztxo2.jpg"></img>
		     <img class="logo" src=" https://media-exp1.licdn.com/dms/image/C510BAQGknup19CgerQ/company-logo_200_200/0?e=2159024400&v=beta&t=FKpNf-qoYC_bxyZPqPmoYw3zNpNOdABFqMoMSGpEG60"></img>
		     <span id="college_name"><a target="_blank" href="https://jtaviation.in/">JT Aviation Academy</a>
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
		    <p>  JT AVIATION ACADEMY is an ISO 9001:2015 & ISO 29990:2010 certified college, which is located in Kolkata and was incorporated in 2013. JT Aviation Institute of Airhostess Management Pvt. Ltd. is affiliated with Maulana Abul Kalam Azad University of Technology (  M.A.K.A.U.T.) (formerly known as W.B.U.T.) and authorized by International Air Transport Association (  IATA). JT Aviation Academy is known as JT Aviation Institute of Airhostess Management Pvt. Ltd.The college is managed by a team of highly skilled professionals.We provide a comfortable and educative atmosphere where our skilled and highly trained instructors along with the other Knowledgeable Professor brings out the best in all the students. We motivate the students to perform any challenging situations which helps them to achieve the pinnacle in their professional life. We impart the best of training methods about courteous customer service, grooming skills, presentation skills and also about the quality of education which is required to excel in the Aviation and the Corporate sectors. Give wings your dreams and we would like to invite you, to join us in this wonderful journey, where we help you to create a bright future in the Aviation industry.<br><br>
	    	    <span style="float:right;">JT Aviation Academy, Kolkata<br>
                  AA-45,VIP ROAD,, SHREE TOWER,<br>
		        Sahabagan, Jyangra, Baguiati, Kolkata,Kolkata 700059,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://jtaviation.in/about.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Courses</li>
		            <li id="pg" onclick="pg();">Degree Courses</li>
		            <li id="bed" onclick="bed();">More Aviation Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Air hostess Course</h1>
    		    <p>Air Hostess or Cabin crew course is one of the high profile courses that many adults are pursuing these days. Becoming an Air hostess is one of the dreams that most of the young girl's dream of this day. The air hostess career not only gives you good pay but also provides you with an opportunity to travel worldwide and meet new people. In fact, you also get chances to meet business tycoons, celebrities and other high profile people as well.
				At JT aviation, one of the best air hostess college in Kolkata, we initiate to make your dream come true. Below are the air hostess courses that are provided in our college.
    		          <br>
    		        <a target="_blank" href="https://jtaviation.in/airhostess-courses.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Flight Attendant Course</h1>
    		    <p>If the world of traveling is fascinating to you, then you must take up a flight attendant course. A flight attendant is a male cabin crew member. If you love to travel high in the air, have a great personality, right attitude and excel in hospitality, then you must rightly take up flight attendant training.
    		         <br>
    		        <a target="_blank" href="https://jtaviation.in/flight-attendant-courses.php">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
                 <h1 class="course_name">BBA Aviation Operations</h1>
    		    <p>BBA Aviation Management<br>
				If you are really eager to have a great career in BBA Aviation Operations then you should really go for it. You have the opportunity to learn Aviation Operations in the best way possible. Our College is affiliated by  MAKAUT University W.B.U.T. and Certified by  IN-JTA-01-20-001 to learn various important skills needed to have managerial skills in Aviation Industry.

The duration of this course is 3 years. Every student is required to complete 6 semesters in total in 3 years in order to complete the course. Therefore, if you are interested to enrol yourself in this college then you really need to hurry up.
    		         <br>
    		        <a target="_blank" href="https://jtaviation.in/bba-aviation-operation.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">MBA Aviation Management</h1>
    		    <p>MBA Aviation Management<br>
If you wish to have a successful career in the Aviation field then you need to pursue MBA Aviation Management from JT Aviation Academy. Our college is Affiliated by  MAKAUT University W.B.U.T. and Certified by  IN-JTA-01-20-001To learn various important aspects needed to have managerial skills in Aviation Industry. The institute is well equipped with different modules to assist the students in acquiring sound knowledge on cargo, ground handling, safety and fleet management, aviation, fuelling management etc. MBA Aviation Management is a 2-year long course which has a total of 4 semesters. Come and apply for this course at our institute.

MBA Aviation Management is a 2-year long course which has total 4 semesters.Hurry Up! Come and apply for this course at our institute.


    		         <br>
    		        <a target="_blank" href="https://jtaviation.in/mba-aviation-management.php">Read more</a>
    		    </p>
				
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               
			    <h1 class="course_name">Cargo Courses</h1>
    		    <p> Male students who have a good physique and aspire to work in airline industries can go for air cargo training courses in India. The diploma course in cargo management is an exclusive job opportunity for the students who are willing to stay on the ground and serve the airline industries. The cargo handling course is a diploma course that trains the student in cargo management and handling the air baggage that is being transferred through various airlines.
    		         <br>
    		        <a target="_blank" href="https://jtaviation.in/cargo.php">Read more</a>
    		    </p>
					
				 <h1 class="course_name">Ground Staff Course</h1>
				<p> India is soon becoming one of the leading job providers in aviation industries. It is noted that by 2020 India will stand third in the race. As the aviation industry is soaring high, the demand for ground staff student has also increased. The ground staffs are also represented as ground crew in the aviation language. The demand of the staffs is increasing with the number of cargos being delivered through airlines.
				JT Aviation is one of the best airport ground staff training colleges in Kolkata that provides practical training to the students to get the airport ground staff job.
				 <br>
					<a target="_blank" href="https://jtaviation.in/ground-staff-courses.php">Read more</a>
				</p>

				 <h1 class="course_name">Ticketing Courses</h1>
				<p> Airport ticketing course in Kolkata<br>
					Airport ticketing course in Kolkata is basically a travel professional course provided to students who are aspiring to have a career in aviation industries. The airport ticketing course India is a course where the student opts for a degree or diploma or a certificate program in air ticketing course Kolkata.The air ticketing course fees in India differ for each academy. It depends on the duration and advancement of the course.

					The aspirants are trained with the method of booking and reserving tickets for the passengers. They are also trained in the cancellation and re-reservation process. The airport ticketing staff is also imbibed with the skill of helping the customers to plan an itinerary and make travel arrangements. Ticketing is a service of providing documents by the airlines to those who want to travel by the airlines.<br>
					<a target="_blank" href="https://jtaviation.in/ticketing.php">Read more</a>
				</p>				
			</div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://jtaviation.in/admission.php">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission:</h1>
                <p>About Admission Procedure<br>
JT Aviation is one of the best Cabin Crew Training College in Kolkata. It is ISO 9001:2015 & ISO 29990:2010 certified. JT Aviation Institute of Airhostess Management Pvt. Ltd. is affiliated by Maulana Abul Kalam Azad University of Technology (  MAKAUT) and authorized by International Air Transport Association (  IATA). If you find yourself eligible for Cabin Crew Training course which is for both male and female aspirants, you can apply for the admission easily. Fill up the online query form available on our website with your details and register. Our Help-Desk Executives will be happy to contact you at the earliest. In case, you need guidance to feel free to call us in between 10:30 AM to 05:30 PM.<br>
                    <a target="_blank" href="https://jtaviation.in/admission.php">Read more</a>
                </p>
            </div>
            
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placement</h1>
            <div class="place_block">
                <p>Placement<br>
				We have successfully placed our students in the following companies
				<br>
                    <a target="_blank" href="https://jtaviation.in/placement.php">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '27'";
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
					$sql1 = "SELECT * FROM colleges where id = '27'";
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