<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Ramakrishna Mission Vivekananda Educational and Research Institute (RKMVERI)</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/1489054710d1.jpg"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="http://narendrapur.rkmvu.ac.in/">Ramakrishna Mission Vivekananda Educational and Research Institute (RKMVERI)</a>
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
		    <p>Ramakrishna Mission Vivekananda Educational and Research Institute (formerly known as ‘Ramakrishna Mission Vivekananda University’) was established under the aegis of Ramakrishna Mission, having been declared by the Ministry of Human Resource Development (MHRD), Government of India, to be a ‘Deemed-to-be-University’ under Section 3 of University Grants Commission (UGC) Act, 1956 by a Notification dated 5 January 2005. The Deemed-to-be-University was formally inaugurated at Belur Math on 4 July 2005, the sacred day of Swami Vivekananda’s mahasamadhi.

				Ramakrishna Mission Vivekananda Educational and Research Institute (RKMVERI) is headquartered at Belur Math, Dist. Howrah, West Bengal and mainly operates through its various ‘off-campus’ Faculty Centres located at the various branch-centres of Ramakrishna Mission in India and has as its ‘thrust areas’ certain unconventional areas. These ‘thrust areas’ are also ‘gap areas’ in the sense that they scarcely receive any attention in the conventional Universities in India. One such thrust area is ‘Integrated Rural Development and Tribal Development’, under which the present Faculty Centre at Ramakrishna Mission Ashrama, Narendrapur, West Bengal, has been started. One more centre devoted to this area is Ramakrishna Mission Ashrama, Ranchi, Jharkhand. Some of the other thrust areas chosen are: Disability Management and Special Education, Indian Cultural and Spiritual Heritage, and Disaster Management.

			<br><br>
	    	    <span style="float:right;">Ramakrishna Mission Vivekananda Educational and Research Institute (RKMVERI)<br>
               Ramakrishna Mission Ashrama,<br>
				Narendrapur, Kolkata 700103,<br>
				West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://narendrapur.rkmvu.ac.in/rkmveri-the-deemed-university/">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Academics</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">MSc. in Agricultural Biotechnology</h1>
				<p>About the Programme<br>
				The 2 year MSc. Programme in ‘Agricultural Biotechnology (AgBT)’ covers different aspects of biotechnological applications in agriculture & allied sectors with special reference to its role in production, protection and improvement of agricultural crops.
<br>
Students will gain both theoretical and practical knowledge of,
    		          <br>
    		        <a target="_blank" href="http://narendrapur.rkmvu.ac.in/academics/msc-in-agricultural-biotechnology/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">MSc. in Agriculture and Rural Development</h1>
				<p>About the Programme<br>
				The 2-year MSc. Programme in ‘Agriculture and Rural Development (ARD)’ includes courses/papers covering the concept of integrated rural development, rural society, demography, rural resources and environment, biodiversity, agricultural technologies, rural advanced technologies, entrepreneurship development, women and child development, rural health and sanitation, rural administration, research methodologies, etc., as well as the management aspects of all the above-mentioned topics in an integrated manner.

The students will have the liberty to choose optional and special courses through the credit accumulation system. Regular practical training and field work in the University farms as well as in villages and market, and programme evaluation are some of the important features of the programme. Dissertation work and at least two Seminars are compulsory for all students.
    		          <br>
    		        <a target="_blank" href="http://narendrapur.rkmvu.ac.in/academics/msc-in-agriculture-and-rural-development/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">MSc. (Agriculture) in Genetics & Plant Breeding</h1>
				<p>
				About the Programme<br>
				The 2 year M.Sc (Agriculture) Programme in ‘Genetics and Plant Breeding (GPB)’ will include topics related to different aspects of genetics and plant breeding courses right from basic theories to application at field level. Students will learn crop improvement techniques like fundamental plant breeding, mutalion breeding, breeding under biotic and abiotic strun situation, techniques for cereal, pulse, oil seed breeding and how to improve trails controlled by quantitative and qualitative genes. Further they will be enriched with advanced breeding techniques like marker assisted selection, QTL and association mapping and diversity analysis. All these breeding and advanced breeding will predecessed after fundamental concept of genetics, bio metrical genetics, and cytogenetics.
				
    		          <br>
    		        <a target="_blank" href="http://narendrapur.rkmvu.ac.in/academics/msc-in-genetics-plant-breeding/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">MSc. in Environment & Disaster Management</h1>
				<p>Programme structure<br>
				
    		          <br>
    		        <a target="_blank" href="http://narendrapur.rkmvu.ac.in/academics/msc-in-environment-disaster-management/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Post-Graduate Diploma in Post Harvest and Food technology</h1>
				<p>About the Programme<br>
				The one year Post Graduate Diploma in Post harvest and Food Technology (PHFT) programme covers different aspects of Food Preservation with latest technological applications for processing of fruits, vegetables, cereals, milk, fish, meat, etc., specially used for commercial production of processed foods. The programme also covers the methods of processing for production of Packaged Foods, canning, pickling, frozen foods etc.

The department has Food Processing Laboratory, Microbiology Laboratory, Food Quality evaluation and Food Safety Laboratory. The department has a complete unit to impart knowledge for Minimal Processing of Fruits and vegetables and cold storage facilities for storage including deep freeze facilities.
    		          <br>
    		        <a target="_blank" href="http://narendrapur.rkmvu.ac.in/academics/post-graduate-diploma-in-post-harvest-and-food-technology/">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
            <a class="admit_details_button" href="">Official Admission Details</a>
            <div class="admit_block">
			<h1>Msc Programme</h1>
                <h1 class="admit_name">Admissions to MSc in Agricultural Biotechnology</h1>
                <p>Applications are invited for MSc in Agricultural Biotechnology (Agbt) for the academic year 2020-21 from candidates meeting the minimum eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-msc-in-agricultural-biotechnology/">Read more</a>
                </p>
				
				<h1 class="admit_name">Admissions to MSc in Agriculture and Rural Development</h1>
                <p>Applications are invited for MSc in Agricultural and Rural Development (ARD) for the academic year 2020-21 from candidates meeting the minimum eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-msc-in-agriculture-and-rural-development/">Read more</a>
                </p>
				
				<h1 class="admit_name">Admissions to MSc in Genetics and Plant Breeding</h1>
                <p>Applications are invited for MSc (Agriculture) in Genetics and Plant Breeding for the academic year 2020-21 from candidates meeting the minimum eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-msc-in-genetics-and-plant-breeding/">Read more</a>
                </p>
				
				<h1 class="admit_name">Admissions to MSc in Environment and Disaster Management</h1>
                <p>Applications are invited for MSc in Environment and Disaster Management for the academic year 2020-21 from candidates meeting the minimum eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-msc-in-environment-and-disaster-management/">Read more</a>
                </p>
				
				
				<h1 class="admit_name">Admissions to MSc in Medical Biotechnology</h1>
                <p>Applications are invited for MSc in Medical Biotechnology (MdBT) for the academic year 2020-21 from candidates meeting the minimum eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-msc-in-medical-biotechnology/">Read more</a>
                </p>
            </div>	
			<div class="admit_block">
			<h1>PhD Programme</h1>
                <h1 class="admit_name">Admissions to PhD in Agricultural Biotechnology</h1>
                <p>PhD Admissions:<br>
Applications are invited from prospective research scholars interested in pursuing research leading to PhD in the area of ‘Agricultural Biotechnology’ from candidates with the following eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-phd-in-agricultural-biotechnology/">Read more</a>
                </p>
				
				<h1 class="admit_name">Admissions to PhD in Agriculture and Rural Development</h1>
                <p>PhD Admissions<br>
				Applications are invited from prospective research scholars interested in pursuing research leading to PhD in the area of ‘Agriculture and Rural Development’ from candidates with the following eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-phd-in-agriculture-and-rural-development/">Read more</a>
                </p>
				
				<h1 class="admit_name">Admissions to PhD in Genetics and Plant Breeding</h1>
                <p>PhD Admissions<br>
				Applications are invited from prospective research scholars interested in pursuing research leading to PhD in the area of ‘Genetics and Plant Breeding’ from candidates with the following eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-phd-in-genetics-and-plant-breeding/">Read more</a>
                </p>
				
				<h1 class="admit_name">Admissions to PhD in Environment and Disaster Management</h1>
                <p>PhD Admissions<br>
				Applications are invited from prospective research scholars interested in pursuing research leading to PhD in the area of ‘Environment and Disaster Management’ from candidates with the following eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-phd-in-environment-and-disaster-management/">Read more</a>
                </p>
            </div>	
			<div class="admit_block">
			<h1>PG Diploma Programme<h1>
                <h1 class="admit_name">Admissions to Post-Graduate Diploma in Post Harvest and Food technology</h1>
                <p>Applications are invited for Post-Graduate Diploma in Post Harvest and Food technology (PHFT) for the academic year 2020-21 from candidates meeting the minimum eligibility criteria.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/admissions/admissions-to-post-graduate-diploma-in-post-harvest-and-food-technology/">Read more</a>
                </p>
            </div>	
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placements</h1>
            <div class="place_block">
               <h1 class="admit_name">Student Placements</h1>
                <p>Below are some of the organisations where our past students work/worked.
			<br><br>
                    <a target="_blank" href="http://narendrapur.rkmvu.ac.in/student-placements/">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '41'";
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
					$sql1 = "SELECT * FROM colleges where id = '41'";
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