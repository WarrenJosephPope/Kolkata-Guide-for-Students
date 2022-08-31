<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | THE WEST BENGAL NATIONAL UNIVERSITY OF JURIDICAL SCIENCES-[NUJS],KOLKATA</title>
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
		    <img class="bg" src="https://sja.nujs.edu/storage/NUJS_Sky.jpg"></img>
		     <img class="logo" src="data:image/png;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://www.nujs.edu/">THE WEST BENGAL NATIONAL UNIVERSITY OF JURIDICAL SCIENCES-[NUJS],KOLKATA</a>
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
			About NUJS<br>
			Introduction<br>
			The West Bengal National University of Juridical Sciences was established under the WBNUJS Act, 1999 (West Bengal Act IX of 1999) adopted by the West Bengal Legislature in July, 1999. The University was notified under Clause (f) of Section 2 of the UGC Act, 1956 in August 2004 and has been granted permanent affiliation by the Bar Council of India in July 2005.

			Initially, classes, which started in 2000, were held at Aranya Bhavan, where the Environment Ministry of the Government of West Bengal is located, and the first batches of students started living in government flats. On 28 October 2002, the university's present-day permanent campus was inaugurated by the then Chief Justice of India, B. N. Kirpal.

			The NUJS, Kolkata, along with the GNLU and NLSIU, Bengaluru, remain the only three national law schools which have the honourable Chief Justice of India as the Chancellor. This set-up provides an aura of exclusivity and rare stature to these National Law Schools in India. It may be noted that all other National Law Schools have the Chief Justice of the respective state High Courts as their Chancellors.
			<br><br>
	    	    <span style="float:right;">THE WEST BENGAL NATIONAL UNIVERSITY OF JURIDICAL SCIENCES-[NUJS],KOLKATA<br>
                Dr. Ambedkar Bhavan<br>
		        12, LB Block, Sector III,<br>
				Salt Lake City Kolkata - 700098<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.nujs.edu/nujs.html">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Taught Courses - Graduation Program</li>
		            <li id="pg" onclick="pg();">Taught Courses - Post Graduation Program</li>
		            <li id="bed" onclick="bed();"></li>
		            <li id="phd" onclick="phd();">Research Courses</li>
		            <li id="coc" onclick="coc();">NUJS Certificate Courses</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">B.A.-LLB. Programme</h1>
				<p>Description:<br>
				The B.A. /B.Sc. LL.B. (Hons.) Degree Course attracts school (Higher Secondary) leaving bright young aspirants to the field of law. The five-year undergraduate course is divided into ten semesters. The students represent almost all the states of India including foreign countries. This programme exposes the students to Indian modes of legal education (which emphasize critical thinking and self-inquiry) as well as to procedure and substantive law. It also enhances the students' ability to do advanced scholarly work.
    		          <br>
    		        <a target="_blank" href="https://www.nujs.edu/nujs-academics-courses.html">Read more</a>
    		    </p>
				
					
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
              <h1 class="course_name">L.L.M. Programme</h1>
    		    <p>Description:<br>
				The LL.M degree course is a one-year post graduate course. This programme is introduced to attract students who either wish to join the academia orseek to acquire advanced research skills before joining the legal profession. The students therefore come from a wide variety of backgrounds with divergent legal interests and career plans. Our senior faculty members work closely with the students to help them in realising their full academic potential. We also actively involve students in our ongoing efforts to improve and enhance the programme. Together, we work to make each student’s experience in NUJS a rich and fulfilling one that broadens his or her intellectual horizons. The LL.M. programme comprises of a range of compulsory and optional courses and a dissertation to be completed within a time frame of two semesters having duration of eighteen weeks each.
    		          <br>
    		        <a target="_blank" href="https://www.nujs.edu/nujs-academics-courses.html">Read more</a>
    		    </p>
			   
				<h1 class="course_name">M.Phil Programme</h1>
    		    <p>M.Phil<br>
			Description:<br>
			The M. Phil Degree Programme is specifically designed for aspiring legal academics i.e., students who wish to pursue sustained independent study and research and are planning careers in law teaching. The candidate will be eligible for receipt of the degree only if he/she completes the prescribed requirements of the course within a maximum period of three years.
    		          <br>
    		        <a target="_blank" href="https://www.nujs.edu/nujs-academics-courses.html">Read more</a>
    		    </p>
            </div>
			
            <div class="course_type" id="bed_block" style="display : none;">
               
			</div>
			
			
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">Ph.D</h1>
    		    <p>Description:<br>
				The Ph.D and LL.D degrees are two of the most advanced law degrees offered by the University. The candidates to these degrees are expected to produce a thesis that will constitute a substantial and valuable contribution to legal scholarship. The students would be expected to incorporate the insights of other disciplines into their work, drawing on the expertise and assistance not only available at NUJS but also from other leading universities of the world. The doctoral programme call for intense individual efforts requiring sustained discipline and self direction. Since the doctoral programme are designed to train law teachers, having the opportunity to practice one's teaching skills is critical. The candidate would therefore be given teaching assignments in addition to making presentations before the faculty community.
				
    		          <br>
    		        <a target="_blank" href="https://www.nujs.edu/nujs-academics-courses.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">LL.D</h1>
    		    <p>Description:<br>
				The Ph.D and LL.D degrees are two of the most advanced law degrees offered by the University. The candidates to these degrees are expected to produce a thesis that will constitute a substantial and valuable contribution to legal scholarship. The students would be expected to incorporate the insights of other disciplines into their work, drawing on the expertise and assistance not only available at NUJS but also from other leading universities of the world. The doctoral programme call for intense individual efforts requiring sustained discipline and self direction. Since the doctoral programme are designed to train law teachers, having the opportunity to practice one's teaching skills is critical. The candidate would therefore be given teaching assignments in addition to making presentations before the faculty community.
				
    		          <br>
    		        <a target="_blank" href="">Read more</a>
    		    </p>
				
				
             </div>
  
			
			<div class="course_type" id="coc_block" style="display : none;">
                <h1 class="course_name">Certificate Course</h1>
    		    <p>Certificate Course in Consumer Law
    		          <br>
    		        <a target="_blank" href="https://www.nujs.edu/nujs-academics-courses.html#">Read more</a>
    		    </p>
				
            </div>
			
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admissions & Degrees</h1>
                <p>New Admissions Batch 2020-2021<br>
				Notification for Admission for West Bengal Domicile Category under CLAT 2020<br> 
			<br>

                    <a target="_blank" href="https://www.nujs.edu/nujs-admissions-fees.html">Read more</a>
                </p>
            </div>
			
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1>Campus Recruitment / Placements / Internships</h1>
            <div class="place_block">
                <p>
				Introduction<br>
				NUJS is proud of its excellent placement record. Till 2008, NUJS had a 100 percent placement record. The placement record of the batch that passed out in 2009 has also been remarkable in spite of the economic downturn. Recruitment, ever since the very first batch graduated, has seen participation from some of the finest international and national firms as well as the biggest corporate houses. NUJS graduates have done an exceptional job and this has resulted in the university earning an enviable reputation in the job market. The Campus Recruitment Committee (CRC), which is a student run body, overlooks and co-ordinates the recruitment of the graduating batch of students of the NUJS and is solely authorized and responsible for communicating and coordinating between students sitting for Recruitment and Prospective Recruiters/ Recruiters. Organizations throughout the years, have expressed high levels of satisfaction with the recruitment programme organized by the CRC and students of NUJS continue to make a mark in the legal and commercial arenas. NUJS graduates have always exceeded expectations and manage to combine a wide array of skills enabling them to satisfy employers as well as compete with the best talent in the world.
				<br>
                    <a target="_blank" href="https://www.nujs.edu/nujs-campus-recruitment.html">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '38'";
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
					$sql1 = "SELECT * FROM colleges where id = '38'";
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