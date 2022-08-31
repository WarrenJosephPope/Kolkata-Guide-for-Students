<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | JD Birla Institute, Kolkata</title>
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
		    <img class="bg" src="https://static.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/8334/2018/7/31/J-D-Birla-Institute-Kolkata_Campus-View.JPG"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/5/5c/J._D._Birla_Institute_Logo.svg/1200px-J._D._Birla_Institute_Logo.svg.png"></img>
		     <span id="college_name"><a target="_blank" href="https://www.jdbikolkata.in/index.php">JD Birla Institute,kolkata</a>
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
		    <p> ABOUT J. D. BIRLA INSTITUTE<br>		
			


J. D. Birla Institute (JDBI) was established in 1962 and has completed more than 50 years in service to higher education. In acknowledgement of its continuous quest for excellence and the exemplary standards it has set and maintained through the decade, in 2010 JDBI was awarded the highest possible grading of “A” by National Assessment and Accreditation Council (NAAC). The Institute is a private unaided College affiliated to Jadavpur University, a world renowned Center of Excellence since 1963.

The late Sushila Devi Birla, wife of eminent industrialist late L. N. Birla established a college for girls in her mother-in-law’s name in June 1962. The College was named Smt. Jawahari Devi Birla Institute of Home Science and it filled a much felt gap in the scientific education of young women from Calcutta’s conservative families.

Over five decades, the Institute has grown with the needs and demands of the changing times.

A Department of Commerce was added in 1997 and in tune with the shifting zeitgeist; another campus was started in 2002 to house the co-educational Department of Management. At this time, the name of the institution was simplified to J. D. Birla Institute. In the year 2009, four new professionally oriented under-graduate B.Sc courses (Food Science & Nutrition Management; Textile Science, Clothing & Fashion Studies; Interior Designing and Human Development) were introduced apart from two new post-graduate M.Sc courses (Food & Nutrition and Textiles & Clothing) in 2009. M.Com was introduced and the Home Science Programme discontinued in 2013.

Today, the Institute has been ranked high amongst Institutes of higher learning in the country by several rating agencies including India Today, Career 360 and Times Magazine.
			<br><br>
	    	    <span style="float:right;">JD Birla Institute,kolkata<br>
                Departments of Sciences & Commerce <br>
				Main Campus & Office -<br>
		        11 Lower Rawdon Street, Kolkata- 700020<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.jdbikolkata.in/the-institute.php">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UNDERGRADUATE COURSES</li>
		            <li id="pg" onclick="pg();">POSTGRADUATE COURSES</li>
		            <li id="bed" onclick="bed();">POSTGRADUATE DIPLOMA COURSES</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">B.Sc (Hons) in Food Science & Nutrition Curriculum (New)</h1>
				<p>
				<br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/course/FSNM%20Curriculum-14.pdf">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Sc (Hons) inTextile Science,Clothing & Fashion Studies Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/course/TCFS-Curriculum-14.pdf">Read more</a>
    		    </p>
					
					
				<h1 class="course_name">B.Sc (Hons) in Interior Designing Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/course/ID-Curriculum.pdf">Read more</a>
    		    </p>

					
				<h1 class="course_name">B.Sc (Hons) in Human Development Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/course/HD-Curriculum-14.pdf">Read more</a>
    		    </p>

					
				<h1 class="course_name">B.Com (Hons) Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/course/curriculam-marge.pdf">Read more</a>
    		    </p>

				<h1 class="course_name">BBA (Hons)</h1>
				<p>
    		          <br>
    		        <a target="_blank" href="https://www.jdbimanagement.in/">Read more</a>
    		    </p>
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
              <h1 class="course_name">M.Sc in Food & Nutrition Curriculam (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/M.Sc-Curriculum-FSNM.pdf">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">M.Sc in Textiles & Clothing Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/M.Sc-Curriculum-TSFS.pdf">Read more</a>
    		    </p>
			  
			  <h1 class="course_name">M.Sc in Human Development Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/M.Sc-Curriculum-HD.pdf">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Com Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/M.Com-Curriculum.pdf">Read more</a>
    		    </p>
				
				
            </div>
			
			
			
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Diploma in Dietetics & Applied Nutrition Curriculum (New)</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/PGDDAN-Curriculum.pdf">Read more</a>
    		    </p>
			</div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission Procedure</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Bachelor of Commerce</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/BCom.pdf">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">Bachelor of Sciences in Food Science and Nutrition Management</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/FSNM.pdf">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">Bachelor of Sciencein Human Development</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/HD.pdf">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">Bachelor of Interior Designing</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/ID.pdf">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">Bachelor of Textile Science Clothing And Fashion Studies</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/TCFS.pdf">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">Masters of Commerce</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/MCom.pdf">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">Masters of Sciences</h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/MSc.pdf">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">POST GRADUATE DIPLOMA IN DIETETICS & APPLIED NUTRITION </h1>
                <p>
			<br><br>
                    <a target="_blank" href="https://www.jdbikolkata.in/pdf-file/2019/admission-procedure/PGDDAN.pdf">Read more</a>
                </p>
            </div>
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1>Internship & Placements </h1>
            <div class="place_block">
               <h1 class="course_name">Placements</h1>
    		    <p><br>
Various companies approach the Institute from time to time for recruitment of students and conduct campus interviews for the same. In addition, organizations where students undergo their internship also hire students after they complete their graduation.

    		        <br> <br>
    		        <a target="_blank" href="https://www.jdbikolkata.in/intership-placements.php">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '24'";
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
					$sql1 = "SELECT * FROM colleges where id = '24'";
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