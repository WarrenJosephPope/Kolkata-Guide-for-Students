<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | JYOTIRMOY SCHOOL OF LAW-[JSL],KOLKATA</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/8839_JSL_New.png?tr=w-1286,h-193,c-force"></img>
		     <img class="logo" src="https://images.static-collegedunia.com/public/college_data/images/logos/14884473924.jpg"></img>
		     <span id="college_name"><a target="_blank" href="https://www.jsl.org.in/">JYOTIRMOY SCHOOL OF LAW-[JSL],KOLKATA</a>
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
		    <p> 		
			Vision & Mission<br>
			Jyotirmoy School of Law has been established with a view to make an humble contribution to bridge the gap between the acquired skill and the required skill.

The legal education has its past glory but due to certain inevitable circumstances, it had lost its glamour and had the adverse effect on the legal profession as well.

The Bar Council of India had since taken certain concrete steps to revive its glory by setting up independent Law Universities all over the country.

The Jyotirmoy School of Law has embarked on a mission to develop a Model Law School, which could visualize the societal needs and carry its mission to make significant contribution in the realm of legal education and research.
			<br><br>
	    	    <span style="float:right;">JYOTIRMOY SCHOOL OF LAW-[JSL],KOLKATA<br>
                Jyotirmoy Knowledge park,<br>
		        Kalikapur, Sonarpur, Tematha,<br>
				Tematha, Kolkata – 743 330,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.jsl.org.in/vision.php">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">BA LLB</li>
		            <li id="pg" onclick="pg();">Diploma In Cyber Law</li>
				</ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">B.A.-LLB. Programme</h1>
				<p>Yours Position as a Legal Professional - An Overview<br>
				The B.A.LL.B. Course will make you a law graduate but not a lawyer. Law College teaches some fundamental basics but in no way it can introduce you to the diversity in the legal profession. A law degree is only presumptive evidence of a person’s fitness for the practice of law. Legal practice herein used indicates practice in the professional realm of law, as envisaged in the Indian Advocates Act, 1961
    		          <br>
    		        <a target="_blank" href="https://www.jsl.org.in/ballb.php">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
              <h1 class="course_name">DIPLOMA IN CYBER LAW</h1>
    		    <p>About The Course<br>
Concept of Cyber law is a recent phenomenon. It is still in its nascent stage and continuously evolving every passing day. Even the most learned legal luminaries sometimes find it difficult to solve the legal problems posed by technology. Thus, the institute intends to start up a pious initiative to offer Diploma Course offered so as to spread awareness among the general public about the cyber law, it is specifically beneficial to the lawyer community and the judges in the subordinate judiciary, who face cases on the daily basis. The course is designed to impart knowledge by direct contract classes with expert faculties and study materials. The Diploma would be an added qualification for those who want to pursue a career in this field. The Diploma will help the law enforcing personnel in acquiring in-depth cyber world law for the future investigation with electronic evidence. The course will also provide the employer and their employees to exactly ascertain the importance of cyber security of their organization. The course will also show the path for their aspiring career in ethical hacking and cyber security.
    		          <br>
    		        <a target="_blank" href="https://www.nujs.edu/nujs-academics-courses.html">Read more</a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admission Procedure</h1>
                <p>
				STEP 1 :<br>
				Registration to get User ID and Password, The eligible applicant shall register himself/herself at the link given in www.caluniv.ac.in
				Fields have to fill up: Citizenship, Colour Photograph upload (within 20-50 kb), Speciation Signature upload (within 20-50 kb), Name, Date of Birth according to 10th level record, Place of Birth, Father’s Name, Mother’s Name, Gender, Cast Category, Disability Status, Permanent and Present Address, Mobile Number, Email, Educational Qualification details of 10th level 10+2 level, best four subjects marks of 10+2 level and Security Questions (last school attended and Grand Father’s name).
				<br>
				STEP 2 :<br>
				Application Forms Submission (after getting User ID and Password):
				Fields have to fill up: Preferred Institution for Admission (every field is mandatory and value of no two fields should be same.) and preferred entrance Examination Centre (Every field is mandatory and value of no two fields should be same.)
			<br>

                    <a target="_blank" href="https://www.jsl.org.in/admission_procedure.php">Read more</a>
                </p>
            </div>
			
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '26'";
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
					$sql1 = "SELECT * FROM colleges where id = '26'";
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