<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Pearl Academy,Kolkata </title>
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
		    <img class="bg" src="https://pearlacademy.com/media/3535/noida-thumb.jpg"></img>
		     <img class="logo" src="https://pbs.twimg.com/profile_images/3373666317/9dcc5da718e72bd7b9c49faf5ee3b1bd_400x400.png"></img>
		     <span id="college_name"><a target="_blank" href="https://pearlacademy.com/academics/centers/kolkata/">Pearl Academy,Kolkata</a>
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
		    <p> Welcome to Pearl Kolkata
Sirshendu Sinha Chaudhuri, Campus Director - Pearl Academy, Kolkata Campus
Sirshendu Chaudhuri is a dynamic professional with a rich experience of two decades in different industries like Banking, Telecom, and Education across different geographies in India. He has worked for reputed organizations like ICICI Bank, Tata Teleservices, Airtel, Aircel, Virtual Global Education and managed key business operations at senior leadership positions with a sharp focus on business results and P&L Management. Sirshendu is an outstanding people manager and has an entrepreneurial style of management that is a blend of enthusiasm and dynamism. He tends to focus on people's strengths to bring out the best in them. 'Work hard and play hard' is his motto and he applies it to all aspects of his life with complete passion. He believes the future of India is today’s Skill Development of the employable age group and as a hobby, he works in different parts of rural India for social development, upliftment and livelihood creation for economically poorer sections of the society. 

Sirshendu is MBA Finance from the University of Calcutta and has undergone an Executive Management Program from IIM (Ahmedabad).

Legacy
Pearl Academy has completed more than two decades of empowering creative minds. Since its inception in 1993, the academy has evolved into a globally renowned institution of higher learning with a focus on Internationalism; entrepreneurship and employability; catering to the needs of the design, fashion, business and retail industry.

The industry is growing manifold and future beholds a very competitive market led by adoption of superior technology, business organization in larger scale of operation, and inter-play of business strategies.

Pearl Academy has metamorphosed into an industry leader that develops courses with a pulse on the needs of the entire spectrum of the industry. The academy ensures that the industries it caters to, are equipped with people who have the required skill set to spearhead growth, innovation and social development. Pearl Academy is a pioneer in the Indian market, combining hybrid blended learning and real time lectures in a structured manner, thus making learning more effective and engaging.
			<br><br>
	    	    <span style="float:right;">Footwear Design and Development Institute<br>
                Celica Park<br>
				My cube co-working place, 1st Floor, Anuj Chambers,<br>
		        24 Park Street Kolkata-7000016,<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://pearlacademy.com/about/pearl/">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">Design</li>
		            <li id="pg" onclick="pg();">Fashion</li>
		            <li id="bed" onclick="bed();">Media</li>
		            <li id="phd" onclick="phd();">Business</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
			
			<div class="course_block">
			<h1>UG Pathway<h1>
    		    <h1 class="course_name">UG in Animation and VFX Course</h1>
				<p>Course - Overview<br>
				Program that enables students’ ambitions in getting into the animation industry and animation practices with theoretical, technical, and business knowledge from one of the India’s best programs.

				This program at Pearl Academy is for people who want to get into animation studios and animation production houses. Students will learn the technical tools required to build engaging characters and environments to explore the fundamentals of storytelling and entertainment. The study of these disciplines will allow students to gain knowledge to create and control virtual environment.

				Through the four-year duration of the program, students will learn history and theory 2D and 3D graphics, simulation and modeling, storytelling and narrative, current best practices/developments in animation design and apply their theoretical learning to prototype, test and develop animation projects of different sizes and complexity. During the process of creating these projects, students will work in multidisciplinary teams, thereby getting exposure to how real-world animation companies operate and will be a part of a creative community with strong external networks.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/animation-vfx/">Read more</a>
    		    </p>
				
				<h1 class="course_name">UG in Communication Design</h1>
    		    <p>Course - Overview<br>
				This program equips students to apply the principles of design to a wide range of communication challenges across various forms and types of media. Students develop an understanding of people in their socio-cultural settings and devise appropriate strategies that lead to communication products, systems, services, and experiences. The program offers students a golden opportunity to pursue professional development in graphics, illustration, sequential art, typography, image processing, motion graphics, and narration.

				The key elements of the program place emphasis on originality and conceptual development. Students work with traditional print media as well as contemporary digital forms, gaining the essential skills in today’s market. This program explores various techniques utilized by professionals in telling impactful stories and ideas through production and post-production processes. Students will learn how to build, analyze, and evaluate digital products, services, and tools. The competencies this program strives to develop in students blend technical comprehension with research methodologies to develop a unique conceptual approach to problem-solving.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/graphics-communication-design/">Read more</a>
    		    </p>
				
				<h1 class="course_name">UG in Interior Design</h1>
    		    <p>Course - Overview<br>
						Exploring the power and impact of spatial design to understand and transform existing

						spaces in a social, cultural, sustainable and contemporary setting is at the heart of the

						Interior Design program at Pearl Academy. In a technologically transforming ecosystem

						where design problems are multiple and challenges are complex, our program

						encourages students to take creative risks. They design spaces that blend real-world

						requirements with innovative solutions, to shape holistic spatial experiences.

						International exposure, career mentoring by top industry experts and live projects are

						designed to hone the skills and learnings of students. The program aims to develop the

						ability to experiment, conceptualize, and detail functional and aesthetic spaces in which

						the final design solutions may not be singular, but divergent in nature.

						Fusing boundaries and crossing disciplines with a combination of problem-solving skills

						and creativity are integral to this program and we create skilled professionals who are

						adaptable and well equipped to navigate through a constantly evolving future.

						The learning is project-based, with options to explore the functional, technical, and

						planning aspects of Interior Architecture, along with the stylistic, aesthetic, and thematic

						elements of Interior Design.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/interior-design/">Read more</a>
    		    </p>
				
				<h1 class="course_name">UG in Product Design</h1>
    		    <p>Course - Overview<br>
				Balancing out-of-the-box thinking with aesthetic of form and functionality, students acquire making skills, hone their perception and develop design aptitude to create innovative products and systems. The program learning integrates design methodology with critical thinking, technical knowledge, a strong sense of empathy applied to develop a wide of range socially responsible objects for contemporary markets.

				The 4 years of the UG program are a combination of lectures, seminars, studio work and workshops for hands-on learning and making. Our on-campus maker space is well-equipped for both mechanical and digital fabrication and has full-time technicians to support and facilitate student work. Projects often take students outside the classroom for extended field work for e.g. study trips, field research and industry visits. Students spend their time interacting with faculty and industry mentors; gaining knowledge of design principles; exploring different materials, processes and technologies; studying socio-economic trends; understanding local and global cultures while working with traditional as well as contemporary manufacturing technologies. Students generate concepts, sketch & model in 3D using the latest software, construct physical prototypes to develop problem-solving products.

				The UG Product Design program provides an open learning environment, we develop competent, creative, and innovative product designers who are intellectually mature, ecologically sensitive, and socially responsible. 
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/product-design/">Read more</a>
    		    </p>			
										
            </div>
			
			
			<div class="course_block">
			<h1>PG Pathway<h1>
    		    <h1 class="course_name">Graphics & Communication Design</h1>
				<p>Course - Overview<br>
				The 2 Year PG program Graphics & Communication Design equips students for content

					development in diverse media like print media, motion graphics, film and television,

					photography, digital media, web and app design, and other interactive applications.

					It helps students to develop a personal and visual vocabulary using hand skills, artistic

					expression, and creative strategy, along with appropriate software tools.

					The program aims to formulate a fundamental foundation and build a sound, basic

					grounding for later disciplinary competencies in the domain. The modules like ‘Design

					Context’ and ‘Image Creation’ will introduce and provide the conceptual, theoretical and

					applied knowledge for Graphic Design. The basics of Communication Design and its

					impact across industries will also be introduced along with key research methods,

					analytical ability to investigate consumers, markets and techniques used in the analysis of

					markets and end-users.

					Later the students will begin to consolidate learning in design thinking and media,

					and apply it to solve design problems in graphics and advertising communication.

					The students are encouraged to come to terms with the reality of the Design

					Management world. Later the student will be engaged in professional practice and

					industry linked live projects or industry analysis projects.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/graphics-communication-design/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Interior Design & Styling</h1>
    		    <p>Course - Overview<br>
				This 2-Year PG in Interior Design & Styling explores the interior built environment through the lens of an inhabitant. The program explores the interactions between people and their cultures, emotions, and activities through various social functions of living, working, resting, and playing. The approach integrates technical, functional, theoretical, materials, aesthetics, and creative processes of design, with a strong emphasis on critical thinking, independent learning, and both social and ecological consciousness. After an essential exposure to the underlying history and theory of interior design and practical applications through design studio projects, students take advantage of a flexible elective curriculum that covers typologies across residential and commercial spaces.

				The program initially focuses on developing sensory-perceptual skills by sensitizing one to interior design material and techniques. It aims at bringing learners from diverse backgrounds to a common platform of design understanding to make them ready for design learning in their specific design disciplines. Students will be exposed to a wide range of theoretical, design, technical, and communication contexts. They will also be able to apply this knowledge further to design principles and stylize complex spaces.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/interior-design-styling/">Read more</a>
    		    </p>
				
				<h1 class="course_name">PG in Product Design</h1>
    		    <p>Course - Overview<br>
						The Post Graduate_Program in Product Design (PGPD) seeks to answer these three most

						relevant questions for any designer today:

						What will our future lives be like?
						What kind of a world do you want to create?
						Can you design products for better living?
						The PG program focuses on building distinctive, authentic and pragmatic design value

						relevant to the future - prepare them for professional design practice of tomorrow._

						Skills & Knowledge_

						Learn various paradigms of product design its fundamental skills and techniques such as

						human factors, materials & processes, quantitative & qualitative research, cognitive

						ergonomics, CAD-CAM inputs, design strategy, social sciences and design business.

						Explore these themes from the edges of technology including digital fabrication, AI, VR,

						IoT and robotics._Investigate ways to integrate these considerations and improve industry,

						human life, and the planet._

						Uniqueness of Program_

						Industry experienced faculty with both domestic and international education
						and experiences._

						Wide array of Product Design possibilities from furniture & lighting to kitchenware
						& appliances and interactive products.

						Bespoke mentoring for each young professional to_discover_and pursue their inclinations

						and build a versatile career.

						Industry Integrated projects
						Access to a well-equipped maker space for mechanical and digital fabrication_
						Exploration and training in a wide variety of materials and their applications_
						Multi-disciplinary peer learning


    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/product-design/">Read more</a>
    		    </p>					
            </div>
			
           </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
               <div class="course_block">
				<h1>UG Pathway<h1>
				<h1 class="course_name">Fashion Design</h1>
    		    <p>
				   SCHOOL OF FOOTWEAR DESIGN & PRODUCTION (SFDP)<br>
				Footwear and Products Industry holds a prominent place in Indian economy in terms of employment generation and exports earnings. India has a 2.6 per cent share in the global leather trade and this sector ranks eighth in terms of the country‘s foreign exchange earnings from the industry. With affluence of raw materials, skilled manpower, innovative technology, and the strong presence of the allied industries, the sector has tremendous potential for growth and employment generation. Government of India has also recognized this as the Priority sector under Make in India initiative and targets to enhance the turnover to US $ 27 billion by 2020 (from the present turnover of US $ 12.60 billion) and employment from 3.1 million people to 6 million in next 5 years. India is today the most favorable sourcing and manufacturing base destination for the leading countries like Italy, Germany, UK, USA, Hong Kong, France, Spain, Netherlands and Belgium.Course - Overview
				A collaboration of culture, technology and contemporary fashion aesthetics, this program is

				designed for future creative innovators who have the potential to be change-makers. In

				today’s transforming world, students require new learnings, sustainable practices and

				‘people-centric’ creative outputs from evolving market trends in the contemporary space,

				while reflecting on the cultural heritage of fashion. These values are the focus of this program.

				While an international exposure is provided to up skill students, there’s an equal emphasis on

				encouraging industry-ready-skills like: Creative vision, decision making, craftsmanship,

				life-long learning, adaptability, empathy, technical skills and communication skills.

				These offerings in the curriculum are featured through industry internships, interaction with

				industry professionals, international labs and sponsored projects with real-time challenges.

				With an eye on the future of fashion, modules like ‘Fashion Mash up’ allow students to collage

				aesthetics, to recognize and reflect on various contemporary and cultural influences. With

				state-of-the-art technology like 3D Printing, laser cutting etc., and international experience at

				their disposal, students are encouraged to imagine and build future scenarios for exploring

				the design outcomes of tomorrow.


    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/fashion-design/">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">Fashion Styling & Image Design</h1>
    		    <p>
				   Course - Overview<br>
				A combination of fashion styling, image design and visual communication makes this a

				first-of-its kind program. In a time of social media and high value branding, students learn

				the intricacies of personal styling, clientele aspirations, social engagements and

				application to varied professional spaces. With national and international exposure to

				events, industry consultants, fashion trend mapping students are encouraged to develop

				an understanding of art and aesthetics, communication culture, society and politics.

				There’s also an emphasis on proposing new ways of social engagement to encourage

				innovative mindset.

				The study of photography, film, make-up and hair design and art direction allows students

				to present visual information clearly and with ease. From magazine editorials to shoots for

				brand look books and e-commerce, students can deliver products to a consumer in a

				coherent manner that is aligned with the brand DNA. The study of character, costume and

				context enables students to work successfully on costumes for film, television and theatre.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/fashion-styling-image-design/">Read more</a>
    		    </p>		
				</div>
				
				<div class="course_block">
				
				<h1>PG Pathway<h1>
				<h1 class="course_name">Fashion Design</h1>
				<p>Course - Overview<br>
					Fashion Design provides a broad intake of graduates from any discipline to imbibe an

					integrated approach to design and technical subjects with thorough market understanding.

					This program features a dynamic curriculum that fuses creative expression with technical

					and business aspects to make a signature statement for its creator. Combining technical

					expertise and contemporary practices with aesthetic skills, sustainability, branding and

					brand management, meeting consumer aspirations, learning the process of material

					collation to creating a final product, are key elements of this program.

					 

					CAREER PROSPECTS

					Assistant Designer • Stylist • Visual Merchandiser
					Freelance Designer • Design Consultant • Entrepreneur

				<br>
				<a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/fashion-design/">Read More</a>
				</p>
				
				<h1 class="course_name">Fashion Styling & Image Design</h1>
				     
				<p>Course-Overview<br>
				Mapping fashion trends, juggling dynamic challenges in style scenarios and using

visualization for a unique creative voice are the core elements of this program. Students

learn to understand, conceptualize and articulate visual information using fresh ideas and

relevant technological skills and platforms. After an initial exposure in basic art and design

elements for visualization and self-expression, they are given deeper insights into fashion,

society and culture through a study of art and history. Thereafter, they can choose an area

from the offered electives of Editorial and Commercial Styling, New Media Styling, Personal

Styling or Visual Merchandising, for a specialization.
				<br>
				<a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/fashion-styling-image-design/">Read More</a>
				</p>
				</div>
            </div>
            <div class="course_type" id="bed_block" style="display : none;">
				<div class="course_block">
				<h1>UG Pathway<h1>
					<h1 class="course_name">Fashion Communication</h1>
					<p>Course - Overview<br>
					This undergraduate program in Fashion Communication trains students to communicate,

					promote and creatively present in the fashion and lifestyle industry and to different

					audiences. It provides a solid foundation for a career in areas like fashion journalism, fashion

					photography, publishing, fashion videos, creative and art direction, PR and event design.

					This program dynamically responds to demands from the industry and helps students

					hone their skill sets in traditional and digital media for fashion and lifestyle segments.

					Students will be taught by a team of experienced industry professionals and practitioners.

					They will get to work closely with fashion editors, designers, FDCI media partners, bloggers,

					digital media professionals while undertaking live projects and industry internships.
					<br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/fashion-communication/">Read more</a>
    		    </p>
				<h1 class="course_name">UG in Journalism(Media & Communication Course)</h1>
				<p>Course - Overview<br>
				This program is a new age, design-based, digital and tech-savvy journalism

				& media program – unique in the country. A strong focus is on new media

				journalism, Mojo (mobile journalism) and all digital communication platforms.

				Students will be trained to use hi-end video cameras as well as mobile phones

				as their tool for creating powerful & impactful news content. There will be several

				opportunities to attend real-life press conferences, assist senior journalists in news

				reporting. Special workshops on reporting for sports & celebrity events will give

				opportunities to spend a day with paparazzi media and a day in a sports event.

				Students will learn from experienced and practising journalists, filmmakers,

				television anchors, photojournalists and other media professionals. Well connected

				with industry through live industry-sponsored projects, talks from leading industry

				experts and industry internship. Throughout the undergraduate program,

				the integration of theory and hands-on practice through to industry-standard

				practices complement the students’ development of scholarly skills,

				including investigative skills, and analytical, creative and critical approaches to

				problem-solving.
					  <br>
					<a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/journalism-media-communication/">Read more</a>
				</p>
				<h1 class="course_name">Entertainment (Media & Communication)</h1>
    		    <p>Course - Overview<br>
						This program prepares students for careers in the entertainment sector that comprises of

				Film, TV, Digital Media, Music & Theme Parks / Live Entertainment etc. It will train students

				to become confident storytellers with skills in the management of the creative and

				production process from concept through completion across a range of media platforms

				from television to online, mobile to big screens, and experience zones. It is a unique

				program that will provide students with a deep knowledge of current practices in the

				media and entertainment sector to ensure quality content and smooth productions,

				meeting deadlines, and staying within budgets.
    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/entertainment-media-communication/">Read more</a>
    		    </p>
										
            </div>
			
			
			<div class="course_block">
			<h1>PG Pathway<h1>
    		    <h1 class="course_name">PG in Entertainment (Media & Communication)</h1>
				<p>Course - Overview<br>
				This is the first-of-its kind program in India to train specialists for a new and emerging

				domain who understand the nuances of media, music & entertainment segment.

				It is a unique live-project based program that will provide students with a deep

				knowledge of current practices in the media and entertainment sector.

				Students will undergo extensive training in television production, talent management,

				backstage/back-end operations, creative visualization for set design, sound & music,

				basics of choreography, for live interactive shows, experimenting with lights and

				production. Students will apply the principles of innovation to their advanced

				entertainment project, which may be a technology-aided design or a live performance.


    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/entertainment-media-communication/">Read more</a>
    		    </p>
				
				<h1 class="course_name">Fashion Communication</h1>
    		    <p>Course - Overview<br>
				The 2 Year PG Program in Fashion Communication program is designed for graduates

				aspiring to build their careers in the fashion industry as fashion journalists (in print, digital

				or television), fashion photographers or as event designers.

				This postgraduate professional program places a higher emphasis on professional

				practice within a global context where students experience an industry-focused

				curriculum through regular interactions with media professionals and projects aligned to

				some of the leading fashion publications or fashion brands in the country.

				The PG Fashion Communication curriculum includes fashion writing, photography,

				fashion illustration, typography, layout design, trends, styling, fashion public relations,

				fashion films, event design and the creative use of new digital platforms. Students will get

				well versed in fashion terminology, analytical ability, understanding and using media.


    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/fashion-communication/">Read more</a>
    		    </p>
				
				<h1 class="course_name">PG in Journalism (Media & Communication)</h1>
    		    <p>Course - Overview<br>
						This is a high end focused multi-media journalism program based on convergence and

					bringing in new media strongly along with print and electronic journalism. This provides

					for learning technical and conceptual skills to produce stories across all media: offline

					(print), online (web), on-air (radio and TV) and on mobile (news app-based).

					The areas covered in details are as follows: Electronic News Gathering & Production for

					TV & Radio & Documentary Films; Digital & Mobile Journalism; Media Convergence; Photo

					Journalism; Media entrepreneurship; Investigative Reporting, and Development

					Communication.

    		          <br>
    		        <a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/journalism-media-communication/">Read more</a>
    		    </p>					
				
            </div>
			
			
			</div>
			
			
            <div class="course_type" id="phd_block" style="display : none;">
				<div class="course_block">
				<h1>UG Pathway<h1>
					<h1 class="course_name">Fashion & Lifestyle Business Management</h1>
					<p>Course - Overview<br>
					The program aims to equip the student with a broad range of competencies suitable for

					employment in the fashion business in India such as sourcing, manufacturing,

					distributing and retailing. The fashion business industry requires deep and intensive

					knowledge of the fashion product and extensive management, business skills and

					e-commerce. The scope of the program is to enable students to either be independent

					entrepreneur or be employable in business of fashion and lifestyle. To service the fashion

					and lifestyle industry effectively there are four key areas where there needs to be an

					enhanced focus.

					One is the ability to understand the changing needs of the markets, the second is an

					understanding of the organization and its relationship with the environment, the third is

					the strategic understanding of the fashion products (apparel, accessories, lifestyle, home

					etc). In this program theory and application based problem solving methods are

					employed to deliver these specialized skills.
						  <br>
						<a target="_blank" href="https://pearlacademy.com/academics/courses/undergraduate/fashion-lifestyle-business-management/">Read more</a>
					</p>
				</div>
				<div class="course_block">
				<h1 >PG Pathway<h1>
					<h1 class="course_name">Fashion Business (Marketing & Merchandising)</h1>
					<p>Course - Overview<br>
					This two-year comprehensive industry-oriented program trains the students to develop

					both as professionals and entrepreneurs in the field of marketing and merchandising

					by providing extensive knowledge and developing technical & behavioural skills in the

					core functional areas of Merchandising, Marketing, Branding, Integrated Marketing

					Communications, Product Development, Sourcing, Buying, and Range Planning. Pearl

					Academy trains students to be professionals who can conceptually and critically analyse

					complex problems to propose intelligent and compatible solutions in both fashion and

					lifestyle verticals.

					The program engages the student to attain a broad overview of the global fashion and

					lifestyle industry. It has been designed in a manner that it encompasses the entirety of

					the fashion value chain, from raw materials to retailing, along with basic marketing

					principles. It also provides a knowledge and understanding of the elements & principles of

					fashion design, communication channels, terminologies, and fabrics, coupled with their

					applications in the fashion business. It will help the students acquire and develop an

					understanding of the designing and marketing perspectives across all levels of fashion

					merchandising & production. The program also emphasises on design thinking, which

					aims to develop an appreciation and understanding of what design contributes to the

					over- arching business landscape in students.

					The students will get an opportunity to undertake an overseas exchange or an Internship

					or a live project with a fashion and lifestyle brand.<br>
					<a target="_blank" href="https://pearlacademy.com/academics/courses/postgraduate/fashion-business-marketing-merchandising/">Read more</a>
					</p>				
				</div>
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://pearlacademy.com/admissions/dates-and-guidelines/">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Important Dates And Guidelines</h1>
                <p>
				General Admissions (Admission Cycle One)

					11 January 2020
					Last day of fee payment 3rd April 2020

					18th April 2020
					Last date of receiving application 12th April 2020

					Generation of Admit Cards 14th April 2020

					Entrance Examination & Interview 18th April 2020

					Declaration of Result 30th April 2020

					Last day of fee payment 29th May 2020

					6th June 2020
					Application form available 20th January 2020

					Last date of receiving application 1st June 2020

					Generation of Admit Cards 2nd June 2020

					Entrance Examination & Interview 6th June 2020

					Declaration of Result 18th June 2020

					Last date of fee payment 3rd July 2020

			<br>
			<br>
				<a target="_blank" href="https://pearlacademy.com/admissions/dates-and-guidelines/">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Employability</h1>
            <div class="place_block">
                <p>Get Connected To The World
				Strengthening its commitment towards students’ success, Pearl Academy, has rolled out a new initiative assuring 100 per cent placements for all its students enrolling in Year 2019. To further strengthen this promise, for students who do not get employment, the Academy will offer 100% scholarship on tuition fees for Post Graduation at any of its academic partner institutions like London College of Contemporary Arts, London College of Creative Media, Berlin Institute of Business & Innovation; London School of Business & Finance, Singapore; University of Applied Sciences, Europe amongst others.

				Students will also have access to an increased set of exclusive opportunities mentioned below:

				• Every Pearl Academy student from undergraduate or postgraduate programs will have an opportunity to get a 100% scholarship on a 4-week study program at leading colleges based in Europe, UK, Canada or South Asia.

				• For undergraduate students, 50% scholarship on tuition fee will be provided for international post-graduate programs at academic partner institutions.

				• In addition to this, a free professional online program in Enterprise Design Thinking by global tech giant IBM will be offered to the students.
				<br>
                    <a target="_blank" href="https://pearlacademy.com/life-at-pearl/events/global-connect/">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '39'";
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
					$sql1 = "SELECT * FROM colleges where id = '39'";
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