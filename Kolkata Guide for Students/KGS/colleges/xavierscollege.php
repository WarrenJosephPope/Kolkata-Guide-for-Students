<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | St. Xavier's College</title>
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
		    <img class="bg" src="https://images.careers360.mobi/sites/default/files/St.-Xavier%E2%80%99s-Collegiate-School-Kolkata.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/b/b0/St._Xavier%27s_College%2C_Kolkata_logo.jpg"></img>
		     <span id="college_name"><a target="_blank" href="http://sxccal.edu/">St. Xavier's College, Kolkata</a>
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
		    <p>St. Xavier's College is a private, co-educational higher education college located in Kolkata, West Bengal, India. Founded in 1860 by Fr. Henri Depelchin S.J., it is the second oldest of Jesuit Institutions in India (after St. Joseph's College, Tiruchirapalli) and is named after St. Francis Xavier, a Navarre Jesuit of the 16th century, who ministered in India. In 2006, it became the first autonomous college in West Bengal, India, and is affiliated to the University of Calcutta. Currently, the college offers undergraduate and postgraduate degrees, Ph.D.s, diplomas and certificates. It is one of India's most prestigious institutions and has the highest NAAC rating of any college in the country.<br><br>
	    	    <span style="float:right;">St. Xavier's College,<br>
                30 Mother Teresa Sarani,<br>
		        Kolkata 700016,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://sxccal.edu/">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG Courses</li>
		            <li id="pg" onclick="pg();">PG Courses</li>
		            <li id="bed" onclick="bed();">B. Ed</li>
		            <li id="phd" onclick="phd();">Ph. D. Programmes</li>
		            <li id="coc" onclick="coc();">Career Oriented Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Commerce(B. Com)</h1>
    		    <p>
    		        The Department of commerce at St. Xavier's College enjoys a pre-eminent reputation for the excellence of its teaching in this dynamic discipline. It ranks alongside the most highly-rated departments in commerce among the undergraduate colleges of this country. From a very humble beginning in 1946, today it is the biggest department of the college catering to more than 3000 students. Our academic program is of the highest caliber because we believe in the transformative power of ideas. Our faculty, and diverse student body from various social walks of life, all contribute towards the same purpose: to maintain the department's excellent reputation in education at the cutting edge of economic, institutional and organizational aspects of commerce.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BComMorning/BComMorning.htm">Morning Department</a><a target="_blank" href="http://sxccal.edu/departments/BComEvening/BComEvening.htm">Evening Department</a>
    		    </p>
    		    <h1 class="course_name">BBA/Bachelor in Management Studies(B.M.S)</h1>
    		    <p>
    		        Since its introduction in 2002, this three year honours program in management has evolved. This program is unique given the core values it imparts in terms of Intellectual Depth, Leadership Skills, and Social Responsibility. St. Xavier's approach to management education aims at the holistic formation of future leaders with unmatched professional competence and a strong ethical perspective. The curriculum is flexible and broad and gives students the opportunity to develop an academic program that is tailored to their ambitions and interests.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BMS/BMS.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of English (B.A.)</h1>
    		    <p>
    		       The Department of English is one of the premier departments of the college. The department is supported by a committed team of professors who aim at effectively delivering a course in English, which is renowned for uniformly maintaining its standards of academic excellence over the years. The quality of students in the undergraduate programme is commendable. of texts, authors, movements, literary trends, theories and schools of criticism. It encompasses a study of the history of English Literature together with intense analysis of representative works of eminent authors, dramatists and poets such as Shakespeare, Milton, Dryden, Pope, Jane Austen, Dickens, Shaw, Romantic, Victorian and modern poets. The final semester offers courses in specialized areas such as Modern fiction, poetry and drama together with American Literature. Strategies of teaching include lecture method, audio-visual techniques, student seminars, term papers and class discussions..<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BAEnglish/BAEnglish.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Bengali (B.A.)</h1>
    		    <p>
    		       From the academic session July 2012-13 St. Xavier's College (Autonomous) introduced Bengali Honours Course. This is our tribute to Gurudeb Rabindranath Tagore on his 150th birth anniversary. St. Xavier's also completed its 150 years in 2010. St. Xavier's College feels proud in honouring a Xaverian. Department of Bengali is perhaps the only department which has a very rich past among the minor departments of this college. The prominence of this department comes into forefront because of the activities of our students under the banner of Bengali Literary Society. In that sense we are perhaps the only department of this college where the division of Arts & Science or Commerce makes no difference. We are the department concerned with many students though we are ourselves a minor.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BABengali/BABengali.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Political Science (B.A.)</h1>
    		    <p>
    		       The department of Political Science is a part of the glorious heritage of St. Xavier's College and remains committed to the Xaverian vision of academic excellence and the maintenance of an environment where "the mind is led forward into ever-widening thought and action". The full time faculty members have been awarded their Doctoral Degrees and remain actively engaged in research and publications. They are regular invitees to and participants at seminars and conferences, both national and international. While nurturing young minds, the department seeks to elevate standards of learning and at the same time care is taken to mentor and guide those who are not as confident.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BAPoliticalScience/BAPoliticalScience.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Sociology (B.A.)</h1>
    		    <p>
    		       The relatively young department of sociology has been successfully able to carve a niche for itself in a short span of time since its inception in 2001. The department of Sociology aims to engender analytical and critical thinking among its students and has continuously endeavoured to incorporate the most contemporary debates in Sociology in its academic curriculum. After the college was granted autonomy (2006), the entire syllabus was restructured in light of changing trends in sociology both at the conceptual and methodological level. It was felt that the changes could not b affected without parallel changes in he curriculum. So while the monological method of teaching continued, it was supplemented with various kinds of practical exposures. Village trips were therefore organized for every batch of students so tat students learn how to relate theory with facts, not only that the village exposure helps the students to develop a perspective which they would not have attained otherwise.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BASociology/BASociology.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Hindi (General) (B.A.)</h1>
    		    <p>
    		       The Hindi Dept. along with its academic programme conduct its cultural programmes under the banner of "Hindi Literary Society" or HLS. Hindi is our national language and it is spoken and understood by majority of Indians. It is also helpful in marketing, public relations and other jobs. Keeping these in mind we organize at least one monthly intra-college event related to the language like poetry-recitation, essay-writing, debates etc.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BAHindi/BAHindi.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of History (B.A.)</h1>
    		    <p>
    		       The year began with three Semesters  II, IV and VI . In the month of February the Semester II section 2 students were taken by Mrs. Ray for a historical trip to the Park Street cemetery. They made a study of the different tombstones, from the time of the East India Company. Of particular interest was the grave of Henry Vivian Derozio, about whom they study during the course of the semester.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BAHistory/BAHistory.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Film Studies (General) (B.A.)</h1>
    		    <p>
    		       Film Studies department was started simultaneously with the Mass Communication & Videography department in the year 1996. Since then, scores of our students have joined different production houses, print media offices, or have undertaken free-lance activities as film critics, researchers, etc. Some have gone in the academic line, completing their MA and subsequently PhD work or have joined technical institutes like the FTII, SRFTI, etc.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BAFilmStudies/BAFilmStudies.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Journalism (General) (B.A.)</h1>
    		    <p>
    		       The journalism department at Xavier's is the only one in the country which offers a range of facilities to it students in an undergraduate general course. The students are taught page making on individual computers, taught how to use a video camera, how to edit on the Final Cut Pro, How to anchor on tv and radio, write scripts for radio and tv, how to produce radio programmes, and how to set up a website. The course is evenly divided between theory and hands on practicals. The faculty includes senior journalists, FTII graduates, and practicing film makers and television professionals. There is a strong demand for this course and students have to go through an entrance interview before being selected.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScJournalism/BScJournalism.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Communicative English (General) (B.A.)</h1>
    		    <p>
    		       The Communicative English course was launched at St. Xavier's College in July 2009, as a 60 hour extra curricular skills-development programme but later extended to a full academic year as a result of positive feedback from students and the administration. The decision to formalize the programme into a regular subject and department was taken with the institution of the Board of Studies on April 30, 2010.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BAcommEnglish/BACommEnglish.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physics (B.Sc.)</h1>
    		    <p>
    		       The Dept of Physics is one of the oldest and prestigious Departments of our Institution. Founded under the pioneering guidance of renowned Jesuits like Fr. Lafonte in the middle of nineteenth century and contributions over years like Fr. Verstraeten, Fr. Bonhom & others, the department has grown into the present structure with both UG and PG sections and furthermore, a lot of research activities. Recently, the Department has been engaged in the new Curriculum restructuring process (UG) with mutual feedback taken from other science Departments, leading to a very effective coursework to be offered to the Physics major students from the academic year 2013. The present faculty members are highly dedicated for quality physics education with innovative methods of theory teaching & practices and inspiring & guided laboratory classes.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScPhysics/BScPhysics.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemistry (B.Sc.)</h1>
    		    <p>
    		       The Department of Chemistry is one of the premier science departments of the College with a dedicated and dynamic group of teachers. The Department has developed a commendable Laboratory infrastructure for the benefit of the undergraduate students, from the grants of DSTFIST, UGCCPE as well as DBT-STAR College Programme. The faculties encourage the students for taking up research as their career and over the past ten years a large group of students, after graduating from the college, have studied in IIT/ IISc/ IISER and are now in research both in India and abroad. Some of the faculty members are also actively involved in research and are publishing quality papers in reputed scientific journals in order to motivate the students.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScChemistry/BScChemistry.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mathematics (B.Sc.)</h1>
    		    <p>
    		       The Mathematics Department of St. Xavier's College is proud to be the inheritors of a glorious heritage. The first name that comes to our mind is that of Rev. Fr. F. Goreux who was associated with the Department from 1940 to 1987.Fr.Goreux nurtured this Department from its infancy and adolescence to youthful independence. He has been a constant source of inspiration as well as the driving force behind this Department for nearly five decades. Generations of students and teachers have enjoyed the warmth of his loving care and benefited from the erudition of this apostle of Mathematics. Eminent mathematicians like Late Dr. S.Nag (Bhatnagar Awardee), Prof. A. Roy (I.S.I.), Dr. A. Bagchi (Pennsylvania Univ.), Dr. N. Basu (Cornell Univ.) are among many students of whom we are proud of.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScMathematics/BScMathematics.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Economics (B.Sc.)</h1>
    		    <p>
    		       The Department of Economics is carrying forward its service to the college under the constant support, guidance and encouragement of the Rector and Principal of the college, Rev. Fr. Dr. Dominic Savio S.J. The faculty members along with the students of the department form a very cohesive team. The department has a total of five full time faculty members - Prof. Dr. Mallinath Mukherjee, Prof. Bipra Kumar Das, Prof. Dr. Ranjanendra Narayan Nag, Prof. Dr. Partha Pratim Ghosh and Prof. Dr. Pia Ghoshal (HOD). The department has been blessed by the constant support and guidance from Rev. Fr. Dr. J. Felix Raj S.J. (erstwhile Principal, St. Xavier's College (Autonomous), Kolkata and Vice-Chancellor, St. Xavier's University) and Rev. Fr. Dr. Dominic Savio S.J. (Rector and Principal, St. Xavier's College (Autonomous), Kolkata) who have been part of the department which has helped the department achieve new heights and meet new challenges. The undergraduate course in Economics offered by the department is one of the best by any standard.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScEconomics/BScEconomics.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science (B.Sc.)</h1>
    		    <p>
    		       Ever since Computer Science was first introduced as an additional subject in class XI in the year 1995 the Department has come a long way. The B.Sc. with Honours in Computer Science was introduced in the year 1998. Our College is one of the pioneering institutes to begin the B. Sc. Course in Computer Science. Since its inception the Department has produced University toppers in all the years till 2008 after which the College started producing batches as an autonomous institute. The year 2005 proved to be a hallmark for the Department as M.Sc. (Computer Science) course was introduced as the first autonomous course of the College and it was the first autonomous course among all Colleges under the University of Calcutta.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScComputerScience/BScComputerscience.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Statistics (B.Sc.)</h1>
    		    <p>
    		       The inception of the department of Statistics dates back to the late fifties but it was not until the sixties that it took off under the able guidance of Late Prof. N.G. Das, Prof. Arijit Choudhury and Prof. U.K. Dasgupta. The department offered only general courses at that time. It was since 1996 that the department started offering both General and Honours courses. Among the many committed teachers who served the department was Prof. A. M. Goon of Presidency College, who taught here for almost a decade as a visiting faculty.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScStatistics/BScStatistics.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Microbiology (B.Sc.)</h1>
    		    <p>
                    The Microbiology Department of the St. Xavier's College (Autonomous), Kolkata started its journey almost 15 years ago. Since its inception, the endless enthusiasm and indomitable zeal to attain perfection of both the faculty and the students made the department the best in research activity in the college. The able guidance and the heartfelt endeavor of the entire faculty have enabled the Department to prosper and grow into its present extortionate stature<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScMicrobiology/BScMicrobiology.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mass Communication & Videography (B.Sc.)</h1>
    		    <p>
    		       The Mass Communication & Videography (MCV) department was founded in 1996. This course is aimed at creating media professionals who would emerge as experts with further specialization.The MCV curricula combines media theory with hands on training by a faculty of qualified media theoreticians and media professionals.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/BScMassCommVideoProduction/BScMassCommVideoProduction.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Environmental Science</h1>
    		    <p>
    		       It was indeed a matter of great honour for me to receive the headship from able hands of Dr. A. K. Mitra. From the very first day of inception of the department, I had a clear set of goals, which were an integral part of my vision. As the subject has been made compulsory for students of all the departments of the College, the department of E.V.S. does indeed have the largest number of students under it.<br>
    		        <a target="_blank" href="https://www.sxccal.edu/departments/ENVS/ENVS.htm">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">P.G. Department of Commerce (M. Com.)</h1>
    		    <p>
    		       The M.Com. department, one of the newly introduced post-graduate courses offered by St. Xavier's College since its post-autonomy period, is governed by the Ignatian Pedagogical Paradigm of 'conscience, competence, compassion and commitment'. Born in 2007, the motto of the department is to offer quality education in the higher studies of commerce and to develop human resources with social values catering to the needs of both, industries and academia, at the national and international level.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/McomCommerce/McomCommerce.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of Computer Science (M.Sc.)</h1>
    		    <p>
    		       Ever since Computer Science was first introduced as an additional subject in class XI in the year 1995 the Department has come a long way. The B.Sc. with Honours in Computer Science was introduced in the year 1998. Our College is one of the pioneering institutes to begin the B. Sc. Course in Computer Science. Since its inception the Department has produced University toppers in all the years till 2008 after which the College started producing batches as an autonomous institute. The year 2005 proved to be a hallmark for the Department as M.Sc. (Computer Science) course was introduced as the first autonomous course of the College and it was the first autonomous course among all Colleges under the University of Calcutta.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MscComputerScience/MscComputerScience.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of Biotechnology (M.Sc.)</h1>
    		    <p>
    		       The Integrated M. Sc Course in Biotechnology was initiated in July 2006. Our first batch students have graduated in June 2011. The syllabus is indigenous to the department and has been approved by the Syndicate of University of Calcutta and subsequently by the Academic Council of St. Xavier's College (Autonomous).<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MscBiotechnology/MscBiotechnology.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of Microbiology (M.Sc.)</h1>
    		    <p>
    		       The Department of Microbiology was initiated in 2003 as a general Department and subsequently upgraded tothe Honours Department since 2005. From 2006 onwards, it started to teach a syllabus different from CalcuttaUniversity under the autonomous system. The first group of graduates did exceptionally well with about 60 %first class and occupied the first two positions under the CalcuttaUniversity.The results under the autonomous mode were even better and the students were admitted in the different institutions of international repute like the IISc, TIFR, NIV, JNCASR, NCBS and IIT etc. The students also joined Universities like the CalcuttaUniversity, JadavpurUniversity, BHU, JNU etc. The Department also has a uniquestudent exchange program with the University of Manitoba, Canada.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MscMicrobiology/MscMicrobiology.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of Physics (M.Sc.)</h1>
    		    <p>
    		       The physics department offers an M.Sc. course in physics. There are two specializations: (1) Astroparticle Physics and (2) Solid State Electronics. The students are taught computer programming in Matlab and Python. They are also taught computer interfacing of experiments. The expEYES Junior Kits have been procured also for use by the students.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MscPhysics/MscPhysics.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of Multimedia & Animation (Integrated M.Sc.)</h1>
    		    <p>
    		       M.Sc. Course in Multimedia is five years integrated UGC approved postgraduate degree programme in Eastern India. After 3 years together to do all the multimedia components in six semesters, students have to choose one of the three options.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MScMultimediaAnimation/MScMultimediaAnimation.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of Political Science (M.A.)</h1>
    		    <p>
    		       The Department of Political Science is inaugurating its Post Graduate programme in July 2019. The two-year MA course has two types of papers. Core papers are compulsory for all students opting for the course and are designed to give students a thorough grounding in core areas of the discipline such as Political Theory, Political Thought, Public Administration, International Relations etc. The course also offers an exciting set of elective/specialization papers such as Public Policy, World Politics and Global Political Economy, Politics of Development to name a few which students choose from the several options that are on offer. Staffed by competent faculty active in research and publications the dept looks forward to attracting students from different parts of the country and abroad.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MAPoliticalScience/MAPoliticalScience.htm">Read more</a>
    		    </p>
    		    <h1 class="course_name">P.G. Department of English (M.A.)</h1>
    		    <p>
    		       The idea of creating an M.A. course in English was conceived after due deliberation on the strengths and achievements of the department, its exemplary track record and the quality of students it produces. The Department of English has achieved a recognised level of excellence and the repeated and insistent requests from our students and the general public to start an M.A. in English are a positive indicator that the course will attract many students.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/MAEnglish/MAEnglish.htm">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
                <h1 class="course_name">Bachelor of Education</h1>
    		    <p>
    		       The history of Education Department of St. Xavier's College goes way back to the year 1940. However, it was in the session 1961-62 that the training of teachers through the Department began in a full fledged way. The Department being a part of St. Xavier's College, which was then one of the colleges under Calcutta University also functioned under the parent university. From 6th March 2006 St. Xavier's College was declared as an Autonomous College by the University Grants Commission and Calcutta University. Since then we have been functioning as a department under this Autonomous College.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/BEducation/sxc-BEducation.htm">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="phd_block" style="display : none;">
                <h1 class="course_name">Ph.D. Programmes</h1>
    		    <p>
    		       September 2015 was a landmark in the history of St. Xavier's College, Kolkata. The college was granted permission by the University of Calcutta to independently initiate a Ph.D. program in the departments of Physics, Microbiology, Biotechnology and Commerce. This makes St. Xavier's one of a very select few colleges in the country to be allowed this privilege. It is a recognition by both the University of Calcutta and the University Grants Commission that St. Xavier's has the merit, quality and academic pedigree to undertake and supervise research.<br>
    		        <a target="_blank" href="http://sxccal.edu/departments/PHd/PhD.htm">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="coc_block" style="display : none;">
                <h1 class="course_name">Logistics & Supply Chain Management</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
    		        Duration : One year<br>
                    Eligibility : Graduates / Appeared final degree exam.<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/LSM.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Human Resource Management (HRM)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : One year<br>
                    Eligibility : Graduates / Appeared final degree exam.<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/HRM.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Mass Communication and Public Relation (MCP)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : One year<br>
                    Eligibility : Graduates / Appeared final degree exam.<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/MCP.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Marketing and Sales Management (MSM)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : One year<br>
                    Eligibility : Graduates / Appeared final degree exam.<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/MSM.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Integrated Marketing Communication (IMC)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : One year<br>
                    Eligibility : Graduates / Appeared final degree exam.<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/IMC.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Certified Accounts Professional (CAP)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : One year<br>
                    Eligibility : Under-graduate / Graduate<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/CAP.htm">Read more</a>
    		    </p>
                <h1 class="course_name">N.S.E. Certified Capital Market Professional (NCCMP)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : Seven months<br>
                    Eligibility : Under-graduate / Graduate<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/NCCMP.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Foreign Trade Practices and Management (FTM)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : Seven months<br>
                    Eligibility : Under-graduate / Graduate<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/FTM.htm">Read more</a>
    		    </p>
                <h1 class="course_name">Tax Practices and Procedures (TPP)</h1>
    		    <p>Course Type : Post Graduate Diploma<br>
                    Duration : Seven months<br>
                    Eligibility : Under-graduate / Graduate<br>
                    Course Commences From : July 2019<br>
    		        <a target="_blank" href="http://sxccal.edu/COP/TPP.htm">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="http://sxccal.edu/admissions/sxc-AdmissionDetails.htm">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">UG courses (Session 2019-20)</h1>
                <p>
                    <a target="_blank" href="http://www.sxccal.edu/admissions/sxcadmission2019/ug9102/default.htm">Read more</a>
                </p>
            </div>
            <div class="admit_block">
                <h1 class="admit_name">M.Sc. Computer Science (Session 2019-20)</h1>
                <p>
                    <a target="_blank" href="http://sxccal.edu/admissions/SXCAdmission2019/PG2019/msccs1921.pdf">Read more</a>
                </p>
            </div>
            <div class="admit_block">
                <h1 class="admit_name">M.Sc. Physics (Session 2019-20)</h1>
                <p>
                    <a target="_blank" href="http://sxccal.edu/admissions/SXCAdmission2019/PG2019/mscph1921.pdf">Read more</a>
                </p>
            </div>
            <div class="admit_block">
                <h1 class="admit_name">M.Sc. Microbiology (Session 2019-20)</h1>
                <p>
                    <a target="_blank" href="http://sxccal.edu/admissions/SXCAdmission2019/PG2019/mscmb1921.pdf">Read more</a>
                </p>
            </div>
            <div class="admit_block">
                <h1 class="admit_name">M.A. English (Session 2019-20)</h1>
                <p>
                    <a target="_blank" href="http://sxccal.edu/admissions/SXCAdmission2019/PG2019/maeng1921.pdf">Read more</a>
                </p>
            </div>
            <div class="admit_block">
                <h1 class="admit_name">M.A. Political Science (Session 2019-20) (2nd Phase)</h1>
                <p>
                    <a target="_blank" href="http://sxccal.edu/admissions/SXCAdmission2019/PG2019/mapolsc1921-P2.pdf">Read more</a>
                </p>
            </div>
            <div class="admit_block">
                <h1 class="admit_name">M.Com.(Session 2019-20)</h1>
                <p>
                    <a target="_blank" href="http://sxccal.edu/admissions/SXCAdmission2019/PG2019/mcom1921.pdf">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>The Placement Cell of St. Xavier's College acts as an integral link between the students and corporate organisations. St. Xavier's College is one of the first colleges to start a Placement Cell and has facilitated placements for many students. The placement cell functions under the supervision of Mr. Niladri Sinha assisted by students and operates all around the year to arrange campus interviews by the companies. The Cell acts as a contact point for all companies that wish to select students from St. Xavier's College. It facilitates the whole process from collecting the CVs of the students to organising Pre-placement talks by companies to the final induction process.<br>
                    <a target="_blank" href="http://sxccal.edu/PlacementCell/PlacementCell.htm">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '1'";
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
					$sql1 = "SELECT * FROM colleges where id = '1'";
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