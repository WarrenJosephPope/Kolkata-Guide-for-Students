<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Heritage Institute of Technology</title>
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
		    <img class="bg" src="https://www.heritageit.edu/demo/img/visual_slide17_1.jpg"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://www.heritageit.edu/index.aspx">Heritage Institute of Technology</a>
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
		    <p>  Inspired by the noble cause of education and with a philanthropic zeal, a group of twenty-two like-minded industrialists of Kolkata established Kalyan Bharti Trust (KBT), a public charitable foundation, to promote and provide higher education in the country and in the State of West Bengal, in particular.

The vision of the founders of Kalyan Bharti Trust, ‘to prepare dynamic and caring citizens to meet the challenges of global society while retaining their traditional values’, has found its tangible reality in the provision of educational opportunities for a broad spectrum of learners - from the Primary to the Tertiary levels.

The six wings of the Trust - The Heritage School (THS), Heritage Institute of Technology (HIT-K) , The Heritage Academy (THA) , Heritage Business School (HBS) ,Heritage Law College (HLC) & The Heritage College (THC) together constitute an oasis of learning and have, over the years, carved a niche for themselves among academicians, faculty, students and society, in general.

A harmonious integration of valued traditions with modern outlook is the guiding principle behind the development of the academic environment that constitutes the basic philosophy of these six educational initiatives of Kalyan Bharti Trust.

Besides these educational initiatives, Kalyan Bharti Trust carries out its social responsibilities through SURYAKIRAN & KALYANI. ‘Suryakiran’ is engaged in spreading education to the disadvantaged children of the neighbourhood, while ‘Kalyani’, a charitable health-care centre, provides basic medical facilities to the poor & needy.

The Trust has plans to set up a Medical College, an Institute of Design and finally, a Private University in the near future.

Kalyan Bharti Trust shares a great Indian dream - a dream of a new tomorrow where technological advancement would go hand in hand with intellectual development in laying the corner stone of a spiritually evolved new- age Indian; one who would stand tall to face global challenges to etch India’s pride in the annals of international progress. <br><br>
                <span style="float:right;">Heritage Institute of Technology,<br>
                Chowbaga Road,<br>
    	        Anandapur, <br>
    	        East Kolkata Twp, <br>
    	        700107,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.heritageit.edu/index.aspx">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG Courses</li>
		            <li id="pg" onclick="pg();">PG Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Applied Electronics & Instrumentation Engineering</h1>
    		    <p>
    		         
VISION<br>

To develop skilled Electronics and Instrumentation Engineers by providing learning ambience for academics & research leading to global competence with high academic credentials and to make the department recognized by the industries and teaching community. <br>

 


MISSION<br>

To prepare the students competent in the field of sensors, measurement, instrumentation, control, automations, signal processing, communication and computational techniques, etc. which are essential for industries, research organizations or higher studies.

To imbibe curiosity to students through industry-department interaction programs, workshops, seminars leading to better awareness about latest technology, research trends and to provide the students educational pathways for optional career choices.

To motivate the students towards lifelong learning and towards betterment of society by imparting practical skills.

<br>
    		        <a target="_blank" href="https://www.heritageit.edu/AEIE.aspx">Read more</a>					
					
					</p>
    		   
			   <h1 class="course_name">Departmentof Biotechnology </h1>
    		    <p>
    		        
VISION<br>

To be a centre of excellence in technology education to create responsible citizens committed to development of the country and mankind <br>

MISSION<br>

To build a strong foundation of domain knowledge in the students through a comprehensive set of courses in biotechnology, engineering science and basic science. 
To impart understanding of the broader implications of the subject to fulfill societal needs, environmental concerns and economic constrains. 
To develop critical thinking, communication and professional skills in the students and to motivate them for lifelong learning.  <br>
    		        <a target="_blank" href="https://www.heritageit.edu/BT.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemical Engineering</h1>
    		    <p>
    		       
Vision: <br>
 
The vision of the Department of Chemical Engineering, Heritage Institute of Technology, is to be a nationally recognized centre of excellence for studies in chemical engineering program coupled with research strengths in separation processes, biochemical engineering, modelling and simulation, chemical reaction engineering and process safety.<br>
 
Mission:<br>
 
The mission of the Department of Chemical Engineering at Heritage Institute of Technology is to educate students to become highly qualified chemical engineers, conduct innovative research in chemical engineering and related interdisciplinary areas and provide service to the profession and to society.
 <br>
    		        <a target="_blank" href="https://www.heritageit.edu/ChemEngg.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Civil Engineering</h1>
    		    <p>
    		       Vision<br>

Developing motivated, skilled and highly competent Civil Engineers to excel in Education, Research, Entrepreneurship and Technological services, so that the department as well as the Institute will be recognized high in a global scenario.<br>

Mission<br>

To empower the students with broad and in-depth knowledge in Civil Engineering fundamentals and their applications in practical as well as professional fields to meet socio-economic challenges.

To educate the students in the latest technologies in Civil Engineering, imbibe in them human values, self-confidence, team work and independent thinking in solving diverse problems in the related field so that they can serve the society.

To achieve international recognition by developing professional Civil Engineers, offering continuing education and interacting with industries by emphasizing research and development.

<br>
    		        <a target="_blank" href="https://www.heritageit.edu/CE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science & Engineering</h1>
    		    <p>
    		       Vision<br>

To meet the challenges of 21st century and become a Centre of Excellence in the field of Computer Science & Engineering.<br>

Mission<br>

Undertake research and development works in leading technologies by forging alliances with research organization, govt. entities, industries & alumni.<br>
    		        <a target="_blank" href="https://www.heritageit.edu/CSE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electrical Engineering</h1>
    		    <p>
    		       
Programme Educational Objectives : B.Tech<br>

Graduates of B.Tech in Electrical Engineering program are expected to attain after about 5/7 years of graduation:<br>

1.      To establish themselves as successful professionals of the society.<br>

2.      To acquire the requisite knowledge for higher studies in India and abroad.<br>

3.      To acquire the qualities of team work, leadership and entrepreneurship.<br>

<br>
    		        <a target="_blank" href="https://www.heritageit.edu/EE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electronics & Communication Engineering</h1>
    		    <p>
    		       Vision<br>

The degree holders of the Department will carry the image of the institute and the department in India and the World through their commitment and success. They will prove themselves to be good, sincere and successful professionals and teachers. They will prove themselves as good, caring and responsible citizens.<br>

Mission<br>

Students with degrees from Electronics and Communication Engineering (ECE) Department of Heritage Institute of Technology will
Acquire specialized knowledge in the desired domains
Be able to analyze a problem in the given areas and be able to solve it in efficient manner.
Have confidence and knowledge to start new business activities and show enterpreneurship skills.
Develop passion for more studies and R & D.
Inherit leadership qualities for society and workplace.
<br>
    		        <a target="_blank" href="https://www.heritageit.edu/ECE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Information Technology</h1>
    		    <p>
    		       
Vision:<br>

To serve our nation by becoming a recognized hub of academic excellence focused on the career of the students and to develop workforce through partnership with reputed industries and academic communities.<br>

Mission:<br>

To provide quality technical education for the employment and work force development by partnering with industries in particular and the communities in general.
To strive for students’ achievement and success, preparing them for life and leadership.
To enable students, by developing their total personality, to meet the challenges of globalization.
<br>
    		        <a target="_blank" href="https://www.heritageit.edu/IT.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mechanical Engineering</h1>
    		    <p>
    		       
Vision
 <br>
To prepare innovative and dynamic mechanical engineers who will contribute to national and international development while retaining their professional ethics.<br>
 
Mission<br>
 
To prepare mechanical engineers with sound knowledge and ability to apply it.
To prepare an environment for free exchange of ideas between teachers and students.
To support and foster inquisitiveness in the mind of students and help them acquire the skill of lifelong learning.
To inculcate qualities of team work, leadership, professional ethics and safety practices amongst students.
<br>
    		        <a target="_blank" href="https://www.heritageit.edu/ME.aspx">Read more</a>
    		    </p>
    		    
            </div>
            
			<div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Department of Applied Electronics & Instrumentation Engineering</h1>
    		    <p>
    		       
VISION<br><br>

To develop skilled Electronics and Instrumentation Engineers by providing learning ambience for academics & research leading to global competence with high academic credentials and to make the department recognized by the industries and teaching community. 
<br>
 


MISSION<br>

To prepare the students competent in the field of sensors, measurement, instrumentation, control, automations, signal processing, communication and computational techniques, etc. which are essential for industries, research organizations or higher studies.

To imbibe curiosity to students through industry-department interaction programs, workshops, seminars leading to better awareness about latest technology, research trends and to provide the students educational pathways for optional career choices.

To motivate the students towards lifelong learning and towards betterment of society by imparting practical skills.

<br>
    		        <a target="_blank" href="https://www.heritageit.edu/AEIE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Biotechnology</h1>
    		    <p>
    		       
VISION<br>

To be a centre of excellence in technology education to create responsible citizens committed to development of the country and mankind <br>

MISSION<br>

To build a strong foundation of domain knowledge in the students through a comprehensive set of courses in biotechnology, engineering science and basic science. 
To impart understanding of the broader implications of the subject to fulfill societal needs, environmental concerns and economic constrains. 
To develop critical thinking, communication and professional skills in the students and to motivate them for lifelong learning. <br>
    		        <a target="_blank" href="https://www.heritageit.edu/BT.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science & Engineering</h1>
    		    <p>
    		       
Vision<br>

To meet the challenges of 21st century and become a Centre of Excellence in the field of Computer Science & Engineering.<br>

Mission<br>

Undertake research and development works in leading technologies by forging alliances with research organization, govt. entities, industries & alumni.<br>
    		        <a target="_blank" href="https://www.heritageit.edu/CSE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electronics & Communication Engineering</h1>
    		    <p>
    		       
Vision<br>

The degree holders of the Department will carry the image of the institute and the department in India and the World through their commitment and success. They will prove themselves to be good, sincere and successful professionals and teachers. They will prove themselves as good, caring and responsible citizens.<br>

Mission<br>

Students with degrees from Electronics and Communication Engineering (ECE) Department of Heritage Institute of Technology will
Acquire specialized knowledge in the desired domains
Be able to analyze a problem in the given areas and be able to solve it in efficient manner.
Have confidence and knowledge to start new business activities and show enterpreneurship skills.
Develop passion for more studies and R & D.
Inherit leadership qualities for society and workplace.
<br>
    		        <a target="_blank" href="https://www.heritageit.edu/ECE.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Application(MCA)</h1>
    		    <p>
    		       Vision :<br>

To create a pool of professionals with strong foundation of technology, and zeal to cater to the ever changing demands of the industry as well as global and societal needs.<br>

Mission :<br>

To create a state-of-the-art centre of education in Information Science and Technology.
To bridge the gap between theoretical foundation and real world needs.
To inculcate value-based, socially committed professionalism to the cause of overall development of students and society.<br>
    		        <a target="_blank" href="https://www.heritageit.edu/MCA1.aspx">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemical Engineering</h1>
    		    <p>
    		       Vision: <br>
 
The vision of the Department of Chemical Engineering, Heritage Institute of Technology, is to be a nationally recognized centre of excellence for studies in chemical engineering program coupled with research strengths in separation processes, biochemical engineering, modelling and simulation, chemical reaction engineering and process safety.<br>
 
Mission:<br>
 
The mission of the Department of Chemical Engineering at Heritage Institute of Technology is to educate students to become highly qualified chemical engineers, conduct innovative research in chemical engineering and related interdisciplinary areas and provide service to the profession and to society.
 
<br>
    		        <a target="_blank" href="https://www.heritageit.edu/ChemEngg.aspx">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://www.heritageit.edu/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">B.Tech</h1>
                <p>
				Eligibility & Admission Procedure:

Bachelor of Technology (B. Tech) (4-year duration)

H.S. (10+2) examination of the Council of Higher Secondary Education, West Bengal or equivalent
Qualified Joint Entrance Examination conducted by West Bengal Joint Entrance Examinations Board / JEE(Main) conducted by Central Board of Secondary Education and recommended by the WBJEE Board
80% seats to be filled from qualified WBJEE candidates, 10% from qualified JEE(Main) candidates and 10% under Management Quota for candidates having valid rank cards of WBJEE / JEE(Main).
An additional intake of 20% of the approved intake in the 2nd year (Lateral Entry) from Diploma holders and B.Sc degree holders through JELET conducted by WBJEE Board.<br>
                    <a target="_blank" href="https://www.heritageit.edu/BTech.aspx#">Read more</a>
                </p>
            </div>
			
			 <div class="admit_block">
                <h1 class="admit_name">M. Tech</h1>
                <p>
				

M.TECH

Admissions are made from candidates as per eligibility criteria prescribed by MAKAUT. All applicants for admission to M.Tech. program including those having valid GATE score should sit for a written test for which they have to fill in the application form and submit the same to MAKAUT along with prescribed fee. <br>
                    <a target="_blank" href="https://www.heritageit.edu/MTech.aspx">Read more</a>
                </p>
            </div>
			
			 <div class="admit_block">
                <h1 class="admit_name">MCA</h1>
                <p>MCA

Admissions are made from candidates who have passed Bachelor's Degree in any discipline under (10+2+3) system with Mathematics as one of the compulsory subjects at 10+2 level or at graduate level and having at least 50% marks on an average in the graduation level. Such candidates will have to be qualified in the Joint Entrance Examination (JECA) conducted by the West Bengal Joint Entrance Examination Board and recommended by the Board. There is a provision of up to 10% of seats to be filled up through Management Quota.<br>
                    <a target="_blank" href="https://www.heritageit.edu/MCA.aspx">Read more</a>
                </p>
            </div>
            
        </div>
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>
                    
Training & Placement Cell compliments the efforts of the members of faculty by organizing value-addition programmes and providing placement opportunities to students. It acts as one of the major interfaces with the corporate sector and helps in developing the industry-academia inter-relationship.

Training : The Cell organizes certain orientation programmes, grooming sessions, mock interview sessions for students of each stream. Besides, the Cell organizes various summer internship programmes for students to provide them with hands-on experience and introducing them to the professional environment.
                    <br>
                    <a target="_blank" href="https://www.heritageit.edu/Recruitment.aspx#">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '17'";
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
					$sql1 = "SELECT * FROM colleges where id = '17'";
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