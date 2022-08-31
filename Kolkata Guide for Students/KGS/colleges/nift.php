<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | National Institute of Fashion Technology-[NIFT],Kolkata</title>
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
		    <img class="bg" src="https://images.static-collegedunia.com/public/college_data/images/appImage/6916_NIFT_New.jpg"></img>
		     <img class="logo" src="https://images.shiksha.com/mediadata/images/1570188158phpM9E5mj.jpeg"></img>
		     <span id="college_name"><a target="_blank" href="https://www.nift.ac.in/kolkata/">National Institute of Fashion Technology-[Nift],Kolkata</a>
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
		    <p> About Kolkata Campus<br>
Founded in 1995, National Institute of Fashion Technology (NIFT), Kolkata is a leader in the Eastern Part of India for providing education in the field of Design, Technology and Management. NIFT Kolkata is one of the five oldest Centres among the NIFT fraternity. With a symbiotic balance amongst the state government and the garment industries, NIFT Kolkata stands as a pioneer of fashion training and research.

National Institute of Fashion Technology, Kolkata was initially housed at Manjusha Bhavan, ICMARD Building and later moved to the premises of College of Leather Technology on temporary basis. With a strong team empowering the Centre, two Courses, namely Three Year Under Graduate Diploma Programme in Fashion Design and Two Years Post Graduate Diploma Programme in Garment Manufacturing Technology were started at the time of inception. Subsequently, another Two Years Post Graduate Diploma Programme in Leather Apparel Design & Technology (LADT) was commenced.
			<br><br>
	    	    <span style="float:right;">1.National Institute of Fashion Technology-[Nift],Kolkata<br>
                Plot - 3B, Block-LA<br>
		        Sector III, Salt Lake City, Kolkata-700098<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.nift.ac.in/kolkata/presentation-images">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UG Programmes</li>
		            <li id="pg" onclick="pg();">PG Programmes</li>
		            <li id="bed" onclick="bed();">Continuing Education(CE) Programmes</li>
		            <li id="phd" onclick="phd();">PhD</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">B.Des. (Fashion Design)</h1>
    		    <p>Diversified career options for Fashion Design<br>
A flagship program of NIFT, the Fashion Design program has played an influential role in the growth of the Indian fashion industry. In the 3 decades of its existence the graduates of the department have had remarkable presence in the Indian as well as global fashion scenarios. The curriculum hones a design sensitization that balances global fashion aesthetics with an Indian soul. It addresses the needs of the export market as well as both couture and pret-a-porter in India. Holistic inputs on generic design with focused approach towards apparel inculcates the ability to develop and channelize creativity. A logical, sequential hands-on experience enables students to conceptualize design, make patterns, drape and construct garments of impeccable quality.
					
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bfd">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (Leather Design)</h1>
    		    <p>Diversified career options for Leather Design<br>
The Leather Design Program at NIFT is unique in its structure and application to the Fashion, Footwear and Accessories Industry. Initially focussed on leather products, in tune with changing times the programme now encompasses the areas of Fashion goods, Personal Lifestyle accessories and Footwear across the four campusesof Chennai, Kolkata, New Delhi and Raebareli.Emphasis is laid on the integration of design concepts with material knowledge. A multidisciplinary approach and exposure to the industry through field trips, tannery training, Craft Cluster programs, Industry internship and Graduation Projects are an integral part of the curriculum whereby students explore and innovate with materials, Techniques, Forms and components.
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bld">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (Accessory Design)</h1>
    		    <p>Diversified career options for Accessory Design<br>
Accessories are personal objects, that relate functionally, conceptually and aesthetically to people and their environment. The course involves exploring, processing and experimenting with thoughts, ideas & materials in order to establish a platform for new ideas and a powerful personal expression.The programs adopt a spectrum of knowledge transaction methods which include lectures, Projects (studio, live & collaborative), Group work, Field trips (traditional & contemporary), Self-study, Presentations & reflections. Students are immersed in traditional craft techniques as well as the use of smart digital tools. By the end of the course, the student will have in-depth knowledge, both practical and theoretical, of the fashion accessory design process and a clear understanding of the broader cultural and social context of design. She will also be able toengage confidently, professionally and successfully with the domestic fashion accessory industry and withthe international fashion accessories landscape.
				     
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bad">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (Textile Design)</h1>
    		    <p>Diversified career options for Textile Design<br>
From fibre to fabric, the design and development of textiles is the key to the business of fashion. Woven, print design, embroidery and surface embellishment are the core textile subjects and together impart an extensive and versatile training for the students. The Textile Design curriculum offers ample opportunity to students to create, experiment and innovate with materials. The programme builds upon the integration of creative forces of design with textile technology, and also keeps in mind the historical, social and cultural contexts in which the designers work today. Alongside there is also emphasis on learning specialized software in order to explore digital and non-traditional approach to design, fabric structures and surfaces. The students also get exposure to a craft environment by way of craft cluster initiative, which sensitizes them to traditional practices. The Textile Design students undertake Graduation Project in their final year which are sponsored by textile mills, export houses, home and apparel retail brands, designers, NGOs or are self sponsored.				    
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bdestd">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (Knitwear Design)</h1>
    		    <p>
				     Diversified career options for Knitwear Design<br>
The four-year Knitwear Design programme is developed towards creating design professionals who can cater to Knitted Apparel- an exclusive segment in fashion, particularly in sportswear and lingerie.The programme has been designed to create well-rounded professionals equipped to handle the challenges of circular and flat-bed knitting in the domestic and export fields. They can pursue careers as Designers, Creative Managers, Merchandisers, Production Managers and Entrepreneurs.Knitwear design students are exposed to a wide milieu of subjects including Fashion Art and Illustration, Garment Construction, Pattern Making for Knits, Flat and Circular Knitting, Computerized Flat Knitting, Trends and Forecasting, Design Process, Knitwear Production and Planning, Merchandising and Marketing. Traditional design acumen is honed with craft surveys, design and documentation.
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bdeskd">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (Fashion Communication)</h1>
    		    <p>Diversified career options for Fashion Communication<br>
In the ever-growing world of fashion, the Fashion Communication (FC) design programme at NIFT happens to be the single most cutting-edge, exciting, and increasingly essential pathway to open up in the fashion and lifestyle industry. The significance of brand identity has come to be seen on par with what the brand sells i.e., the product. Numerous prêt and luxury brands keep appearing in the Indian retail scenario, and it has become essential for each one of them to develop a unique brand identity for maximum impact and visibility. Fashion Communication has made it feasible for these brands to communicate their products, identity, and strategy, by providing a platform for these very brands.

The Fashion Communication programmeprimarily focuses on four major domains i.e., Graphic Design, Space Design, Fashion Media and Fashion Thinking, and the related genres of these major areas, using hand and digital skills through knowledge, application and practice based approach.

The restructured curriculum is designed to instill a robust communication design base with an increased industry interface by way of visits, industry-linked projects and lectures by industry experts. Further more, besides the existing industry exposure, internship and graduation project, the new curriculum includes a mandatory industry connect from semester-III onwards in form field visits, classroom projects and special lectures by industry professional/experts.The continuousevaluation would be based on student’s regularity, engagement with the industry by way of participation in classroom projects, participation in fashion weeks or other industry events, or through faculty assistance in an ongoing consultancy project.
				    
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bdesfc">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.FTech. (Apparel Production)</h1>
    		    <p>
				     Diversified career options for B.F.Tech (Apparel Production)<br>
The B.F.Tech (Apparel Production) programme moulds students to be qualified for diverse work profiles available in the apparel-manufacturing sector.Keeping the diverse nature of challenges faced by the industry, the course curriculum aims to introduce different essential streams including apparel manufacturing technology, information technology, quality management, artificial intelligence etc.The course introduces students to the fundamentals governing aesthetic and design elements and the fundamentals of management. It imparts extensive knowledge of raw materials including fabrics and trims and of machineries involved in the manufacturing of apparels. Students develop understanding of production planning, merchandising, work study and quality control which provide essential operational knowledge relating to future work profiles.
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/bftap">Read more</a>
    		    </p>
				
				<h1 class="course_name">Foundation Programme (FP)</h1>
    		    <p>The Design & Technology studies at NIFT, commences with a two semester Foundation Program. The program is designed to foster the creativity, sensitivity and skills to form a strong foundation. The students are sensitized towards fundamentals of fashion business namely design, technology and management in a socio-cultural perspective.

Students are offered a range of options for developing skills in specific areas through engagement with lectures, workshops, field visits and projects. Students can build their areas further through number of electives offered to them during their foundation period. Specialization will be offered after completion of Foundation program based on the aptitude and performance of the student.
				     
	          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/foundationprogramme">Read more</a>
    		    </p>
				
				
				
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
               
			   
				<h1 class="course_name">M.Des. (Master of Design)</h1>
    		    <p>
				     Diversified Career Options<br>
The nature of fashion has evolved beyond its association with apparel, to become multi-disciplinary and multi-dimensional. Its approach to various concepts, material, technology, craftsmanship, culture, business, economics, promotion, consumption and innovation now tends to creating unexplored areas that present immense scope for study and research. ‘Master of Design’ degree caters to this multi-disciplinary and dynamic nature of job profiles that seek professionals who can work in versatile environments. Research is one of the tools that empower one to take up challenges, which may emerge in contemporary complex systems. Therefore, this course builds its specializations based on the foundation of design thinking and research practice.

Students are provided with options for forming their own Career Pathways to create new avenues from varied areas of interest. The unique aptitude and ability of each student is recognized and honed through specialized training and skill development during the course of two years. Students from different disciplines provide multi-dimensional and innovative thought construct for providing critical and creative solutions to future problems. 

    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/mdesmd">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">M.F.M. (Master of Fashion Management)</h1>
    		    <p>
				     Diversified Career Options<br>
The objective of the two year Master of Fashion Management (MFM) Programme (erstwhile AMM), started in 1987, is to develop leadership and managerial talents in the fields of management, marketing, merchandising and retailing, honed specifically for the requirements of the garment export, fashion and lifestyle and retail sectors. Students undergo in depth education in management, marketing, buying, merchandising (retail and export), retail operations, forecasting, international marketing, international trade practices and project formulation. 

They are exposed to creative merchandising/marketing, innovative fashion management practices, Information technology developments, directions of fashion trends and business practices through field visits and industry internships. Research, data analysis and decision-making skills are inculcated as part of curriculum. Entrepreneurship is inculcated both as part of curriculum and through various projects. The students are also associated with craft clusters because of which they become better marketers of both handloom and handicraft products, and understand the entrepreneurial challenges of the MSME sector, and the business solutions that are needed.
    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/mfm">Read more</a>
    		    </p>
				
				<h1 class="course_name">M.FTech. (Master of Fashion Technology)</h1>
    		    <p>
				     Diversified Career Options<br>
The programme adopts a holistic approach towards cultivating postgraduate students meant for techno managerial roles in the fashion and allied manufacturing sector. In the initial courses students are oriented towards the apparel manufacturing industry as they learn various operations and processes involved. Concurrently the programme imparts managerial concepts related to operations. 

Technology subjects relating to the engineering of patterns using manual method and computer-aided design and construction of garments allow the students to understand product specifics. Knowledge of various machineries involved ranging from the basic mechanisms to new age automated machineries ensure the students are aware of technical issues which arise due to product complexities. This enables identifying accessible solutions and development of related indigenous solutions. Extensive inputs are given in areas of Plant layout, Industrial engineering, Maintenance engineering related to manufacturing of fashion goods.


    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/mft">Read more</a>
    		    </p>
            </div>
			
            <div class="course_type" id="bed_block" style="display : none;">
               <h1 class="course_name">Continuing Education Programmes</h1>
    		    <p>National Institute of Fashion Technology offers a diverse array of Continuing Education (CE) programmes to support the industry, as well as aspiring and working professionals. The wide range of specialized programmes offered by NIFT help aspiring professionals to get trained, entry-level professionals to get advanced training, mid-level professionals to upgrade their skills, and at times also help professionals to re-enter the Industry. These programme have been developed in consultation with reputed academicians and industry practitioners.
In addition to the Continuing Education programmes offered, NIFT has been offering Diploma Programmes from the academic year 2014 onwards. These programmes are aimed at offering value added programmes to the local students from the State where the NIFT campuses are located and to facilitate lateral entry to the existing degree programmes of NIFT.


    	         <br><br>
    		        <a target="_blank" href="https://www.nift.ac.in/cep">Read more</a>
    		    </p>
			</div>
            <div class="course_type" id="phd_block" style="display : none;">
               <h1 class="course_name">Doctoral Programmes</h1>
    		    <p>
				     Objective<br>

National Institute of Fashion Technology (NIFT) offers doctoral programme through its Head Office in Delhi. The programme is in recognition of high academic achievements, independent research and application of knowledge in the areas of Design, Management and Technology as applied with reference to textile, fashion, lifestyle, apparel, craft and any other related field. Interdisciplinary and trans-disciplinary research will also be encouraged.<br>

NIFT recruits outstanding researchers to create a vibrant research culture and strengthen the research focus of NIFT. NIFT research training gives candidates the skills they need to conduct research, which aims to solve critical problems affecting the industry, communities and the environment.<br>

NIFT expects its PhD scholars to demonstrate independent research and thought leadership through publications in academic journals and scholarly presentations of their work and also their passion for knowledge and research, for developing new ideas and paradigms. Creativity and the potential to do outstanding research must be a hallmark of their personality and intellectual skill set.<br>

PhD degree would read the title of the thesis and would not state any area i.e. Design, Management, Technology.


    		          <br>
    		        <a target="_blank" href="https://www.nift.ac.in/doctoralstudies">Read more</a>
    		    </p>
			   
              </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <div class="admit_block">
                <h1 class="admit_name">Admission for Situation Test</h1>
                <p>NIFT Admission 2020<br>

PREFERENCE FOR SITUATION TEST DATE & EXAM CENTRE
for shortlisted candidates of Bachelor of Design (B.Des.)
 <br>
			<br>

                    <a target="_blank" href="https://applyadmission.net/nift2020/SituationTestCentreOption.aspx">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">NIFT Admissions 2020-21</h1>
                <p><br>
				<br>
                    <a target="_blank" href="https://applyadmission.net/nift2020/">Read more</a>
                </p>
            </div>
			
			<div class="admit_block">
                <h1 class="admit_name">Admission for PhD</h1>
                <p>Welcome to Online Registration by Candidates for NIFT Admissions to
Ph.D. 2020– 2021<br>
				<br>

                    <a target="_blank" href="https://applyadmission.net/nift2020phd/">Read more</a>
                </p>
            </div>
			
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>Placements</h1>
            <div class="place_block">
                <p>Campus Placement 2020 Schedule
				<br>
                    <a target="_blank" href="https://nift.ac.in/placements">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '33'";
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
					}else{
					$sql1 = "SELECT * FROM colleges where id = '33'";
					$res1 = mysqli_query($conn, $sql1);
					$row1 = mysqli_fetch_array($res1);
					echo '<div class="block">
							<div class="background" style="background-image:url('.$row1["background"].')"><div class="dark">
								<span class="header">No reviews have been made for this college yet!</span><br>
								<span class="header">Click <a style="background:none;padding:0;margin:0;width:auto;text-decoration:underline;font-size:20px;" href="/KGS/reviews/write.php">here</a> to write your own review.</span><br><br>
							</div></div>
						</div>';
				}
				}
			?>
        </div>
		<?php include '../PHP/menu.php'?>
		<?php include '../PHP/search.php'?>
	</body>
</html>