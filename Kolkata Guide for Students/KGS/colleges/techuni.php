<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Techno India University</title>
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
		    <img class="bg" src="https://upload.wikimedia.org/wikipedia/commons/4/47/Techno_India_University_-_EM_4_Sector_V_-_Salt_Lake_City_-_Kolkata_2017-04-29_1689.JPG"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://www.technoindiauniversity.ac.in/">Techno India University</a>
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
		    <p>History<br>		
			Techno India University, West Bengal was conceptualized under the aegis of the Techno India Group and was established by virtue of the WB State Legislature Act in the year 2012. It has been one of the dream projects of the Chief Minister of West Bengal, Smt Mamata Banerjee. Standing tall as the first private university of West Bengal, Techno India University, West Bengal is an institute of world-wide repute in the field of education, research and technology. Ever since its inception, Techno India University, West Bengal’s undergraduate, postgraduate and doctoral candidates have shown remarkable performances in their respective fields on account of the high quality education imparted by our distinguished professors and mentors. History bears testimony to the fact that Techno India University, West Bengal has earned its well-deserved respect and recognition in the world of education, research and technology primarily due to its strong emphasis on the holistic grooming and development of the students.

			<br><br>
	    	    <span style="float:right;">Techno India University<br>
              2nd Floor EM-4,<br>
				Sector-V, Salt Lake, Kolkata - 700091<br>
				West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/index3.php?id=3">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Academics</li>
				</ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">School Of Engineering</h1>
				<p>The Department of Engineering at Techno India University, West Bengal is a conglomeration of multiple disciplines with separate departments for Computer Science and Engineering, Electronics and Communication Engineering, Electrical Engineering, Information Technology, Civil Engineering, Mechanical Engineering and Chemical Engineering. All departments are facilitated by eminent faculty members from academia and industry along with modern classrooms and state-of-the-art laboratories for the best possible preparation of theoretical and practical lessons of students. Students can actively involve themselves in workshops, seminars and interdisciplinary research. They also enjoy an array of facilities like Internships, industrial training and placement which speaks volumes about Techno India University's dedication towards its long term vision: building a better tomorrow.
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Engineering/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Science</h1>
				<p>The Department of Science at Techno India University, West Bengal is a conglomeration of multiple disciplines with separate departments for Physics, Chemistry, Mathematics, Economics, Biotechnology, Microbiology, Earth Science, Media Science and Data Science. Each and every department is facilitated by eminent faculty members from academia and industry along with modern classrooms and state-of-the-art laboratories for the best possible preparation of theoretical and practical lessons of students.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Science/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Computer Application</h1>
				<p>The concepts of computer science are applicable to many aspects of our lives, from investigations in the scientific and medical fields to digital creations in the fields of art and music. The Computer Application Department at Techno India University introduces students to the central ideas of computer science and explores technologies of computing and their impact on society and culture. Students are introduced to web page designing, data examination and manipulation through the efficient use of spreadsheets, collaborative on-line tools, and fundamental computer programming concepts. Students develop computational skills and are engaged in the creative aspects of problem solving through programming. Students investigate the global impacts and social implications of computing innovations, data, and the Internet through discussions, projects, and writing. With a team of devoted, knowledgeable and competent professors, the department has experienced tremendous growth in the academic and research fields. Chief research areas comprise of Image Processing, Multimedia Mining, Evolutionary Computing, Network Security and Wireless Networks. The setting up of research laboratories and R & D centers all over the country and even abroad has enhanced the pride and prestige of the department not only in india but also overseas. The department regularly interacts with software companies to keep its syllabus at par with industry standards which in turn has helped make students well prepared for the job market.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/ComputerApplication/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Management</h1>
				<p>In the era of globalization, disruptive technological change, School of Management, Techno India University, West Bengal is nurturing the norms to win and discover new dimensions of doing things successfully. The courses under School of Management has the core objective of acclimatizing the young aspirants to a career in various secondary and tertiary capacities of manufacturing and service providing organizations. The School of Management is a stalwart organization nurturing knowledge, skills and talent in the arena of business development, corporate governance, research, leadership etc. Our main purpose is to encourage the creation of ideas that are responsible for an ethical, progressive, conscious and prosperous society, which is the hallmark of true advancement and civilization. We create and nurture leaders and managers for tomorrow. Stop managing your time, start managing your career professionally.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Management/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Architecture</h1>
				<p>The Architecture major establishes an intellectual context for the students to interpret the relation of form, space, program, materials and media to human life and thought. This curriculum allows students to participate and contribute towards documentation, research, design and development of the built environment- offering a creative combination of science, arts and engineering, architecture emerges as one among many forms of cultural production aided through state-of-theart technology. The major stresses on the necessity of learning and understanding operational and research capacities of interdisciplinary tools, methods, terms and critiques vital for understanding relationship between society and environment in appropriate sustainable development. The program offers studio, lecture and seminars (indoor and outdoor) thereby training students in research, design, management and development of future visions complementing the capacities of liberal arts and scientific expansive thinking towards re-imagining natural and man-made environments. The program essentially forms the foundation for further specialization in urban planning, urban design, transportation planning, regional planning, environmental planning, construction management, structural design, heritage conservation and many other important discourses towards professional capacity building in construction, planning and design firms and authorities in the development sector.

    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/barch/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Pharmacy</h1>
				<p>The School of Pharmacy was established with a view to promote center of excellence in pharmaceutical education and to prepare young learners to meet the global challenges of pharmaceutical industries, academia, research and development, marketing, clinical as well as in community pharmacy. The School of Pharmacy at present provides diploma and degree level program and both the programs are approved by Pharmacy Council of India (PCI), New Delhi. Pharmacists are considered one of the most visible and one of the most accessible health care professionals in the world. Every day, lacs of people walk into drug stores and consult with pharmacists for assistance and take advice for their health care needs. It is an incredibly exciting time to pursue a career in pharmacy and students graduating from Techno India University have a wide-range of career opportunities available to them. We invite you to join us on this exciting journey.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Pharmacy/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Nursing</h1>
				<p>Nursing is a basic course to introduce students to all aspects of general healthcare and unique proficiency. Nursing serves mankind with knowledge, expertise and its holistic nature. Techno India University, West Bengal has introduced this discipline to support and actively encourage aspirants to motivate them towards a noble and challenging career in active service towards the well- being of mankind.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Nursing/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Humanities</h1>
				<p>"Today and always, there will be an obligation to pass on to the new generation the tradition of liberal scholarship in the humanities and to bring the understanding of things and human actions to everyone". Frank Macfarlane Burnet
As a group of academic disciplines that study aspects of human society and culture, Humanities is more frequently contrasted with natural, and sometimes social, sciences as well as professional training. However, because, since ancient times, human beings have tried to understand the world through sciences as well as humanities, one can argue that humanities and sciences are complementary to one another, in fact, two sides of the same coin. Humanities uses methods that are primarily speculative and have a significant narrative or dialogic and historical element. These modes of expression have become some of the subjects that traditionally fall under the humanities and include disciplines such as ancient and modern languages, literature, philosophy, history, psychology and other allied subjects.
	
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Humanities/index.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School Of Law</h1>
				<p>Law is one of the few professions which are regarded as noble profession in our society . It is the upholder and protector of society and aims to serve the stratum of the same. But in today’s world law is not only considered as noble profession but as a highly paid and most demanding job provided having the right skill set. The rise of corporate sector makes the demand of law vis-à-vis corporate lawyers significantly high.

Gone are the days when law graduates would only confine themselves in the legal practice, judgeship or academics which are very limited in numbers but these days an overwhelming majority of the top students in India’s best legal institute work in corporate sector. Among many other courses in Law , Techno India offers BBA(Law) which is specially curated for the students who aspire to join the Corporate world as corporate lawyer.

The key features which made the Law Dept of Techno India as one of the best Institute :
a) State of Art infrastructure for Law education and Research
b) Courses are designed of having interface between law /management/finance /science.
c) Guidance and training on good communication , analytical , presentation , people skill which nurtures the creativity of students and it is a basic foundation skill for any law profession.
d) Courses are divided between Class room as well as practical training of law education.
e) Guidance on internship and placement .
f) Guidance to participate in debate and moot court competition.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Law/index.php">Read more</a>
    		    </p>
				<h1 class="course_name">School Of Commerce</h1>
				<p>The Commerce department at Techno India University, West Bengal aims to teach students in different domains of Commerce, Finance and Accounting with a view to enable them to meet the emerging challenges of trade, industry and business in the country and abroad as well. It also provides them with major understanding of both national and international knowledge of commerce related studies. The Department is committed to prepare the students for working on executive and managerial positions with confidence to apply theoretical and practical knowledge for the development of commercial ventures. It also helps them to develop skills for teaching and research in Commerce.
				
    		          <br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/Commerce/index.php">Read more</a>
    		    </p>	
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Online Application</h1>
                <p>Thank you for choosing Techno India University, as your career pathway.<br>
			By choosing a program below and thereafter proceeding to the next page of the application process, you will be deemed to have accepted our terms and conditions, including receiving notifications and alerts on your email ID and also on your (and your parents’ / guardians’) mobile phones even if they are listed under the “Do Not Disturb” category. Please proceed to select a program and progress to the next page only if you accept this.
			<br><br>
                    <a target="_blank" href="https://technoindiauniversity.ac.in/apply.php">Read more</a>
                </p>
            </div>
			
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1> Placement</h1>
            <div class="place_block">
               <h1 class="course_name">Placement Team</h1>
				<p>Techno India University, West Bengal promises prosperous professional careers for students to each and every academic stream, catering to the holistic grooming of students prior to exposing them to a strict campus drive ambience. A centralized placement cell aids in providing valuable insights regarding the campus recruitment processes and strategies which has greatly boosted the placement record of the university. Techno India University, West Bengal welcomes innumerable renowned corporate and academic institutes for placement drives. Techno India University, West Bengal presents a suitable platform for interaction between final year students and MNCs and other recruiting organizations that offer internships to them for understanding the real life of the corporate tasks which in turn help them in deciding their future careers. The recruiters assess the true capabilities of the selected handful by monitoring their performances in real world tasks.<br>
    		        <a target="_blank" href="https://www.technoindiauniversity.ac.in/index3.php?id=17">Read more</a>
    		    </p>
				
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '45'";
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
					$sql1 = "SELECT * FROM colleges where id = '45'";
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