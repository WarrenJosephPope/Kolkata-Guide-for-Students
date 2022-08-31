<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide |Guru Nanak Institute of Dental Science and Research</title>
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
		    <img class="bg" src="https://www.admissionadvice.in/medical/wp-content/uploads/2018/05/Guru-Nanak-Institute-Of-Pharmaceutical-Science-Technology.jpg"></img>
		     <img class="logo" src="data:image/jpeg;base64,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"></img>
		     <span id="college_name"><a target="_blank" href="http://gnidsr.ac.in/">Guru Nanak Institute of Dental Science and Research</a>
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
		    <p>  Our mission is to generate a stimulating academic environment and develop GNIDSR as a centre of excellence in India and thus play a worthy role in contributing to our national objective of 'Health for all'.

It is the mission of Guru Nanak Institute of Dental Sciences & Research (GNIDSR) to set high standards in dental education by fostering leadership values and imparting high degree of professional skills.


 
The Institute shall provide sound clinical and biotechnical education through highly qualified and experienced faculty to churn out excellent clinically competent dental professionals.


			<br><br>
	    	    <span style="float:right;">Guru Nanak Institute of Dental Science and Research<br>
                157/F Nilgunj Road, Panihati <br>
		         Sodepur, Kolkata-700114<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://gnidsr.ac.in/mission.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Departments</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">ORAL MEDICINE & RADIOLOGY</h1>
    		    <p>This is the department which receives the patient initially as he walks into the dental college for treatment . Their primary function is the listen to patient symptoms ( eg. dental pain ) and do a basic examination and if required prescribe medication. Based on the primary checkup they also make a treatment plan or sequel for the patient ,and subsequently refer him/her to the respective departments for specialized treatments.

The Radiology wing of this department receives requests for dental X rays ( IOPA X RAY ) and Full Jaw X rays ( OPG X RAY ) from various departments of the college. They take and process these xrays , and also primarily describe or report these xrays. The department is planning to install the Cone Beam Computed Tomography Machine ( CBCT Machine ) very soon in the future.
    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/oralmedicine-radiology.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">ORAL & MAXILLOFACIAL SURGERY</h1>
    		    <p>
					This department primarily deals with the surgical work carried out by dental surgeons and oral & maxillofacial surgeons. Teeth which are significantly affected by cavities or gum disease , may not be restorable and henceforth referred to this department for removal / extraction. Apart from the patients requiring dental extractions , patients who need biopsy , surgical removal of dental cysts , ulcers , lumps and growths in the oral cavity and as well as in the head-neck regions are referred to this department. Apart from the above , this department also caters as a primary care centre for medical emergencies and facial trauma & oral cancer in the dental college , due to the availability of medical monitoring equipment being present here.

The department has an attachment and MOU with Sagar Dutta Medical College and Hospital , Kamarhati ( A West Bengal Government Medical College approved by MCI ) for admitting and operating its patients under general anesthesia. The patients with fractures of jaw ( eg. by road traffic accidents ) , dental cysts , jaw tumors including oral cancer , congenital facial deformities are treated by this department through this hospital attachment. The postgraduates of this department have rotatory postings in various super speciality areas like plastic surgery , neurosurgery and oncosurgery.
    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/maxillofacial-surgery.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">CONSERVATIVE DENTISTRY & ENDODONTICS</h1>
    		    <p>
				This department deals with procedures which save or restore a damaged tooth , avoiding its extraction or removal. Teeth affected by dental cavities cause severe dental pain , sensitivity and food lodgment . This department specializes in dental fillings , aesthetic restorations and root canal treatment of these cavity affected teeth.

With the advent of new technologies , the role of this department has expanded significantly and the root canal treatment done by the endodontics division here is the most popular treatment sought after by the patients , as it saves a significantly damaged tooth.

    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/conservative-denistry.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">PERIODONTOLOGY</h1>
    		    <p>This department caters to diagnosing and treating gum ( also called periodontium ) diseases affecting the tooth and jaw. Teeth are affected by gum disease due to improper oral hygiene, use of different forms of tobacco products, and also due to common medical conditions like diabetes and osteoporosis.

They specialize in procedures like ultrasonic dental scaling ( routine cleaning of teeth ) and flap surgery ( advanced surgical cleaning of gums ) , which restore gum health. This department is primarily responsible for teaching and training the patients of maintaining their oral hygiene by good brushing practices and other aided dental products. They work in closed association with public health dentistry department for inculcating good oral hygiene habits among the masses.
    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/periodontics.php">Read more</a>
    		    </p>
					

				<h1 class="course_name">PROSTHODONTICS AND CROWN & BRIDGE</h1>
    		    <p>This departments deals with the replacement of teeth by removable and fixed methods. The patients who are completely or partially without teeth ( edentulous ) are unable to chew properly , thereby affecting their general health and nutrition. These patients are evaluated by this department and based on their age , remaining teeth and gum condition , economic affordability and general health are advised for a removable replacement or a fixed replacement.

The removable replacement , also known as dentures (complete & removable) and the fixed replacement , also known as crown and bridge are then subsequently fabricated by this department for these patients. The dental laboratory works in close association with this department for fabrication of these dentures and crown and bridge.


    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/prosthodontics.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">PAEDIATRIC AND PREVENTIVE DENTISTRY</h1>
    		    <p>As the name suggests , this department deals with treatment of all kinds of dental ailments in children from infants to approximately 13 years of age. Children need special care while treating dental problems as they are fearful and apprehensive to the perception of pain during dental treatment. Apart from this , being there formative years , the goal of this department is to inculcate good oral hygiene practices among children , for a better oral health of society in future.

This department treats all kinds of dental cavities and gum diseases in milk teeth of children. They perform extraction of milk tooth , dental fillings , root canal therapy ( known as pulpectomy here ) and teeth cleaning for the children. The treatment of the above ailments is done in such a manner that the environment is playful and little children can correlate. Every treatment is explained and demonstrated to the children in ways and words which they can understand. This department also works in close association with the Orthodontics department , to diagnose and monitor growth related problems of children.
    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/paediatric.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">ORTHODONTICS & DENTOFACIAL ORTHOPAEDICS</h1>
    		    <p>This department deals with diagnosing , monitoring and treating facial growth related issues and malalignment of teeth. Improper growth patterns in children and presence of deleterious habits like thumb sucking and mouth breathing can lead to patients having malaligned teeth placed in a haphazard manner in the jaws. These malaligned teeth and jaws are cosmetically poor and lower the patients self confidence as time progresses. These malaligned teeth are ineffective in chewing and fall prey to gum disease faster.

This department caters to the above mentioned misalignment majorly by providing fixed braces ( orthodontic brackets ) to these patients. Some minor deformities are also treated by removable appliances with springs in them to correct rotations and overlapping of tooth.
    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/orthodontics.php">Read more</a>
    		    </p>
				
				<h1 class="course_name">ORAL PATHOLOGY & MICROBIOLOGY</h1>
    		    <p>This departments deals with diagnosing pathological specimens surgically removed from patients. The ulcers , lumps and red and white lesions of the oral cavity removed from the patients need to be evaluated for presence of cancer , describing type of tumor and spread and grading of the lesion.

This department use microscopic and immunohistochemistry evaluation to prepare and diagnose the specimens provided to them and formulate a biopsy report. Apart from this the department individually performs some modern diagnostic tests like brush biopsy for oral cancer screening.


    		          <br>
    		        <a target="_blank" href="http://gnidsr.ac.in/oral-pathology.php">Read more</a>
    		    </p>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
           
            <div class="admit_block">
                <h1 class="admit_name">Admission Rules & Regulations</h1>
                <p><br>
				BDS Course of studies<br>

The candidate must have completed the age of 17 years on or before 31st December of the year of admission to the BDS course. The candidate must have passed Higher Secondary Examination or equivalent at 10+2 level from a recognized council/board and passed Physics, Chemistry, Biology & English individually, and obtained a minimum of 50% marks taken together in Physics, Chemistry and Biology, will be eligible for admission. Mere fulfilling eligibility criteria do not guarantee admission. Admission will be solely based on NEET and university admission guidelines.<br>

MDS Rules & Regulations<br>

For MDS Course of studies: Candidate should have passed BDS from Govt. India / DCI recognized College & University Candidate should have permanent registration from Dental Council of India/State Council. Mere fulfilling eligibility criteria does not guarantee admission. Admission will be solely based on the merit in NEET as per preference given in the application.

 
				<br>

                    <a target="_blank" href="http://gnidsr.ac.in/admission-faq.php#">Read more</a>
                </p>
            </div>
			
			
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Clinical Teaching And Training</h1>
            <div class="place_block">
                <p>Teaching and Training students for a dentistry professional course should encompass all around exposure to both clinical and theoretical aspects. Any one aspect without the other , would produce unsatisfactory doctors for our future society. Hence in GNIDSR , our focus is on CUMALATIVE AND SKILL BASED LEARNING.<br>

Some important aspects of our teaching methodology are –

ENCOURAGE USE OF ELECTRONIC RESOURCES BASED CLASSES / SEMINARS FOR BETTER UNDERSTANDING OF THE SUBJECTS.
USE OF PATIENT TREATMENT VIDEOS FOR BETTER UNDERSTANDING OF CLINICAL PROCEDURES.

 
REGULAR “ DOUBT CLEARING “ DISCUSSIONS WITH LIMITED GROUP OF STUDENTS , SPECIALLY IN CLINICAL SUBJECTS.
DEMONSTRATION OF SPECIAL CLINICAL SKILLS IN MEDICAL SUBJECTS IN SMALL GROUP , FOLLOWED BY SUPERVISED EVALUATION OF LEARNING
DEMONSTRATION OF SPECIAL CLINICAL SKILLS IN DENTAL CHAIR SIDE IN SMALL GROUPS FOLLOWED BY CONTINOUSLY MONITORED EVALUATION OF TREATMENT OUTCOMES.

 
USE OF PHANTOM LABS AND DUMMY MODELS TO TRAIN SKILLS OF CONSERVATIVE DENTISTRY AND CARDIOPULMONARY RESUSCITATION.
APART FROM YEARLY INTERNAL ASSESSMENTS , CONDUCTION OF REGULAR CLASS TEST FOR LIMITED CHAPTERS TO ACCESS PROGRESS OF STUDENT


				<br>
                    <a target="_blank" href="http://gnidsr.ac.in/teaching-method.php">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '15'";
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
					$sql1 = "SELECT * FROM colleges where id = '15'";
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