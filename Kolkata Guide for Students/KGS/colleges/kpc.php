<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | KPC MEDICAL COLLEGE & HOSPITAL-[KPCMCH]</title>
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
		    <img class="bg" src=" https://www.admissionadvice.in/medical/wp-content/uploads/2018/04/kpc-600x183.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/0/0f/KPC_Medical_College_and_Hospital_Logo.png"></img>
		     <span id="college_name"><a target="_blank" href="https://kpcmedicalcollege.org/index.php">KPC MEDICAL COLLEGE & HOSPITAL-[KPCMCH]</a>
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
		    <p> KPC Medical College and Hospital was the first private-public-partnership (PPP) model medical college of West Bengal. It was founded by Kumud Shankar Ray, in the premises of Dr. K. S. Ray TB Hospital., founded by Dr. K. S. Ray himself. Kumud Shankar Ray (1892–1950) did pioneering wоrk in tuberculosis, chest medicine, thoracic surgery, gland grafting, radium therapy, etc. Moreover, he was the founder-member of organisations and institutions lіke the Indian Medical Association, the Medical Council of India, the Journal of the IMA, S B Dey TB Sanatorium (Kurseong), National Medical College, and the TB hospital at Jadavpur. All this is а part of India's medical history and fight against colonial rule. As Alderman, he started the mosquito control department and was the chief whip of Swarajya Party and а lieutenant of Deshbandhu C R Das. As а fellow of Calcutta University he helped to organise the Anthropology Department. It is South Asia's fіrst and the state's only specialised TB hospital, visited by Mahatma Gandhi for the last tіme on 26 August 1947. Jawaharlal Nehru and Subhas Chandra Bose аlsо frequently visited the hospital. Set up in 1922 by the pioneering thoracic surgeon as а four-bed sanatorium, іt became а 750-bed centre wіth money donated by а landed aristocrat called Provash Ghosh, whо died from the disease and willed his entire fortune of INR160000 (US$2,500) to Ray to acquire the 65 acre location and set up the hospital. The Left Front government acquired the hospital through an ordinance in 1977. Poet Sukanta Bhattacharya died of tuberculosis at the Jadavpur T. B. Hospital (later, K. S. Roy T. B. Hospital) in Calcutta at а very young age.<br><br>
	    	    <span style="float:right;">KPC MEDICAL COLLEGE & HOSPITAL-[KPCMCH]<br>
                1F, Raja Subodh Chandra Mullick Road Jadavpur<br>
		        Kolkata 700032,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://kpcmedicalcollege.org/index.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG Courses</li>
		            <li id="pg" onclick="pg();">PG Courses</li>
		            <li id="bed" onclick="bed();">School of Nursing</li>
		            <li id="phd" onclick="phd();">Other Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">MBBS Courses</h1>
    		    <p>
    		          The institution offers courses in medical specialties at the undergraduate level. The course is recognised by the Medical Council of India and affiliated to the West Bengal University of Health & Science. It admits 150 students for the MBBS.<br>
    		        <a target="_blank" href="https://kpcmedicalcollege.org/page.php?page-id=106">Read more</a>
    		    </p>
    		    
            </div>
			
			
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">MD/MS</h1>
    		    <p>
    		       Postgraduate Medical Education in broad specialities shall be of three years duration in the case of degree course and two years in the case of Diploma course after MBBS and in the case of super specialities the duration shall be of three years after MD/MS with the exceptions wherever indicated.<br>
    		        <a target="_blank" href="https://kpcmedicalcollege.org/page.php?page-id=123">Read more</a>
    		    </p>
    		    
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Shova Rani Nursing College</h1>
    		    <p>
    		       Shova Rani Nursing College was established on 2003 with a capacity of 40 student intake offering B.Sc. (Hons.) Nursing, approved by The Indian Nursing Council, New Delhi and Affiliated with West Bengal University of Health Sciences. Integrated with our International Nurse Training Program, our students are equipped with comprehensive training of international standards. At present the College is running full fledged with more than 150 students.<br>
    		        <a target="_blank" href="http://featuredhost.com/kpc/html/page.php?page-id=125">Read more</a>
    		    </p>
				
				<h1 class="course_name">Sadhana Memorial School of Nursing</h1>
    		    <p>
    		       The KPC Medical College & Hospital Started it’s first stepping in India in the month of August 2003 & was registered under the West Bengal Society Registration Act. KPC Medical College & Hospital is a sophisticated World Class Hospital.

Sadhana Memorial School of Nursing, a wing of KPC society was established in 2007 with the aim of starting basic and post basic nursing education. West Bengal, a most popular state of India needs constant backup and up gradation of medical & nursing professions Kolkata being the capital has a few centers of excellence if one compares them to the continuously growing health needs of the community. Such a scenario focuses the need of developing a nursing school with advance training curriculum compatible with the challenging and expanding health needs in general; and this gave birth to Sadhana Memorial School of Nursing.<br>
    		        <a target="_blank" href="http://featuredhost.com/kpc/html/page.php?page-id=126">Read more</a>
    		    </p>
				
            </div>
			
			
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">KPC Medical College & Hospital admission notice MHA/MPH</h1>
    		    <p>
    		        <br>
    		        <a target="_blank" href=" https://kpcmedicalcollege.org/page.php?page-id=237">Read more</a>
    		    </p>
				
			</div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://kpcmedicalcollege.org/page.php?page-id=21">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission</h1>
                <p>Notice for admission in MBBS Course:<br>

Any NEET qualified student who wants to seek admission in our college should apply and register with WBMCC as soon as the registration process starts.

For this, please keep looking up regularly at the WBMCC website (http://wbmcc.nic.in) and this website as well.

Please note that only those students who are NEET qualified and are domicile of West Bengal are eligible for State Govt. seats while NEET qualified students from all over India who are registered with WBMCC are eligible for Management quota seats.

Post Graduate (MD/MS)

MBBS Aspirants looking for admission to MD MS Admission in KPC Medical college & Hospital, must apply for National Entrance Postgraduate Medical [NEET- PG] entrance exams. Those doctors are looking to pursue PG Medical Admission in KPC Medical college & Hospital, after MBBS to become a specialist in the field of medicine and surgery has to pass the minimum eligibility score to get admission in MD MS degree and diploma courses.
                    <a target="_blank" href="https://kpcmedicalcollege.org/page.php?page-id=21">Read more</a>
                </p>
            </div>
            
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '29'";
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
					$sql1 = "SELECT * FROM colleges where id = '29'";
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