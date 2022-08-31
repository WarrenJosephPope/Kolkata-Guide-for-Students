<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | SBIHM - Subhas Bose Institute of Hotel Management</title>
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
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1534761782phpCUoSOW.jpeg"></img>
		     <img class="logo" src="https://images.static-collegedunia.com/public/college_data/images/logos/148836523699.jpg"></img>
		     <span id="college_name"><a target="_blank" href="https://sbihm.com/">SBIHM - Subhas Bose Institute of Hotel Management</a>
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
		    <p> 		
			WHY SBIHM SPECIAL?<br>
			SUBHAS BOSE INSTITUTE OF HOTEL MANAGEMENT established in 1999, SBIHM Kolkata is in its 20th year of service to the student community. It remains the flagship brand of SBIHM and is recognized as one of the best Hotel and Business Management Institute in India. From the year 1999, SUBHAS BOSE INSTITUTE OF HOTEL MANAGEMENT goes beyond giving you a management degree. It prepares you for a high-flying career as a top corporate leader equipped with the wherewithal to occupy the very top echelons of the corporate world. Scores of SBIHM alumni already hold leadership positions the world over.

			SBIHM has been consistently ranked amongst the top hospital management college in kolkata. With two brand new campuses and world class infrastructure at the greenly area of greater Kolkata. SBIHM provides a holistic environment for all around learning and development.

			SUBHAS BOSE INSTITUTE OF HOTEL MANAGEMENT prides itself on being a student-centric institute. Students here are entrusted with resources and responsibilities early on. This facilitates their all-round development, over and above academic performance. The Students’ forum of SBIHM is the student body responsible and accountable for all activities on the Campus throughout the year.

			SBIHM has developed unique learning initiatives which have come to be the hallmark of the institute. These initiatives are the outcome of a decades of experience in the field of management education. They have been developed with the help of faculty, who are in touch with the industry’s current needs and the active participation of the students themselves.
			<br>
	    	    <span style="float:right;">SBIHM - Subhas Bose Institute of Hotel Management<br>
                Major Arterial Road,Newtown,<br>
		         Action area I,Jatragachi,Kolkata - 700157<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://sbihm.com/why-sbihm-special.html">Read more</a>
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
    		    <h1 class="course_name">Hotel Management</h1>
				<p>BACHELOR DEGREE IN HOTEL MANAGEMENT<br>
SBIHM’S GRADUATE PROGRAMME<br>
The Graduate Programmed in Management is a broad based genera management qualification tailored to the needs of experienced or aspiring managers who wish to expand their knowledge, and skills and equip themselves for senior management positions. It seeks to develop the perspectives necessary for effective Hotel Management Education.
    		          <br>
    		        <a target="_blank" href="https://sbihm.com/bachelor-degree-in-hotel-management.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Hospital Management</h1>
    		    <p>BACHELOR DEGREE IN HOSPITAL MANAGEMENT<br>
Those who study hospital management in SUBHAS BOSE INSTITUTE OF HOTEL MANAGEMENT are prepared to manage hospital facilities. They may also specialize in managing a particular department or clinical area. Students interested in graduate degrees related to hospital management can look for programs in health care management or health administration. In some cases, a concentration in hospital management may be available. These programs commonly lead to a Health Care Sector, and many are part of a broader business administration major. Bachelor’s programs in this field offer a multi-disciplinary approach, with training in business principles, leadership,finance, information systems, and legal aspects, as well as health care principles and health policies.

Courses in these programs offer students both theoretical and practical training in hospital management. Students can acquire knowledge of public health, insurance, and risk management. Programs generally include an internship as part of the curriculum, in which students have the opportunity to put into practice the tools and principles learned in the classroom. Some common courses include:


    		          <br>
    		        <a target="_blank" href="https://sbihm.com/bachelor-in-hospital-management.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Hospitality</h1>
    		    <p>HOSPITALITY MANAGEMENT<br>
				SBIHM’S GRADUATE PROGRAMME<br>
The Graduate Program in Management is a broad based general management qualification tailored to the needs of experienced or aspiring managers who wish to expand their knowledge, and skills and equip themselves for senior management positions. It seeks to develop the perspectives necessary for effective bhm college in kolkata Hotel Management Education.
    		          <br>
    		        <a target="_blank" href="https://sbihm.com/sbihm-hospitality-management.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">TRAVEL & TOURISM MANAGEMENT</h1>
    		    <p>TRAVEL & TOURISM MANAGEMENT<br>
Bachelor in Tourism Management<br>
It is an undergraduate management programme. The programme is designed to develop the knowledge of operating, organizing and managing tours while facilitating the travel and event needs. The curriculum helps in knowing about the geography, culture, climate, ethnicity of a different part of the globe.
    		          <br>
    		        <a target="_blank" href="https://sbihm.com/travel-tourism-management-master-diploma-backup.html">Read more</a>
    		    </p>

				<h1 class="course_name">FASHION TECHNOLOGY</h1>
    		    <p>Subhas Bose Institute of Fashion Technology<br>
The program is curetted in a way that allows the students to identify areas of interest within the fashion segments of apparel, textiles and accessories and transition into the desired path. The program aims to equip the student with an in-depth understanding of the role of the designer in today’s fashion industry.

The scope of the course is to place the student in a global fashion scenario at the end of the curricular path. They will also be exposed to the importance of accessories that currently occupies a large section of the current global fashion industry. Students during the entire course get hands-on experience on how the world fashion system works and evolves.

Fashion Design-Apparel path includes all the segmentations across genders and age group This course enables students to achieve competencies in both design and construction with the use of advanced technologies.
    		          <br>
    		        <a target="_blank" href="https://sbihm.com/fashion-technology.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Culinary Science</h1>
    		    <p>Bachelor in Culinary Science<br>

    		          <br>
    		        <a target="_blank" href="https://sbihm.com/culinary-science.html">Read more</a>
    		    </p>
				
				
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://sbihm.com/admission-open.html">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">ADMISSION OPEN 2020</h1>
                <p>
				The admission process starts with the collection of the admission form and the prospectus for …<br>

Bachelor in Hotel Management<br>
Diploma in Hotel Management<br>
Masters in Hotel Management<br>
Bachelor in Hospitality Management<br>
Diploma in Hospitality Management<br>
Masters in Hospital Management<br>
Bachelor in Hospital Management<br>
Diploma in Hospital Management<br>
Masters in Hospital Management<br>
Bachelor in Fashion Technology<br>
Bachelor in Culinary Arts<br>
Diploma in Culinary Arts<br>
Masters in Culinary Arts<br>
Bachelor in Travel and Tourism Management<br>
Diploma in Travel and Tourism Management<br>
Masters in Travel and Tourism Management<br>
Bachelor in Media Science<br>
Diploma in Media Science<br>
Masters in Media Science<br>
Form can be collected from Newtown, Action area 1, Jatragachhi
kolkata,West Bengal-700157, by paying of Rs 800/- (Rupees Eight Hundred only), the forms are also available online at SBIHM’s official website www.sbihm.com.  People can fill it online.
			<br>
			<br>

                    <a target="_blank" href="https://sbihm.com/admission-open.html">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>PLACEMENTS</h1>
            <div class="place_block">
                <p>Placements play an important role in meeting the career aspirations of each student enrolled in the programme. In its endeavor to assist students in meeting their career goals, the SBIHM has a well-equipped and organized Placement Cell, which is in constant touch with the industry so as to create better placement opportunities for students.

SUBHAS BOSE INSTITUTE OF HOTEL MANAGEMENT helps each student in exploring placement opportunities by inviting various companies for campus recruitment of students who are in the final year of the programme and are likely to graduate at the end of the academic year.

The final placements, at SBIHM, are a result of very systematic interaction with the industry and continuous career counselling of the students. Right from the beginning of the programme, students are continuously counselled with regard to their career aspirations and options, which in turn is vigorously followed up with the potential companies for participating in the placement programme of the Institute. This not only helps the students in getting their ‘dream’ jobs but also assists the visiting placement companies in identifying the ‘right’ candidate for their organization.
				
				<br>
                    <a target="_blank" href="https://sbihm.com/sbihm-placements.html">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '42'";
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
					$sql1 = "SELECT * FROM colleges where id = '42'";
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