<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | NIMAS – Affiliated to MAKAUT</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/campusimage/14888906941426740473nimas_barasat.jpg"></img>
		     <img class="logo" src="data:image/png;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://nimas.in/">NIMAS – Affiliated to MAKAUT</a>
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
		    <p> ABOUT NIMAS<br>		
			The young leaders who better our world, the life changing experiences that transform people and communities, and the innovative contributions that change the future forever.

We know success often comes from being an exception to the norm—challenging convention, adapting and innovating, creating bold new trends and pioneering solutions ahead of their time. At NIMAS, thinking different is the norm.

A highly ranked institute with a global outlook, we’re deeply connected to our community and value our place in it.

Our academic excellence, innovative teaching and learning practices, along with our strong ties to industry, make us one of the leading providers of higher education in India.
			<br><br>
	    	    <span style="float:right;">NIMAS – Affiliated to MAKAUT<br>
                Ward No. 4, Lokenath Mandir<br>
				HL NO- 1045/1/A, Behind<br>
		        Barasat – Barrackpore Rd,Kolkata, 700125<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://nimas.in/know-nimas/">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">COURSES</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">Hospitality Administration Institute in Kolkata</h1>
				<p>The under graduate programme Hotel Management, B.Sc in Hospitality and Hotel Administration is a 3 year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT). The programme exposes the student to the diversity of hospitality industry and equips the student with intellectual & leadership capabilities allowing the student to move into diverse managerial roles in prestigious international organizations. Its multi-disciplinary programme focuses on critical analysis of management styles & strategic thinking required to succeed in hotel management.NIMAS offers comprehensive hospitality management course in Kolkata that enables students to meet industry demands and expectations in the most efficient manner. Ranked as one of the best hotel management colleges in Kolkata, NIMAS provides internship programmes to students which help them gain complete industry insights.
				
    		          <br>
    		        <a target="_blank" href="https://nimas.in/hospitality-administration-institute-in-kolkata/">Read more</a>
    		    </p>
				
				<h1 class="course_name"> BBA Colleges in Kolkata</h1>
				<p>The under graduate programme Business Administration, BBA is a three-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT). BBA is a three year intensive program which exposes the student to the diversity of management industry and equips the student with intellectual & leadership capabilities allowing the student to move into diverse managerial roles in prestigious international organisations. Recognized among the top BBA colleges in Kolkata, its multi-disciplinary program focuses on critical analysis of management styles & strategic thinking required to succeed in management industry. Being one of the best BBA colleges in Kolkata, NIMAS is associated with the top recruiters of the industry across the country for guest lectures, internships, and placements.
				
    		          <br>
    		        <a target="_blank" href="https://nimas.in/top-bba-colleges-in-kolkata/">Read more</a>
    		    </p>
					
					
				<h1 class="course_name">BBA (Global Business)</h1>
				<p>The under graduate programme Business Administration (Global Business), BBA (Global Business) is a three-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT). BBA (Global Business) is a three year intensive program which exposes the student to changing global business dynamics and equips the student with now-how of domestic market scenario. This program combines traditional business concepts with modern applications to changing societies, globalization processes, and creative problem solving. Students will cover issues related to foreign trade, global economy, international management, international relations, and law. 
				
    		          <br>
    		        <a target="_blank" href="https://nimas.in/bba-global-business/">Read more</a>
    		    </p>

					
				<h1 class="course_name">BBA (Hospital Management)</h1>
				<p>The under graduate programme Business Administration (Hospital Management), BBA (Hospital Management) is a three-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT). BBA (Hospital Management) is a three year program which focuses on the domain of healthcare and hospital management.This program trains students in areas such as – operations, HR management, marketing, finance management and insurance – related to the healthcare industry.
				
    		          <br>
    		        <a target="_blank" href="https://nimas.in/bba-hospital-management/">Read more</a>
    		    </p>

					
				<h1 class="course_name">BCA Institute in Kolkata</h1>
				<p>The under graduate programme Computer Applications, BCA is a three-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT).

Being listed among the best BCA institutes in Kolkata, NIMAS is committed to impart quality education in the fields of IT. The curriculum is tailored to provide a good theoretical foundation through high quality teaching complemented by extensive practical training. Ranked as the top BCA colleges in Kolkata, it is dedicated to the mission of inculcating value-based, socially committed professionalism to the cause of overall development of students and society.

BCA course provides a sound academic base from which an advanced career in Computer Application can be developed. These graduates can start their career as Junior Programmer and get promoted to the post of senior Programmer & Project Managers in the IT sector.<br>
    		        <a target="_blank" href="https://nimas.in/top-bca-institute-in-kolkata/">Read more</a>
    		    </p>

				<h1 class="course_name">B. OPTOM.</h1>
				<p>The under graduate programme B. Optom. is a four-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT).

Optometry is a health care profession which deals with the examination, diagnosis, treatment and management of diseases and disorders of the visual system. It is a vision care science. One can also define it as the science of eye equipment (including lenses and spectacles) which is imbued with the idea of improving the vision of the human eye and remove all kinds of obstacles of sight which an individual may experience. This is a dynamic and challenging career, which allows one to help people, achieve personal growth, community respect, job flexibility and financial success and offers virtually unlimited opportunities. 
    		          <br>
    		        <a target="_blank" href="https://nimas.in/b-optom/">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Sc. in Cyber Security</h1>
				<p>The under graduate programme B.Sc. in Cyber Security is a three-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT).

The Bachelor of Science in Cyber Security program prepares students to obtain knowledge for careers in cybersecurity and assurance. The cyber security program consists of topical areas dealing with cyber security management, incident response, and security threat assessment, which requires students to be creators of knowledge and inventors of processes, not merely users of information.
    		          <br>
    		        <a target="_blank" href="https://nimas.in/b-sc-in-cyber-security/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">B.Sc. in Data Science</h1>
				<p>The under graduate programme B.Sc. in Data Science is a three-year UGC recognised degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT).

The Bachelor of Science in Data Science program designed to prepare graduates who can conduct data-driven investigations, and conduct visual and advanced analytics by acquiring and managing data of all types. Through this course, graduates will develop an in-depth understanding of data science and the techniques for analysis of quantitative and qualitative data to arrive at solutions. They will be able to identify patterns, predict trends, and analyse data from sectors such as manufacturing, banking and finance, retail, and healthcare.
    		          <br>
    		        <a target="_blank" href="https://nimas.in/b-sc-in-data-science/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. Dietetics & Nutrition</h1>
				<p>The post graduate programme M.Sc. in Dietetics & Nutrition is a two-year degree course under Maulana Abul Kalam Azad University of Technology (MAKAUT).

It is a 2-year program designed to enhance knowledge and skills of nutrition and to develop critical evaluation skills through an integration of nutrition, dietetics (therapeutic nutrition) and research.

It provides opportunity for interaction with patients, and thus, students get hands-on training in hospitals,  in association with dietitians and clinicians. Students are also taught advanced diet therapy and participate in research projects, symposiums and conferences in nutrition & dietetics.
    		          <br>
    		        <a target="_blank" href="https://nimas.in/m-sc-dietetics-nutration/">Read more</a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission Procedure</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">How to Apply</h1>
                <p>Begin your career. Start Now.<br>

Congratulations! You have chosen to join one of the best institute in Eastern India.

As you start  a new, exciting journey of your life, let us simplify it for you. Because nothing is as important as starting it right.

Choose your dream course, know more about the courses, talk to a counselor and you can even apply for your course right here on this page by following the five steps !
			<br><br>
                    <a target="_blank" href="https://nimas.in/how-to-apply/">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1> Placements & Training </h1>
            <div class="place_block">
               <h1 class="course_name">Our Placements</h1>
    		    <p><br>
NIMAS has established its credibility through quality education backed by academic rigour with industry focused curricula and practical hands-on training on professional etiquette through the Finishing School Modules. The Power Packed Personality & Placement Grooming Module , supported by learning through language lab has enhanced the employability of our students. They are groomed as action leaders with positive attitude through innovative methods to add value to the organization by being achievers in the face of any adversity. NIMAS takes all initiatives for competency development of the students to exert high performance. 

    		        <br> <br>
    		        <a target="_blank" href="https://nimas.in/our-placements/">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '35'";
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
					$sql1 = "SELECT * FROM colleges where id = '35'";
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