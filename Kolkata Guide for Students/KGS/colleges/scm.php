<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | SCM Air Technical Training Institute</title>
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
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1533213837phpuqIYGH.jpeg"></img>
		     <img class="logo" src="https://content3.jdmagicbox.com/comp/kolkata/e3/033p1237256619r7k8e3/catalogue/scm-air-technical-training-institute-kolkata-airport-kolkata-mba-institutes-bbq9nu7xmk-250.jpg"></img>
		     <span id="college_name"><a target="_blank" href="http://www.scmatti.org/home">SCM Air Technical Training Institute</a>
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
		    <p> ABOUT SCM<br>
S.C. Moitra Air Technical Training Institute had been set up by Late Mr. Subodh Chandra Moitra, mostly known of his highly esteemed glory, success and dignity in the field of Aircraft maintenance Engineering and other related dimensions of engineering. The institute is established in the year 1948, and hold its name primarily as the first ever institute in Asia to give training in the field of Aircraft maintenance Engineering. Initially He have started to give coaching with only 20 students, later on the name got spread all around the world and today we have students of SCM ATTI successfully serving the aviation industry as Aircraft Maintenance Engineers in India and abroad. Years later, the institute initiated to conduct Diploma level of education in the other two branches of engineering: Computer Science & Automobile engineering. At present we conduct training in the field of licence course of Aircraft Maintenance Engineering (AME), Diploma courses in Computer Science(DCST) & Automobile Engineering (DAE).Our Diploma courses are approved by AICTE and affiliated to WEST BENGAL STATE COUNCIL OF TECHNICAL AND VOCATIONAL EDUCATION AND SKILL DEVELOPMENT. We give equal importance in both theoretical and practical oriented training. <br><br>
	    	    <span style="float:right;">SCM Air Technical Training Institute<br>
                  VIP Road, Nazrul Islam Avenue<br>
		        Kaikhali, Kolkata 700052<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://www.scmatti.org/about">Read more</a>
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
    		    <h1 class="course_name">Aircraft Maintenance Engineering Introduction:</h1>
    		    <p>Presently the Aviation industry is one of the fastest growing industries in our country with Indian Government's open sky policy; many private players are entering in this field on a regular basis, creating employment oppurtunities.Playing an engineering role in this sector required Aircraft Maintenance Engineers. They ensure the safety of Aircraft, Passenger and Pilot & Crew members before flying in accordance with the National and Industrial standards by certifying the aircraft for its fitness before flying. To become AME one has to obtain licence from Director General of Civil Aviation, accordingly one has to undergo either one year Category -A(Jet Engine Aeroplane). As per Civil Aviation requirement Section 2 under Aircraft Act 1934 ,Aircraft rules 1937 & CAR 147(Basic) institute is approved.The DGCA AME institute are providing the necessary knowledge, experience and skill of Aircraft Maintenance Technique to pass AME licence examination conducted by them.
    		          <br>
    		        <a target="_blank" href="http://www.scmatti.org/courses?c_id=1">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Diploma in Computer Science & Technology</h1>
    		    <p>The career opportunities available to students with a Diploma in Computer Science vary greatly. Some of the more popular options include: software developer, computer hardware engineer, database administrator, systems analyst, and computer network architect. Though many students work with computer and software firms, those interested in pursing a career in the business world can work with companies as a manager of the IT department or as an IT consultant. It is a program of study that offers students training in the field of technology,
    		         <br>
    		        <a target="_blank" href="http://www.scmatti.org/courses?c_id=2">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Diploma in Automobile Engineering</h1>
    		    <p>Automobile Services Engineering Course was started in the year 1950 and was registered with City & Guild, London.The name of the Course was changed to Automobile Engineering when it was approved by AICTE and affiliated to West Bengal State Council for Technical & Vocational Education & Skill Development in the year 1994.Automotive engineers design, develop and manufacture vehicles such as cars, motorbikes, buses and trucks and their engineering systems. You will need to have a combination of engineering and commercial skills to be able to deliver projects within budget.
    		         <br>
    		        <a target="_blank" href="http://www.scmatti.org/courses?c_id=3">Read more</a>
    		    </p>
				
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
           
            <div class="admit_block">
                <h1 class="admit_name">Aircraft Maintenance Engineering</h1>
                <p><br>
                    <a target="_blank" href="http://www.scmatti.org/admission?c_id=1">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">Diploma in Computer Science & Technology</h1>
                <p><br>
                    <a target="_blank" href="http://www.scmatti.org/admission?c_id=2">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">Diploma in Automobile Engineering</h1>
                <p><br>
                    <a target="_blank" href="http://www.scmatti.org/admission?c_id=3">Read more</a>
                </p>
            </div>
			
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placement</h1>
            <div class="place_block">
                <p>Our Placement Policy:<br>

TECHTREE placement cell attempts to place every student enrolled for our Job Oriented Courses (The courses with the minimum duration of 3-4 months) . TECHTREE Placement cell will regularly in contact with students and give 100% placement assistance. No job guarantee would be given by TECHTREE regarding the placement of any candidate. TECHTREE placement cell provide Job assistance as per the following procedure.
				<br>
                    <a target="_blank" href="http://www.scmatti.org/training_n_placement">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '43'";
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
					$sql1 = "SELECT * FROM colleges where id = '43'";
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