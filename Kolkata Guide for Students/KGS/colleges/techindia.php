<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Techno International, New Town</title>
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
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1550133045phpcShrwg.png"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://tint.edu.in/">Techno International New Town</a>
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
		    <p> Techno International Newtown, formerly Known as Techno India College Of Technology(TICT), is an engineering college in West Bengal, India. It is the seventh and youngest college established by the Techno India Group. The college is located on 5 acres (20,000 m2) of land in the Megacity (New Town) area of Rajarhat, Kolkata. It is affiliated with Maulana Abul Kalam Azad University of Technology(formerly known as West Bengal University of Technology) and its courses are approved by All India Council of Technical Education.  <br><br>
		        <span style="float:right;">Techno International, New Town<br>
                Block - DG 1/1, Action Area 1<br>
		        New Town, Rajarhat,<br>
		        Kolkata - 700156<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://tint.edu.in/">Read more</a>
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
    		    <h1 class="course_name">B.Tech in Computer Science & Engineering</h1>
    		    <p>
    		        Welcome to the department of Computer Science & Engineering. This is one of the major departments of technology since the establishment of this institute in 2005. It comprises adequate members with exceptional skills and expertise in the allied areas of technologies. Every faculty is professionally trained. All the faculty members holds postgraduate degrees in Computer Science or Information Technology. Apart from academic duties, most of the faculty members are involved in research and development activities.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/computer-science-and-engineering.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">B.Tech in Information Technology</h1>
    		    <p>
    		        Information Technology has started since 2006 in this college i.e. 2006. There are four years in our IT branch with each year consisting of sixty students. Through it is unfortunate that this department is comparatively less popular in respect of admission. Still the record states that almost 75% of students have got employed in the IT sectors last year. It reinforces the fact that this grand success is a result of the joint endeavor of all the faculties and TPO cell. The students are groomed individually so that they can easily crack the interviews of the IT sectors. Notwithstanding the limited resource, we jointly venture out whole heartedly so that our department can prove to be the best one.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/information-technology.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">B.Tech in Electronics & Communication Engineering</h1>
    		    <p>
				The department of Electronics & Communication Engineering has been playing a vital role in producing industry level technologists & scientist of highest caliber to cater to the ever challenging needs of technical excellence in all areas of Electronic Engineering such as Integrated electronics and circuits, Tele-communications, Computer Networking, Control & Automation, Power systems & Power electronics ever since it was established in the year of 2005. In the academic year 2009, the 1st year B.Tech intake of the department was increased from 60 to 90.

The infrastructure and lab facilities are upgraded from time to time and provide adequate opportunities for students to learn and innovate. The department has distinguished faculty,all holding M.Tech degrees from renowned institutes of India. The faculty of the department has been constantly carrying out research on many cutting edge technologies and regularly publishes in renowned journals and other top international journals.

Beside academic excellence, students are also encouraged in several extra-curricular activities such as taking part in training and workshops, attending conference/symposium/seminar, arranging technical and cultural fest etc.
    		       <br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/electronics-and-comm-engg.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">B.Tech in Electrical Engineering</h1>
    		    <p>
    		        The department of Electrical Engineering came into existence on 8th August, 2005. At present, the department offers B.Tech in Electrical Engineering and M.Tech in Power System. The department is pursuing academic activities with the following goals and objectives:
• To impart quality education in concurrence with the world class upgraded technology
• State-of-the-art laboratories comparable to any eminent engineering colleges
• Continuous upliftment of indigenous and global technological knowledge
• Developing energy efficient management and environment
• Organizing industrial training in various leading industries
• Trying to reduce the gap in respect of quality engineer in between industry and academia along with continuous entrepreneurship development program
The department has a rich tradition of teaching and research and is widely recognized to be a pioneer in Electrical Engineering education in West Bengal. At present, this department consists of twelve faculty members and seven technical assistants. All the existing faculty members possess either post graduate or Ph.D degrees from renowned engineering universities. The faculty of the department is constantly striving towards excellence by pursuing research activities and publishing the same in renowned international journals.
The total number of students in the Electrical Engineering department is 330 as per AICTE norms. The research interests of the faculty members encompass a wide gamut of sub-disciplines of Electrical Engineering. Collaboration with faculty members from other disciplines, both within and outside the institute, is encouraged. The research activity of the department includes fundamental research, sponsored and consultancy projects, and is carried out with active participation of the students and faculty. The laboratory facilities and the infrastructure are regularly upgraded and are well supported by the institute and the industry.  The department has a sub library with sufficient number of books which help the faculty as well as the students for their research and daily activities.
<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/electrical-engineering.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">B.Tech in Applied Electronics & Instrumentation Engineering</h1>
    		    <p>
    		       The Department was established in 2006 with an annual intake of 60 students. The engineering education at the undergraduate level is of Four years B. Tech program which is AICTE-approved and affiliated to MAKAUT (formerly WBUT).
The Department of Applied Electronics & Instrumentation Engineering of Techno International New Town (formerly Techno India College of Technology) has been playing a vital role in producing capable technologists & researchers of highest caliber to cater the ever challenging needs of technical excellence in all areas of Electronics Engineering such as Integrated circuits and Embedded systems, Robotics,Tele-communications, Computer Networking, Control & Automation, Power systems & Power electronics.
The students are honed in their skills by professionally trained faculty members. All faculty members possess postgraduate degrees. Some of the faculty members are also pursuing PhD in their respective specialized academic field.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/applied-electronics-and-instrument-engg.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">B.Tech in Mechanical Engineering</h1>
    		    <p>
    		       The Mechanical Engineering Department is one of the oldest and broadest traditional engineering disciplines in the world. Over the years the field has continually evolved to incorporate advancements in technology, and mechanical engineers today are pursuing developments in such fields as composites, mechatronics, and nano-technology. The prosperity and growth of a developing nation like us, is correlated mostly with the expansion of industry and manufacturing activities. In conformity with this principle the Government of India launched Make in India initiative to encourage multi-national, as well as national companies to manufacture their products in India. In recent future all these leads to a requirement of large numbers of bright and competent mechanical engineers in our country.

In this perspective, Techno India College of Technology has started the Mechanical Engineering Department in the year of 2012. Over the years the department is growing by leaps and bounds in terms of infrastructure as well as quality education as per need of the ‘present day’ with the help of a group of extremely dedicated and knowledgeable faculty and technical staff members. The department possesses all the state of the art laboratory facilities as per the prescribed WBUT syllabus for demonstration to the students about proper application of theoretical knowledge in practical field. The Department also provides in-house and outside hands-on training to the students. In addition, the department provides ample scope for research; some of the faculty members of the department are even pursuing their PhD degrees at present. The department organized seminar, workshop and lectures by eminent professors from different reputed institute like JU, IIEST etc. and professionals from reputed industrial organizations in a regular interval. The students of the department are also being encouraged to participate and present papers in conferences. This helps to enhance their aspiration for higher studies. The department also extend support to the first year students of all branches in their theoretical as well as practical subjects.
Over this very short period of four years the department has tried to create its name as a very well managed and developed department amongst of all the private engineering colleges under MAKAUT in West Bengal.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/mechanical-engineering.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">B.Tech in Civil Engineering</h1>
    		    <p>
    		       Civil engineering happens to be the second-oldest engineering discipline after military engineering and is basically defined to distinguish military engineering from non military engineering. It basically deals with the design, construction, and maintenance of the physical and naturally built environment, including works like roads, bridges, canals, dams, and buildings. Civil engineering discipline encompasses a wide range of subjects ranging from structural engineering, geotechnical engineering, environmental engineering, transportation engineering to even coastal engineering and construction engineering. The vast applications of Civil engineering are not only confined to the public sector but also extends to private organizations ( both of national and international stature). The developing countries like us always need a huge number of civil engineers to cater their services in different areas.
In view of the above perception the Civil Engineering Department was established in the year 2013. Over the years, the department has grown from strength to strength by the induction of highly sincere, motivating faculty members along with highly skilled technical assistants. The department possesses all the state of the art laboratory facilities as per the prescribed WBUT Syllabus to inculcate in the students a proper blend of theoretical knowledge with practical application. The students of the department have been exposed to rigorous industrial trainings. In addition, the department provides an excellent atmosphere for research, some of the faculty members of the department are even pursuing their PhD degrees at present. The department organized seminar, workshop and lectures by eminent professors from different reputed institute like JU, IIEST etc. and professionals from reputed industrial organizations in a regular interval.  The students of the department are also being encouraged to participate and present papers in conferences. This helps to imbibe in them the urge for higher studies.
All in all, over these three years of journey, the department has tried to develop itself as being one of the sought out departments of all the private engineering colleges under MAKAUT in West Bengal.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/civil-engineering.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">BCA</h1>
    		    <p>
    		       Residing in the heart of the future IT hub of Kolkata, Techno India College of Technology exemplifies pride, honor and success at its acme. The journey of success began in the year 2005.In this short span it has blotted the IT field by producing a bevy of fine young engineers to dwell in the colossal multi nationals. Amongst all the excellent engineering streams harbored in this institution, one department that surfaces and re-surfaces above all others is the department of Bachelor of Computer Application.

Started in the year 2008, the department has been able controlled and guided by Mr.Subhodip Mukherjee, the head of the department. To be fair to his traits one concise comment that would suitably quote his attitude would be “laughter is the best medicine, they say”. The man with the motto “Education is the easiest way to prosperity and peaceful life”. A hearty smile, a helpful hand and loads of talent and experience has been the arsenal of this man who is rightly idolized by many aspiring to be good human beings and excellent corporate professionals. The faculty panel of this department is loaded with dedicated and well equipped faculties of the department of Master of Computer Application. They go a long way in guiding the students through all impediments.
The recently added feather to the cap is Dr. Bidyut Biman Sarkar, mentor of this department, having 15 years academic and 20 years industry experience in India and abroad. He is also experienced in guiding research scholars.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/bachelor-of-computer-application.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">BBA</h1>
    		    <p>
    		      Techno India College of Technology offers one of the best BBA programmes in the state. The department of BBA was started in the year 2005. The B.B.A. course of TICT is comparable to any world class business school. The enviable team of faculty members, state of the art classrooms, labs & libraries all make B.B.A program the dream program in Management studies.  The B.B.A programme is designed to bridge the gap between conceptual learning and practical application to inculcate professional and managerial expertise. The department currently has around 120 students. It is meant for students who are motivated, disciplined, ready and eager to move ahead in the business world. It is based on the premise that the true mark of learning is not just what you know but what you can do with what you know. Our priority is to provide students a top-notch curriculum where emerging business leaders can build on their professional experiences and successfully contribute to their firms. This innovative programme is facilitated by multi-media learning environment enriched by face-to-face faculty mentoring and coaching.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/bachelor-of-business-administration.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">Basic Science And Humanities</h1>
				<p>
				The Department of Basic Sciences and Humanities, at Techno International NewTown (TINT), believes in a holistic approach for the overall well-being of the newly admitted students. The ever-enthusiastic bunch of student-friendly faculties are the first port of contact for the 1st year B.Tech students. This makes a fantastic trustworthy bond between the students and faculties, which remains as a cherishable experience for both of them.

The department offers the basic undergraduate level courses in Mathematics, Physics, Chemistry and Humanities (English) to all the 1st year engineering streams. The department also provides support to the department-specific interdisciplinary science and humanities subjects for higher semesters.

The department of BSH is well enriched with the modern Physics Lab, Chemistry Lab, Numerical Lab and a Language Lab which take a pivotal role not only to embed the scientific aptitude in the students but also for the dissemination of their knowledge and understanding through effective communication in English. Following contemporary international approach, the guidance and supervision provided by the BSH department, equips the students with a very solid foundation knowledge of science and humanities which is not only enhance their technical understanding, but also very much useful for their higher level job portfolio.
				 <a target="_blank" href="https://tint.edu.in/departments-at-tict/basic-science-and-humanities.html">Read more</a>
				</p>
            </div>
			
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">MCA</h1>
    		    <p>
    		       Residing in the heart of the future IT hub of Kolkata, Techno India College of Technology exemplifies pride, honor and success at its acme. The journey of success began in the year 2005.In this short span it has blotted the IT field by producing a bevy of fine young engineers to dwell in the colossal multi nationals. Amongst all the excellent engineering streams harbored in this institution, one department that surfaces and re-surfaces above all others is the department of Master of Computer Application.

Started in the year 2006, the department has been able controlled and guided by Mr.Subhodip Mukherjee, the head of the department. To be fair to his traits one concise comment that would suitably quote his attitude would be “laughter is the best medicine, they say”. The man with the motto: “Education is the easiest way to prosperity and peaceful life”. A hearty smile, a helpful hand and loads of talent and experience has been the arsenal of this man who is rightly idolized by many aspiring to be good human beings and excellent corporate professionals. Alongside the dedicated and well equipped faculty panel goes a long way in guiding the students through all impediments.
The recently added feather to the cap is Dr. Bidyut Biman Sarkar, mentor of this department, having 15 years academic and 20 years industry experience in India and abroad. He is also experienced in guiding research scholars.<br>
    		        <a target="_blank" href="https://tint.edu.in/departments-at-tict/master-of-computer-application.html">Read more</a>
    		    </p>
    		    <h1 class="course_name">MTech in Electrical Engineering</h1>
    		    <p>
    		      Program Duration: 2 years <br>
    		        <a target="_blank" href="https://tint.edu.in/academics.html">Read more</a>
    		    </p>
    		    
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://tint.edu.in/admission-at-tict.html">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission</h1>
                <p>Documents Required at the time of Admission:<br>

1.Original and one photocopy Admit card of respective Joint Entrance Examination (WBJEE/JEE MAIN/JECA/JELET/PGET/GATE).<br>
2.Original Allotment Letter received from respective Reporting Centre issued by WBJEE Board with Photocopy (An extra copy of this letter should be retained by the candidate for future use).<br>
3.Rank Card of respective Joint Entrance Examination.<br>
4.Duly attested photocopies of 10th admit card/ certificate of respective Board as proof of age along with original for verification (two copies).<br>
5.Duly attested photocopies of 10th & 12th mark sheets along with original for verification (Two copies).<br>
6.Duly attested photocopies of Diploma marksheet (for lateral Entry Students) along with original for verification (two copies).<br>
7.Duly attested photocopies of Graduation marksheet (for MCA & M. Tech students) along with original for verification (two copies).<br>
8.Duly attested school leaving/character certificate from the Head of the Institute last attended (one copy)<br>
9.Five stamp size (2.5 cm X 2 cm) and two passport size color photograph.<br>
                    
                </p>
            </div>
            
        </div>
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>The primary goal of Training and Placement Cell at Techno International New Town (Formerly known as Techno India College of Technology) is to provide personal and career-related support to its students. The College Placement Cell makes every effort to bring in as many Companies from varied industries (Specially Software and Core Engineering) as possible to match the expectations and aspirations of the students, although, Placement is depending on the requirement of the Market.
The cell is offering market related information, advice, guidance and support to young job-seekers. This idea will enable the students to effectively prepare for the further challenges in their life as well as in their upcoming careers.
The effectiveness of the training and grooming program at Techno India College of Technology is evident from its remarkable placement record. Techno India College of Technology has been achieving consistent placement record since 2009 to Current year.

Almost all the deserving students get placed even before they complete their course. It is so because of its quality academics, industry exposure and rigorous training for placement by the experts from Industries and academia.

Techno India College of Technology has adopted an academic practice that provides for enhanced learning opportunities through the co-operation with various industries, business houses, and counterpart institutions. It is pride that our graduates are highly rated by employers from IT Industry as well Core Industry.<br>
                    <a target="_blank" href="https://tint.edu.in/placement-at-tict.html">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '44'";
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
					$sql1 = "SELECT * FROM colleges where id = '44'";
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
		