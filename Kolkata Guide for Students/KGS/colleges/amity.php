<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Amity University, Kolkata</title>
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
		    <img class="bg" src="https://www.amity.edu/Kolkata/images/university.jpg"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://www.amity.edu/Kolkata/">Amity University, Kolkata</a>
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
			The Amity University Act, 2014 (West Bengal Act, XXIV of 2014) has been passed by the Legislative Assembly of West Bengal in 2014. The Amity University Act, 2014 has been published in the Kolkata Gazette on 21.1.2015 vide the Law Department Notification No. 83L dated 21.1.2015.

Amity University Kolkata is a part of 20-year old, leading education group of India, set up with a vision to contribute to nation-building through education, where currently 100,000+ students are pursuing 250 programmes across campuses in India and abroad.
			<br><br>
	    	    <span style="float:right;">Amity University, Kolkata<br>
                Major Arterial Road(South-East), AA II,<br>
		         Newtown, Kolkata, 700135<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.amity.edu/Kolkata/amity-kolkata.aspx">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();"> Under Graduate Programs</li>
		            <li id="pg" onclick="pg();">Post Graduate Programs</li>
		            <li id="bed" onclick="bed();">Education</li>
		            <li id="phd" onclick="phd();">Phd</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Applied Sciences</h1>
    		    <p>Full Time Courses
    		          <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Applied%20Sciences&Programs=Graduate">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Architecture</h1>
    		    <p>Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Architecture&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Biotech</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Biotech&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Commerce</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Commerce&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Communication</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Communication&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Computer Science/ IT</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Computer%20Science/%20IT&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Economics</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Economics&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Engineering</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Engineering&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">English literature</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=English%20literature&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Environment</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Environment&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Fashion</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Fashion&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Fine Arts</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Fine%20Arts&Programs=Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Hotel Management Hospitality</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Hotel%20Management%20Hospitality&Programs=Graduate">Read more</a>
    		    </p>
				
				
					<h1 class="course_name">Journalism</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Journalism&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Language</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Language&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Law</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Law&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Management</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Management&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Mass Communication</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Mass%20Communication&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Nanotechnology</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Nanotechnology&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Psychology & Behavioural Science</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Psychology%20-%20Behavioural%20Science&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Social Science</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Social%20Science&Programs=Graduate">Read more</a>
    		    </p>
				
					<h1 class="course_name">Travel & Tourism</h1>
    		    <p> Full Time Courses
    		         <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Travel%20-%20Tourism&Programs=Graduate">Read more</a>
    		    </p>
				
				
            </div>
			
			
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Advertising & PR</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Advertising%20-%20PR&Programs=Post%20Graduate">Read more</a>
    		    </p>
    		    
				<h1 class="course_name">Applied Sciences</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Applied%20Sciences&Programs=Post%20Graduate">Read more</a>
    		    </p>

					<h1 class="course_name">Biotech</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Biotech&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Commerce</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Commerce&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Communication</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Communication&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Computer Science/ IT</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Computer%20Science/%20IT&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Economics</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Economics&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Engineering</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Engineering&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">English literature</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=English%20literature&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Film & Drama</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Film%20-%20Drama&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Fine Arts</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Fine%20Arts&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Journalism</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Journalism&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Law</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Law&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Management</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Management&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Mass Communication</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Mass%20Communication&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name"> Nanotechnology</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Nanotechnology&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Psychology & Behavioural Science</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Psychology%20-%20Behavioural%20Science&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Social Science</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Social%20Science&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Solar & Alternate energy</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Solar%20-%20Alternate%20energy&Programs=Post%20Graduate">Read more</a>
    		    </p>
				
				<h1 class="course_name">Travel & Tourism</h1>
    		    <p>Full Time Courses
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Travel%20-%20Tourism&Programs=Post%20Graduate">Read more</a>
    		    </p>
	
            </div>
			
			<div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Under graduate</h1>
    		    <p>
    		       Full Time Courses<br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Education&Programs=Graduate">Read more</a>
    		    </p>

				<h1 class="course_name">Post Graduate</h1>
    		    <p>
    		       Full Time Courses<br>
    		        <a target="_blank" href="https://www.amity.edu/Kolkata/course-list.aspx?fd=Education&Programs=Post%20Graduate">Read more</a>
    		    </p>
            </div>

			
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">Ph.D.</h1>
    		    <p>Ph.D. Programmes
    		        <br>
    		        <a target="_blank" href="https://www.amity.edu/phd/campuses.aspx">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <div class="admit_block">
                <h1 class="admit_name">Admission:</h1>
                <p>Application Form
Admission packs are available at Cost of Rs. 1,100 /-<br>
                    <a target="_blank" href="https://www.amity.edu/apply-now.aspx?CampusId=UiVaf/F5ArE=">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>AMITY Placement Team Structure
Amity Education Group
All Campuses are equipped with requisite resources and manpower to fulfil the placement needs of outgoing students.

Each Amity Campus/ Institute comprises of CRC/ IIC wing to coordinate with students and extend desired support.

At a central level, Amity Technical Placement Centre is established which coordinates with all CRC’s / IIC’s with all Amity Campuses to provide maximum job opportunities to students of entire Amity Education Group pursuing Technical Programmes.
                    

                    <br>
                    <a target="_blank" href="https://amity.edu/placement/">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '6'";
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
					$sql1 = "SELECT * FROM colleges where id = '6'";
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