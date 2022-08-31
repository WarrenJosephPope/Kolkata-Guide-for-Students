<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Maulana Abul Kalam Azam University of Technology</title>
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
		    <img class="bg" src="https://scontent.fixr1-1.fna.fbcdn.net/v/t31.0-8/27747949_188461071910370_8596246657570092680_o.jpg?_nc_cat=109&_nc_sid=6e5ad9&_nc_ohc=M4bPU5eW3CoAX8oMox7&_nc_ht=scontent.fixr1-1.fna&oh=bcb6caade2fb41cafb5f54de6f5dff14&oe=5EAA828A"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/7/76/Maulana_Abul_Kalam_Azad_University_of_Technology_Logo.png"></img>
		     <span id="college_name"><a target="_blank" href="https://makautwb.ac.in/">Maulana Abul Kalam Azam University of Technology</a>
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
		    <p>An Introduction<br>
The Government of West Bengal set up an expert committee on December 31, 1998, under the Chairmanship of Ashesh Prasad Mitra, Eminent Scientist to explore the necessity and scope for establishment of an Engineering / Technology University in the stste of West Bengal.

The University came into operation formally with the assumption of the office of the first Vice Chancellor on January 15, 2001 as a sequel to the promulgation of THE WEST BENGAL UNIVERSITY OF TECHNOLOGY ACT, 2001, under West Bengal Act XV of 2000 passed by the West Bengal Legislature. The University started its academic programme, from July 16, 2001 following a Notification from the Department of Higher Education, Government of West Bengal dated June 15, 2001 through the affiliation of Engineering and Management Institutions / Colleges and has entered the eighth year of its functioning. The University is included in Section 2F and also in Section 12B of UGC and recipient of UGC Grant.

We are equal opportunity, affirmative action institution and do not distinguish on the basis of gender, caste, creed and religion. The University wants to grow nurturing innovative / novel ideas that would touch all segments of the society especially the marginalized ones. We look at technology from a broad social perspective and are organizing postgraduate courses in basic and applied sciences. The University has introduced new courses in emerging areas to develop, enhance and higher education. We strive for optimum utilization of recourses and believe in unleashing individual initiative for entrepreneurial development without compromising the collective need.

			<br><br>
	    	    <span style="float:right;">Maulana Abul Kalam Azam University of Technology<br>
               BF 142, DD Block, Sector 1,<br>
				Bidhannagar, Kolkata,700064<br>
				West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=196">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">BIOLOGICAL SCIENCE</li>
		            <li id="pg" onclick="pg();">COMPUTATIONAL SCIENCE</li>
		            <li id="bed" onclick="bed();">ENGINEERING SCIENCE</li>
		            <li id="phd" onclick="phd();">ENERGY AND ENVIRONMENTAL SCIENCE</li>
		            <li id="coc" onclick="coc();">MANAGEMENT SCIENCE</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">DEPARTMENT OF BIOTECHNOLOGY</h1>
				<p>About<br>
				The department of Biotechnology was established in 2003 with a view to develop a Centre of Excellence in Education and Research in Biotechnology. In so doing, the M.Tech programme in Biotechnology was initiated with the students who qualified in the Combined Entrance Examination in Biotechnology (CEEB) conducted by Jawaharlal Nehru University, New Delhi. It is pertinent to mention that the M.Tech programme at U.Tech and Anna University, Chennai are only two supported by the Department of Biotechnology, Govt. of India. The course has got a national character. In addition, the department runs three other programmes namely M.Sc. in Molecular Biology, M.Sc. in Microbiology and M.Sc. in Genetics. The curriculum of the course (four semesters) comprises Chemistry, Microbiology, Genetics, Genetic Engineering, Protein Engineering, Downstream Processing, Bioethics and Intellectual Property Right (IPR) among others. Each semester has got 25 credits. The department has got updated infrastructure and a team of excellent faculty members. Their expertise encompasses various facets of frontier areas in science.
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=246">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPARTMENT OF BIO-INFORMATICS</h1>
				<p>About<br>
					
WBUT has realized the need for introducing PG teaching and research program in   Bioinformatics, in addition to the Biotechnology program, to meet the need of today’s scientific community. The Department of Bioinformatics was founded in the year 2005 and is recognized by UGC under its 12B regulation. The department receives grant from UGC for its regular function and also from DBT under its BTIS-net program towards Bioinformatics Infrastructure Facility (BIF).
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=254">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">CENTRE FOR AGRO BIO-TECHNOLOGY</h1>
				<p>
				About the Programme<br>
				
				
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=389#aboutus">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
             	<h1 class="course_name">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h1>
				<p>About the Programme<br>
				The Department of Computer Science & Engineering, under the School of Engineering & Technology offers B.Tech. in Computer Science & Engineering (CSE), M.E. in Computer Science and Engineering and M.Tech. in Software Engineering. All the courses are approved by AICTE.
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=286">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF INFORMATION TECHNOLOGY</h1>
				<p>About the Programme<br>
				The Department of Information Technology will be a Centre of Excellence which will produce professionals with problem solving skills in the field of Information Technology, awareness of the contemporary industrial need, ability to do research in relevant areas, with innovative leadership quality, with the quality of responsible citizenship and the philanthropic attitude and towards society.
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=368">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">DEPARTMENT OF INDUSTRIAL ENGINEERING AND MANAGEMENT</h1>
				<p>About the Programme<br>
				The Department of Industrial Engineering & Management, under the School of Engineering & Technology offers M.Tech in Industrial Engineering & Management.

M. Tech in Industrial Engineering & Management – This is a two year AICTE approved in-house degree programme with an intake capacity of 23 students. The programme is interdisciplinary in nature and prepares students to undertake multi-disciplinary assignments in corporate organizations as well as equips them for academic / teaching positions in a multi-subject environment in a contemporary educational institution. The state-of-the-art encompasses a lot of engineering fields of study such as production and product system design, manufacturing, quality engineering & management, supply chain and logistics, ergonomics, reliability studies, enterprise information solutions and industrial management. Eligibility for admission to this programme is a B.E/ B.Tech degree in any branch of engineering / technology or equivalent qualification. Candidates with valid GATE score are eligible for AICTE scholarship.

    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=302">Read more</a>
    		    </p>
			   <h1 class="course_name">DEPARTMENT OF MICROELECTRONICS & VLSI TECHNOLOGY</h1>
				<p>About the Programme<br>
				The Department of Microelectronics and VLSI Technology is, under the School of Engineering Science
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=353">Read more</a>
    		    </p>
				<h1 class="course_name">DEPARTMENT OF MEDIA SCIENCE</h1>
				<p>About the Programme<br>
				
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=382">Read more</a>
    		    </p>
			</div>
            <div class="course_type" id="phd_block" style="display : none;">
              <h1 class="course_name">DEPARTMENT OF ENVIRONMENTAL SCIENCE</h1>
				<p>About the Programme<br>
				
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=383">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF RENEWABLE ENERGY</h1>
				<p>About the Programme<br>
				
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=384">Read more</a>
    		    </p>
             </div>
			<div class="course_type" id="coc_block" style="display : none;">
                <h1 class="course_name">DEPARTMENT OF MANAGEMENT</h1>
				<p>About the Programme<br>
				School of Management (SOM) was set up by the West Bengal University of Technology (WBUT) in July 2006. The aim of the School was to function as a centre for advanced studies and research in Management and allied disciplines. The objectives of the School of Management can be broadly summarized as under:
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=262">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF HOSPITAL MANAGEMENT</h1>
				<p>About the Programme<br>
				
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=385">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF TRAVEL AND TOURISM</h1>
				<p>About the Programme<br>
				
    		          <br>
    		        <a target="_blank" href="https://makautwb.ac.in/page.php?id=386">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
            <div class="admit_block">
			
                <h1 class="admit_name">DIFFERENT EXAMINATIONS AND ADMISSIONS</h1>
                <p>Different Entrance Examinations
			<br><br>
                    <a target="_blank" href="https://makautwb.ac.in/page.php?id=313">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placements</h1>
            <div class="place_block">
               <h1 class="admit_name">PLACEMENT FACILITIES AT MAKAUT,WB</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://makautwb.ac.in/page.php?id=214">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '31'";
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
					$sql1 = "SELECT * FROM colleges where id = '31'";
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