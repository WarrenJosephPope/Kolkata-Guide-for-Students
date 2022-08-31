<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Presidency University, Kolkata</title>
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
		    <img class="bg" src="https://live.staticflickr.com/2080/2269394073_02cab628bc_b.jpg"></img>
		     <img class="logo" src="data:image/png;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://presiuniv.ac.in/web/index.php">Presidency University,Kolkata</a>
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
		    <p> Presidency University has a unique place in history. It was one of the first institutes of Western-type higher education in Asia. In 1817, a group of enlightened Indians and Englishmen set up the Hindoo College.This was taken over the British Government in 1855 as the College of the Bengal Presidency, and placed in 1857 under the newly founded Calcutta University.

Over the next hundred years and more, Presidency College was Bengal’s pre-eminent centre of higher learning. Although a Constituent College of Calcutta University, it preserved a tradition of research matched by few universities in India. This gave a unique dimension to its undergraduate teaching.

The formal establishment of Presidency University in July 2010 allows it to refashion its venerable traditions and continuing strengths into a leading institution of the future.<br><br>
	    	    <span style="float:right;">Presidency University, Kolkata <br>
                286, 1, College St, Calcutta University,<br>
		        College Square, Kolkata, 700073<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://presiuniv.ac.in/web/introduction.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Departments</li>
		            <li id="phd" onclick="phd();">PhD Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Bengali</h1>
    		    <p>
    		           Bengali as a subject was taught from the very beginning of this Institution, the then Hindoo College, since 1817. Although Bengali was excluded from the syllabi of F.A & B.A courses sometime in 2nd half of 19th century, it was reintroduced early in the 20th century when a combined department of Bengali, Sanskrit and Hindi was created.Prof. Shibaprasad Bhattacharya, Prof. Sasanka Shekhar Bagchi and Prof. Ashoke Nath Bhattacharya Shastri were some of the eminent teachers of Bengali at that time.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/bengali.php">Read more</a>
    		    </p>
    		    
				 <h1 class="course_name">Life Sciences</h1>
    		    <p>
    		           The ‘Department of Life Sciences (DLS)’, one of the youngest departments in the history of Presidency University came into existence in 2013 as ‘Department of Biological Sciences (DBS)’, and then renamed as ‘Department of Life Sciences (DLS)’ in 2016. Though still in the fledgling years of its inception, DLS has already started paving roads for an entirely revolutionized way of teaching science. With a research centric curriculum, it has modernized the way students approach life sciences, both at the undergraduate and postgraduate level. The strength of the department lies in its dynamic, research- focused faculty, many of whom have left illustrious research careers to come and work at DLS. They bring with them the bright ideas and the enthusiasm of the young, and tirelessly encourage the students to strive for excellence.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/biosciences.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Chemistry</h1>
    		    <p>
    		           The history of the Department of Chemistry & Biochemistry at Presidency University (erstwhile Presidency College) dates back to mid-nineteenth century. Over the years, a number of renowned and illustrious figures have been associated with the department as faculty and as students including Sir Alexander Pedler, Acharya Prafulla Chandra Ray, Upendranath Brahmachari, Priyada Ranjan Ray, Pulin Behari Sarkar, Jogendra Chandra Bardhan, Suresh Chandra Sengupta, Jnanendra Nath Mukherjee, Pratul Chandra Rakshit and Mihir Chowdhury. The department has, to its credit, a long list of prestigious Bhatnagar awardees: Mihir Chaudhury, Amarnath Bhaduri, Debashis Mukherjee, Bhabatarak Bhattacharya, Biman Bagchi, Deb Sankar Roy, Kankan Bhattacharya, Siddhartha, Roy, Sumit Bhaduri, Uday Maitra and Tushar Chakraborty.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/chemistry.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Economics</h1>
    		    <p>
    		           The Economics Department was established in 1908 under the name of Department of Political Economy and Political Philosophy. The name was changed in 1932 to the Department of Economics and Political Science. In 1960, the Department was bifurcated to form the Departments of Economics and Political Science, respectively. In 1965, a Research Wing was established by the Government of West Bengal. When the Department was selected as a Special Centre of Excellence in 1972 by the University Grants Commission, this wing was renamed as the Centre for Economic Studies.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/economics.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">English</h1>
    		    <p>
    		           The Department of English (of the erstwhile Presidency College) is perhaps one of the oldest centres where English literature has been taught from the early nineteenth century onwards.

In its recent University avatar, the department is still in its formative stage, interestingly poised between its past glorious tradition of teaching British literature and an exciting future where the discipline has broadened its scope to include literatures of the world. The interests of the new faculty members reflect this rich diversity and range over Victorian Studies, Digital Humanities, Postcolonial Studies, Dalit Studies, Critical Theory, Indian Literature, Philosophy and Theology, Classical and Biblical Studies, Film Studies, Musicology, Early Modern Studies, and Creative Writing<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/english.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Geography</h1>
    		    <p>
    		           The Department started functioning since 1949 – 50 academic session with Prof. Dr. N. R. Kar (Head), Dr. A. B. Chatterjee and Dr. S. P. Dasgupta, R. K. Basu (Demonstrator), G. C. Roy (Draftsman) and Md. Ramzan Ali (Bearer). Initially, intermediate, pass and honours courses were introduced with part - PG facilities. Seminar Library was set up in the late 1950s, which contains about 2000 titles and back–volumes of several national and international journals. The Geographical Institute, a society of the ex-students was formed in 1970, which organizes seminar lectures, classroom debates, PG students’ seminar, inter-college geo–quiz, map drawing contest, field photograph exhibition, and annual reunion of its members. It also arranges short field trips, brings out wall magazine, photo corner, and bulletins. <br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/bengali.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Hindi</h1>
    		    <p>
    		           A couple of years before Independence, in 1945 Sanskrit, Pali, Hindi and Bengali were clubbed in a single Department, and while Hindi continued to be taught as a language for a while, Sanskrit and Pali were moved to Sanskrit College in 1951. Hindi appears to have been taught only as a vernacular subject from the year 1928. The Hindi Department (erstwhile Presidency College) was formally opened in 1981 with BA Honours course and preparations were on for opening a Seminar Library which was being made good use of by at least 1986. The Department has since steadily grown. The post graduate course in Hindi started from 2002. The strength of the students has surpassed 200 in the department. Gandhi Centre for North-Eastern Languages was set up in 2008 with the assistance of Gandhi Smriti evam Darshan Samiti, New Delhi, a National Institute under the Chairmanship of the Prime Minister of India. Presidency College was made a University in 2010. <br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/hindi.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">History</h1>
    		    <p>
    		           The History Department of Presidency University (with its lineages in history teaching in the Hindoo College and in Presidency College) offers one of the most globally renowned academic environments for South Asian historical studies and research. Following the recognition of Presidency as a university, new members of the faculty have recently been recruited, and new pedagogic objectives are also currently being fashioned. Keeping in line with its genealogies, the Department focuses on teaching Indian history from prehistoric times till the early postcolonial period, European history from ancient Greece and Rome till the twentieth century, and world history for the twentieth century.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/bengali.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Mathematics</h1>
    		    <p>
    		           he Department of Mathematics of Presidency University is one of the oldest in the country, having, started functioning since the foundation of Hindu College (then the name of the university) in 1817. In keeping with its tradition of academic excellence and the achievements of its illustrious alumni, the department is poised towards developing its teaching and research initiatives further. The department is well equipped with resources such as a seminar library for the students and MathSciNet for the researchers.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/mathematics.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Performing Arts</h1>
    		    <p>
    		           The Department of Performing Arts at Presidency University, was launched June 2016, with a focus on research and critical understanding of performance as dance, theatre and music, within their many interlocking and interfacing worlds. The broad sweep of the program will include both Eastern (mainly, Indian), and Western forms through historical continuums and traditions. Through our courses, students would be introduced to the pedagogy of ‘performance’ which would explore the complex ways in which performances interact with and create different kinds of social practices, and help to integrate society in meaningful ways. Classical and folk, fuse and interfuse, West and East engage in interesting dialogues, social practices and art recall and reinforce each other, in endlessly evolving, transforming and interesting ways.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/performingarts.php">Read more</a>
    		    </p>
				
				 <h1 class="course_name">Physics</h1>
    		    <p>
    		           The Department of Physics has a rich tradition of excellent teaching and scholarly research. Its rigorous and broad-based undergraduate programme and dedicated faculty with wide-ranging research interests made it one of the best-known Physics departments in the country, producing a significant fraction of eminent Indian physicists of the last century. Currently, the department is in the process of a complete re-organisation of its teaching curriculum, laboratory facilities, building infrastructure and teaching and research faculty. The century-old Baker Laboratories is being rejuvenated to host modern research and teaching facilities.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/physics.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Philosophy</h1>
    		    <p>
    		           The department offers courses in UG and PG standards. Around 90 undergraduate and 30 postgraduate students are taught by the department. A wide range of courses in different branches of philosophy like Indian Philosophy, History of Western Philosophy, Analytic Philosophy, Logic, Ethics, Applied Ethics, Contemporary Indian Thought, Feminist Philosophy and recent trends in Western Epistemology and Metaphysics are being offered by the department. Our department’s field’s focus also includes philosophy of language, Indian Logic, Phenomenology and Existentialism.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/philosophy.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Political Science</h1>
    		    <p>
    		           The Department of Political Science, Presidency University cherishes its illustrious past, but tries every moment to enrich its present. With a bunch of fresh, inquisitive students and dedicated faculty, the department’s quest for quality and knowledge is unbound. And this quest goes beyond the formal syllabus, beyond the four walls of our classrooms. Students are encouraged to question and debate, and raise issues within and beyond the syllabus. They are encouraged to participate in students’ seminars and present papers. The pedagogy involves guiding students to write dissertations and term papers from undergraduate classes beyond formal lecturing. The department believes in helping the students to grow as good human beings, not only good students. The faculty members are engaged in continuous research in all areas of the discipline, besides their regular teaching assignments. Recently, the department has published an edited volume entitled Indian Parliamentary Democracy in Transition (ed. A. Chatterjee) where noted scholars have contributed.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/polsc.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Sociology</h1>
    		    <p>
    		           It is undoubtedly a much-abused cliché to raise the question, ‘where to locate the social’, in the earliest lectures on sociology. But there are no simple routes of avoiding it. On the contrary, this question can set one on innumerable tracks leading to unknown voyages and enigmatic experiences. The department of Sociology at Presidency University wishes to be an institution permanently on the move, in search of such mystical journeys. We invite young minds to join us and celebrate these experiences in the process of learning sociology. We are out to find complex ways of understanding, critiquing, and analyzing every bit of the world we inhabit. These efforts, we believe, can never be undertaken without passionate, sensitive and critical individuals just out of schools, eager to plunge into worlds of the social.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/sociology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">Statistics</h1>
    		    <p>
    		           The Department of Statistics of the erstwhile Presidency College, now University, is one of the oldest departments in the country and perhaps in Asia. The undergraduate course of the department started way back in 1944, under the guidance of the great Professor P.C.Mahalanobis, also hailed as one of the greatest statisticians in the world. This was at a time when Statistics as a distinct course was quite unknown in many American universities as well. Since then the department has produced illustrious scholars, academicians and statisticians who have achieved enormous fame in India and abroad. It is a proud privilege to mention that Professor Jayanta Kumar Ghosh (Alumni 1954) is a recipient of Padma Shree Award (2014) of the Government of India.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/bengali.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">School of Biotechnology</h1>
    		    <p>
    		           The School of Biotechnology (SBT), initiated with a group of faculty members of the department of life sciences (DLS), is the newest addition to the academic wing of Presidency University. SBT is situated at the newly established campus of Presidency University at New Town, Kolkata. This campus, which has started functioning since mid-2019, consists of two centrally air-conditioned, 14-storey academic towers with a lush green field in the middle. The Department of Higher Education, Science & Technology and Biotechnology, Govt. of West Bengal generously funded SBT to establish the basic infrastructure for post-graduate education and training.The campus is replete with smart classrooms and laboratories with sophisticated instruments. The aim of SBTis to provide research and technology-centric education in various areas of biotechnology, which makes it distinct from that of DLS. However, SBT is in continuous interaction with DLS for the purpose of teaching and research.<br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/biotechnology.php">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">PhD Courses</h1>
    		    <p> Regulations for Award of the Degree of Doctor of Philosophy (Ph.D.) in Natural and Mathematical Sciences, Humanities and Social Sciences [with effect from 2017]
				
    		        <br>
    		        <a target="_blank" href="https://presiuniv.ac.in/web/phdprogramme.php">Read more</a>
    		    </p>
				
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">Admission</h1>
                <p>Presidency University Undergraduate , Postgraduate Admission & Ph.D. in the Academic Session 2020-2021
                    <a target="_blank" href="https://presiuniv.ac.in/web/admission.php">Read more</a>
                </p>
            </div>   
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '40'";
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
					$sql1 = "SELECT * FROM colleges where id = '40'";
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