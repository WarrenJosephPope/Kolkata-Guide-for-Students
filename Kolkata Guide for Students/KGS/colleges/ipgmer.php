<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | INSTITUTE OF POST GRADUATE MEDICAL EDUCATION & RESEARCH-[IPGMER]</title>
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
		    <img class="bg" src="https://static.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/5870/2018/10/9/Campus%20View%20of%20Institute%20of%20Post%20Graduate%20Medical%20Education%20and%20Research%20Kolkata_Campus-View.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Institute_of_Post-Graduate_Medical_Education_and_Research_Kolkata_Logo.svg/220px-Institute_of_Post-Graduate_Medical_Education_and_Research_Kolkata_Logo.svg.png"></img>
		     <span id="college_name"><a target="_blank" href="http://www.ipgmer.gov.in/">INSTITUTE OF POST GRADUATE MEDICAL EDUCATION & RESEARCH-[IPGMER]</a>
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
		    <p> Way back in 1707, the first hospital in Calcutta was built in the premises of the Old Fort at Gerstein Place. The Council of Fort William constructed this hospital. This hospital, initially built for the Europeans, was then known as Presidency Hospital. The hospital was accommodated in a single storied building. Later, in 1768, two houses were purchased in Lower Circular Road for converting them into a full fledged hospital. Located near the Presidency Jail, the hospital came to be known as Presidency General Hospital. Doors were opened to the non-European patients from 2nd April 1770. The Presidency General Hospital was best known as PG Hospital till 1954 when it was named in the Independent India, as Seth Sukhlal Karnani Memorial Hospital. The naming was done to commemorate the name of the great donor Sukhlal Karnani. People started addressing the Hospital as SSKM Hospital.<br><br>
	    	    <span style="float:right;">INSTITUTE OF POST GRADUATE MEDICAL EDUCATION & RESEARCH-[IPGMER]<br>
                244, Acharya Jagadish Chandra Bose Rd,<br>
		        Bhowanipore, Kolkata 700020,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://www.ipgmer.gov.in/institution.html">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Under Graduate(MBBS) Course</li>
		            <li id="pg" onclick="pg();">Post Graduate Courses</li>
		            <li id="bed" onclick="bed();"> Nursing Courses</li>
		            <li id="phd" onclick="phd();">PhD Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Under Graduate (MBBS) Course</h1>
    		    <p>
    		          There are 150 MBBS seats under the West Bengal University of Health Sciences (WBUHS), Kolkata. All 150 seats are recognized by MCI.
Admission to Undergraduate MBBS course is strictly on merit as per the National Eligibility cum Entrance Test (NEET) for IG admission.<br>
    		        <a target="_blank" href="http://www.ipgmer.gov.in/undergraduatecourses.html">Read more</a>
    		    </p>
    		    
            </div>
			
			
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Post Graduate Courses</h1>
    		    <p>Medical postgraduate degree courses Under WBUHS, Kolkata
MD in Anesthesiology, Biochemistry, Community Medicine, Dermatology, General Medicine, Microbiology, Pathology, Pediatric Medicine, Pharmacology, Physical Medicine & Rehabilitation, Physiology, Psychiatry, Radiodiagnosis, Radiotherapy and Respiratory Medicine.

MS in Anatomy, General Surgery, Obstetrics & Gynecology, Otorhinolaryngology (ENT) and Orthopedics.
    		        <br>
    		        <a target="_blank" href="http://www.ipgmer.gov.in/postgraduationcourses.html">Read more</a>
    		    </p>
    		    
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Nursing Courses(PG, UG and under School Level)</h1>
    		    <p>
    		       In addition courses in General Nursing and Midwifery, BSc Nursing, BSc Nursing (condensed) and MSc Nursing are offered by the Nursing Training School and College of Nursing on the campus.<br>
    		        <a target="_blank" href="http://www.ipgmer.gov.in/nursingcourses.html">Read more</a>
    		    </p>
				
								
            </div>
			
			
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">PhD Courses</h1>
    		    <p>Suitably qualified individuals who have registered for PhD work or other types of research projects with the West Bengal University of Health Sciences, Kolkata, or other recognized universities / institutes can work under guidance (Supervisors and Co-Supervisors) of faculty of this institute with due permission.
    		        <br>
    		        <a target="_blank" href="http://www.ipgmer.gov.in/phdcourses.html">Read more</a>
    		    </p>
				
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admission</h1>
                <p>For more details on Admission, Course details, eligibility and examination, please refer to the College Prospectus<br>
                    <a target="_blank" href="http://www.ipgmer.gov.in/Prospectus-2018.pdf">Read more</a>
                </p>
            </div>
            
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '21'";
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
					$sql1 = "SELECT * FROM colleges where id = '21'";
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