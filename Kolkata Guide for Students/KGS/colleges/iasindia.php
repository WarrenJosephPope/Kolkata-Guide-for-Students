<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | IAS ACADEMY - [IAS], KOLKATA</title>
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
		    <img class="bg" src="https://d1kzgg54terghg.cloudfront.net/api_main/public/images/basic-info/1557399357-banner.jpeg"></img>
		     <img class="logo" src="https://images.shiksha.com/mediadata/images/1572332631phpCA6MWr.jpeg"></img>
		     <span id="college_name"><a target="_blank" href="http://www.iasindia.net/">IAS ACADEMY - [IAS], KOLKATA</a>
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
		    <h1>ABOUT</h1>
		    <p>‘IAS’ different from other institute<br>		
India is moving on continuously with all of its potential for upgrading itself in educational workplace. Though enough institutions are generating many attracted word for grabbing vision of tenderly grew youth, however they take-over by huge fees and unusual pedagogy ethics which cannot be fit in genius environment for what India would be renowned, lack of skill-set for corporation (as many survey speaks) and not having a methodical and perfect educating cum learning system can create a gap in growth of country and all infrastructure related with economic, education, IT, agriculture and all most Morale of Indian Youth. There is lack of those helpful hands who could reach at these places;

Person who have requirement of degree & certificate from reputational and UGC certified Universities for their government/private job,

Who wants to be in foreign but they have need of attestation Facilities to cover study, lateral entry and saving years who has left study abruptly, as eligible person can obtain their bachelor degree in only one year, Persons who are working already and want to upgrade themselves professionally, personally and economically, but lack of time and knowledge they are in dark.

			<br><br>
	    	    <span style="float:right;">IAS ACADEMY - [IAS], KOLKATA<br>
               Admin Office 4/10-A, Poddar<br>
				Nagar, Jodhpur Park, Kolkata - 700 068<br>
				West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://www.iasindia.net/describtion.aspx">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Regular</li>
		            <li id="pg" onclick="pg();">Distance</li>
		            <li id="bed" onclick="bed();">Carrier Oriented</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">Management</h1>
				<p>Faculty of Management<br>
				Faculty of Management, it’s not theory, which rules the roots, its activities based learning throughout the course. The institute provides an environment conducive to build business acumen and practical common sense. Personality Grooming is given prime importance. Every Sunday field work is assigned to students when budding managers visit industry & get involved in small projects, market surveys so on. A guest lecture by a prominent person from any business area is organized frequently. Participants get an opportunity to interact with the best of the minds. Students solve case studies & give several presentations on various issues.	
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/management.aspx">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Engineering</h1>
				<p>Engineering and Technology<br>
				The bench mark of the institute is to produce engineers at the level of the IIT graduates for which purpose it has put appropriate infrastructure in place. The class-room teaching is supported by LCD/OH projectors and reinforced with on line learning Materials with a copy placed in the e-library. In a short period of Three years it is now a name to reckon within and outside the state of West Bengal. This has been achieved by sheer hard work, dedication, devotion and commitment of the faculty with environment of discipline, orderliness and timeliness.
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/dhpe/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Health Statistics (DHS)</h1>
				<p>
				Course Objective: <br>
				Development of skills with understanding of statistical methods and their applications in assessment research,  administration and solution strategies pertaining to the problems of health and diseases in the community. The candidates being awarded the Diploma in Health Statistics are expected to have acquired capabilities to undertake survey & investigation of health problems; utilisation of official health records and vital statistics; providing essential statistical methodology for assessment and research in medical & health field and to assist of government/NGO led health care system etc.
				
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/engineering.aspx">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Para-Medical</h1>
				<p>Faculty of Paramedical Sciences<br>
				Faculty of Paramedical Sciences (FOPS) led the foundation stone of Paramedical &Pharmacy Education as a carrier in West Bengal in the year 2015, to promote quality education and provide value based and affordable education to those who are desirous of outstanding achievements in learning, discovery and citizenship in a creative community, building one of the world’s great educational set up for the Good of All.
				We offer the Certificate, Diploma, Bachelor’s, & Master’s degree in Paramedical &Pharmaceutical Sciences. The faculty instructional program provides a broader knowledge of the theoretical as well as practical concepts with continuous updates & inspired delivery of contents via discipline and hard work, for the betterment of the future pharmacists.
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/para-medical.aspx">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">ParaMedical Segment</h1>
				<p>Courses offered:<br>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/paramedical-segment.aspx">Read more</a>
    		    </p>
				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
             	<h1 class="course_name">Bachelor Degree</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDEw">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Master Degree</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDEx">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">ITI Diploma</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDA0">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Vocational Training</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDA1">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Certificate Course</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDA2">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma Course</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDA3">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">PG Diploma</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="http://www.iasindia.net/Distance.aspx?crc=MDA5">Read more</a>
    		    </p>
				
				<h1 class="course_name">Management</h1>
				<p>Faculty of Management<br>
    		         Faculty of Management, it’s not theory, which rules the roots, its activities based learning throughout the course. The institute provides an environment conducive to build business acumen and practical common sense. Personality Grooming is given prime importance. Every Sunday field work is assigned to students when budding managers visit industry & get involved in small projects, market surveys so on. A guest lecture by a prominent person from any business area is organized frequently. Participants get an opportunity to interact with the best of the minds. Students solve case studies & give several presentations on various issues. <br>
    		        <a target="_blank" href="http://www.iasindia.net/management.aspx">Read more</a>
    		    </p>
				
				<h1 class="course_name">Engineering</h1>
				<p>Engineering and Technology<br>
    		        The bench mark of the institute is to produce engineers at the level of the IIT graduates for which purpose it has put appropriate infrastructure in place. The class-room teaching is supported by LCD/OH projectors and reinforced with on line learning Materials with a copy placed in the e-library. In a short period of Three years it is now a name to reckon within and outside the state of West Bengal. This has been achieved by sheer hard work, dedication, devotion and commitment of the faculty with environment of discipline, orderliness and timeliness.  <br>
    		        <a target="_blank" href="http://www.iasindia.net/engineering.aspx">Read more</a>
    		    </p>
				
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               
			   <h1 class="course_name">Carrier Oriented courses</h1>
				<p>Advantages of Carrier / job oriented courses<br>
    		        Job Oriented Courses are the short term courses over the degrees provided by many institutes for the specific specializations like accountancy; computers, fashion designing etc. which are very much beneficial and gives guarantee to take the job in specific field. There are many Job Oriented Accounting Course in Delhi in which many private entrepreneurs can come out with an idea how to fulfill the gap between formal education and job oriented training which can bridge the gap between unemployment and employed youth.  <br>
    		        <a target="_blank" href="http://www.iasindia.net/carrierOriented.aspx">Read more</a>
    		    </p>
				
			</div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Online Application</h1>
                <p>
			<br><br>
                    <a target="_blank" href="http://www.iasindia.net/onlineApplication.aspx">Read more</a>
                </p>
            </div>	
			
			<div class="admit_block">
                <h1 class="admit_name">Offline Application</h1>
                <p>
			<br><br>
                    <a target="_blank" href="http://www.iasindia.net/offlineApplication.aspx">Read more</a>
                </p>
            </div>	
			
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '16'";
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
					$sql1 = "SELECT * FROM colleges where id = '16'";
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