<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | NSHM Knowledge Campus,kolkata</title>
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
		    <img class="bg" src="https://images.shiksha.com/mediadata/images/1571914378phpVY21p4.jpeg"></img>
		     <img class="logo" src="https://www.nshm.com/wp-content/uploads/2020/03/unnamed.jpg"></img>
		     <span id="college_name"><a target="_blank" href="http://www.nshm.com/">NSHM Knowledge Campus,kolkata</a>
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
			ABOUT NSHM<br>
			“TO DELIVER INNOVATIVE EDUCATION PRODUCTS AND SERVICES TO BRING OUT INDUSTRY-READY PROFESSIONALS, RESEARCHERS, ADVANCED LEARNERS, EDUCATORS AND ENTREPRENEURS, WHO CAN TAKE BEST CARE OF PEOPLE, PLANET AND PROFIT.”<br>
NSHM Knowledge Campus is all about experiential learning and building an ever-expanding knowledge base involving knowledge partners and communities. NSHM is where information and ideas flow freely in an open and friendly atmosphere – a “Knowledge Hub of Global Excellence” in which students learn, share, shine and have fun.
<br>
Our vision is to set up a knowledge hub where careers follow students and not the other way round.
NSHM leverages the best that enables academic institutions to deliver new and more engaging models of knowledge management across campuses thereby creating a new, vibrant and futuristic learning environment.

The results include increased student engagement, improved faculty productivity, innovations powering new models of learning, enhanced online learning, expanding alumni outreach and great career opportunities. NSHM has exceptional faculties and continuously invests in their growth and development as well.
			<br><br>
	    	    <span style="float:right;">NSHM Knowledge Campus,kolkata<br>
                124 B L Saha Road,<br>
		        Kolkata 700 053<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="http://www.nshm.com/about-nshm/">Read more</a>
		    </p>
		</div>
		
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Graduate</li>
		            <li id="pg" onclick="pg();">Post Graduate</li>
		            <li id="bed" onclick="bed();">M.Phil</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">B. Sc. in Film & Television</h1>
				<p>Overview<br>
				B.Sc. program in Film & Television under MAKAUT is an academic as well professional course which will orient the student in almost all the avenues of filmmaking and further studies. This course will cover different avenues of audio-visual world and will make the student dexterous enough to pursue the path of academia as well as industry.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-film-television/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">B.Sc. in Culinary Science</h1>
				<p>Overview<br>
				B.Sc. in Culinary Science (Food Science) course seeks to provide adequate knowledge, skill and exposure in the field of Culinary art that commensurate with the requirements of the industry. Students pursuing this Food Science program will learn to exploit newly created opportunities in the culinary profession both at domestic as well as international level. Also, the course will equip students to find additional avenues of employment in this domain.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-culinary-science/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">B.Sc. in Medical Lab Technology</h1>
				<p>Overview<br>
Medical Laboratory Technology, also called Clinical Laboratory Science, is an allied health/paramedical profession, which is concerned with the diagnosis, treatment and prevention of disease through the use of clinical laboratory tests.

Doctors rely on laboratory technologies to detect, diagnose and treat diseases. Thisprogramme covers the basics of preclinical subjects such as Biochemistry, Pathology, Microbiology and Blood Banking. Medical Laboratory Technologists (MLT) do these tests by analyzing body fluids, tissues, blood typing, microorganism screening, chemical analyses, cell counts of human body etc.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-medical-lab-technology/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">B.Sc. in Behavioural Science & Applied Psychology</h1>
				<p>Overview<br>
B.Sc. in Behavioural Science & Applied Psychology course will provide an overview of the processes and problems in behavioral psychology. Combining the knowledge of Behavioural Science and Applied Psychology with strong observation and communication skills, a behavioral psychologist will be able to work with communities and individuals, examining behavior and decision-making.
A person specialized in this field will be well-versed in psychometric methods and social sciences and will be able to:
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-behavioural-science-applied-psychology/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">B.Sc in Yoga</h1>
				<p>Overview<br>
The Bachelor of Science (B.Sc.) programme in yoga is spread over three academic years imparting knowledge and skills about every facet of Yoga. This programme has been designed for meeting the demand of the growing needs of experts in the fields of Naturopathy, Yoga and related oriental treatments and therapies. The programme brings together contemporary classroom learning techniques coupled with a traditional yogic Gurukul way of life strengthening scientific evidence of the positive effects of yoga and meditation on human health. The way yoga has become popular these days, there are ample job opportunities for qualified yoga experts in India and abroad. It is a dynamic and challenging career in which one could achieve personal growth and respect from society by imparting Yoga training to all sections of the society.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-yoga/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">BBA – Bachelor of Business Administration</h1>
				<p>Overview<br>
BBA is not to be seen only as a first ladder to MBA. Rather, it is a first foray to some enriching on-job experience prior to MBA or higher business studies. The best of B-Schools all over the world value experience and so does employers.

At NSHM, the BBA students are encouraged to cultivate a variety of skills that have to do with the world of business. The course is designed to allow students to enter any sector of their choice in the following ways:
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bbah-bachelor-of-business-administration/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">BBA (Supply Chain Management) – 3 Yrs.</h1>
				<p>Overview<br>
Supply Chain Management is the buzz word in modern management and most widely accepted tool in the current business world. Supply chain management is the active management of supply chain activities to maximize customer value and achieve a sustainable competitive advantage.
Some of the Benefits of studying this course are listed as follows:
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bbmh-in-supply-chain-management/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">BBA (Sports Management)</h1>
				<p>Overview<br>
Nothing complements the development of an individual better than sports. Today, several kinds of sports areplayed across nations. With the passage of time – money, fame, glamour and media attention have become anintegral part of it. The Sports Management course is designed for individuals who seek to build up leadershipqualities and professional expertise to make an outstanding career in sports administration.
				
    		          <br>
    		        <a target="_blank" href="nshm.com/course/bbasports-management/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">BBA (Global Business)</h1>
				<p>Overview<br>
	World over, every business is going global in both scope and perspective. In the wake of changing global business dynamics, the need of the hour is to harness the know-how of domestic market and sync it with a global mindset to stay buoyant in the global business arena.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bba-global-business/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">B.Sc. in Interior Designing</h1>
				<p>Overview<br>
B.Sc. in Interior Designing will introduce aspirants to the creative and technical aspects of interior designing. From furniture to landscape, residential properties to commercial spaces, the course will cover the fundamentals of designing across multiple categories, nurture the aesthetic sensibilities of students and also train them in the application of environmentally friendly, futuristic & contemporary concepts in their creations.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-interior-designing/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">BCA – Bachelor of Computer Application</h1>
				<p>Overview<br>
Computer and applications have been the employability buzz words since the advent of IT in businesses and businesses in IT. BCA is essentially a skills course. Top Institutes like NSHM with high-end computing environments are best suited for quality BCA education, which is why, the placements of BCA of NSHM have always been top of the charts.

The advantages offered by NSHM that lead to effective skill development and thus, the best placements are:
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bcah-bachelor-of-computer-application/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">B.Sc. in Data Science</h1>
				<p>Overview<br>
This innovative B.Sc. in Data Science course will provide participants with an opportunity to get exposed to the broad range of subjects leading to a high-level of data science skills. The objective of this course is to help the students:
<br>
Develop into an agile, skilled data scientists.<br>
Be adept at working in variety of settings and able to meet the challenges and reap the rewards of interdisciplinary team work.<br>
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-data-science/">Read more</a>
    		    </p>
				
				 <h1 class="course_name">B.Sc. in Cyber Security</h1>
				<p>Overview<br>
This innovative B.Sc. in Cyber Security course is an opportunity for the the students with science (including Mathematics as a major subject) at the plus two level, to develop knowledge and skills in the field of Cyber Security. The objective of the course is to:
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-cyber-security/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">B.Sc. in Gaming & Mobile Application Development</h1>
				<p>Overview<br>
B.Sc. in Gaming & Mobile Application Development course aims to create IT professionals for emerging avenues in Game Designing / Development / Programming and various other sectors of economy in the thriving information and cyber age.

The graduates will not only have the opportunity to pursue internships and join leading IT companies but will also gain in-depth knowledge on designing games and mobile apps which are the need of the hour for every entity that operates in the digital space.

Our B.Sc. in Gaming & Mobile Application Development students can turn their passion for video games into well-paying careers in designing them for the biggest names in one of the highest paid industry in the world
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-gaming-mobile-application-development/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">BTTM ( 4 Yrs. – 3 + 1) Bachelor in Travel and Tourism Management</h1>
				<p>Overview<br>
NSHM  has state-of-the-art infrastructure and an excellent academic ambience best suited for producing leaders of the future. NSHM is renowned for the new age knowledge imparting techniques like lifestyle education and industry awareness which gives a definite edge to students stepping out into the corporate world. Experiential learning is given paramount importance at NSHM College of Management & Technology. Hence, alongside classroom teaching, NSHM also offers industry training through internships and dynamic academic-industry interface. The course Bachelor in Travel & Tourism Management  12 years back in 2006. Last 12 years, 9 batches successfully graduated in Travel & Tourism Management and enjoying their lifestyle with this large industry in various parts of the Globe.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bttm-bachelor-in-travel-and-tourism-management/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">BBA (Hospital Management)</h1>
				<p>Overview<br>
A basic interest in the science, management and arts of healthcare delivery systems and services can get one the best value from our BBA in Hospital Management programme. BBA in Hospital Management at NSHM serves two important purposes:
<br>
It enables ready employability in Hospitals and Health services.
<br>
It provides a stepping stone to a Masters programme in Hospital Administration or Management.
<br>
With the continuing growth of healthcare industry the demand has been outsizing the supply. The BBA programme at NSHM is more integrated with the industry than any other course, ensuring a bright future for its graduates.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bbmh-in-hospital-management/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">B. Optom. (Bachelor of Optometry)</h1>
				<p>Overview<br>
The 1st year of Bachelors of optometry consists of basic sciences like ocular anatomy, physiology, optics, biochemistry, etc. The 2nd and 3rd year consists of clinical sciences and pre-clinical labs like visual optics, binocular vision, instrumentation, ocular diseases, clinical refraction, low vision, contact lens, thus, making the student ready for assessing real patients during the internship during the final 4th year.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-optometry-bachelor-of-clinical-optometry/">Read more</a>
    		    </p>
				
				
				 <h1 class="course_name">B.Sc in Multimedia, Animation and Graphics Design</h1>
				<p>Overview<br>
				This course integrates multiple aspects of 2D and 3D art, interactive media and animation with professional experience. You’ll get hands-on training in modelling, design, texturing, animation, lighting and rendering for 3D design with Autodesk 3ds Max and Maya, the leading 3D software tools for professionals. You will learn:
<br>
Visual communication, as a graphic design student, exploring a field that’s essential in today’s information-rich world.
<br>
To design for print and the web with practical, hands-on training with the design software tools being used by today’s professionals.
<br>
The time-based art of the moving image, as an animation student, by making live action or animated films – or a hybrid of the two.
<br>
BMAG (B.Sc in Multimedia, Animation and Graphics) is a new age education course in computer applications spread over six semesters. The curriculum is designed to transform aspiring students into skilled professionals in Graphics Design, Animation and Multimedia.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-h-multimedia-animation-and-graphic-design/">Read more</a>
    		    </p>
					
					
					<h1 class="course_name">B.Pharm. – Bachelor of Pharmacy</h1>
				<p>Overview<br>
As the Indian economy has grown in recent years, there has been a rapid expansion in the productivity and research in Indian pharmaceutical industry, justifying the need of quality pharmaceutical education.
<br>
NSHM College of Pharmaceutical Technology fulfils the need of the society by:
<br>
Creating industry-ready professionals.
<br>
Creating professionals that act as supporting framework in the country’s healthcare system by providing quality patient care services.
<br>
NCPT performs the crucial task of transforming scientific knowledge to technical skills through excellent laboratory facilities and industrial training. It is theepicenter of knowledge where the faculty members aspire to inspire the young, fresh minds in a holistic fashion.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-pharm-bachelor-of-pharmacy/">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Sc. in Media Science</h1>
				<p>Overview<br>
A career in media science can take you in several directions as it has many different facets and activities. Courses like Marketing Communication, Journalism and Mass Communication have their own scope and opportunity for students with the required knack.

Marketing professionals create, manage and enhance brands, with marketing functions being required in every brand and industry these days, the career potential for aspirants would be unlimited. Politics, economics, art, culture, history, business, sports, entertainment and many other areas are covered by journalists.

With the growing importance of the media industry today, the opportunities in this field are numerous and the jobs are very demanding and exhilarating at the same time.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-in-media-science/">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Sc. in Fashion Design & Management</h1>
				<p>Overview<br>
				Fashion designing is a lucrative, appealing and exciting career option. With its traditional textile and garment trade, India has become the cynosure of innovation in garment and fashion design. A fresh crop of Indian designers with their exquisite craftsmanship has caught international attention.

But how to build a bridge in between industry and academics? A fashion design course, of course. NSHM Institute of Media & Design, one of the leading fashion designing colleges of Kolkata, presents the B.Sc. in Fashion Design & Management, one of the best fashion designing courses available in Eastern India.

NSHM Institute of Media & Design is the only fashion designing college to offer a 3 years full time degree programme in Fashion Designing, under WBUT.
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/b-sc-in-fashion-design-management/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Bachelor in Hotel Management 3 Years (Full-Time)</h1>
				<p>Overview<br>
B.Sc. in Hotel Management is a contemporary education in the field of Hospitality. Its wide array of course modules prepare the students for professional engagement in premier hotels, in the events and leisure industry, in travel and tourism etc.
<br>
At NSHM, we make our students industry ready by:
<br>
Arranging guest lectures by industry experts<br>

Organizing field trips to give our students an idea of how things work in the Hospitality and Hotel Administration sector.
<br>
Concluding the course with a rigorous six-month Industrial Training externship so that they can apply their skills and the knowledge in a real-world scenario.
<br>
So, what are you waiting for? Download our Free Brochure on our B.Sc. in Hotel Management course to know more about this course and its prospect.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/bachelor-in-hotel-management-3-years-full-time/">Read more</a>
    		    </p>
				
				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
              <h1 class="course_name">M.Sc. in Hospitality Management</h1>
				<p>Overview<br>
M.Sc. in Hospitality Management course will provide theoretical, practical and personal skills to students required for management roles required at domestic and international hospitality organizations. It will help them gather in-depth knowledge of strategic, organisational and marketing skills required by the hospitality industry. The program will groom students to cultivate a professional management attitude by nurturing the creative development of innovative ideas and solutions.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-hospitality-management/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Clinical Psychology</h1>
				<p>Overview<br>
M.Sc. in Clinical Psychology is a post graduate Psychology course. Clinical psychology is an integration of science, theory and clinical knowledge for the purpose of understanding, preventing and relieving psychologically-based distress or dysfunction and to promote subjective well-being and personal development.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-clinical-psychology/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Yoga</h1>
				<p>Overview<br>
The Master of Science (M. Sc.) programme in yoga is spread over two academic years imparting knowledge and skills about every facet of Yoga. This programme has been designed for meeting the demand of the growing needs of experts in the fields of Naturopathy, Yoga and related oriental treatments and therapies. The programme brings together contemporary classroom learning techniques coupled with a traditional yogic Gurukul way of life strengthening scientific evidence of the positive effects of yoga and meditation on human health. The way yoga has become popular these days, there are ample job opportunities for qualified yoga experts in India and abroad. It is a dynamic and challenging career in which one could achieve personal growth and respect from society by imparting Yoga training to all sections of the society.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-yoga/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Master of Public Health</h1>
				<p>Overview<br>
The pedagogy of the course is selected judiciously, to encourage the students to learn experientially, and relate concepts and theories to Public Health Management systems. The course will help to –
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/master-public-health/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Master of Optometry</h1>
				<p>Overview<br>
Our Masters in Optometry programme focuses toward student centered learning methods in providing basic to advanced level of knowledge in all disciplines of optometry, facilitate practical and clinical exposures for skill training and develop key attitude for professional eye care practice. The current programme enables students to apply recent research to clinical practice, thus, improving their competency as primary eye care professionals and making them a lifelong learner by imbibing evidence based practice in Optometry.

The courses offered in the 1st year deals with advanced optics, ophthalmic diagnostic procedures & instrumentation, research methodology, contact lens, geriatric optometry & low vision rehabilitation, ocular diseases & therapeutics and binocular vision. The 2nd year offers subjects related to occupational optometry, recent advances in optometry, advanced contact lens, low vision, specialty clinics and binocular vision. The students also need to conduct a research study during the 2nd year and submit a dissertation at the end of the Masters course.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/master-optometry/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Dietetics & Nutrition</h1>
				<p>Overview<br>
Food Science is a study concerned with all technical aspects of food, beginning with harvesting or slaughtering and ending with its cooking and consumption, an ideology commonly referred to as “from field to fork”. It is considered as one of the life sciences and is usually considered distinct from the field of nutrition.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-dietetics-nutrition/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Master of Business Administration (MBA) (2 years, Full Time)</h1>
				<p>Overview<br>
The changing face of global business and economy has resulted in the need for Management Education in India to embrace the change and move towards a new age business study that will
<br>
Equip students with the latest knowledge tools to counter the challenges of the constantly transforming business world.
<br>
Train them in latest industry practices and skills.
<br>
NSHM’s MBA programme has been designed to groom the next generation of business managers. This is a set of value additions complementing the university curriculum to enable MBA aspirants to steer ahead of competition, armed with the exposure to best practices in their discipline and the training & certifications required to make their CV stand out among the rest.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/mba-master-of-business-administration-2-years-full-time/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Post Graduate Diploma in Management (PGDM) (2 years, Full Time)</h1>
				<p>Overview<br>
				A brilliant mix of industry best practices and sophisticated theoretical knowledge is what makes NSHM’s Post Graduate Diploma in Management stand out from other similar Diploma courses available today. Designed for the young, industrious and energetic minds, our PGDM course is meant to offer a holistic view of the real-life challenges that almost all business organizations face every single day.
NSHM’s PGDM programme has a set of value additions intended to give the aspirants competitive advantage, armed with the exposure to best practices and the training & certifications required to make their profiles stand out.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/post-graduate-diploma-in-management/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Master of Business Administration (MBA) (3 years,Part Time)</h1>
				<p>
Overview<br>
The Part-Time MBA Program is exclusively designed for the working professional who wants to enhance their knowledge and skills in the ever-changing arena of management. The program attempts to impart conceptual as well as practical exposure to help the working executives shape into better managers. The program helps students explore and unravel management knowledge, beyond the classroom.

The industry demands continued upgrade of knowledge and skills in corporate professionals. This course caters to that need, through a unique pedagogy combining classroom sessions, guided assignments and industry certifications, delivering a synergistic learning ecosystem.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/master-of-business-administration/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Information and Cyber Security</h1>
				<p>Overview<br>
This innovative MSc in Cyber Security course is an opportunity for graduates from a broad range of disciplines including Science and Technology to develop knowledge and skills in the field of Cyber Security. The objective of this course is to help the students:
<br>
Develop into agile and skilled cyber security professionals who are adept at working in variety of settings.
<br>
Be able to meet the challenges and reap the rewards of interdisciplinary team work.
<br>
The broad areas in which the students will be able acquire their skills and knowledge are: Cryptography, Network Security, Authentication and Access Control Mechanisms, Wireless Networks Vulnerabilities and Security, Computer Forensics, Legal Aspects of Cyber Security, and Security and Privacy related issues in various applications and deployments like Cloud Computing, Internet of Things etc. It also involves use of sophisticated tools like Cyber Range for simulation of real-world attack-defense scenarios. The pedagogy is will be extremely hands-on using real world case problems.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-information-cyber-security/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Data Science & Analytics</h1>
				<p>Overview<br>
This innovative MSc in Data Science course is an opportunity for graduates from a broad range of disciplines to develop data science skills. The objective is to help the students develop into an agile, skilled data scientists, adept at working in variety of settings and able to meet the challenges and reap the rewards of interdisciplinary team work. The broad areas in which the students will be able acquire their skills and knowledge are: Applied Statistics, Data Mining and Predictive Modelling Machine Learning, Big Data Analytics, Data Visualization and Applications of Data Science in various business areas like Marketing, Retails and Supply Chain, Operations, Banking, Insurance and Finance, Human Resources, etc. The pedagogy is will be extremely hands-on using real world case problems.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-data-science-analytics/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Animation & Graphic Design</h1>
				<p>Overview<br>
Students pursuing M.Sc. in Animation and Graphic Design are expected to become a complete professional in the field of Graphic Design and Animation, VFX and Game Art. This program also enriches students with the concept and knowledge, so that they can do further research in the field of Design. The curriculum for the course has been composed in such a way where, first two semesters (first year of the program) are under foundation program. It enriches and nurtures students from various fields towards specialized and goal-based design research and project execution. Final two semesters (second year) are specialized semesters, where a student can choose their specialization subject as Animation or Graphic Design. In the final Semester, all the students have to execute their individual project in their respective specialization along with the dissertation.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-animation-graphic-design/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M. Sc. in Film & Television</h1>
				<p>Overview<br>
M.Sc. program in Film & Television under MAKAUT is an academic as well professional course which will orient the student in almost all the avenues of filmmaking and further studies. This course includes the historical and theoretical areas of film and television, dedicates an entire paper to literature (India as well as the world), sound (including the introduction of world music in a small portion), writing scripts and creating storyboards, production design, camera, sound, video editing, television commercials, web & TV series, film making (both fiction, non-fiction and news story/feature), film marketing and finally dissertation (which will help the student to learn how to conduct research and produce a research article).	
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-film-television/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">M.Sc. in Fashion Management</h1>
				<p>Overview<br>
M.Sc. in Fashion Management is a course to train a person in different fields of running a fashion related industry. In one hand it is a step forward for the graduates for contributing in the fashion and garment industry, in other hand it strengthens the academic areas of experienced industry people. This is a unique course which covers a vast area of creative, technical & managerial aspects.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-fashion-management/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Master of Hospital Administration</h1>
				<p>Overview<br>
MHA (Master of Hospital Administration) is equal to and more than MBA in Healthcare. A suitable work experience can always give students higher employment prospects vis-à-vis a fresh graduate, quite like MBA compared to other graduates. With NABH and other quality drives in hospitals and healthcare delivery organizations, there is now a growing demand to employ MHA (Master of Hospital Administration) qualified people.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/master-of-hospital-administration/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Computer Science</h1>
				<p>Overview<br>
This innovative MSc in Computer Science course provides an opportunity for graduates from disciplines of Computer Science and Pure Sciences to develop knowledge and skills in the broad areas Computer Science with a special focus on Artificial Intelligence. The objective of this course is to help the students:
<br>
Develop into agile and skilled Computer Science professionals who are adept at working in variety of settings.
<br>
Be able to meet the challenges and reap the rewards of interdisciplinary team work.
<br>
The broad areas in which the students will be able acquire their skills and knowledge are: Data Base Management Systems, Operating Systems, Computer Networks, Principles of Programming Languages, Artificial Intelligence, Reinforcement Learning, Machine Learning, Deep Learning, Optimization Techniques and so on. It also involves use of state-of-the-art concepts and technologies in delivering knowledge, wherein languages like Python, Java, C and various visualization tools like Tableau will be effectively used in the delivery. The pedagogy is will be hands-on using real world case problems
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-computer-science/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Masters in Pharmacy (Pharmacology / Pharmaceutics)</h1>
				<p>Overview<br>
As Indian economy has grown in recent years, there has been a rapid expansion in the productivity and research in Indian pharmaceutical industry justifying the need of quality pharmaceutical education. NSHM College of Pharmaceutical Technology fulfils the need of the society by creating industry-ready professionals.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/masters-in-pharmacy/">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.Sc. in Media Science</h1>
				<p>Overview<br>
NSHM Department of Media & Design is the first to receive the prestigious affiliation from West Bengal University of Technology (WBUT) to award post graduate degree in convergent media studies in the state. This course offers aspiring candidates a holistic learning opportunity with the best blend of classroom theories and hands-on-training, using state-of-the-art infrastructure under professional mentors.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-sc-in-media-science/">Read more</a>
    		    </p>
			  
            </div>
			
			
			
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">M. PHIL.</h1>
				<p>Overview<br>
				NSHM’s M. Phil. In Management programme is the perfect opportunity for management professionals and aspiring academics alike. In a world where business and management practices are constantly evolving alongside complementary technologies and market landscape, the need for the understanding the inner workings of business is crucial. Our M.Phil. program takes a step towards fulfilling this need by training future researchers, academics, entrepreneurs and management professionals in the field of management studies.
<br>
The programme ensures that candidates:
<br>
Gain an in-depth knowledge into the literature and research of the management studies field.
<br>
Gain the ability to conduct their own research in their areas of interest and further develop the understanding of the discipline.
				
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/course/m-phil-management-programme/">Read more</a>
    		    </p>
			</div>
		</div>
		
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="http://www.nshm.com/admissions/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission</h1>
                <p>
				Start right. Start here!<br>
Congratulations! You have chosen to join one of the best centers of education in Eastern India.
<br>
As you embark on a new, exciting journey of your life, let us simplify it for you. Because nothing is as important as starting it right.

Choose your dream course, know more about the course fees in our Kolkata and Durgapur campuses, talk to a counsellor and you can even apply for your course right here on this page!
<br>
Click on each item for more information.
			<br>

                    <a target="_blank" href="http://www.nshm.com/admissions/">Read more</a>
                </p>
            </div>
			
        </div>
		
        <div style="display:none" class="information" id="college_place">
           <h1>PLACEMENTS</h1>
            <div class="place_block">
               <h1 class="course_name"></h1>
    		    <p>Placement:<br>
    		          <br>
    		        <a target="_blank" href="http://www.nshm.com/why-nshm/placement/">Read more</a>
    		    </p> 
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '37'";
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
					$sql1 = "SELECT * FROM colleges where id = '37'";
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