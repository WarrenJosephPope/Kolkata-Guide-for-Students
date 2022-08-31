<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | INIFD- Inter National Institute of Fashion Designing, Lindsay Street</title>
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
		    <img class="bg" src="https://content3.jdmagicbox.com/comp/jalandhar/a4/0181px181.x181.170116151847.r2a4/catalogue/inifd-jalandhar-jalandhar-fashion-designing-institutes-gx5yf01jd1.JPG"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://inifdlindsaystreet.net/">INIFD- Inter National Institute of Fashion Designing, Lindsay Street</a>
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
			About INIFD LINDSAY STREET<br>
Inter National Institute of Fashion Design is the World’s Largest Global network of Design Institutes. INIFD and INIFD Academy of Interiors is the only institute offering premium programs in the primary design fields of Fashion Design and Interior Design. INIFD has a global presence. Experiencing the uniqueness of a rich source of visual inspiration and sharing this experience with our students in over 11 different countries and 4 continents gives them a unique perspective on the variety of expression existing throughout the world. Our students and faculty combine curiosity, experimentation and enthusiasm in the pursuit of learning for over half a million pass-outs and 25000 students passing out every year.
<br>
Mission<br>
Our aim is to take education in fashion and design to the common man in India. We provide premier educational experience to foster career focus, creativity and most importantly a global perspective.
			<br><br>
	    	    <span style="float:right;">INIFD- Inter National Institute of Fashion Designing, Lindsay Street<br>
                20A, 2nd Floor, Humayun Court Building, Lindsay Street, Behind Light House Cinema,<br>
		         Dharmatala, Kolkata, Kolkata 700087<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://inifdlindsaystreet.net/about-inifd-lindsay-street">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Interior Design</li>
		            <li id="pg" onclick="pg();">Fashion Design</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Interior Design College in Kolkata</h1>
				<p>Launch your career successfully with INIFD Kolkata, Lindsay street, Academy of Interiors (Best Interior Design College in Kolkata , Interior Design Institute in Kolkata)
Only a well-defined, strategic and state of the art interior design course will lay the foundations to advanced understanding and eventually fieldwork. INIFD Lindsay street Kolkata offers a long tradition of academic excellence and career-focused education and one of the Best interior design college in kolkata.

INIFD Academy of Interiors program in interior design comes from the house of INIFD – the leader in professional education with more than 23 years of proven track record in the domain of fashion and interior design and one of the best interior design college in kolkata.

Our mission is specifically to produce skilled, informed and inspired designers with the educational qualifications to become a certified interior designer. In carrying out this mission, we offer design education that combines studio courses with the study of design theory, history, presentation skills and resources that help a student to establish himself in the ever growing interior Design industry.
    		          <br>
    		        <a target="_blank" href="https://inifdlindsaystreet.net/interior-design/interior-design-college-in-kolkata">Read more</a>
    		    </p>
				
				<h1 class="course_name">Career Option</h1>
    		    <p>Good design should seduce shape &evoke that ultimate emotional response
Space for residential and commercial places is shrinking with each passing day. The anomalous situation therefore calls for professional help in order to make the working and living space beautiful, comfortable, usable and practical. Thanks to urbanization and globalization, people are mow lot more particular about the design and the lay out of the working and living area. Yes, staggering career in interior design has therefore a lot to offer
    		          <br>
    		        <a target="_blank" href="https://inifdlindsaystreet.net/interior-design/career-option">Read more</a>
    		    </p>
					
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
              <h1 class="course_name">Fashion Design college in kolkata</h1>
    		    <p>INIFD will make you discover, learn, grow and get you noticed
Get a super specialization program in Fashion Design only at INIFD Lindsay Street Kolkata for a creative career.

The boom in the fashion industry is hard to deny. It is more than $35 billion industry, growing in leaps and bounds at 9% each year. It’s important therefore to grab the bull by the horns and be proactive right from the beginning. It’s important to take initiative because nothing in this world of fashion would be handed to you. Also we are best fashion design college in kolkata.

It is a two year practice based and industry focused program, which prepare students for the challenges in design and fashion industry and we are best fashion design institute in kolkata.

This pioneering new program will challenge the students to explore fashion in context through the intersection if theory and practice, positioning them to shape a future in fashion that is innovative and interdisciplinary. It will also offer unique opportunities to transform concepts into tangible products, services and experiences.
    		          <br>
    		        <a target="_blank" href="https://inifdlindsaystreet.net/fashion-design/fashion-design-college-in-kolkata">Read more</a>
    		    </p>
			   
				<h1 class="course_name">Career Option</h1>
    		    <p>Fashion is not all about labels and brands. It is something deep within you<br>
Fashion designing – the most innovative, interesting and creative career option demands your eye for detail. Yes, it’s glamorous too. The fashion industry has become highly competitive today with a number of career options ranging from designers to merchandisers, from stylist to fashion blogger and more.
<br>
Fashion Designers<br>
Fashion Merchandisers
    		          <br>
    		        <a target="_blank" href="https://inifdlindsaystreet.net/fashion-design/career-option">Read more</a>
    		    </p>
            </div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
           
            <div class="admit_block">
                <h1 class="admit_name">Interior Design </h1>
                <p>Admission Form<br>
				PROGRAM OF STUDY<br>
				 FN - 101 One Year Foundation Program in Fashion Design<br>  
				 AD - 201 Two Year Advance Program in Fashion Design<br>  
				 SPL - 301 Three Year Specialisation Program in Fashion Design  <br>
				 SS - 211 Two Year Super Specialisation Program in Fashion Design<br>
				 FN - 1103 One Year Foundation Program in Interior Design  <br>
				 AD - 1203 Two Year Advance Program in Interior Design  <br>
				 SPL - 1303 Three Year Specialisation Program in Interior Design <br>
				 SS - 1213 Two Year Super Specialisation Program in Interior Design <br>
			<br>

                    <a target="_blank" href="https://inifdlindsaystreet.net/interior-design/admission-form">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">Fashion Design </h1>
                <p>Admission Form<br>
				PROGRAM OF STUDY<br>
				 FN - 101 One Year Foundation Program in Fashion Design<br>  
				 AD - 201 Two Year Advance Program in Fashion Design<br>  
				 SPL - 301 Three Year Specialisation Program in Fashion Design  <br>
				 SS - 211 Two Year Super Specialisation Program in Fashion Design<br>
				 FN - 1103 One Year Foundation Program in Interior Design  <br>
				 AD - 1203 Two Year Advance Program in Interior Design  <br>
				 SPL - 1303 Three Year Specialisation Program in Interior Design <br>
				 SS - 1213 Two Year Super Specialisation Program in Interior Design <br>
			<br>

                    <a target="_blank" href="https://inifdlindsaystreet.net/fashion-design/admission-form">Read more</a>
                </p>
            </div>
			
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>PLACEMENT Support</h1>
            <div class="place_block">
                <p>
				Different Recruiters:
				<br>
                    <a target="_blank" href="https://inifdlindsaystreet.net/placement-support">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '20'";
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
					$sql1 = "SELECT * FROM colleges where id = '20'";
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