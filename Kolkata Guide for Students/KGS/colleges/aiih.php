<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | ALL INDIA INSTITUTE OF HYGIENE AND PUBLIC HEALTH - [AIIH & PH], KOLKATA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/colleges.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
	    <script src="../Scripts/select.js"></script>
	    <script src="../Scripts/rem_wm.js"></script>
		<?php include '../PHP/header.php'?>
		<div id="college_info">
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1540361497php24SCtu.jpeg"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="http://aiihph.gov.in/">ALL INDIA INSTITUTE OF HYGIENE AND PUBLIC HEALTH - [AIIH & PH], KOLKATA</a>
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
		        <li id="review" onclick="review();">Reviews</li>
		    </ul>
		</div>
		<div class="information" id="college_about">
		    <h1>ABOUT</h1>
		    <p>Brief Introduction<br>		
All India Institute of Hygiene & Public Health, established in 1932 as a first school of Public Health in South-East Asia region, has been a Pioneer Institute of its kind dedicated to teaching, training, and research in various disciplines of Public Health and allied sciences to ensure capacity building in the area of Public Health. The teaching, training, and research at AIIH&PH have the unique support of its field laboratories, namely, Urban Health Center, Chetla and Rural Health Unit & Training Center, Singur.

The wider canvas available to the Institute has been signified not only by its field laboratories, but also by the diverse disciplines such as Biochemistry and Nutrition, Epidemiology, Health Promotion and Education, Maternal and Child Health, Microbiology, Occupational Health, Public Health Administration, Public Health Nursing, Environmental Sanitation and Sanitary Engineering, Preventive and Social Medicine, Behavioural Sciences, and Statistics operating here.

The achievements and contributions of the Institute have been commensurate with the prime status attached to the Institute by its founders. The list of regular courses offered by the Institute indicates that the Institute has been following a holistic approach to the issue of Public Health.

			<br><br>
	    	    <span style="float:right;">ALL INDIA INSTITUTE OF HYGIENE AND PUBLIC HEALTH - [AIIH & PH], KOLKATA<br>
                Block-JC-27 & 27B, Sector III,<br>
				Bidhannagar, Kolkata-700106<br>
				West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://aiihph.gov.in/about-us/">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Courses</li>
		            <li id="pg" onclick="pg();">Departments</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    
				<h1 class="course_name">DIPLOMA IN DIETETICS</h1>
				<p>Course Objective:<br>
To generate trained Nutritionist and Dietician who will work in hospitals, clinics, nursing homes or any other health facilities and also in organizations where nutritional & dietetics related works including counselling is offered to the clients. They may practice as Dieticians after proper entitlement.
<br>
Duration:
<br>One year full time Post-Graduate Diploma
<br>Eligibility Criteria:
Bachelor degree with either Physiology ; Clinical Nutrition and Dietetics; Food and Nutrition; Nursing or MBBS, BHMS.
				
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/diploma-in-dietetics/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Health Promotion & Education</h1>
				<p>Course Objectives:<br>
				The course of studies leading to the Diploma in Health Promotion & Education has been designed to prepare specialists in Health Promotion & Education with following elements of professional competence:
<br>
					Plan Health Promotion & Education Actions
					Promote evidence-based health promotion and education practices
					Empower Community
					Develop Community
					Market healthy practices
					Advocate or address impact of development on health and vice-versa
					Build partnerships with all stakeholders(individual, other sectors, private, NGO, community, development agencies)
					Promote self and professional development
					Develop other professionals’ competency in health promotion and education
					Manage health promotion and education activities
					Advocate for health promotion and education
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/dhpe/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Health Statistics (DHS)</h1>
				<p>
				Course Objective: <br>
Development of skills with understanding of statistical methods and their applications in assessment research,  administration and solution strategies pertaining to the problems of health and diseases in the community. The candidates being awarded the Diploma in Health Statistics are expected to have acquired capabilities to undertake survey & investigation of health problems; utilisation of official health records and vital statistics; providing essential statistical methodology for assessment and research in medical & health field and to assist of government/NGO led health care system etc.
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/dhs/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Industrial Health</h1>
				<p>Course Objectives:<br>
After successful completion of the course the student will have knowledge and practical skills related to:
Common occupation related health problems, their prevention, control, earlydiagnosis and treatment. 
Health hazards associated with different occupations, basic concepts about their identification and control. 
To assess fitness (both physical and mental) of 3 person for a particular type of occupation.
To plan and manage Occupational Health Services for the persons employed in organized and unorganized sectors.
To plan and manage preventive and promotive health service for the families of the persons employed in different occupations.
Collection, tabulation, analysis and interpretation of the data related to health of people employed in different occupations.
				
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/dih/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Maternity and Child Welfare</h1>
				<p>Course Objectives:<br>
				After completion of this training course students should be able to:<br>
Identity and understand the relationship of different socio-economic, environmental, nutritional and biological factors influencing health of woman of reproductive age group, adolescents and children.
Understand the principles and methods of epidemiology in studying health problems pertaining to women of the reproductive age group, adolescents and children.
Assess health situation of mothers and children of a community and to identify the health needs of the population.
Demonstrate knowledge of the principles and components of Primary Health Care in the field of MCH/RCH.
Apply the knowledge of Epidemiology and Bio-statistics in identification of health problems of the Community, especially of the mothers and children.
Plan, organize, monitor and evaluate the health care services for the women of reproductive age group, adolescents and children.
Diagnose and manage common health problems of mothers, adolescents and children on the basis of clinical assessment and appropriately selected and conducted investigation.
Communicate effectively with individuals, family and community using appropriate tools and techniques of information, education and communication.
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/dmcw/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Diploma in Public Health</h1>
				<p>Course Objectives:<br>
				To develop Public Health Professionals<br>
For handling Administrative &  Management Functions at various levels of Health Care Delivery System in India.
For Planning Implementation & Management of all Public Health Programs including National Health Programs in India.
For Control & Management of Health Care Delivery System, Health Care Organization & Health Sector Reforms in India.
To Control & Manage the emerging Public Health threats in India.
Acquiring managerial / leadership skill in the area of human resource, material and other resource management.
Developing scientific knowledge & skill with attitude for continued learning with latest advances in the field of public health.
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/dph/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">MD (COMMUNITY MEDICINE)</h1>
				<p>Course Objectives:<br>
The objectives of MD (Community Medicine) course is to develop public health specialists equipped with adequate knowledge, requisite skills and appropriate behavioural attributes, for efficient health planning, management, education and research. At the end of the post graduate training course, the students will be able to:
Apply the principles and process of health management to enhance the effectiveness and efficiency of the national health programs.
Plan, organize, implement, monitor or evaluate outcome and impact of health care programmes and services.
Acquire the epidemiological know how and understand the dynamics of transmission of common communicable diseases for necessary measures to prevent and control diseases.
Identify through community diagnosis, the social, cultural, environmental and psychological factors influencing health behaviour and apply these principles in community level intervention programms.
Integrate the know-how of diagnosis and management of health issues with the science of public health practice and expertise of health communication.
Critically appraise National health policies, priorities and approaches.
Plan, organize, implement and evaluate teaching/learning sessions for medical and paramedical personnel. Design research protocols, collect and analysise data on bio-medical, epidemiological, social and health service issues.
Apply knowledge of epidemiology and Bio-statistics to interpret reports and publication.
				
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/mdcommunity-medicine/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Master of Engineering Public Health</h1>
				<p>Course Objectives:<br>
				The basic objective of the course is to impart specialized knowledge to the engineering community in the management of environmental and public health engineering works.<br>
				Duration: <br>
Two Year Post Graduate degree (four semesters)
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/meph/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">MPH (EPIDEMIOLOGY)</h1>
				<p>Course Objectives / Competencies:<br>
				At the end of the post graduate training in MPH Epidemiology the trainee shall be able to:
Recognize the importance of Epidemiology in the context of the health needs of the community and national priorities in the health sector.
Practice Epidemiology in accordance with principles of human subject protection.
Demonstrate sufficient understanding of the basic sciences relevant to Public Health.
Analyse and explain the inter – relationships of environmental, social, cultural, occupational and political factors and systems on health and health care.
Apply descriptive and inferential methodologies and  interpret results of statistical analyses of  epidemiological  studies and  data from health  information systems.
Comprehend and apply epidemiological principles and statistical techniques to disease causation and conduct situational analysis of priority health problems;
Carry out epidemiological investigations – collect, analyse, interpret and use data for decision making.
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/mph-epidemiology/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">M.SC (APPLIED NUTRITION)</h1>
				<p>Course Objectives:<br>
				To develop trained manpower in the field of nutrition and dietetics. Students after the completion of the course will be qualified to work in the hospitals and health care establishments, academic institutions, research institutions, NGOs etc.
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/m-sc-applied-nutrition/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Master in Veterinary Public Health</h1>
				<p>Course Objectives:<br>
				To impart both theoretical and practical instructions to both Veterinary and Medical graduates to enable them to plan, organize, implement and evaluate appropriate public health programs.
To understand and appreciate the ecological proximity of man with animals and the influence of animals on human health and vice-verse.
To take appropriate steps to prevent and control of zoonotic diseases.
To develop man power to prevent and control human and animal diseases of public health importance.
To provide opportunities to take appropriate research in the field of veterinary public health.
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/mvph/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Post Graduate Diploma in Public Health Management</h1>
				<p>Duration:<br>
				One year Post-Graduate Diploma
				
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/pgdphm/">Read more</a>
    		    </p>
				
				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
             	<h1 class="course_name">DEPARTMENT OF BIOCHEMISTRY AND NUTRITION</h1>
				<p>Introduction<br>
Biochemistry and Nutrition Department of All India Institute of Hygiene and Public Health is the first ever department in India to start Diploma in Dietetics course in 1950. M. Sc (Applied Nutrition) course was started in the year 2009 by this department. The Department of Bio-Chemistry and Nutrition is concerned with basic and applied teaching, and research in the science of nutrition. Training is oriented towards the nutrition component of health problems at all levels, viz. individual, family, community and National level. Training is also provided in dietetics, identification of the nutritional needs of a community, assessment of nutritional problems and mobilization of resources to deal with these problems. This department was a part of advanced research and teaching centre of ICMR, particularly with respect to epidemiology of malnutrition among the tribal population and urban slum dwellers.
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-biochemistry-and-nutrition/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF SANITARY ENGINEERING</h1>
				<p>Introduction<br>
    		        The main objective of the department is to create a healthy community through the ways and means to safeguard the environment and protection of the natural ecosystem. The dept. had been involved in various ways with different govt. organisation like PHED, KMDA, KMW&SA, in West Bengal and PHEDs of different Eastern & north Eastern states and also the NGOs in solving the environmental health problems. The dept. had prepared the state of the art report on the arsenic contamination of ground water in west Bengal. It had also organised awareness and motivation campaigns and worked on community based projects to mitigate Arsenic pollution in West Bengal.  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-sanitary-engineering/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF EPIDEMIOLOGY</h1>
				<p>Introduction<br>
    		        The Department of Epidemiology was established along with the formation of the Institute in 1932.The Department is the First Institute/Collegehaving a separate Epidemiology Department in India.


The department has played significant role in the development of the discipline of epidemiology and of community health in broader sense. The department has been pioneer in carrying out General Health Survey in the population of its rural field practice area in Singur, Hooghly District West Bengal.The department had been involved in identifying in the problem of Arsenicosis as a major public health problem in the country. The department has been involved in carrying out many surveys. Lal RB, Roy SC had conducted investigation of epidemic dropsy in 1930.Work was done on chronic arsenic toxicity from drinking waterfrom tubewells in rural West Bengal in 1980s. The Sonagachi Project launched in 1992 by the Dept. in Sonagachi red light area of Kolkata, has evolved into a multi-faceted community effort to empower sex workers (particularly women) in ways that go beyond HIV prevention. The Sonagachi Project has been identified as a World Health Organization (WHO) model.

  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-epidemiology/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF MATERNAL AND CHILD HEALTH</h1>
				<p>Introduction<br>
    		        All India Institute of Hygiene & Public Health, Kolkata was established in 1932 with four sections, namely – Public Health Administration, Malariology & Rural Hygiene, Vital statistics & Epidemiology and Biochemistry & Nutrition. Soon after the inception of the institute – the Countess of Dufferin Fund, which had been working for the development of medical care of women & children, felt the need of developing and expanding the preventive &promotive aspects in the field of Public Health and accordingly the fifth section of the Institute in the name of “Maternal & Child Health” was created.

The Department of Maternal and Child Health is concerned with Teaching, Training, and Research and for delivery of Services for Mothers, Children and Adolescents within the framework of general and reproductive health services. Emphasis is given on teaching & training for the delivery of health services through integration of preventive, promotive, clinical and managerial skills. Obstetric and Paediatric wards and Adolescent health clinic of the neighbouring Medical Colleges and the Urban and the Rural Health Centres of AIIH&PH, Kolkata are extensively used for the practical / field-based hands-on-training in reproductive and child health, adolescent health and family welfare. The research activities of the department primarily focused on reproductive health, safe motherhood, child growth and development & health problems, adolescent health and various aspects of family welfare.  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-maternal-and-child-health/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF HEALTH PROMOTION & EDUCATION</h1>
				<p>Introduction<br>
    		        Health Education is a process which affects changes in health behaviour of people. The training in Health Education at post graduate level is directed to study and understand various factors involved in the process of imparting knowledge and changing attitude and behaviour of the people so as to promote health. It is an integral part of the institute and actively involved in teaching and training activities in the field of health education and promotion; specially the techniques and methods of assessing health needs, educational needs and planning for changing undesirable health behaviour to different post graduate courses run by the institute. Since 1966 the department is conducting a Diploma course in Health Education and has produced more than 1090 trained manpower in Health Promotion and Education.  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-health-promotion-education/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF MICROBIOLOGY</h1>
				<p>The Department of Microbiology of All India Institute of Hygiene & Public Health, Kolkata is involved in the study of fundamental Microbiological problems relating to infectious diseases and with hygiene and public health.

It is probably the First Institute/College having a separate independent Microbiology Section/department in India.  It was established in the year 1932 during British Era. Professor K.V. Krishnan was the First Head of the Department of Microbiology.
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-microbiology/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF OCCUPATIONAL HEALTH</h1>
				<p>Introduction<br>
				After independence scarcity of trained manpower in the field of Occupational and    Industrial Health was felt. To fill in this vacuum the Department was established in the year 1949 and DIH (Diploma in Industrial Health) was started in the Institute in the year 1951. Since then AIIH&PH has been continuously supplying well trained, knowledgeable and competent medical officers to Indian industries.

Today medical doctors with DIH qualifications from AIIH&PH are doing excellent work in innumerable industries: large and small, public and private, coal, cement, mines, oil exploration, paint, ports, air-ports, mines, nuclear establishments, railways etc. Our students get excellent jobs in various industries in this country.
    		          <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-occupational-health/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF PREVENTIVE AND SOCIAL MEDICINE</h1>
				<p>Introduction<br>
    		        The Department of Preventive and Social Medicine was established in 1973 with the objective of developing skilled and motivated workforce in the public health services including training of trainers and course facilitators for planning, organization and evaluation of national health programmes. Thus, ever since the days of its foundation the department has been addressing a wide range of issues on Public Health by its multi-disciplinary functions in the form of research, education and training interventions.  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-preventive-and-social-medicine/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF PUBLIC HEALTH ADMINISTRATION</h1>
				<p>Introduction<br>
    		         The Department ofPublic Health Administration aims to orient the students in publichealth and principles of management as applied to the field ofhealth. It covers various administrative techniques such as healthservice research, planning, organization, evaluation, budget making,health management, system analysis, operational research, healthsector reforms, etc. Besides, providing inputs to all regularcourses, the Department conducts a Diploma course in Public Health(DPH) for medical graduates that happens to be the oldest of its kindin India. The DPH course was set up in1932 to develop much neededpublic health professionals trained in planning, implementation andmanagement of public health programmes for the rapidly expandinghealth services in the country and abroad. <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-public-health-administration/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF PUBLIC HEALTH NURSING</h1>
				<p>Introduction<br>
    		        The Department of Public Health Nursing was established in 1953 todevelop nursing manpower for India and other Asian and Africancountries for assuming the responsibilities of community healthnurses, nursing supervisors, specialist nurses, consultants(nursing), trainers (nursing) and administrators in a wide variety ofprofessional settings in the field of community health nursing. Thedepartment conducted a regular course, namely, Certificate of PublicHealth Nursing (CPHN) from 1953 to 1972. The course was reframed asDiploma in Public Health Nursing (DPHN) from 1972 and continued up to2004. In 2004-05, it was again reframed as Diploma in NursingEducation and Administration [DNEA (CH)] and continued up to2012-2013. Thereafter, the course has been discontinued forrealignment with the INC guidelines. Till date, the total number ofnursing personnel trained by the department, under the regularcourses, is 1434.  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-public-health-nursing/">Read more</a>
    		    </p>
				
				<h1 class="course_name">DEPARTMENT OF STATISTICS</h1>
				<p>Introduction<br>
    		        Accurate,comprehensive, high-quality data and statistics are central elementsof evidence-based public health policy and therefore the sectionof Vital Statistics and Epidemiology was established in the beginningin All India Institute of Hygiene & Public Health. The increasingapplication of the statistical methods in data analysis and researchrequired biostatistics to be separated from the Epidemiology as aseparate section, the Section of Statistics.  <br>
    		        <a target="_blank" href="http://aiihph.gov.in/department-of-statistics/">Read more</a>
    		    </p>
            </div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
            
            <div class="admit_block">
                <h1 class="admit_name">ADMISSION NOTICES</h1>
                <p>
			<br><br>
                    <a target="_blank" href="http://aiihph.gov.in/admission-notices/">Read more</a>
                </p>
            </div>	
			
        </div>
		
        <div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '5'";
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
					$sql1 = "SELECT * FROM colleges where id = '5'";
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
		<br>
		<?php include '../PHP/menu.php'?>
		<?php include '../PHP/search.php'?>
	</body>
</html>