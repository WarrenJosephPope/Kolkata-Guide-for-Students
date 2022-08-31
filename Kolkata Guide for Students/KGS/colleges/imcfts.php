<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | INSTITUTE OF MASS COMMUNICATION FILM AND TELEVISION STUDIES - [IMCFTS], KOLKATA</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/1488867401bjdfgn.jpg"></img>
		     <img class="logo" src="https://teja8.kuikr.com/images/QuikrEducation//image/institutev2/1330/Logo.jpg"></img>
		     <span id="college_name"><a target="_blank" href="https://www.imcfts.com/">INSTITUTE OF MASS COMMUNICATION FILM AND TELEVISION STUDIES - [IMCFTS], KOLKATA</a>
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
		    <p> 		
			The main objective of this institute is to create skilled personals to be ready to enter the industry. The students are provided not only with the theoretical knowledge but they are also given hands on practical trainings. The philosophy of this institute is to provide quality education and nurture the entrepreneurship and leadership qualities of the learners. Beside educational skills the Institute of mass communication film and television studies also aims at creating a better human out of each and every student.

			The Institute has been approved by the Department of Higher Education, Govt. of West Bengal and affiliated to the University of Kalyani and affiliated to University Grants Commission to conduct 3yrs. B.A. Hons Degree course in Media Studies and 1yr. Post Graduate Diploma course in Mass Communication & Journalism along with 2 years MA in mass communication and community journalism, following the approved syllabi of the University of Kalyani. The Institute also ensures to provide a legally recognized and accredited degree and diploma certificate after successful completion of the course from the concerned University. Also the governing body of the institute includes luminaries from the field of education, media and corporate to make a cogent body in the field of education sector.

			The institute has its well equipped computer lab and editing studio. Practical classes for still and video photography are conducted regularly. Beside this film making is added as a compulsory activity in both degree and diploma courses. The institute also has its own "earn while you learn" project where students are provided with an opportunity to earn by the means of web development. Other than this the students are provided with a platform to showcase their talents through its wall magazine.


			<br><br>
	    	    <span style="float:right;">INSTITUTE OF MASS COMMUNICATION FILM AND TELEVISION STUDIES - [IMCFTS], KOLKATA<br>
                261, 12, Prince Anwar Shah Rd,<br>
				Rajendra Prasad Colony, <br>
				Tollygunge,Kolkata-700033<br>
		        West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.imcfts.com/features.php">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Main Courses</li>
		            <li id="pg" onclick="pg();">Short Certificate Courses</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">MA in Mass Communication and Community Journalism</h1>
				<p>INTRODUCTION TO THE COURSE:-<br>
				The need of the day is to experience the global interaction in community level. Mass communication is one of the fast-growing fields for research and employment in our time. Media and entertainment industry also holds out promise for an exciting career for the creative youth. Simultaneously, mass communication has the potential to act as a catalyst for growth and development and negotiate challenging issues like violence, poverty, illiteracy, health, environment, and consumerism that threatens to destabilize the society. This will open up, in the days to come, the need for competent creative and technical media specialists who would be able to combat the challenges of the situation.

				This task requires committed, competent professionals and leaders who are able to combine strong analysis with personal capability to communicate to the mass through different medium particularly electronic.
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/MA-mass-communication.php">Read more</a>
    		    </p>
				
				<h1 class="course_name"> B.A. (Hons.) in Media Studies</h1>
				<p>Media' that influence us to form our opinion about a product or a social incident or event are essentially to be studied in higher education to build up individual career in modern era.

Media is a combination of tools of communication. Newspaper, Advertising, Theatre, Music, Film, Radio, Television, Internet come under the umbrella of media. Media Studies comprise different subjects related to media from Mass Communication, Journalism to Audio-Visual Communication to open up a vast horizon for the aspirant students to build up their career either through employment in media and corporate houses or by self-employment. The course is totally vocational and practical based under professional and experienced faculty from Universities, Media and Corporate Sectors.

The young aspirant students having thrive to shine in the field of Management, Technical and Creative sectors of media are essentially advised to join the course. Hons. Subjects under Bachelor of Arts (Hons) in Media Studies (3yrs. Degree Course) Mass Communication, Journalism, Public Relations, Advertising, Marketing, Audio-Visual Communication (Film, Radio, Television, Internet), Photography, Public Service Broadcasting and Community Media.
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/BA-Hons-media-studies.php">Read more</a>
    		    </p>
					
					
				<h1 class="course_name">Post Graduate Diploma in Mass Communication and Journalism</h1>
				<p>Post Graduate Diploma in Mass Communication & Journalism - Why?<br>
'Media' that influence us to form our opinion about a product or a social incident or event are essentially to be studied in higher education to build up individual career in modern era.

Media is a combination of tools of communication. Newspaper, Advertising, Theatre, Music, Film, Radio, Television, Internet come under the umbrella of media. Media Studies comprise different subjects related to media from Mass Communication, Journalism to Audio-Visual Communication to open up a vast horizon for the aspirant students to build up their career either through employment in media and corporate houses or by self-employment. The course is totally vocational and practical based under professional and experienced faculty from Universities, Media and Corporate Sectors.
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/PGDMCJ.php">Read more</a>
    		    </p>

					
				<h1 class="course_name">Post Graduate Diploma in Film and Television Studies</h1>
				<p>Film is a combination of many art forms, be it literature, painting, music, architecture, dance or acting. Unlike some of the other art forms it is not a solo performance. It is a team work between creative and technical personnel to give shape to the ultimate product, the film.

The course is completely practical oriented. Care has been taken while designing the same that the theory portion would help the students to develop a sound understanding of the basics of story-telling in film making following the language of film. More than 50% of the time would be devoted to hands-on film making, so that the students learn how to transform their ideas into the audio-visual format, film. Since communication is the ultimate motto of any audio-visual presentation the course will start with Film as a Medium of Communication along with the history of film making and study of important creative film makers of the world who have contributed to the development of grammar of Film Language. The students will also be involved to do exercises that would strengthen their understanding of the concepts being taught and to develop their own original ideas and concepts. The course structure is divided into two broad sections, creative and technical.
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/pgdfts.php">Read more</a>
    		    </p>

				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
             <h1 class="course_name">ADVERTISING, PUBLIC RELATIONS AND EVENT MANAGEMENT</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/ADVERTISING,%20PUBLIC%20RELATIONS%20AND%20EVENT%20MANAGEMENT.pdf">Read more</a>
    		    </p> 
				
				<h1 class="course_name">Animation & VFX</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/ANIMATION.pdf">Read more</a>
    		    </p> 
				
				<h1 class="course_name">Corporate Training Programs</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/CORPORATE%20TRAINING%20PROGRAMS.pdf">Read more</a>
    		    </p> 
				
				
				<h1 class="course_name">Editing - FCP</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/EDITING%20-%20FCP.pdf">Read more</a>
    		    </p> 
				
				<h1 class="course_name">Film making, Direction and Script Writing </h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/FILM1.pdf">Read more</a>
    		    </p> 
				
				<h1 class="course_name">MARKETING, SALES PROMOTION AND RETAIL MANAGEMENT</h1>
				<p>
				
    		          <br>
    		        <a target="_blank" href="https://www.imcfts.com/MARKETING,%20SALES%20PROMOTION%20AND%20RETAIL%20MANAGEMENT.pdf">Read more</a>
    		    </p> 
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission Procedure</h1>
            <a class="admit_details_button" href="http://www.imcfts.com/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">ADMISSION OPEN FOR THE SESSION</h1>
                <p>
			<br><br>
                    <a target="_blank" href="http://www.imcfts.com/">Read more</a>
                </p>
            </div>
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1> Placements & Training </h1>
            <div class="place_block">
               <h1 class="course_name">Job Opportunity</h1>
    		    <p><br>
Job Opportunities waiting for you in the job market after completion of courses offered by IMCFTS
<br>
Corporate Sectors<br>
Advertising Agencies<br>
P.R. in Corporate Houses<br>
Banks<br>
Event Management Organizations<br>
Marketing divisions of MNC’s<br>
Retail-Chain Houses<br>
Promotion of brands by MNC’s<br>

    		        <br> <br>
    		        <a target="_blank" href="http://www.imcfts.com/job.php">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '19'";
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
					$sql1 = "SELECT * FROM colleges where id = '19'";
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