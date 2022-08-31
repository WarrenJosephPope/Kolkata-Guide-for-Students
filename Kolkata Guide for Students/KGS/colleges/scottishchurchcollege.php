<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Scottish Church College</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/colleges.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
	    <script src="../Scripts/select.js"></script>
	    <script src="../Scripts/rem_wm.js"></script>
		<?php include '../PHP/header.php'?>
		<div id="college_info">
		    <img class="bg" src="https://www.scottishchurch.ac.in/images/Carousel/1.jpg"></img>
		     <img class="logo" src="https://upload.wikimedia.org/wikipedia/en/e/e7/Scottish_Church_College_logo.png"></img>
		     <span id="college_name"><a target="_blank" href="http://www.scottishchurch.ac.in/index.php/">Scottish Church College, Kolkata</a>
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
		    <p>The spread of European education in alliance with the doctrine of Christianity had been an important impetus to missionary enterprise in India in the nineteenth century. Scottish Church College, established in 1830 as the General Assembly's Institution and given its present name in 1929 is an institution born out of one such impetus.<br>
                The college founder, Rev. Alexander Duff, was the first missionary to India from the Church of Scotland. His idea was to set up an institution which linked western education with Christian mission and the eventual progress of the people -- years later the College is committed to the vision of its founding father and aims at academic excellence alongwith social awareness and character building.<br>
                The College is the second oldest in North Calcutta and has produced numerous outstanding people, chief among them being Swami Vivekananda and Netaji Subhas Chandra Bose. The College has been awarded Grade A by the National Assessment and Accreditation Council (NAAC). The college also enjoys the status of College with Potential for Excellence, a quality rating by the University Grants Commission. Media survey rates Scottish as one among the top fifty colleges in India.<br><br>
                <span style="float:right;">Scottish Church College<br>
		        1 & 3 Urquhart Square,<br>
                Kolkata - 700 006.<br>
                West Bengal, India.</span><br>
		        <a target="_blank" href="http://www.scottishchurch.ac.in/the-college.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG Courses</li>
		            <li id="pg" onclick="pg();">PG Courses</li>
		            <li id="bed" onclick="bed();">B. Ed</li>
		            <li id="coc" onclick="coc();">Career Oriented Courses</li>
		        </ul>
		    </div>
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">Department of Bengali (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.A. Honours in Bengali<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Bengali(General subject) and Bengali(Language) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 26:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Bengali_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of English (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.A. English (Honours)<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching English (General subject) and English (Language) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 33:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/English_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Hindi (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : Hindi (General) offered with B.A. Honours courses in Humanities.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Hindi (General subject) and Hindi (Language) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 33:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Hindi_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of History (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.A. History (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching History (General subject) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 40:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/History_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Philosophy (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.A. Philosophy (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Philosophy (General subject) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 32:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Philosophy_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Political Science (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.A. Political Science (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Political Science (General subject) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 17:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/PoliticalScience_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Sanskrit (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.A. Sanskrit (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Sanskrit (General subject) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 23:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Sanskrit_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Sociology (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : Sociology (General) offered with B.A. Honours.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Sociology (General subject) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 142:1.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Sociology_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Physical Education (B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : Physical Education (General) offered with B.A. Honours.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Physical Education (General subject) with B.A. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : -<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/PhysicalEducation_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Botany (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Botany (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Botany (General subject) with B.Sc. Zoology (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : UG (H)-78:8 | UG (G)-120:7<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Botany_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Chemistry (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Chemistry (Honours) and M.Sc. in Chemistry.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Chemistry (General subject) with B.Sc. Honours in Botany, Mathematics, Microbiology, Physics and Zoology (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : UG (H)-17:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Chemistry_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Computer Science (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Computer Science (General subject) with B.Sc. Honours courses in Economics, Mathematics and Physics.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 23:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/ComputerScience_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Economics (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Economics (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Economics (General subject) with B.A. Bengali (Hon), English (Hon) and Political Science (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 45:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Economics_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Mathematics (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Mathematics (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Mathematics (General subject) with B.Sc. Honours courses in Chemistry, Computer Science, Economics and Physics.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 40:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Economics_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Microbiology (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Microbiology (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : none.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 20:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Microbiology_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Physics (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Physics (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Physics (General subject) with B.Sc. Chemistry (Hon) and Computer Science (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : UG (H)-17:1 | UG (G)-36:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Physics_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Psychology (B.Sc.)</h1>
    		    <p>
    		        The psychology general course consists of theory as well as practical on different psychological processes.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Psychology_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Statistics (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : Statistics (General) offered with B.Sc. Honours.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Staistics (General subject) with B.Sc. Honours courses.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : -<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Statistics_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Zoology (B.Sc.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : B.Sc. Zoology (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Zoology (General subject) with B.Sc. Botany (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 14:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Zoology_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Commerce (B.Com.)</h1>
    		    <p>
    		        This is the youngest department in the heritage institution. It was set up in the June 2014 and is only three and half years old. It has student strength of 50 students per year studying B.Com. (Honours in Accounting and Finance) under C.U. There are four sanctioned full time contractual teaching posts consisting of Prof. Biswadeep Dutta, Prof. Poushali Bardhan, Prof. Nancy Jaiswal (Currently on maternity leave) and Prof. Shreya Basu. There are a number of Guest Lecturers and Part Time teachers assisting them. It is headed by the Administrator, Prof. Amitava Chatterjee who founded the department under the guidance of the-then Rector and Principal Dr. John Abraham.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/Commerce_about.php">Read More</a>
    		    </p>
    		    <h1 class="course_name">Department of Business Administration (B.B.A.)</h1>
    		    <p>
    		        1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : Bachelor of Business Administration (Honours).<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Annual, 1+1+1 system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : none.<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 5:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/UG/BBA_about.php">Read More</a>
    		    </p>
            </div>
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">P.G. Department of Botany (M. Sc.)</h1>
    		    <p>
    		       1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : M.Sc. in Botany.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Semester system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Botany (General subject) with B.Sc. Zoology (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 45:8<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/PG/Botany_about.php">Read more</a>
    		    </p>
                <h1 class="course_name">P.G. Department of Chemistry (M. Sc.)</h1>
    		    <p>
    		       1. Names of Programmes / Courses offered (UG, PG, M.Phil., Ph.D., Integrated Masters; Integrated Ph.D., etc.) : M.Sc. in Chemistry.<br><br>
    		        2. Names of interdisciplinary courses and the departments/units involved : none.<br><br>
    		        3. Annual/ semester/ choice based credit system : Semester system.<br><br>
    		        4. Participation of the department in the courses offered by other departments : Participation in teaching Chemistry (General subject) with B.Sc. Honours in Botany, Mathematics, Microbiology, Physics and Zoology (Hon).<br><br>
    		        5. Courses in collaboration with other universities, foreign institutions, etc. : none.<br><br>
    		        6. Details of courses/programmes discontinued(if any) with reasons : none.<br><br>
    		        7. Student-Teacher Ratio(programme wise) : 7:1<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/PG/Chemistry_about.php">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
                <h1 class="course_name">Bachelor of Education</h1>
    		    <p>
    		       The Department of Teacher Education of the college is recognized by the N.C.T.E. from 1995 vide order No.s E.R.C./7-50 (ER-50-5.7)/2004/3/45(1) dated November 2, 2004, ERC/WB-SV/21/06/4780(1) dated December 8, 2006, EERC/NCTE/APE00245/B.Ed./(Revised Order)/2016/32387 DATED: 29.05.2015. Classes are held at 1, Urquhart Square, and arrangments for Practice Teaching are made in different schools.<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/TeacherEducation/BEd_about.php">Read more</a>
    		    </p>
            </div>
            <div class="course_type" id="coc_block" style="display : none;">
                <h1 class="course_name">List of Career Oriented Programme Organized by Placement Cell in 2017 - 18:t</h1>
    		    <p>
    		        1. Seminar on "Social Sciences: The Future of Jobs & Career in India" by Catalyst Learning Services, Kolkata on 24.08.2017<br><br>
                    2. Career Awareness Session on "Career as a Company Secretary" by ICSI, Kolkata on 6.09.2017<br><br>
                    3. Career Awareness Session on "Careers in Data Science Industry" by Dygitech (Business Analytics Academy) on 14.09.2017<br><br>
                    4. Career Seminar on "Financial Markets and its opportunities" by BSE Institute, Kolkata on 15.11.2017<br><br>
                    5. Workshop on "Basics of Interview Skills" by Endeavor Careers on 29.11.2017<br>
    		        <a target="_blank" href="http://www.scottishchurch.ac.in/COP.php">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <p>
                The Academic Session extends from 1st July to 30th June. All courses are open both to men and women students, except the B.Ed. course which is for women students only. Admission will be made strictly in accordance with norms as prescribed by the Admission Committee. Students seeking admission from University / Board / H.S. Council must produce their examination certificates, mark sheet, certificates of age and a migration certificate (where necessary) in original. Admission to the B.Ed. Course is made according to the norms of Education Department, Govt. of West Bengal and NCTE.<br>
                    Admission to the college is granted on the understanding that the student undertakes to conform in all respects to the rules and discipline of the college.<br>
                    Please note:<br>
                    1. Admission to any course in the College is provisional, subject to the final approval of the University of Calcutta.<br><br>
                    2. Since the College does not have any 3-year General course and runs only 3-year Honours course, if a student does not qualify for Honours in any of the Calcutta University examinations during his/her course period, he/she is not permitted to carry on his/her studies in the College as a General course candidate.<br>
                    <a target="_blank" href="http://www.scottishadmissions.com/">Apply Here</a>
            </p>
        </div>
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>The Placement Cell of Scottish Church College, Kolkata creates a platform where final year students can showcase their skills & talent which different companies seek to explore.<br><br>
                    Given the present day competitive job scenario, where it has become imperative for the students to possess not only sound academic knowledge but also, effective soft skills and the requisite mentoring, the College Placement Cell has successfully provided opportunities for employment to its outgoing students.<br><br>
                    The Cell which started in 2004 has successfully provided placement to a large section of graduates over the years. The placement cell is situated on the ground floor of the B.Ed building. This Cell is led by the Placement Officer Mr. Tridib Mohan.<br><br>
                    Initially the companies are invited to take part in the campus recruitment drive. The interested students register with the placement cell and thus participate in the campus drive. Students are also send for pooled campus drives which are held in other colleges.<br><br>
                    Many students are selected in different companies & they join after completion of their graduation. Apart from this Placement Cell regularly organizes Seminars/Workshops/Grooming Sessions for the students to upgrade their skills & make them industry friendly.<br><br>
                    The Placement Cell has risen to the occasion and has successfully aided in providing opportunities and employment to its outgoing students.<br>
                    <a target="_blank" href="http://www.scottishchurch.ac.in/placement_cell.php">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '2'";
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
					$sql1 = "SELECT * FROM colleges where id = '2'";
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