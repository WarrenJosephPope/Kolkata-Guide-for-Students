<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide |  JIS University</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/_jis1.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/46/JIS_University.svg/1200px-JIS_University.svg.png"></img>
		     <span id="college_name"><a target="_blank" href="https://jisuniversity.ac.in/">JIS University</a>
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
		    <p>  About Us<br>
JIS Group Educational Initiatives - the largest educational conglomerate of Eastern India with 26 Institutions, 126 programmes and 35,000 students began its journey 18 years back. The journey, though not easy, has been quite a successful one. JIS University was established through the Legislative Act of the Government of West Bengal, viz. JIS University Act, 2014 (West Bengal Act XXII of 2014) that came into force in February, 2015.

The University has a mission to be one of the top class universities in India and a preferred destination for students, research scholars and faculty members alike. Students aspiring to study in JIS University can be assured of quality education as all courses are duly accredited and affiliated by University Grants Commission (UGC), New Delhi; Bar Council of India (BCI), Pharmacy Council of India (PCI), National Council for Teacher Education (NCTE) and United Nations Academic Impact (UNAI).

Education in today's world has become industry need-oriented and it requires teaching methodologies to be fashioned in such a manner that suits this requirement. The Learning Management Systems (LMS) that JIS University has introduced will nurture future professionals who will be committed towards transformation in our society. JIS University contributes to the growth of higher education, research, entrepreneurship and skill development to blend traditional methods with modern technology-enabled teaching and learning practices and Research & Development.


			<br><br>
	    	    <span style="float:right;">Jis University<br>
                 Agarpara Campus<br>
		         81,Nilgunj Road,Agarpara, Kolkata-700109<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://jisuniversity.ac.in/about.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Programmes & Schools</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">SCHOOL OF ENGINEERING & TECHNOLOGY </h1>
    		    <p>DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING<br>
B.Tech Computer Science & Engineering<br>

PhD in Computer Science & Engineering<br>

BCA (Bachelor in Computer Application)<br>


					

    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/engineering-school.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">SCHOOL OF SCIENCE</h1>
    		    <p>
					Science has helped in solving problems and making decisions in different areas of life. Many of the major encounters and prospects that challenge our world need to be approached from a scientific perspective, taking into account societal and virtuous considerations. By studying science, one can develop an understanding of the world and learn that science involves certain processes and different ways of evolving and organizing information. Science can be used in different sectors to get robust solution for every problem.

JIS University is known for its best science college in Kolkata and develops habits and capacity for self-directed learning. The college ensures that the students develop professional skills in technical knowledge, observation, documentation, and analysis. With a robust team of professors, we believe in providing elevated quality of teaching to nurture the curious minds. Our state-of-the-art research facilities provide the students with the best knowledge so that they can become sufficiently proficient to easily face global challenges.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/science-school.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">SCHOOL OF BIOTECHNOLOGY</h1>
    		    <p>
				Our department provides elevated quality of teaching along with state of art research facilities to nurture the curious and inventive scholars such that they become adequately proficient to face the global challenges from the perspective of academia as well as industry. Department of Biotechnology currently offers B.Sc., M.Sc., and Ph.D. in Biotechnology. The diverse qualifications of the faculty members ensure expertise in all aspect of Biotechnology as well as in various interdisciplinary areas. Department ensures academic flexibility and good deal of faculty-student interaction. Project work and seminar presentation are introduced in all courses to get an overview of the ongoing research andrecent development in the subject.

    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/school-biotechnology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF PHARMACEUTICAL TECHNOLOGY</h1>
    		    <p>Pharmacy is all about the study of medicine, looking at how the drugs are created, the blend of chemicals, their chemistry and interactions which is required for a qualified pharmacist to know. Students who are interested in medicine but do not want to become a doctor can choose Pharmacy as an excellent alternative. A pharmacist can easily help in taking pressure off the emergency services and contribute to saving lives in different ways. Moreover, unlike a doctor, a pharmacist has the advantage of regular hours. In this way, as aspirant can contribute to helping people medically and also have a more structured lifestyle than medicine or nursing can offer. JIS University being the hub of best pharmacy colleges in Kolkata provides high-quality education to the aspirants who dream to become successful in their life.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/school-pharmaceutical-science-technology.php">Read more</a>
    		    </p>
					

						<h1 class="course_name">SCHOOL OF JURIDICAL SCIENCE</h1>
    		    <p>Law or legal science is a lucrative career options these days. People tend to take up legal studies as it provides various scopes. Previously, the only option that was available for the lawyers was private practice. But presently, due to the emergence of various law firms, corporate houses and specifically variety in course curriculum and subjects, different sectors such as banking and insurance offer lucrative jobs for the law graduates.

The integrated BBA-LLB program is aimed at training corporate lawyers who understand the intestacies of business along with the law governing the same. Special understanding of the business law such as banking, corporate laws, taxation, competition, investment, insurance, merger and acquisitions are imparted throughout this course. The Course further includes understanding in finance, human resource management, marketing, international business which help a student to obtain the required skills of a corporate lawyer.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/school-law-juridical-science.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">SCHOOL OF COMMERCE & MANAGEMENT STUDIES</h1>
    		    <p>Amongst the best MBA colleges in Kolkata, JIS University is offering the latest management programs at undergraduate and postgraduate levels. The university aims to provide international level education to the students and making them industry-ready.

At JIS University, we offer highly-innovative and rigorous management programs designed to develop the professional capabilities of the future managers. The curriculum provides real-life practical experience to the aspirants and makes them work-ready in their selected specialization. School of Management Studies of JIS aims to educate the professionals who will work with integrity and are trained to contribute to different sectors of society. The students are equipped with the latest business knowledge so that they can understand the complexities of the global corporate sector.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/school-management-bba-mba.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">SCHOOL OF EDUCATION</h1>
    		    <p>Pharmacy is all about the study of medicine, looking at how the drugs are created, the blend of chemicals, their chemistry and interactions which is required for a qualified pharmacist to know. Students who are interested in medicine but do not want to become a doctor can choose Pharmacy as an excellent alternative. A pharmacist can easily help in taking pressure off the emergency services and contribute to saving lives in different ways. Moreover, unlike a doctor, a pharmacist has the advantage of regular hours. In this way, as aspirant can contribute to helping people medically and also have a more structured lifestyle than medicine or nursing can offer. JIS University being the hub of best pharmacy colleges in Kolkata provides high-quality education to the aspirants who dream to become successful in their life.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/school-pharmaceutical-science-technology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF PHARMACEUTICAL TECHNOLOGY</h1>
    		    <p>B.Ed. is a professional course that prepares teachers for middle level (Classes VI-VIII), Secondary (Classes IX-X) and Senior Secondary (Classes XI-XII) levels.<br>

				The main aim of JIS University’s B.Ed. curriculum is to provide hands on experience to teacher trainees on accessing and processing information in improving the method of teaching and learning. The course is designed to inculcate ethics, values and modernity in students and to give them an opportunity to apply those values to move ahead and make a mark.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/school-education.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">HOTEL & HOSPITALITY ADMINSTRATION</h1>
    		    <p>IS University is known for its best hospitality management colleges in Kolkata that train the world-class hospitality professionals of future. The university is home to best-in-class professionals and hospitality leaders of tomorrow who are groomed in accordance with the current trends of the industry with highly-specialized learning facilitators and state-of-the-art infrastructural facilities. Equipped with the best and internationally trained faculty, JIS University distinctively blends theoretical and practical aspects of education with the real life experiences.

We not only lay stress and emphasis on creating professional skills but also encourage other curriculum activities in the students to develop their overall personality and making them future-ready. Our students are provided the needed skills that make them highly employable. Being a professional and vocational training institute, JIS University trains and grooms the students seeking exciting and challenging career opportunities. Our top hotel management colleges in Kolkata encourage the students to bring out their personality traits through several competitions at local and national levels. We also lay special emphasis to provide the best training environment to the students that prepares them for the challenging hospitality sector.
    		          <br>
    		        <a target="_blank" href="https://jisuniversity.ac.in/hotel-hospitality-administration-school.php">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://jisuniversity.ac.in/jisuee.php">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission:</h1>
                <p><br>
				General Guidelines: Please go through our website www.jisuniversity.ac.in and refer
Admission Policy under Admission Menu to check the Eligibility Criteria for Admission to
various Courses.
1. First of all put the mobile number and password for existing user. If you are not a register
user then click on signup and put your details.
2. Do the Registration by following Guidelines.
Student Registration:
1. Enter student name.
2. Enter 10 digits mobile number; make sure mobile number should be correct, because you
will have to be validated through OTP.
3. Enter your desired password.
4. Re-enter your password to confirm it.
5. Enter valid E-mail id.
6. Click on SUBMIT button for submit.
7. Now you will get an OTP on your given Mobile number, put the OTP in space provided,
click on VALIDATE & SAVE.
8. If OTP is not sent to your mobile number or you have not received the OTP due to any
reason for more than 2 minutes, please click on regenerate OTP.
9. If you are still facing problems regarding OTP then check whether, you had given
incorrect mobile number during registration. So again register with the correct mobile
number.
10. After successful registration you will be redirected to login page, please do the login and
now you are in student Dashboard. Now Click on APPLY
				<br>

                    <a target="_blank" href="https://jisuniversity.ac.in/admission-policy.php">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placement</h1>
            <div class="place_block">
                <p>Training, Placement, Career Guidance occupies a key position as the image enhancing and brand building department of the University.The JISU Training & Placement cell inculcates career guidance, student development, entrepreneurship initiatives, internships and placement activities for all round betterment of the student community.<br>

Dedicated professionals with industry experience develop ongoing relationships and reach out to corporates across geographies for promoting the students as future ambassadors. Active involvement and support of alumni is encouraged as a vehicle for increasing the footprint. The department strives to lead the student exchange program with the industry and act as an important facilitator providing a bridge to the career aspirants.<br>

Our Training & Placement department works as a facilitator providing a launch platform to the career aspirants of our University. Our students have already made their mark in leading companies around the country within this short span of time. We strive to fulfill their career expectations by providing them with suitable job opportunities. It is also imperative that we take care to serve the recruiters with the best of available ability and means. We have had repeat recruiters who have come back to recruit our students being satisfied with their performance. Prospective employers across business spectrums trust JIS University in providing fresh student resources through a cost effective and time efficient campus process.
				<br>
				<a target="_blank" href="https://jisuniversity.ac.in/training-placement.php">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '25'";
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
					$sql1 = "SELECT * FROM colleges where id = '25'";
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