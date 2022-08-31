<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Brainware University</title>
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
		    <img class="bg" src="https://www.brainwareuniversity.ac.in/images/slider1.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/3/36/Brainware_University.svg/1200px-Brainware_University.svg.png"></img>
		     <span id="college_name"><a target="_blank" href="https://www.brainwareuniversity.ac.in/">Brainware University</a>
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
			Excelling in 30 years of quality education, undisputed
track record and brand value<br>

Brainware University is the brainchild of Mr. Phalguni Mookhopadhayay’s prolonged effort. Built on a lush and expansive 9-acre campus at Kazipara Barasat, the university is at a stone’s throw from the nearest bus stop at Chaapadali. Brainware University, formed by a Gazette Notification of the Govt. of West Bengal (The West Bengal Act XXXI of 2015 for Brainware University) is one of the leading UGC approved private Universities in West Bengal, providing 50+ programs in graduate, postgraduate and Ph.D. subjects at affordable rates.

It is a University offering specialized programs in Engineering, Biotechnology & Biosciences, Management & Commerce, Law, Pharmacy & Allied Health Sciences, Computational & Applied Sciences, Communication, Multimedia & Media Science, English as well as Diploma courses in an array of subjects. The University also provides a student-centralized service in terms of accommodation, social space, and other relevant facilities. The university houses more than 180 faculty members. Our esteemed teaching faculty comprises renowned research scholars and academicians of the leading institutes across India.
			<br><br>
	    	    <span style="float:right;">Brainware University<br>
                398, Ramkrishnapur Road,<br>
		        Barasat, Near Jagadighata Market<br>
				Kolkata-700125<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/overview.php">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Programs</li>
		            <li id="pg" onclick="pg();">PhD</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">DEPT. OF COMPUTER SCIENCE & ENGINEERING </h1>
				<p>VISION<br>
Department of Computer Science & Engineering aims to create a promising environment for producing skillful professionals by making students aware of the modern industrial need. The Department will also encourage fundamental and innovative research in the field of Computer Science & Engineering.<br>
<br>
MISSION<br>
The Department provides adequate guidance to students on emerging trends in the field of Computer Science & Engineering.
It prepares students for flexible career paths with qualitative advancement in computing.
It imparts moral and ethical values, along with interpersonal skills to the students and faculty members for their professional and personal growth.
It provides various opportunities for students as well as faculty members to excel in every field by its collaboration with international bodies.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/btechcomputerscience.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPT. OF ELECTRONICS AND COMMUNICATION ENG</h1>
				<p>VISION<br>
The Department of Electronics and Communication Engineering aims to be one of the leading departments in the global education by promoting collaborative and multidisciplinary activities. It aspires to bridge the gap between the theoretical understanding and practical applications of electronics and communication technology. It wants to focus on the research and development for the benefit of mankind and an advanced society.
<br>
MISSION<br>
The department enables students to solve complex scientific and technological problems and face the challenges in the fields of electronics and communication.
It promotes research culture by infusing scientific spirit and develop systematic and analytical thinking among the students.
It nurtures the spirit of innovation and creativity among faculty and students through the use of contemporary and upgraded technology.
It expands collaborations and partnerships with industries and other organizations to expose students to new job opportunities.			
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/btechelectronicseng.php">Read more</a>
    		    </p>
					
				
				<h1 class="course_name">DEPT. OF ELECTRICAL ENGINEERING</h1>
				<p>VISION<br>
The vision of the Department of Electrical Engineering is to be recognized globally for excellence in its skill-based educational programs which will guide students to be successful professionals and to pioneer socio-economic growth. It will also provide the scope of research and higher studies in full compliance to the international standards.
<br>
MISSION<br>
The Department provides quality and effective skills in the field of electrical engineering and collaborates with industry to give students a hands-on experience.
Keeping in mind the ever changing needs of the industry, the department trains students with modern and updated technological appliances.
It promotes research in various new and interdisciplinary fields and offers students a holistic and in-depth understanding of the subject. 
It motivates students and faculty members to utilize their knowledge of electrical engineering to build up a modern and advanced society.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/btechelectricaleng.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPT. OF MECHANICAL ENGINEERING</h1>
				<p>VISION<br>
The Department of Mechanical Engineering aims to provide an overall growth of students and faculty members by maintaining the perfect balance between academic excellence and professional competence. It wants to be recognized as a propagator of high quality research and education in the field of Mechanical Engineering that enables students to meet the needs of contemporary society.
<br>
MISSION<br>
The department bestows education to students to enhance their ability and improve their aptitudes to make them industry-friendly successful mechanical engineers.
It offers scopes for higher education by promoting researches among students and faculty members in diverse fields of mechanical engineering.
It provides students a world-class academic environment by the use of cutting-edge and modernized applications and technologies.
It encourages students to engage in activities related to socio-economic development of the country by using their engineering skills and knowledge.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/btechmechanicaleng.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF CIVIL ENGINEERING</h1>
				<p>Industry Scenario<br>
				India is a developing country, there are still many places where people are not getting good quality of water to drink, nor do they have electricity, nor do they have safer houses, people need roads to commute, mega cities need better transportation solutions, people need better standard of living.

There is much scope for civil engineers to gift better tomorrow.
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/btechcivileng.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF MEDIA SCIENCE AND JOURNALISM</h1>
				<p>VISION<br>
When the world is changing every day, the communication technology has been changing breathlessly along with it. Communication wise, we are in exciting times. Also, the projection of growth for the overall Media industry size in 2021 is expected to reach INR 2.35 trillion rupees. So, the Department of Journalism, Mass Communication & Media Science aims to create creative, skillful, promising, wise professionals for tomorrow’s media industry.
<br>
MISSION<br>
The course is based on today’s media industry.
The focus of the course will be more on Practical & Lab works.
Best faculty, who combines industry experience with academic rigour.
Opportunity to learn media related softwares and other personality skills.
Internships in media houses.
Producing Best Media professionals as per the industry needs
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/masscomm-vision-mission.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF COMPUTATIONAL SCIENCE</h1>
				<p>VISION<br>
Department of Computational Science will build up expertise amongst students in processing information and comprehension, by furnishing most recent improvements in Computer Applications. It will contribute not just in the advancement of programming, tools, architectural and networking paradigms but also in its applications to create a healthy and modern society.
<br>
MISSION<br>
The Department offers a wide variety of courses according to industry needs.
It provides exposure of latest tools and technologies in the area of computing.
It instills amongst the students and faculty members the desire to contribute for and develop a technologically advanced society.
It promotes research based activities in the emerging areas of technology convergence.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/Department-of-Computational-Science-vissionmission.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF BASIC AND APPLIED SCIENCES</h1>
				<p>VISION<br>
The Department of Basic and Applied Sciences will guide students to grow skills to solve problems in a more logical and methodical way. It will facilitate students with analytical and scientific knowledge to contribute to the progression of the society. It will provide fundamental education through promoting research in diverse and interdisciplinary areas.
<br>
MISSION<br>
The Department develops solutions for the scientific challenges through value-based science education.
It leads the students through the path of higher education by conducting fundamental and innovative research in different fields of basic and applied sciences.
It nurture students into scientifically competent professionals in the usage of modern tools.
It fosters in students, a spirit of inquiry and collaboration to make them ready for careers in teaching, research and corporate world.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/appliedscience.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF PHARMACEUTICAL TECHNOLOGY</h1>
				<p>VISION<br>
The Department of Pharmaceutical Technology aspires to be a globally recognized centre for drug development and health care. The Department will operate in close liaison with the pharmaceutical industries worldwide and facilitate students with multiple job opportunities. It also motivates students to conduct socially relevant research and contribute for the betterment of the society.
<br>
MISSION<br>
The department pioneers interdisciplinary approaches to address the diverse needs of the people.
It provides quality education by contemporary and modernized technologies.
It assists students to acquire certain entrepreneurship skills to set up businesses in the field of pharmacy and help the country to grow economically.
It also enables the students to develop a keen interest in pharmaceutical research and higher studies.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/pharm.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPT. OF ALLIED HEALTH AND SCIENCES</h1>
				<p>VISION<br>
To emerge as Centre of Excellence & promote innovational leadership in the health sciences and educational research.
To provide skilled manpower and technological expertise in vast area of health care delivery system.
To impart quality assurance in medical plethora by amalgamating teaching, research and technology through translucent system of good community.
To ensure improved patient safety management through reasonable, eco-friendly services to health care community.
<br>
MISSION<br>
The department of Allied health sciences will open a new avenue/horizon to uphold, miniaturize and mount intellectual, philosophical, academic and sterile thoughts. Also it will facilitate prospects in various healthcare providers by exchanging versatile informations worldwide. The accumulation of speculative thoughts and their novel implementation will simultaneously assist to achieve the graduates who can assure the prosperity of human beings through several medical technological advances.
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/healthscience.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPT. OF MANAGEMENT</h1>
				<p>VISION<br>
The Department of Management and Commerce will promote an all-encompassing development in every sphere of management and commerce education and research at par with national and international standards nurturing responsible leaders capable of substantially improving business performance and the world we live in.
<br>
MISSION<br>
The department aims to improve the awareness and knowledge of the students about functioning of local and global business environment and society.
It develops competencies in quantitative and qualitative techniques among graduates for problem solving in functional areas of management and commerce.
It develops responsiveness to contextual social issues and exploring solutions, understanding leadership roles at various levels of the organization and leading teams.
It determines a global outlook through interdisciplinary study and research with the ability to identify aspects of cross cultural understanding.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/management.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPT. OF COMMERCE</h1>
				<p>VISION<br>
The Department of Management and Commerce will promote an all-encompassing development in every sphere of management and commerce education and research at par with national and international standards nurturing responsible leaders capable of substantially improving business performance and the world we live in.
<br>
MISSION<br>
The department aims to improve the awareness and knowledge of the students about functioning of local and global business environment and society.
It develops competencies in quantitative and qualitative techniques among graduates for problem solving in functional areas of management and commerce.
It develops responsiveness to contextual social issues and exploring solutions, understanding leadership roles at various levels of the organization and leading teams.
It determines a global outlook through interdisciplinary study and research with the ability to identify aspects of cross cultural understanding.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/commerce.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF BIOTECHNOLOGY AND BIOSCIENCES</h1>
				<p>VISION<br>
Department of biotechnology, Brainware University will be the Centre of Excellence in the field of biotechnology equipped to create graduates who endeavor for the welfare of mankind followed by touching the top most position in biotechnological innovations in Asia.
<br>
MISSION<br>
Department of Biotechnology works for humankind through innovative & quality education, pioneering research and interdisciplinary practice development for lifelong professional growth and opportunity in a wide range of careers.
To create an awareness outreach towards socio-ethical implications of potentials of biotechnological innovations.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/bscbiotechnology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF MULTIMEDIA</h1>
				<p>VISION & MISSION<br>

The Department provides a platform where the students get ample opportunities to nurture their creativity and imagination.
It offers students hands-on experience in the use of industry-friendly and modernized software and devices.
It makes students ready for the ever-growing media market.
It enables students to develop analytical and inventive skills for research and higher studies in the field of multimedia.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/multimedia.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF ENGLISH AND LITERARY STUDIES</h1>
				<p>VISION<br>
The Department of English and Literary Studies aims to assist the students of liberal education by developing a critical understanding of literature and culture. The department will endorse research based activities and encourage students to pursue higher education in diverse areas. It will also make the students well-equipped with the knowledge of language, communication and soft skills so that they can excel in their professional space.
<br>
MISSION<br>
The Department endorses an overall growth of students and faculty members by promoting research in interdisciplinary and socially relevant areas.
It helps students to see themselves as professionals, with expertise in communication and soft skills and abilities valuable in the corporate as well as in the education sector.
It helps students to develop a thorough and comprehensive understanding of society and history, the cultural and literary diversities of the world.
It balances the needs of general education by incorporating global perspectives in the curriculum and offering courses on language, communication and culture.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/english.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPT. OF LAW</h1>
				<p>VISION<br>
To achieve excellence in every field of legal education and application.
To make students technically, professionally and ethically strong to lead the Nation.
To foster academic-industry/professional synergies and to forge strategic alliances in judicial matters for greater upward mobility..
To achieve success in imparting knowledge of judicial sciences in practice, education and justice.
<br>
MISSION<br>
Create world class facilities and ambience for advance level of teaching and practical training in legal education.
Develop students as global citizens with conscience, commitment and dedication.
Grow a system of continuous learning by providing various moot court training, legal aid camps, legal aid clinics, internships in corporate houses, lawyer’s chambers, industrial visits, free coaching for judicial service, free coaching for AIBE examination.
Groom the students in such a manner so that they can cater to the needs of the modern globalized world and to suggest for law reforms.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/university/law.php">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">DEPT. OF CYBER SCIENCE & TECHNOLOGY</h1>
				<p>VISION
<br>
We provide a holistic education to nurture our students into passionate innovators who will use their knowledge of Cyber Science & Technology to think beyond conventional means, take risks and experiment in order to overcome challenges, initiate change and make a positive difference to human lives. Our students will discover themselves, have a sense of purpose and be distinctive in the way that they demonstrate 21st century skills and competencies in case of Cyber Security is concerned.
<br>
MISSION<br>
Brainware University has training tailored to your needs if you are new to networking.
Through our unique applied learning approach and innovative use of Networking & Cyber Security technology, Brainware University seeks to connect students’ hands, heads and hearts so that they will be engaged learners in the present, and empathetic digital citizens and leaders in the community in the years ahead.
Life-long learners of Character who are imbued with intellectual curiosity and humility, and intrinsic motivation to continue to learn and grow, whilst squarely anchored in ethical values.
Promote the adoption of information security standards, processes, methods, best practices and tools.
				
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/cyberscience-vission-mission.php">Read more</a>
    		    </p>
				
				
			
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
              	<h1 class="course_name">PhD Programme</h1>
				<p>PhD<br>
				Brainware University is proud to announce that we are now providing PhD programmes in Humanities and Arts, Engineering, Science and Management and Commerce. With over 30 years of experience in the education sector, these programmes are going to be mapped in the best way possible to make sure that the scholars receive all kinds of support and exposure from the University. Furthering education and providing the same at an affordable fee has always been our forte and we have maintained the same with the doctoral programmes. We invite bright minds to start off with this journey with us!
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/phdprogram.php">Read more</a>
    		    </p>
						  
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">ADMISSION PROCEDURE</h1>
                <p>
				Documents to be submitted for admission in UG Session : 2020-2021<br>
			<br>

                    <a target="_blank" href="https://www.brainwareuniversity.ac.in/admission_procedure.php">Read more</a>
                </p>
            </div>
			
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1>PLACEMENT OVERVIEW</h1>
            <div class="place_block">
               <h1 class="course_name"></h1>
    		    <p>Building Careers, Setting New Goals!<br>
At Brainware University we are committed to the fostering of deeper engagement with the industry to create a synergetic learning environment that benefits all stakeholders –
<br>
The students, who discover exciting windows to broaden both their perspective and skills;
The Corporate, who gets to identify and cultivate a captive talent pool;
The University, whose mission is to be a solid and resolute bridge between the industry and human talent.
Our Training & Placement initiatives are deeply entrenched in the philosophy of holistic development of human talent. The university focuses towards persistent and multidimensional training of students in-line with the industry expectations which has led to an increase in the number of placement offers and salary packages.
<br>
BWU does not restrict its students to one or two companies. Hence, our students have grabbed multiple offers. Apart from core companies’ students are also allowed to sit in interdisciplinary branch selection process.
    		          <br>
    		        <a target="_blank" href="https://www.brainwareuniversity.ac.in/placement-overview.php">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '9'";
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
					$sql1 = "SELECT * FROM colleges where id = '9'";
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