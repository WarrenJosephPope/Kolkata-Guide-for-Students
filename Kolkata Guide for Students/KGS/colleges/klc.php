<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | KINGSTON LAW COLLEGE-[KLC],KOLKATA</title>
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
		    <img class="bg" src="https://klccal.edu.in/frontend_style/backoffice/uploads/HomeBanner/2fblg_lucknow.jpg"></img>
		     <img class="logo" src="https://storage.googleapis.com/ezap-prod/colleges/4314/kingston-law-college-logo.jfif"></img>
		     <span id="college_name"><a target="_blank" href="https://klccal.edu.in/">KINGSTON LAW COLLEGE-[KLC],KOLKATA</a>
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
			Vision & Mission<br>
			 To turn out of its portals legally competent human resource excelling both in academics and values.<br>
 To produce students who would become true legal professionals and who would contribute to the profession, community and the nation as world citizen.<br>
 To make the students leaders in their chosen profession with a sense of commitment, social responsibility, and highest moral fiber.<br>
			<br><br>
	    	    <span style="float:right;">KINGSTON LAW COLLEGE-[KLC],KOLKATA<br>
                Bus Stop - Kajibari, Berunanpukuria,<br>
		        Adjacent to W.B. State University,<br>
				Barasat, Dist. 24 Pgs. (N) Kol - 126,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://klccal.edu.in/index.php/Homepage_frontend_control/vision_mission">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">B.A LLB. (Hons.)</li>
		            <li id="pg" onclick="pg();">B.A LLB.</li>
		            <li id="bed" onclick="bed();">LLB</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">B.A.-LLB. Programme</h1>
				<p><pre>Duration : 5 Years     Seats : 60 Only</pre><br>
				CURRICULUM ( SUBJECTS )
    		          <br>
    		        <a target="_blank" href="https://klccal.edu.in/index.php/Homepage_frontend_control/ba_llb">Read more</a>
    		    </p>
				
					
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
              <h1 class="course_name">B.B.A LLB.</h1>
    		    <p><pre>Duration : 5 Years      Seats : 40 Only</pre><br>
					CURRICULUM ( SUBJECTS )<br>
    		          <br>
    		        <a target="_blank" href="https://klccal.edu.in/index.php/Homepage_frontend_control/bba_llb">Read more</a>
    		    </p>
			  
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name"> LLB.</h1>
    		    <p><pre>Duration : 3 Years   Seats : 120 Only</pre><br>
					CURRICULUM ( SUBJECTS )<br>
    		          <br>
    		        <a target="_blank" href="https://klccal.edu.in/index.php/Homepage_frontend_control/llb">Read more</a>
    		    </p>
			</div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admission Criteria</h1>
                <p>
				OUR CRITERIA FOR B.A LLB. (HONS.)<br>
				ADMISSION<br>
				45% for General candidates<br>
				42% for OBC candidates<br>
				40% for SC & ST candidates in 10+2 or equivalent examination<br>
				AND As per the norms of WBSU & BCI<br>
				However, the college reserves the right to give preference in admission to those candidates who have secured 60% above marks in 10+2 or equivalent Examination<br>
			<br>

                    <a target="_blank" href="https://klccal.edu.in/index.php/Homepage_frontend_control/admission_process">Read more</a>
                </p>
            </div>
			
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Training & Internships</h1>
            <div class="place_block">
               <h1 class="course_name"></h1>
    		    <p>Law is vast and it touches all of us in some way or the other, itis not just about the intensity or money or even the status, it is more than that. The Indian legal market is in a nascent stage in terms of growth. A law student with all desired skills, inherent interests has a wide range of legal professional opportunities available these days. In the given level of economic development and globalization, the factors and future direction of legal education in India is immense. This profession has grown over a short span of less than 50 years to become one of the world’s largest and most influential governance of the country. Amidst mediocrity, the legal world has changed and opportunities for trained persons has grown phenomenally. Even with this level of advancement,a career in law is kind of a defamed one. Legal education in India is completely different from what it was 10 years ago. Practicing in court is not the only option left after completing a law course. The most advantageous aspect of this field is that it is not restricted to a specific background of a student. To hone the skills of a successful lawyer, continued self-education is indispensable in emerging areas of practice. The following skills are embedded into our students’ DNA post admission at Kingston Law College:<br>
    		          <br>
    		        <a target="_blank" href="https://klccal.edu.in/index.php/Homepage_frontend_control/placement_intermship">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '28'";
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
					$sql1 = "SELECT * FROM colleges where id = '28'";
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