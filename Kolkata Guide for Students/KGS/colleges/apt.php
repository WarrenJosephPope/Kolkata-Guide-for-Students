<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Applied Professional Training (APT) - Air Hostess Training Institute</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/colleges.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <script src="../Scripts/select.js"></script>
	    <script src="../Scripts/rem_wm.js"></script>
		<?php include '../PHP/header.php'?>
		<div id="college_info">
		    <img class="bg" src="https://content.jdmagicbox.com/comp/kolkata/i2/033pxx33.xx33.120507135517.s2i2/catalogue/applied-professional-training-park-street-kolkata-air-hostess-training-institutes-7worer.jpg"></img>
		     <img class="logo" src="https://directory.edugorilla.com/wp-content/uploads/sites/6/2018/06/apt-2-1024x294.png"></img>
		     <span id="college_name"><a target="_blank" href="https://www.aptadvantage.com/">Applied Professional Training (APT) - Air Hostess Training Institute</a>
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
		    <p>  Applied Professional Training (APT)
			Looking at the massive youth population; both those who have not a chosen conventional career and those who have been not successful in carving a place for themselves, which most of them were not able to, due to the scarcity of options and very high competition in addition to serious academic input in the form of entrance examinations, etc, and sometimes pursuing such conventional careers would be too expensive for some to pursue it in the first place, looking at such youths being unemployed, or at the best doing odd jobs, confused as to their career plans, a group of professionals realized the potential of the youth going wasted due to lack of professional training and guidance. Hence they came together to form Applied professional training (APT), some for giving inputs only in subject matter development while others obliging to convert the entire project into a reality, so there came together different professionals who were very successful as a Cabin Crew, in the Tourism industry, Hotel industry, Airport management, Human resource management, who had not only excelled in their respective profession but were also excelling in imparting relevant training. And now they call themselves, Applied professional training institute Kolkata.
			<br><br>
	    	    <span style="float:right;">Applied Professional Training (APT) - Air Hostess Training Institute<br>
                 53A, Arihant Building (5th Floor),Mirza Ghalib Street,  <br>
		        Park Street Area, Kolkata - 700016<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.aptadvantage.com/about-applied-professional-training-apt/">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Courses</li>
		            <li id="pg" onclick="pg();">APT 360</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Diploma in Advance Service Management</h1>
    		    <p>
					COURSE OVERVIEW<br>
					Applied Professional Training (APT) provides an Airhostess Training course which is designed for students who want to excel in the service Industry. The skills that are developed in this air hostess training course make the students qualified to get employed in any sector of the Service Industry, be it working in Airlines as an Airhostess, at the Airport as a Ground Staff or with the Hotel or the Tourism industries.

    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/dasm-air-hostess-course/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Diploma In Cabin Crew Training</h1>
    		    <p>
					COURSE OVERVIEW<br>
					This Cabin Crew Training course is designed for students who are specifically looking for a career in Civil Aviation industry as a Cabin Crew. The program is ideal for someone who is looking for a high-paid job, someone who loves to travel, or who aspires to be a part of any of the reputed airlines.
					Joining APT Advantage for cabin crew training program will give the aspirants an opportunity to learn the professionalism of the department, which includes:
Managing interaction with the passengers in different scenarios.

    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/diploma-cabin-crew-training/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Diploma In Airport & Travel Management</h1>
    		    <p>
				COURSE OVERVIEW<br>
					The airport ground staff training program is designed for students who are specifically looking for a career in the Travel and Tourism, or Airport Management, both in India or Abroad. Upon completion of Airport Ground Staff Course, The students can work as an Airport Ground staff, Travel Agent, Tour Operator, Holiday consultant, Tourist Guide, Foreign Exchange Consultant, Visa Documents Officer, etc. This particular tourism & airport staff course in Kolkata will prepare you with a solid overview of the Airport Operations and also with tools to apply your knowledge and skills.

    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/diploma-airport-travel-management/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Diploma In Hotel Operation & Travel Management</h1>
    		    <p>
					COURSE OVERVIEW<br>
					Diploma in Hotel Operation & Travel Management program caters to candidates aspiring specifically to join the Hospitality and the Travel & Tourism Industry. Our institute encompasses the best hotel management course in Kolkata, to make our students globally competitive. Students graduating from APT Advantage luxuriate themselves into the most prestigious chain of hotels both in India and globally. The travel and tourism management course is also scientifically designed in such a way to make the students ready to join any sector of Travel & Tourism Industry.

    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/diploma-hotel-operation-travel-management/">Read more</a>
    		    </p>
					 
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
               <h1 class="course_name">Galileo Airline Reservation System</h1>
    		    <p>TRAINING OVERVIEW<br>
Galileo is part of the Travelport group of companies and has had a worldwide market share of 22% for airline bookings. In addition to airlines, Galileo can be used to book trains, cruises, car rental and hotel rooms.

What will you get ?
Getting trained and certified by Galileo opens up a whole world of employment opportunities for you, with this globally recognized certification you get yourself qualified to work anywhere in the world.
				<br>
				
    		        <a target="_blank" href="https://www.aptadvantage.com/galileo-software-training/">Read more</a>
    		    </p>
				
				<h1 class="course_name"> First-Aid Training & Certification for Air Hostess</h1>
    		    <p>TRAINING OVERVIEW<br>
The students are taught by highly qualified trainer from Indian Red Cross Society along with Certification of Training afterwards.

Indian Red Cross Society
The Indian Red Cross is a voluntary humanitarian organization of global reputation having a network of over 700 branches throughout the country, providing relief in times of disasters/emergencies and promotes health & care of the vulnerable people and communities. Apart from providing relief in times of disaster it also involves itself in various emergency related training programs.
					
    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/first-aid-training/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Swimming Training & Certification for Air Hostess </h1>
    		    <p>TRAINING OVERVIEW<br>
Students are taught swimming in the In-House swimming facility of Indian Life Saving Society which is one of one of the most reputable organisation in the field of imparting training and certification in swimming and after the course, they receive a certification of successful completion.

Indian Life Saving Society
Indian Life Saving Society , abbreviated as ILSS is an elegant swimming club also known by its old name as Anderson Club, This elite swimming pool, though mainly was founded with the aim to impart the life saving training and coaching however side by side this swimming institution of Kolkata also provides swimming classes for both amateurs, beginners and even for the professional swimmers.
    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/swimming-training/">Read more</a>
    		    </p>  
				
				
				<h1 class="course_name">Thailand Immersion Program</h1>
    		    <p>We always strive to provide the best training to our students. Thailand Immersion Program delivers practical training and boosts confidence of the students
				Be a Part of Thailand Immersion Program
Gain Hands-on experience at the Airport & during 5 hours of international flight.
Assignments related to Hotel for practical international experience.
Training on International Travel planning and Management.
Practical experience of Aviation, Hospitality & travel.
    		          <br>
    		        <a target="_blank" href="https://www.aptadvantage.com/thailand-immersion-program/">Read more</a>
    		    </p> 
				
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://www.aptadvantage.com/fees/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission:</h1>
                <p><br>
Fee Structure Of Different Courses<br>
The fee charged for different courses vary with respect to the duration and design of the course. Find the detailed structure below:
<br>

                    <a target="_blank" href="https://www.aptadvantage.com/fees/">Read more</a>
                </p>
            </div>
			
			
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placement</h1>
            <div class="place_block">
                <p>100% Placements For The Past 8 Years!<br>
				Since its inception in 2010, APT has focused on providing quality air hostess training to its students. At APT, we have designed the courses which are focused on placements and careers of students. We have courses on Air Hostess, Hospitality and Travel Management to help students fulfill their dreams.


				<br>
                    <a target="_blank" href="https://www.aptadvantage.com/know-more/">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '8'";
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
					$sql1 = "SELECT * FROM colleges where id = '8'";
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