<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | The Neotia University (TNU), Kolkata</title>
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
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1510053736phpqAK6A0.jpeg"></img>
		     <img class="logo" src="https://educationiconnect.com/wp-content/uploads/2016/12/The-Neotia-University-Fee-Structure-2017-18.png"></img>
		     <span id="college_name"><a target="_blank" href="https://www.tnu.in/">The Neotia University (TNU), Kolkata</a>
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
		    <p>History<br>		
			The family of the Founder and Chancellor Mr. Harshavardhan Neotia were copromoters of the cement giant, Ambuja Cement Ltd. Ambuja Neotia is one of the most prominent and respected corporate house headquartered in Kolkata with its forte in real estate, hospitality, healthcare and education. The group, under the stewardship of Mr. Harshavardhan Neotia has been responsible for landmark projects in and around Kolkata.

			Ambuja Neotia Group, with a strong sense of social commitment, extends its capabilities towards the development of education. The Neotia family started its journey in education with Neotia Institute of Technology, Management and Science (NITMAS), previously known as Institute of Technology and Marine Engineering (ITME), a college established in 2002, affiliated to the then West Bengal University of Technology, which is now known as Maulana Abul Kalam Azad University of Technology (MAKAUT). The Neotia University (TNU) was established vide the West Bengal State Government Act XXIII of 2014. Though TNU is relatively new in its present configuration, it has its antecedents in the 17 years old institution.

			<br><br>
	    	    <span style="float:right;">The Neotia University (TNU), Kolkata<br>
              Jhinger Pole, Diamond Harbour Rd,<br>
			   Sarisha, Kolkata-743368<br>
			  West Bengal ,India.<br>
                </span><br>
		        <a target="_blank" href="https://www.tnu.in/about-us/history">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Academics</li>
		            <li id="pg" onclick="pg();">Academics</li>
		            <li id="bed" onclick="bed();">Academics</li>
		            <li id="phd" onclick="phd();">Academics</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
				
				<div class="course_block">
				<h1>School of Engineering & Applied Science</h1>
                <h1 class="course_name">B.Tech in Robotics and Automation</h1>
                <p>KNOW MORE ABOUT THE COURSES
					<br>
                    <a target="_blank" href="https://www.tnu.in/academics/b-tech-m-tech/robotics-engineering">Read more</a>
                </p>
				
				<h1 class="course_name">B.Tech in Electrical Engineering With Specialization in Renewable Energy/ Power System</h1>
                <p>Electrical Engineering is a field of engineering that involves the study and application of electricity, electronics, and electro-magnetism. The course covers the entire aspect of electrical energy generation, storage and transmission, circuit analysis, electromagnetic machines and drive system, power system, control system, power electronics, utilization etc. Students will learn about the basic fundamentals to advanced technical concepts, tools and equipments like simple voltmeter to a top end analyser, to manufacturing software with real-world applications.

Renewable Engineering (solar and wind energy) and Power System has evolved over the years and it includes courses related to power, control, instrumentation, electrical machines, etc. along with courses on various aspects of electrical energy generation, storage and transmission.
					<br>
                    <a target="_blank" href="https://www.tnu.in/academics/b-tech-m-tech/electrical-engineering-with-specialization-in-renewable-energy-power-system">Read more</a>
                </p>
				
				<h1 class="course_name">B.Tech in Computer Science and Engineering With Specialization in Cyber Security/ Data Analytics/ AI & ML</h1>
                <p>Computer Science and Engineering seems to have become the most popular course in this century for engineering aspirants. With rapid rise in cyber-terrorism, misuse of social media and internet usage, our technology security experts think that India is yet not well equipped to handle these threats. Cyber Security market to touch $32 billion by 2025. Expansion will require 1 million (10 lakh) Cyber Security professionals. Bengal hopes to train one lakh Cyber Security experts from the state. - The Telegraph, Saturday, March 17, 2018. Data analytics refers to qualitative, quantitative and statistical techniques & process used to describe and illustrate, condense and recap, and probe large and varied data which is extricated and classified to pinpoint and figure out behavioural uncover hidden patterns, market trends, customer preferences, unknown correlations and other useful information to intensify productivity & can be used to assist organizations for taking more-acquainted business decisions and also help scientists and researchers to verify or disprove scientific models, theories and hypotheses


					<br>
                    <a target="_blank" href="https://www.tnu.in/academics/b-tech-m-tech/computer-science-and-engineering-with-specialization-in-cyber-security-data-analytics-ai-ml">Read more</a>
                </p>
				
				
				<h1 class="course_name">M.Tech in Computer Science and Engineering With Specialization in Cyber Security/ Data Analytics/ AI & ML</h1>
                <p>M.Tech in Computer Science & Engineering with choice based specialization in Cyber Security/ Data Analytics/ AI & ML is a specialized program aimed at providing the student with indepth knowledge of two key domains in Computer Science and Engineering. Cyber Security, Data Analytics and AI & ML has acquired widespread acceptance and adoption among enterprise business applications and research community. Cyber world is facing new challenges every day from hackers and malicious programmers across the globe. Cyber Security is a broad aspect and has got its application in all forms of data related operations. Data analysis is actively used for information processing and management by industry practitioners and scientific community who are interested in creating a commercial product for conceptual data analysis or developing content management applications.


					<br>
                    <a target="_blank" href="https://www.tnu.in/academics/b-tech-m-tech/m-tech-computer-science-and-engineering-with-specialization-in-cyber-security-data-analytics-ai-ml">Read more</a>
                </p>
				
				</div>
				
				<div class="course_block">
				<h1>School of Maritime Studies</h1>
				<h1 class="course_name">B.Tech in Marine Engineering</h1>
				<p>KNOW MORE ABOUT THE COURSES
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/maritime-studies/b-tech-in-marine-engineering">Read More</a>
				</p>
				
				<h1 class="course_name">B.sc In Nautical Science</h1>
				<p>A sailor’s ability to navigate a ship on the oceans for making from port to port and along the coastlines of the world is based on his/ her knowledge of Nautical Science. It is the precise study of the principles and practices of operating various types and sizes of vessels, some of which are highly specialized and state- of-the art in Inland waters, Coastal areas and on the high seas, and includes topics such as navigation, ship stability and ship handling, cargo-work, propulsion, and meteorology, to name a few. TNU is also one of the few colleges in Eastern India that can boast of an in-house, high-tech Ship-inCampus with advanced bridge simulation facilities. This novel infrastructure facility, built in compliance with international standards house original ship equipment in order to give budding Marine Engineers and Nautical Science cadets a hands-on experience of what a naval career entails.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/maritime-studies/b-sc-in-nautical-science">Read More</a>
				</p>
				</div>
				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
             	<div class="course_block">
				<h1>School of Agriculture & Allied Science</h1>
				<h1 class="course_name">B.Tech In Agriculture Engineering</h1>
				<p>It consists of elements of mechanical, civil, electrical, chemical and computer engineering beside agriculture science that includes agronomy, soil science, horticulture, animal husbandry, floriculture, aquaculture, silviculture, etc.It is the study of engineering, which deals with the construction, design, and improvement of farming equipment and machinery related to agriculture crop production(farm mechanization) and post-harvest processing, development of irrigation & drainage infrastructure, soil & water conservation, controlled environment and renewable energy. In shortit integrates technology into farming. It designs and builds agricultural infrastructure such as water reservoirs, warehouses, dams, and other structures. Alongside developing the soil / water conservation structures, the study also helps in innovation of various farming equipment and techniques. Some agricultural engineers are developing new variety of bio-fuels from non-food resources like algae and agricultural wastes / residues. Such fuels could economically and sustainably replace gasoline without risking the food security.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/school-of-agriculture-allied-sciences/b-tech-agriculture-engineering">Read More</a>
				</p>
				
				<h1 class="course_name">B.Sc (Hons.) Agriculture</h1>
				<p>Agriculture plays a vital role in India’s economy. 54.6% of the population is engaged in agriculture and allied activities (census 2011) and it contributes 17% to the country’s Gross Value Added (Current price 2014-15, 2011-12 series). India ranks second worldwide, in farm output. India is the largest producer of milk, jute and pulses, and has the world’s second largest cattle population with 170 million animals in 2011. It is the second-largest producer of rice, wheat, sugarcane, cotton and groundnuts as well as the second-largest fruit and vegetable producer, accounting for 10.9% and 8.6% of the world fruit and vegetable production, respectively according to Annual Report 2016-17, Govt. of India. 4-year B.Sc. in Agriculture programme consists of topics such as agricultural science, use of modern scientific equipment and techniques in agriculture, land surveying, soil science, water resource management, animal and poultry management, basics of biotechnology etc.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/school-of-agriculture-allied-sciences/b-sc-hons-in-agriculture">Read More</a>
				</p>
				
				<h1 class="course_name">Bachelor of Fisheries Science</h1>
				<p>India holds seventh position in the export of fish in the world and is the fourth largest producer of fish in the world. The living of over 500 million people in developing countries depends on fisheries and aquaculture (as in sarvgyan.com). TNU’s Bachelor of Fisheries Science course involves advanced knowledge and skill in catching, processing, marketing and conservation of fish, molluscs (including oyster’s abalone, mussels and scallops) and crustaceans (shrimps, prawns, freshwater and marine crayfish) and aquatic plants such as sea weeds. This programme will include curriculum designed by academic experts, research and hands-on experiential training to provide students with real-life work experience.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/school-of-agriculture-allied-sciences/bachelor-of-fisheries-science">Read More</a>
				</p>
				</div>
				
				
				<div class="course_block">
				<h1>School of Life Science</h1>
				<h1 class="course_name">B.Sc (Hons.) in Biotechnology</h1>
				<p>TNU’s B.Sc in Biotechnology courses is designed to provide students with a strong fundamental idea and advanced study of cell and tissue culture, genetics, bio-medicinal and non-medicinal products, pharmaceuticals, bioprocesses, new technologies and engineering. The designed curriculum, laboratory facilities, research based teaching, projects, and opportunities to get trained in leading biotechnological firms will make students in this programme competent for both industrial sector and academia.

As the global population grows, scientists look to biotechnologists for solutions to various problems like adequate food, infant mortality and sustainable agriculture. Biotechnologists tap into the resources available now to improve the quality of life.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/life-sciences/b-sc-hons-biotechnology">Read More</a>
				</p>
				
				<h1 class="course_name">M.Sc in Biotechnology</h1>
				<p>TNU’s M.Sc in Biotechnology is the field that involves the use of living organisms and bioprocesses in engineering, technology, medicine and other fields requiring bio products. TNU’s Applied Microbiology is the study of microorganisms such as bacteria, viruses, algae, fungi, and some types of parasites, to understand how these organisms live, grow, and interact in/with their environments. These programme will include curriculum designed by academic experts and shall facilitate research and hands-on experiential training in well-equipped laboratories to provide students with real-life work experience. The aim of such basic research is to increase scientific knowledge
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/life-sciences/m-sc-in-biotechnology-applied-microbiology">Read More</a>
				</p>
				
				<h1 class="course_name">Bachelor in Physiotherapy (BPT)</h1>
				<p>Physiotherapists assist doctors in rehabilitating patients from a state of instability due to genetic defect, accident or illness. Physiotherapists have proper knowledge of human anatomy, physiology, pathology, pharmacology, psychology, medical and surgical conditions, biomechanics, disability prevention and rehabilitation.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/life-sciences/bachelor-in-physiotherapy-bpt">Read More</a>
				</p>
				
				<h1 class="course_name">Bachelor of Optometry (BOPT)</h1>
				<p>Optometry is a study of human eye and matters related to its nature. The program aims at imparting skills and knowledge in the correction of refractive conditions of the eye, prescription of glasses, in designing and fitting contact lenses, aniseikonic lenses, low visions aids, in the diagnosis and orthoptic treatment of oculomotor nerve malfunctions, ocular hygiene, etc.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/life-sciences/bachelor-of-optometry-bopt">Read More</a>
				</p>
				
				<h1 class="course_name">Bachelor in Medical Laboratory Technology (B.M.L.T)</h1>
				<p>B.M.L.T (Bachelor in Medical Laboratory Technology) is one of the largest and impoverished fields in the modern healthcare industry. With the advancement of medical science, the physician requires the help of medical laboratories and skilled employees for the treatment of rapidly growing diseases. B.M.L.T is a graduate medical lab technologist program, the B.M.L.T course is of 3 years, and its syllabus is divided into 6 semesters, it is a career oriented course.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/life-sciences/bachelor-in-medical-laboratory-technology-b-m-l-t">Read More</a>
				</p>
				</div>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
               <div class="course_block">
				<h1>School of Pharmacy</h1>
				<h1 class="course_name">Bachelor in Pharmacy (B.Pharm)</h1>
				<p>B.Pharm is an undergraduate degree course in the field of Pharmacy education. In this course, the students study about drugs and medicines, pharmaceutics, etc. Students will graduate with improved skills and gain a competitive edge in the job market, making them highly desirable to employers.


					<br>
					<a target="_blank" href="https://www.tnu.in/academics/school-of-pharmacy/bachelor-in-pharmacy-b-pharm">Read More</a>
				</p>
				
				</div>
				<div class="course_block">
				<h1>School of Hospitality & Culinary Art</h1>
				<h1 class="course_name">B.Sc in Hospitality Administration (With Swiss Diploma)</h1>
				<p>KNOW MORE ABOUT THE COURSES
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/hospitality/b-sc-in-hospitality-administration-with-swiss-diploma">Read More</a>
				</p>
				
				<h1 class="course_name">B.Sc in Hospitality Administration</h1>
				<p>The Neotia University (TNU) is a renowned pedestal for education in eastern India. The Ambuja Neotia group being already a hospitality major with its hotels, resorts and restaurants, it is but natural that the expertise gained over the years is well utilized in hospitality education and training. The School of Hospitality and Culinary Art (SHCA) is located inside the sprawling TNU campus. SHCA offers courses in B.Sc in Hospitality Administration with/without Swiss Diploma and B.Sc in Culinary Arts. In keeping with the established high standards of the group, the facilities at SHCA can be compared to the best in the world. The food production laboratory, the training restaurants, the classrooms, and the central library – all are commissioned with state-of-the-art equipment and provide maximum comfort to both learner and trainer. The team of faculty can be rated as one of the best in the country with each one having quality experience in both industry and teaching. Another useful advantage a student may gain is the oncampus residential facility. Twin sharing accommodation with four nutritious meals in a day, coupled with the serene university environment, provides a student with a unique experience of comprehensive learning.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/hospitality/b-sc-in-hospitality-administration">Read More</a>
				</p>
				
				<h1 class="course_name">B.Sc. in Culinary Arts</h1>
				<p>Culinary Arts prepares students to excel within the kitchen as culinary professionals. TNU’s degree aims at providing fundamental education in kitchen operation, food and beverage operation, management, production and service; food science, sanitation, etc. Graduates also gain strong knowledge of business and its application within the hospitality industry. TNU’s students will be trained in well-equipped laboratories such as food production, cold kitchen, food, beverage and confectionary service supervised by experienced faculty members and trained technicians to help students in learning by doing. The management skills that are taught can be applied in various positions in hotels, resorts, clubs, bars, restaurants and cafeterias, even those outside of the culinary arts.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/hospitality/b-sc-in-culinary-arts">Read More</a>
				</p>
				</div>
			</div>
            <div class="course_type" id="phd_block" style="display : none;">
              
			  <div class="course_block">
				<h1>School of Legal Studies</h1>
				<h1 class="course_name">Integrated BBA with LLB (Hons.)</h1>
				<p>Integrated BBA/ B.A with L.L.B. is an undergraduate Law course of 5-years duration. Students here will gain valuable insight and specialize in in-depth knowledge of law and legislature along with commerce, humanities and business administration that is essential in the field of management. This integrated course is a complete program to systematically groom a student into a graduate who is ready for the industry with practical knowledge of managerial and judiciary skills or will appear for the national level entrance examination such as CLAT, LSAT, AILET and SET for a rewarding career.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/law-management/integrated-bba-with-llb-hons-hons">Read More</a>
				</p>
				
				<h1 class="course_name">Integrated B.A with LLB (Hons.)</h1>
				<p>Integrated BBA/ B.A with L.L.B. is an undergraduate Law course of 5-years duration. Students here will gain valuable insight and specialize in in-depth knowledge of law and legislature along with commerce, humanities and business administration that is essential in the field of management. This integrated course is a complete program to systematically groom a student into a graduate who is ready for the industry with practical knowledge of managerial and judiciary skills or will appear for the national level entrance examination such as CLAT, LSAT, AILET and SET for a rewarding career.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/law-management/integrated-b-a-with-llb-hons-hons">Read More</a>
				</p>
				</div>
				
				<div class="course_block">
				<h1>School Humanities,Management & Social Sciences</h1>
				<h1 class="course_name">BBA with Specialization in Retail Management</h1>
				<p>KNOW MORE ABOUT THE COURSES
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/humanities/bba-with-specialization-in-retail-management">Read More</a>
				</p>
				
				<h1 class="course_name">Bachelor in Hospital Management (BHM)</h1>
				<p>Bachelor in Hospital Management involves leadership, management and administration of hospitals, hospital networks and healthcare systems. The Ambuja Neotia group with an intent to reach out to the largest number of people operates The Bhagirathi Neotia Woman Child Care Centre , several branches of the infertility treatment unit Genome-The Fertility Centre spread across West Bengal and neighbouring states, the multispecialty hospital, Neotia Getwel Healthcare Centre in Siliguri and outlets of Neotia Mediplus, diagnostic centres in Kolkata. TNU’s advanced curriculum will provide students with an extensive knowledge and skill to carry out the administrative operations of clinical and support service departments, by developing managerial, teamwork, leadership, analytical, critical thinking, problem-solving, research-evaluating and IT skills.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/humanities/bachelor-in-hospital-management-bhm">Read More</a>
				</p>
				
				<h1 class="course_name">B.Sc (Hons.) in Applied Psychology</h1>
				<p>Note that TNU follows a Choice Based Credit System (CBCS) and students are expected to earn about 20% credit from course those are not directly related to psychology discipline.

The course attempts to nurture action oriented thinking. The students will be groomed to meet challenges in all domains of life. The aim of the course is to inculcate in students the spirit of autonomy, empathy, sensitivity and creativity; the ability to think freely without being bounded by structures and hegemonies. The students will be trained to be productive, independent thinkers and activists, who are ready to bring about positive changes in the society. To inculcate in them respect for fellow human beings and for individual differences. The uniqueness of the course is its focus on experiential learning, hands-on training and team working.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/humanities/b-sc-hons-in-applied-psychology">Read More</a>
				</p>
				
				<h1 class="course_name">B.A (Hons.) in English with Specialization in Mass Communication</h1>
				<p>TNU’s B.A. (Hons.) in English with Specialization in Mass Communication Programme is designed to provide students with a strong background of the language domain and develop skills in which these would be widely applicable to various relevant fields. Through a rigorous and combined curriculum of literature, language and linguistics, graduates will be proficient in literary analysis and in areas ranging from Media Ethics, Media Policy, Advertisement, Public Relation, Print Media, Online Media, Electronic Media and Production Skills. This programme also facilitates skills like Editing, Translation, Film Appreciation, and Journalism; all of which are highly prized by employers in almost every profession. Students will be committed to providing the public with media content that meets local and regional needs and is global in outlook and standards. The M.A. English Programme at TNU provides an indepth understanding of different literary genres, texts and popular traditions in the English language as also in English translations.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/humanities/b-a-hons-in-english-with-specialization-in-mass-communication">Read More</a>
				</p>
				
				<h1 class="course_name">B.Sc in Media Science</h1>
				<p>Media science is a broad term which encompasses mass communication, PR, Journalism and many more related fields. Media studies have a big role to play since it is directly linked with information handling and framing mindsets along with opinion of the masses. Across the globe there is immense scope of information handling and reporting. So as soon as someone chooses the career path of media studies, he or she should be prepared to take the responsibility of disseminating information and handling it in an unbiased way.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/humanities/b-sc-in-media-science">Read More</a>
				</p>
				
				<h1 class="course_name">M.Sc in Applied Psychology</h1>
				<p>The course attempts to nurture action oriented thinking. The students will be groomed to meet challenges in all domains of life. The aim of the course is to inculcate in students the spirit of autonomy, empathy, sensitivity and creativity; the ability to think freely without being bounded by structures and hegemonies. The students will be trained to be productive, independent thinkers and activists, who are ready to bring about positive changes in the society. To inculcate in them respect for fellow human beings and for individual differences. The uniqueness of the course is its focus on experiential learning, hands-on training and team working.
					<br>
					<a target="_blank" href="https://www.tnu.in/academics/humanities/m-sc-in-applied-psychology">Read More</a>
				</p>
				
				</div>
             </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admission</h1>
            <a class="admit_details_button" href="https://www.tnu.in/admissions/admission-process">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Registration Details</h1>
                <p>TNU welcomes students to an enriching and joyful learning experience. A few easy clicks to secure your place at the University.
			<br><br>
                    <a target="_blank" href="https://www.tnu.in/component/k2/item/299-registration-details">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">Entrance Test Guidelines</h1>
                <p>You are now ready to take the Know-How Entrance Test, after successfully completing the Registration and Payment procedure.
<br>
Online Entrance Test can be taken Anytime Anywhere by accessing the link sent to you on your registered email id.
<br>
Centre Based Entrance Test  can be taken by reaching either of the below given addresses from Monday – Friday in between 11 am to 4 pm.
			<br><br>
                    <a target="_blank" href="https://www.tnu.in/component/k2/item/301-entrance-test-guidelines">Read more</a>
                </p>
            </div>
			
			
			<div class="admit_block">
                <h1 class="admit_name">International Admission Process</h1>
                <p>Students from Foreign Countries (NEPAL, BHUTAN & BANGLADESH): (a) Eligibility and Admission Criteria shall be like Indian students with a pass mark from a recognized Board / University 
			<br><br>
                    <a target="_blank" href="https://www.tnu.in/component/k2/item/517-international-admission-process">Read more</a>
                </p>
            </div>
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '32'";
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
					$sql1 = "SELECT * FROM colleges where id = '32'";
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