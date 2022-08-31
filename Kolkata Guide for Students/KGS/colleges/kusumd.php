<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Kusum Devi Sunderlal Dugar Jain Dental College and Hospital</title>
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
		    <img class="bg" src="https://static.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/5953/2017/12/11/Kanti-Devi-Dental-College-and-Hospital-Mathura1.jpg"></img>
		     <img class="logo" src="https://i.ytimg.com/vi/c1j9_goyN6o/hqdefault.jpg"></img>
		     <span id="college_name"><a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/index.html">Kusum Devi Sunderlal Dugar Jain Dental College and Hospital</a>
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
		    <p>  The Institute
KSD Jain Dental College & Hospital is a unit of S.S.S. Jain Sabha, an organization involved in Philanthropic activities for over seven decades.

THE INFRASTRUCTURE
The massive infrastructure being created to cater the academic, clinical, residential and recreation requirements besides the green campus is a true reflection of our philosophy and believe in holistic development of all our students.

We believe that the best education isn't limited to class rooms and labs. The rich diversity of our student population, the collaborative atmosphere of the institution and the close-knit community make this an ideal environment for learning around the institution is the stimulation backdrop of Kolkata, a vibrant mix of historic, cultural, intellectual and artistic activity.
			<br><br>
	    	    <span style="float:right;">Kusum Devi Sunderlal Dugar Jain Dental College and Hospital<br>
                 6 Ram Gopal Ghose Road, <br>
		         Cossipore, Kolkata - 700 002<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/institute.html">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Major Departments</li>
		            <li id="pg" onclick="pg();">Proposed Add-on Departments</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Oral Medicine & Radiology</h1>
    		    <p>
    		          <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Oral & Maxillofacial Surgery</h1>
    		    <p>
    		          <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Oral & Maxillofacial Pathology</h1>
    		    <p>
    		          <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Periodontics</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
					
						
				<h1 class="course_name">Prosthodontics & Crown & Bridge</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Conservative Dentistry & Endodontics</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Pedodontics & Preventive Dentistry</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Orthodontics & Dentofacial Orthopedics</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				<h1 class="course_name">Public Health Dentistry</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/departments.html#">Read more</a>
    		    </p>
				
				
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
				<h1 class="course_name">Implantology</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/proposed-add-on-departments.html">Read more</a>
    		    </p>
			  
			  <h1 class="course_name">General Dentistry</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/proposed-add-on-departments.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Geriatric Dentistry</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/proposed-add-on-departments.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Special Health Care needs</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/proposed-add-on-departments.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of Behavioral Sciences</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/proposed-add-on-departments.html">Read more</a>
    		    </p>
				
				<h1 class="course_name">Department of for Forensic Odontology</h1>
    		    <p>
					 <br>
    		        <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/proposed-add-on-departments.html">Read more</a>
    		    </p>
				
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
           
            <div class="admit_block">
                <h1 class="admit_name">Bachelor of Dental Surgery (BDS)</h1>
                <p><br>
Eligibility for admission<br>
Admissions into BDS course will be done only through entrance test. NEET (National Eligibility cum Entrance Test).

After clearing the entrance exam, students have to participate in the counseling process organized by the central/state Govt. Seats will be allotted to candidates on the basis of rank, filled choices and availability of seats. Prospective students are requested to regularly look into relevant website for enrollment and subsequent counseling.
<br>

                    <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/bachelor-of-dental-surgery.html">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Careers</h1>
            <div class="place_block">
                <p>CURRENT EMPLOYMENTS<br>
Dental Hygienist<br>
Qualified Dental Laboratory Technician<br>
Dental Maintenance Engineer<br>
General Supervisor<br>
Qualified Medical Storekeeper<br>
Boys Hostel Warden<br>


				<br>
                    <a target="_blank" href="https://www.ksdjaindentalcollege.edu.in/vacancy.html">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '30'";
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
					$sql1 = "SELECT * FROM colleges where id = '30'";
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