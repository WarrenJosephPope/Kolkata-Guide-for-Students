<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Nil Ratan Sircar Medical College & Hospital (NRSMC&H)</title>
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
		    <img class="bg" src="https://static.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/6197/2018/10/13/Campus%20View%20of%20Nil%20Ratan%20Sircar%20Medical%20College%20and%20Hospital%20Kolkata_Campus-View.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Institute_of_Post-Graduate_Medical_Education_and_Research_Kolkata_Logo.svg/1200px-Institute_of_Post-Graduate_Medical_Education_and_Research_Kolkata_Logo.svg.png"></img>
		     <span id="college_name"><a target="_blank" href="http://nrsmc.edu.in/">Nil Ratan Sircar Medical College & Hospital (NRSMC&H)</a>
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
		    <p> During 1803, at height of its rule in India, the British India Company (East India Company) had a private army of 260000, twice the size of British Army. Plenty of soldiers used to die, mainly from diarrheal diseases, malaria and kala azar. The only available treatment at that time was traditional Indian medicine. It was not possible to treat this vast number of soldiers with very limited European doctors. Necessity of imparting training to the native people in modern medicine was badly felt.

Asia’s 1st Medical College (Medical College, Bengal) came into being in 1835. However, the pass rate for qualifying examination was abysmal (30-33%). Sometime during 1841-42, Sri Ram Kamal Sen (Grandfather of Sri Keshab Chandra Sen), a social reformist, came up with a proposal for a Bengali section. In 1853, Principal of Medical College, Bengal Dr. F Mouat, Dr. Jackson and few others started the Bengali section, with the hope of improvement in the pass rate.

From 1859 onwards, frequent agitations were being organized by the students of vernacular sections including Bengali section. Sri Bijoy Krishna Goswami and later on Sri Banamali Chattopadhyay were involved in several such agitations. To control these disturbances, it was decided to shift the Bengali section to some other place.

Meanwhile, to treat the poor and vagabond people of the locality, a dispensary, popularly known as ‘Pauper’s Clinic’, was started within the Central Hall of Sealdah Market. In 1864, this clinic was converted into Sealdah Municipal Hospital. Subsequently this Municipal Hospital was selected for shifting the Bengali section, from Medical College. Thus, Sealdah Medical School was established on 1st Dec. 1873.<br><br>
	    	    <span style="float:right;">Nil Ratan Sircar Medical College & Hospital (NRSMC&H)<br>
                138, AJC Bose Road, Sealdah, Raja Bazar,<br>
		         Sealdah, Kolkata 700014,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://nrsmc.edu.in/">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Pre-clinical</li>
		            <li id="pg" onclick="pg();">Para-clinical</li>
		            <li id="bed" onclick="bed();">Clinical</li>
		            <li id="phd" onclick="phd();">Subspecialty</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Anatomy</h1>
    		    <p>WELCOME TO ANATOMY DEPARTMENT
    		          <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/1">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Department of Physiology</h1>
    		    <p>WELCOME TO PHYSIOLOGY DEPARTMENT
    		         <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/28">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Bio-Chemistry</h1>
    		    <p> WELCOME TO BIOCHEMISTRY DEPARTMENT
    		         <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/3">Read more</a>
    		    </p> 
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Department of Pathology</h1>
    		    <p>WELCOME TO PATHOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/25">Read more</a>
    		    </p>
    		    
				<h1 class="course_name">Department of Pharmacology</h1>
    		    <p>WELCOME TO PHARMACOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/26">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Microbiology</h1>
    		    <p>WELCOME TO MICROBIOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/17">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Forensic Medicine & Toxicology</h1>
    		    <p> WELCOME TO FORENSIC MEDICINE & TOXICOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/13">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Community Medicine</h1>
    		    <p>WELCOME TO COMMUNITY MEDICINE DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/8">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Physical Medicine & Rehabilitation</h1>
    		    <p>WELCOME TO PHYSICAL MEDICINE & REHABILITATION DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/27">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Department of General Medicine</h1>
    		    <p>WELCOME TO GENERAL MEDICINE DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/16">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of General Surgery</h1>
    		    <p> WELCOME TO GENERAL SURGERY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/33">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Obstetrics & Gynecology</h1>
    		    <p>WELCOME TO GYNECOLOGY & OBSTETRICS DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/14">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Paediatric Medicine</h1>
    		    <p>WELCOME TO PAEDIATRIC SURGERY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/24">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Ophthalmology</h1>
    		    <p>WELCOME TO OPHTHALMOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/21">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of E.N.T (Otorhinolaryngology)</h1>
    		    <p>WELCOME TO OTORHINOLARYNGOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/11">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Anesthesiology</h1>
    		    <p>WELCOME TO ANAESTHESIOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/2">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Dermatology</h1>
    		    <p>WELCOME TO DERMATOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/10">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Radiology</h1>
    		    <p>WELCOME TO RADIO THERAPY (RADIATION ONCOLOGY) DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/31">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Psychiatry</h1>
    		    <p>WELCOME TO PSYCHIATRY DEPARTMENT

    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/30">Read more</a>
    		    </p>
				
								
            </div>
			
			
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">Department of Cardiology</h1>
    		    <p>WELCOME TO CARDIOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/6">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Neurology</h1>
    		    <p>WELCOME TO NEUROLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/20">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Nephrology</h1>
    		    <p>WELCOME TO NEPHROLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/18">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Endocrinology</h1>
    		    <p>WELCOME TO ENDOCRINOLOGY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/12">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Cardio Thorasic Vascular Surgery (CTVS)</h1>
    		    <p>WELCOME TO CARDIO THORACIC & VASCULAR SURGERY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/5">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Neurosurgery</h1>
    		    <p>WELCOME TO NEURO SURGERY DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/19">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Transfusion Medicine & Blood Bank</h1>
    		    <p>WELCOME TO REGIONAL BLOOD TRANSFUSION CENTER DEPARTMENT
    		        <br>
    		        <a target="_blank" href="http://nrsmc.edu.in/department/4">Read more</a>
    		    </p>
				
              </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admission:</h1>
                <p>Student Details:<br>
                    <a target="_blank" href="http://nrsmc.edu.in/pages/56">Read more</a>
                </p>
            </div>
            
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '36'";
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
					}else{
					$sql1 = "SELECT * FROM colleges where id = '36'";
					$res1 = mysqli_query($conn, $sql1);
					$row1 = mysqli_fetch_array($res1);
					echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">No reviews have been made for this college yet!</span><br>
								<span class="header">Click <a style="background:none;padding:0;margin:0;width:auto;text-decoration:underline;font-size:20px;" href="/KGS/reviews/write.php">here</a> to write your own review.</span><br><br>
							</div></div>
						</div>';
				}
				}
			?>
        </div>
		<?php include '../PHP/menu.php'?>
		<?php include '../PHP/search.php'?>
	</body>
</html>