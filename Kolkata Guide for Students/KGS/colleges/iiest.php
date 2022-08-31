<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Indian Institute of Engineering Science and Technology</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/campusimage/1563274475cc14.jpg "></img>
		     <img class="logo" src="data:image/png;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="https://www.iiests.ac.in/">Indian Institute of Engineering Science and Technology, Shibpur</a>
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
			Indian Institute of Engineering Science and Technology, Shibpur (IIEST Shibpur) is a premier public engineering institution located at Shibpur, Howrah district, West Bengal. In engineering category, it is ranked 19th by the NIRF rankings among all the institutes of the country.
			 It is recognised as an Institute of National Importance under MHRD by the Government of India along with IITs , NITs and other institutes. Established in 1856 , IIEST Shibpur is the 2nd oldest engineering institution of the country, after IIT Roorkee.
    			<br><br>
    			<span style="float:right;">Indian Institute of Engineering Science and Technology,<br>
                Botanic Garden,<br>
    	        Howrah-711103,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.iiests.ac.in/">Read more</a>
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
    		    <h1 class="course_name">Department of Aerospace Engineering and Applied Mechanics</h1>
    		    <p>
    		        The department of Applied Mechanics was established as a separate major engineering department in 1947 and subsequently, the Drawing Section was attached to it in the late fifties. Over the years, the department garnered enough human resources in the areas of fluid mechanics and structures. With effect from 2008, the department has been renamed as the Department of Aerospace Engineering and Applied Mechanics. The department conducts a regular postgraduate programme in engineering mechanics and started undergraduate programme in aerospace engineering from academic session 2010 – 11 with an approved intake of 30 students. Since the academic session 2014 - 2015, the department offers 5 years dual degree (B. Tech and M. Tech.) and 4 years B.Tech programme in Aerospace Engineering along with the postgraduate programme in Mechanics of Solids and Mechanics of Fluids.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/AEAM">Read more</a>
    		    </p>
    		    
    		    <h1 class="course_name">Department of Architecture,Town and Regional Planning</h1>
    		    <p>
    		        The Department of Architecture, Town and Regional Planning offers the following programs: i)Bachelor of Architecture
				    ii) Master of Town and Regional Planning iii) Ph.D. Program<br>All the courses are approved by AICTE, Council of Architecture, New Delhi and Institute of Town Planners', India<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ARCH">Read more</a>
    		    </p>
    		    <h1 class="course_name"> Department of Chemistry</h1>
    		    <p>
    		       The Department of Chemistry, which at present is 122 years old has a glorious past. The Department, besides engaging in undergraduate teaching of Engineering students from its commencement and also Masters of Science in Chemistry from the beginning of this century has a heritage of conducting quality research in various fields. A well-known Physical Chemist, Professor Barodananada Chatterjee became the Head of the Department of Chemistry, Metallurgy and Geology in 1956 and the first Vice-Principal (Academic) of the College. Under his direct supervision and encouragement, faculty members and several research students made significant contributions in soil chemistry, corrosion and chemical exploration of medicinal plants and in coal and petroleum products...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/CHEM">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Civil Engineering</h1>
    		    <p>
    		       Founded in May 1856, the Department of Civil Engineering is as old as the institute. The Department was originally established as the Civil Engineering College, Calcutta with the object of imparting training to the personnel in the field of Civil Engineering for the fulfillment of the need of the Public Works Department of the Government of India. Since then it has been striving to develop and maintain a glorious national tradition of producing quality Civil Engineers for the country...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/CE">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science and Technology</h1>
    		    <p>
    		       The Department of Computer Science and Technology (CST) was established in 1982. Since its inception, the department has played an important role in developing a vibrant and forward-looking academic environment. Currently, the department offers B.Tech, M.Tech, and PhD programs.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/CST">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Earth Sciences</h1>
    		    <p>
    		       Indian Institute of Engineering Science and Technology and the subject Geology possess a century-old relationship. Many eminent geoscientists have offered their teaching and research expertise in the past. Previously teaching in Geology was introduced in this Institute to meet the need of the would-be engineering graduates only in Civil Engineering, Mining Engineering and Metallurgical Engineering branches. The science streams have emerged as an integral part of the Institute offering postgraduate degrees from 2001. The Department of Geology, however, has started to offer independent postgraduate courses in Geology after its separate identity as a science department since 2005. However, the department has evolved to the Department of Earth Sciences to host teaching and research in a wide spectrum of Earth Sciences. This diversification from classical Geology has helped students to undertake research programs in other interesting fields like Hydrogeology with an application of GIS and Remote Sensing, Geophysics, Environmental Geology, Geomorphology, Climatology, Mining Geology.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ES">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electrical Engineering</h1>
    		    <p>
    		       The Department of Electrical Engineering at IIEST Shibpur is one of the oldest and among the best in the country providing dynamic and scholarly environments wherein students learn independently and in collaboration with others to develop a disciplined yet innovative approach to their careers as professional engineers, researchers or teachers. The department offers a 10-semester dual degree (B. Tech. and M. Tech.) course and 4-semester postgraduate M.Tech. degree course in Electrical Engineering. The department also offers research programs leading to a Ph.D. degree. The department started its journey way back in the year 1912-13 and produced its first batch of graduate electrical engineers in 1936 in the erstwhile Bengal Engineering College, Shibpur. Post-independence, when the nascent nation had just started building the power plants that have been instrumental in realizing the dreams of modern India, many of the visionaries, planners and implementers were the students of this department. The postgraduate degree was first offered in 1955 and the first Ph.D. Scholar from the department came out in 1959.... <br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/EE">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electronics and Telecommunication Engineering</h1>
    		    <p>
    		       The Department of Electronics and Telecommunication Engineering started its journey in July 1965 after its nucleation from the Department of Physics & Telecommunication from the erstwhile Bengal Engineering College. The first batch of Electronics and Telecommunication engineers graduated from the department in 1971. The Master’s program was launched in 1972 and the first batch of Post Graduates passed out in 1974. The Department so far offered a Bachelor of Engineering (B.E.) course in Electronics & Telecommunication Engineering for 4 years (8 Semesters). From the year 2014 onward the Department has started offering 5 years (10 Semesters) Integrated Master of Technology (Dual B. Tech. + M. Tech.) program under the umbrella of the Indian Institute of Engineering Science and Technology...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ETC">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Humanities and Social Sciences</h1>
    		    <p>
    		       The establishment of the Department of Humanities in 1945 reflected a holistic and pragmatic approach to engineering education in the modern era. Renamed as the Department of Humanities and Social Sciences in 2004, the department has always emphasized the need for modernized syllabi in communication skills, knowledge of the society, an economy that is in tune with contemporary developments. Along with core courses in Management, Finance, and Sociology, the HSS department has been offering a core course on Professional Communication in English to the B.Tech. first semester students, along with various other English elective courses on Indian Writings in English, Literature and Urban Experience, Popular Literature, Film Studies, Business Communication, Research and Technical Writing for Engineers, both at the undergraduate and the post-graduate levels. It is also imperative that the students of IIEST, Shibpur should have adequate managerial skills to cope with the recent changes in the social and economic environment of business....<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/HSS">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Human Resource Management</h1>
    		    <p>
    		       The erstwhile Training and Placement of the Institute was rechristened as the Department of Human Resource Department in the year 1994-95. A Professor heads the department with the non-teaching staff assisting him. A Placement Adviser has been appointed since 2016 to facilitate the functioning of the department. The department engages in the following activities:<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/HRM">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Information Technology</h1>
    		    <p>
    		       The Department of Information Technology started its journey in 2000. It is one of the youngest departments of this 163 years old institute. The department has produced excellent IT engineers who are serving in different reputed organizations and pursuing higher studies at various Institutes of Excellence. The department provides state-of-the-art computational facilities for the students. The strength of the department has been in its diverse areas of research in which it has made remarkable contributions...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/IT">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mechanical Engineering</h1>
    		    <p>
    		        The inception of the Mechanical Engineering Department may be traced back to 1921 when a diploma course in Mechanical Engineering started in this Institute. The first-degree course in Mechanical Engineering started on 18th July 1930. Over the last eight decades, the Department of Mechanical Engineering consolidated to its present condition offering 8-Semester Under-graduate (UG) Course with a current intake of 92 students annually and 4-Semester Post-graduate (PG) Course with an intake of 30 students annually. Now after conversion to IIEST, Shibpur the department is also offering a 10-semester Dual Degree Course. The Post-graduate course in the department started in the year 1954. Currently, the PG course is offered in three specializations, namely, Machine Design, Thermal Engineering, and Manufacturing Science, leading to the degree of Master of Technology. The department has state of the art research facilities to carry research in the leading areas of Mechanical Engineering and at present, about 40 research scholars are working for their Ph.D. degree...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ME">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Metallurgy and Materials Engineering</h1>
    		    <p>
    		       The Department of Metallurgy started its journey in the year 1939 with the introduction of a three-year degree course in Metallurgy at the erstwhile Bengal Engineering College affiliated to the University of Calcutta. The department is the second oldest metallurgy department in the country.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/MME">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mining Engineering</h1>
    		    <p>
    		       Mining Engineering as an engineering discipline involves the practice, the theory, the science, the technology, and the application of extracting and processing minerals from a naturally occurring environment. Mining Engineers provide fundamental inputs to the development of society in the form of raw materials required for energy production, steel making, manufacturing of cement and other vital ingredients like copper, aluminum, etc. The job of a Mining Engineer is very diverse and challenging.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/MIN">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mathematics</h1>
    		    <p>
    		       The Department of Mathematics was established along with the inception of this Institute. In its long journey over one hundred and fifty years it has contributed in a large way to the cause of engineering education as well as to the research in mathematics. The Department of Mathematics came to prominence for its commendable contribution to seismology amongst several other areas in which research was carried out. Today the department offers a Master of Science in Applied Mathematics degree which was started in the year 2000 and Ph.D. degree as a part of the Ph.D. program in the Institute. The number of research students obtaining a Ph.D. degree under the supervision of the faculty members of the department and the number of publications in internationally recognized indexed journals have substantially increased in recent years. The number of successful candidates in the National Eligibility Test (NET) for research fellowship from the pass outs of M.Sc. in Applied Mathematics courses has also increased.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/MATHS">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physics</h1>
    		    <p>
    		        The department of  Physics has a century-old past and has come through the era of revolutionary thoughts in the world of physics to the present century of technological revolution. As far back in 1926, Prof. Satyendra  Nath  Bose and Prof. Meghnad Saha, then postgraduate students of Calcutta University used to come to this department to study the original works of  Max. Planck and Albert Einstein. Our library was so rich even at that time under the able leadership of Prof. Bruhl. They also used to do their M.Sc. practical in the laboratory of this physics department. An unforgettable name in the history of the department is Prof. S.S. Boral, who initiated the course on Electronics and Telecommunications which itself finally branched out to be one of the advanced engineering departments of the university. Our department can justifiably feel proud of eminent teachers like Prof. P.K. Chattopadhyay, Prof. B.R. Gupta, Prof. N.C. Mukherjee, Prof. M. Mitra and others who taught the undergraduate engineering students of B.E. College and made a strong base for their further studies. Our present faculty members are also faithfully tracing their paths....<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/PHYS">Read more</a>
    		    </p>
    		    
            </div>
			
            <div class="course_type" id="pg_block" style="display:none;">
                <h1 class="course_name">Department of Aerospace Engineering and Applied Mechanics</h1>
    		    <p>
    		        The department of Applied Mechanics was established as a separate major engineering department in 1947 and subsequently, the Drawing Section was attached to it in the late fifties. Over the years, the department garnered enough human resources in the areas of fluid mechanics and structures. With effect from 2008, the department has been renamed as the Department of Aerospace Engineering and Applied Mechanics. The department conducts a regular postgraduate programme in engineering mechanics and started undergraduate programme in aerospace engineering from academic session 2010 – 11 with an approved intake of 30 students. Since the academic session 2014 - 2015, the department offers 5 years dual degree (B. Tech and M. Tech.) and 4 years B.Tech programme in Aerospace Engineering along with the postgraduate programme in Mechanics of Solids and Mechanics of Fluids.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/AEAM">Read More</a>
    		    </p>
    		    <h1 class="course_name"> Department of Architecture, Town and Regional Planning</h1>
    		    <p>
    		        The Department of Architecture, Town and Regional Planning offers the following programs:<br>Bachelor of Architecture<br>
				   Master of Town and Regional Planning<br> Ph.D. Program<br>All the courses are approved by AICTE, Council of Architecture, New Delhi and Institute of Town Planners', India<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ARCH">Read more</a>
    		    </p>
    		    <h1 class="course_name"> Department of Chemistry</h1>
    		    <p>
    		       The Department of Chemistry, which at present is 122 years old has a glorious past. The Department, besides engaging in undergraduate teaching of Engineering students from its commencement and also Masters of Science in Chemistry from the beginning of this century has a heritage of conducting quality research in various fields. A well-known Physical Chemist, Professor Barodananada Chatterjee became the Head of the Department of Chemistry, Metallurgy and Geology in 1956 and the first Vice-Principal (Academic) of the College. Under his direct supervision and encouragement, faculty members and several research students made significant contributions in soil chemistry, corrosion and chemical exploration of medicinal plants and in coal and petroleum products...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/CHEM">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Civil Engineering</h1>
    		    <p>
    		       Founded in May 1856, the Department of Civil Engineering is as old as the institute. The Department was originally established as the Civil Engineering College, Calcutta with the object of imparting training to the personnel in the field of Civil Engineering for the fulfillment of the need of the Public Works Department of the Government of India. Since then it has been striving to develop and maintain a glorious national tradition of producing quality Civil Engineers for the country. <br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/CE">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Computer Science and Technology</h1>
    		    <p>
    		       The Department of Computer Science and Technology (CST) was established in 1982. Since its inception, the department has played an important role in developing a vibrant and forward-looking academic environment. Currently, the department offers B.Tech, M.Tech, and PhD programs.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/CST">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Earth Sciences</h1>
    		    <p>
    		       Indian Institute of Engineering Science and Technology and the subject Geology possess a century-old relationship. Many eminent geoscientists have offered their teaching and research expertise in the past. Previously teaching in Geology was introduced in this Institute to meet the need of the would-be engineering graduates only in Civil Engineering, Mining Engineering and Metallurgical Engineering branches. The science streams have emerged as an integral part of the Institute offering postgraduate degrees from 2001. The Department of Geology, however, has started to offer independent postgraduate courses in Geology after its separate identity as a science department since 2005. However, the department has evolved to the Department of Earth Sciences to host teaching and research in a wide spectrum of Earth Sciences. This diversification from classical Geology has helped students to undertake research programs in other interesting fields like Hydrogeology with an application of GIS and Remote Sensing, Geophysics, Environmental Geology, Geomorphology, Climatology, Mining Geology.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ES">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electrical Engineering</h1>
    		    <p>
    		       The Department of Electrical Engineering at IIEST Shibpur is one of the oldest and among the best in the country providing dynamic and scholarly environments wherein students learn independently and in collaboration with others to develop a disciplined yet innovative approach to their careers as professional engineers, researchers or teachers. The department offers a 10-semester dual degree (B. Tech. and M. Tech.) course and 4-semester postgraduate M.Tech. degree course in Electrical Engineering. The department also offers research programs leading to a Ph.D. degree. The department started its journey way back in the year 1912-13 and produced its first batch of graduate electrical engineers in 1936 in the erstwhile Bengal Engineering College, Shibpur. Post-independence, when the nascent nation had just started building the power plants that have been instrumental in realizing the dreams of modern India, many of the visionaries, planners and implementers were the students of this department. The postgraduate degree was first offered in 1955 and the first Ph.D. Scholar from the department came out in 1959.... <br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/EE">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Electronics and Telecommunication Engineering</h1>
    		    <p>
    		       The Department of Electronics and Telecommunication Engineering started its journey in July 1965 after its nucleation from the Department of Physics & Telecommunication from the erstwhile Bengal Engineering College. The first batch of Electronics and Telecommunication engineers graduated from the department in 1971. The Master’s program was launched in 1972 and the first batch of Post Graduates passed out in 1974. The Department so far offered a Bachelor of Engineering (B.E.) course in Electronics & Telecommunication Engineering for 4 years (8 Semesters). From the year 2014 onward the Department has started offering 5 years (10 Semesters) Integrated Master of Technology (Dual B. Tech. + M. Tech.) program under the umbrella of the Indian Institute of Engineering Science and Technology...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ETC">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Humanities and Social Sciences</h1>
    		    <p>
    		       The establishment of the Department of Humanities in 1945 reflected a holistic and pragmatic approach to engineering education in the modern era. Renamed as the Department of Humanities and Social Sciences in 2004, the department has always emphasized the need for modernized syllabi in communication skills, knowledge of the society, an economy that is in tune with contemporary developments. Along with core courses in Management, Finance, and Sociology, the HSS department has been offering a core course on Professional Communication in English to the B.Tech. first semester students, along with various other English elective courses on Indian Writings in English, Literature and Urban Experience, Popular Literature, Film Studies, Business Communication, Research and Technical Writing for Engineers, both at the undergraduate and the post-graduate levels. It is also imperative that the students of IIEST, Shibpur should have adequate managerial skills to cope with the recent changes in the social and economic environment of business....<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/HSS">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Human Resource Management</h1>
    		    <p>
    		       The erstwhile Training and Placement of the Institute was rechristened as the Department of Human Resource Department in the year 1994-95. A Professor heads the department with the non-teaching staff assisting him. A Placement Adviser has been appointed since 2016 to facilitate the functioning of the department. The department engages in the following activities:<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/HRM">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Information Technology</h1>
    		    <p>
    		       The Department of Information Technology started its journey in 2000. It is one of the youngest departments of this 163 years old institute. The department has produced excellent IT engineers who are serving in different reputed organizations and pursuing higher studies at various Institutes of Excellence. The department provides state-of-the-art computational facilities for the students. The strength of the department has been in its diverse areas of research in which it has made remarkable contributions...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/IT">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mechanical Engineering</h1>
    		    <p>
    		        The inception of the Mechanical Engineering Department may be traced back to 1921 when a diploma course in Mechanical Engineering started in this Institute. The first-degree course in Mechanical Engineering started on 18th July 1930. Over the last eight decades, the Department of Mechanical Engineering consolidated to its present condition offering 8-Semester Under-graduate (UG) Course with a current intake of 92 students annually and 4-Semester Post-graduate (PG) Course with an intake of 30 students annually. Now after conversion to IIEST, Shibpur the department is also offering a 10-semester Dual Degree Course. The Post-graduate course in the department started in the year 1954. Currently, the PG course is offered in three specializations, namely, Machine Design, Thermal Engineering, and Manufacturing Science, leading to the degree of Master of Technology. The department has state of the art research facilities to carry research in the leading areas of Mechanical Engineering and at present, about 40 research scholars are working for their Ph.D. degree...<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/ME">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Metallurgy and Materials Engineering</h1>
    		    <p>
    		       The Department of Metallurgy started its journey in the year 1939 with the introduction of a three-year degree course in Metallurgy at the erstwhile Bengal Engineering College affiliated to the University of Calcutta. The department is the second oldest metallurgy department in the country.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/MME">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mining Engineering</h1>
    		    <p>
    		       Mining Engineering as an engineering discipline involves the practice, the theory, the science, the technology, and the application of extracting and processing minerals from a naturally occurring environment. Mining Engineers provide fundamental inputs to the development of society in the form of raw materials required for energy production, steel making, manufacturing of cement and other vital ingredients like copper, aluminum, etc. The job of a Mining Engineer is very diverse and challenging.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/MIN">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Mathematics</h1>
    		    <p>
    		       The Department of Mathematics was established along with the inception of this Institute. In its long journey over one hundred and fifty years it has contributed in a large way to the cause of engineering education as well as to the research in mathematics. The Department of Mathematics came to prominence for its commendable contribution to seismology amongst several other areas in which research was carried out. Today the department offers a Master of Science in Applied Mathematics degree which was started in the year 2000 and Ph.D. degree as a part of the Ph.D. program in the Institute. The number of research students obtaining a Ph.D. degree under the supervision of the faculty members of the department and the number of publications in internationally recognized indexed journals have substantially increased in recent years. The number of successful candidates in the National Eligibility Test (NET) for research fellowship from the pass outs of M.Sc. in Applied Mathematics courses has also increased.<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/MATHS">Read more</a>
    		    </p>
    		    <h1 class="course_name">Department of Physics</h1>
    		    <p>
    		        The department of  Physics has a century-old past and has come through the era of revolutionary thoughts in the world of physics to the present century of technological revolution. As far back in 1926, Prof. Satyendra  Nath  Bose and Prof. Meghnad Saha, then postgraduate students of Calcutta University used to come to this department to study the original works of  Max. Planck and Albert Einstein. Our library was so rich even at that time under the able leadership of Prof. Bruhl. They also used to do their M.Sc. practical in the laboratory of this physics department. An unforgettable name in the history of the department is Prof. S.S. Boral, who initiated the course on Electronics and Telecommunications which itself finally branched out to be one of the advanced engineering departments of the university. Our department can justifiably feel proud of eminent teachers like Prof. P.K. Chattopadhyay, Prof. B.R. Gupta, Prof. N.C. Mukherjee, Prof. M. Mitra and others who taught the undergraduate engineering students of B.E. College and made a strong base for their further studies. Our present faculty members are also faithfully tracing their paths....<br>
    		        <a target="_blank" href="https://www.iiests.ac.in/IIEST/AcaUnitDetails/PHYS">Read more</a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="hhttps://www.iiests.ac.in/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">B.Tech</h1>
                <p>The admission to UG  programme is done through the JEE-main examinations for Nine Engineering Departments; namely
                 <br>   <a target="_blank" href="https://www.iiests.ac.in/IIEST/Admission/?id=Mg==">Read more</a>
                </p>
            </div>
            
			<div class="admit_block">
                <h1 class="admit_name">B.Arch</h1>
                <p>The admission to UG  programme is done through the JEE-main examinations for Nine Engineering Departments; namely
                 <br>   <a target="_blank" href="https://www.iiests.ac.in/IIEST/Admission/?id=Mw==">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">M.Tech</h1>
                <p>
				Admission to Post Graduate Courses(M.Tech/ M.Plan) with scholarship through CCMT-2020 (Centralized Counselling for M.Tech./ M.Arch./ M.Plan. Admissions) Website Link http://ccmt.nic.in
                 <br>   <a target="_blank" href="https://www.iiests.ac.in/IIEST/Admission/?id=NA==">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">M.Sc.</h1>
                <p>
				ADMISSION, 2019

					Admission in M.Sc. programmes of IIEST, Shibpur will be done only through Centralized Counseling for M.Sc. Admissions (CCMN 2019). Aspirants are advised to visit www.ccmn.in for admission. Note that for admission through CCMN, Joint Admission Test for M.Sc. (JAM 2019) is mandatory.
                   <br> <a target="_blank" href="https://www.iiests.ac.in/IIEST/Admission/?id=NQ==">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">MBA</h1>
                <p>MBA online admission open for the year 2020-2022
                    <br><a target="_blank" href="https://www.iiests.ac.in/IIEST/Admission/?id=Nw==">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">Ph.D. </h1>
                <p>Ph.D. Admission December Cycle 2019 Date of Admission & Important Instruction to Candidates Regular Institute, Individual and Sponsored research categories
                    <a target="_blank" href="https://www.iiests.ac.in/IIEST/Admission/?id=OA==">Read more</a>
                </p>
            </div>
			
        </div>
		
        <div style="display:none" class="information" id="college_place">
            <h1>Placement</h1>
            <div class="place_block">
                <p>With 16 Departments and 8 Schools IIEST, Shibpur stands today with a student stength of 1500 per year. Apart from the oldest and most diversified engineering institute, it has the longest list of alumni and they are present in leading position of all companies in all parts of the World. IIEST, Shibpur students are always hot cake for the Corporates as they are always game changers there, the true secret is because we focus in all round development of the students. Training and Placement of the Institute was rechristened as Department of Human Resource Department and is headed by one Professor, staffs and a Placement Adviser<br>
                    <a target="_blank" href="https://www.iiests.ac.in/IIEST/Placement">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '18'";
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
					$sql1 = "SELECT * FROM colleges where id = '18'";
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