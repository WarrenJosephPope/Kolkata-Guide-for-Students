<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | GURU NANAK INSTITUTE OF HOTEL MANAGEMENT - [GNIHM], KOLKATA</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/7926_GNIHM_APP.jpg"></img>
		     <img class="logo" src="https://images.static-collegedunia.com/public/college_data/images/logos/1512473348cvgbhnjmkl.png"></img>
		     <span id="college_name"><a target="_blank" href="http://www.gnihm.ac.in/">GURU NANAK INSTITUTE OF HOTEL MANAGEMENT - [GNIHM], KOLKATA</a>
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
		    <p> ABOUT GNIHM<br>		
			Guru Nanak Institute of Hotel Management having the best and biggest infrastructure among the private hotel management institutes in India, started its journey on the 1st of July in the year 2005. Guru Nanak Institute of Hotel Management is affiliated to National Council for Hotel Management and Catering Technology under Ministry of Tourism Govt. Of India, affiliated to West Bengal University of Technology and approved by All India Council for Technical Education and is ranked top 1 Hotel Management college in Kolkata.
<br>
The objective of this institute is to create future leaders for the hospitality industry who will lead from the front. GNIHM prepares students committed to a career in the hospitality industry. Its' model hospitality education programmes balances theory with practice, independent learning with strong faculty support, and a foundation for lifelong learning with the skills for immediate employment and progress to leadership positions in the industry. To meet the challenges of the industry, we endeavor to provide our students with a world-class education, combining the latest Western trends and techniques with the age-old rich cultural heritage of India as should be present in the top 1 Hotel Management college in Kolkata.
			<br><br>
	    	    <span style="float:right;">GURU NANAK INSTITUTE OF HOTEL MANAGEMENT - [GNIHM], KOLKATA<br>
                57/F, Nilgunj Road, Panihati<br>
		         Near Sodepur railway Station, Kolkata- 700114<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://www.gnihm.ac.in/about-us.php">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Hotel/Hospitality Management Courses in Kolkata</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">BA in International Hospitality and Hotel Administration</h1>
				<p>It is a Top class 3 years international course with guranteed abroad internship & placement. Any student from Science, Arts, Commerce can take admission.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">BBA in Advanced Hospitality and Hotel Management</h1>
				<p>It is a world class design course with special internship & placement. This is a 3 years Bachelor degree course.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>
					
					
				<h1 class="course_name">Bachelor Degree in Hotel Management and Catering Technology</h1>
				<p>It is a 4 years graduation course with internship & placement in India.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>

					
				<h1 class="course_name">B.Sc in Hospitality and Hotel Administration</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>

					
				<h1 class="course_name">BA in International Culinary Arts</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>

				<h1 class="course_name">Bachelor Degree in Hospitality Management (H)</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>

					
				<h1 class="course_name">MBA in Hospitality and Hotel Administration</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc in Hospitality and Hotel Administration</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Hotel operation</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">BA in Hospitality and Tourism Management</h1>
				<p>Top class certificate from the USA + Abroad International Internship training + 100% International or National placement Guaranteed.
				
    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/programs.php">Read more</a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="http://www.gnihm.ac.in/entrance-exam-guide.php">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">JET 2020 Entrance Examination</h1>
                <p>
				It is a very popular All India Joint Entrance examination for admissions to hotel management programs like B.sc Hospitality & Hotel Administration,M.Sc in Hospitality and Hotel Administration, MBA in Hospitality and Hotel Administration. The exam is also known as Jis Entrance Test. It consists of 120 Marks Multiple Choice Questions with no negative Marking. Questions from General Knowledge, General Intelligence, and General English are the main subjects of this examination. Total time allotted 2hrs. No negative marking on the answers.

Cost of the Application Form and prospectus is Rs. 1000/- which can be paid through Debit card/Credit Card of any nationalized bank or through DD/Cheque in favour of “ Guru Nanak Institute of Hotel Management “ payable at Kolkata or cash payment is also accepted by the college.
			<br><br>

                    <a target="_blank" href="http://www.gnihm.ac.in/entrance-exam-guide.php">Read more</a>
                </p>
            </div>
			
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1>Training & Placement Details</h1>
            <div class="place_block">
               <h1 class="course_name">Pride Group of Hotels Campus Recruitment</h1>
    		    <p><br>
On campus recruitment drive at GNIHM conducted by Pride Group of Hotels on 11.02.2019. The recruitment was for Management Training & Hotel Operational Training programs.<br>

    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/pgh-recruitment.php">Read more</a>
    		    </p> 
            </div> 
			
			<div class="place_block">
               <h1 class="course_name">ITC Fortune on campus recruitment</h1>
    		    <p><br>
On 21st of January, ITC Fortune hotels Pvt. Ltd. had visited the institute for conducting on campus recruitment drive & they had shortlisted 15 candidates for the final round of interview.<br>

    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/itc-recruitment.php">Read more</a>
    		    </p> 
            </div> 
			
			<div class="place_block">
               <h1 class="course_name">Green Park Hotels Pvt Ltd on campus recruitment</h1>
    		    <p><br>
On campus recruitment drive by Green Park Hotels Pvt Ltd. at GNIHM. Seven students got selected for "Hotel Operations Trainee" position...<br>

    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/gph-recruitment.php">Read more</a>
    		    </p> 
            </div> 
			
			<div class="place_block">
               <h1 class="course_name">Hilton Group of Hotels on campus recruitment</h1>
    		    <p><br>
On campus recruitment drive for the final year students of GNIHM has started off and Hilton Group of hotels is the first company to visit the institute.<br>

    		          <br>
    		        <a target="_blank" href="http://www.gnihm.ac.in/hg-recruitment.php">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '14'";
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
					$sql1 = "SELECT * FROM colleges where id = '14'";
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