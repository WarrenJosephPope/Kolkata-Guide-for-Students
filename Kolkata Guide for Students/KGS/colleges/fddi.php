<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kolkata Student Guide | Footwear Design and Development Institute </title>
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
		    <img class="bg" src="https://i.pinimg.com/originals/70/a9/02/70a9022820f74b938663141ec48e441e.jpg"></img>
		     <img class="logo" src="https://english.mathrubhumi.com/polopoly_fs/1.873341.1455785798!/image/image.jpg_gen/derivatives/landscape_728_450/image.jpg"></img>
		     <span id="college_name"><a target="_blank" href="https://www.fddiindia.com/">Footwear Design and Development Institute</a>
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
		    <p> Footwear Design & Development Institute Was Established In 1986, Under The Aegis Of Ministry Of Commerce & Industry, Govt. Of India With Major Objectives:
To Develop Human Resources within the country by imparting appropriate knowledge and skills to promote the rapid growth of footwear and allied industry in the country.
To provide and develop appropriate infrastructure for the Indian footwear industry to enable it attain international standards of production and
To particularly promote the growth of export production of quality footwear and allied products from the country.
FDDI is playing a key role in imparting education, facilitating the Indian industry by bridging the skill gap in the areas of Footwear, Leather Accessory & life style product, and because of its continuous contribution towards nation building, FDDI has been granted the status of “An Institution of National Importance” under the FDDI Act 2017.
			<br><br>
	    	    <span style="float:right;">Footwear Design and Development Institute<br>
                Leather Complex(Gate No.3) Mauza:Karaidanga,<br>
		        Gangapur , near Banatala, Kolkata-743502<br>
                West Bengal, India.<br>
                </span><br>
		        <a target="_blank" href="https://www.fddiindia.com/about-us.php">Read more</a>
		    </p>
		</div>
		<div class="information" id="college_courses">
		    <h1>Courses</h1>
		    <div id="college_menu2">
		        <ul>
		            <li id="ug" class="selected2" onclick="ug();">UnderGraduate Programmes</li>
		            <li id="pg" onclick="pg();">Post Graduate Programmes</li>
		        </ul>
		    </div>
			
		    <div class="course_type" id="ug_block">
    		    <h1 class="course_name">B.Des. (FOOTWEAR DESIGN & PRODUCTION)</h1>
				<p>SCHOOL OF FOOTWEAR DESIGN & PRODUCTION (SFDP)<br>
				Footwear and Products Industry holds a prominent place in Indian economy in terms of employment generation and exports earnings. India has a 2.6 per cent share in the global leather trade and this sector ranks eighth in terms of the country‘s foreign exchange earnings from the industry. With affluence of raw materials, skilled manpower, innovative technology, and the strong presence of the allied industries, the sector has tremendous potential for growth and employment generation. Government of India has also recognized this as the Priority sector under Make in India initiative and targets to enhance the turnover to US $ 27 billion by 2020 (from the present turnover of US $ 12.60 billion) and employment from 3.1 million people to 6 million in next 5 years. India is today the most favorable sourcing and manufacturing base destination for the leading countries like Italy, Germany, UK, USA, Hong Kong, France, Spain, Netherlands and Belgium.	
    		          <br>
    		        <a target="_blank" href="https://www.fddiindia.com/school-of-footwear-design-production.php#bdes-footwear-production">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (Fashion Design)</h1>
    		    <p>SCHOOL OF FASHION DESIGN (SFD)<br>
				FDDI has emerged as one of India’s leading centres for Fashion Design, a reputation based around its pedagogy and achievements of its graduates and the creative energy of its staff and students.
				The school of Fashion Design at FDDI offers students a matchless introduction to the fast-paced, creative, and energetic fashion industry. Fashion education under this program aims to nurture creativity while providing a rigorous grounding in practical and technical skills needed for career success. Our close associations with the industry let us immerse the students in what’s happening now in this fast-changing field exposing them to the real demands and practices of the fashion world preparing students for success at every level, from haute couture to ready-to-wear to mass market.
    		          <br>
    		        <a target="_blank" href="https://www.fddiindia.com/school-of-fashion-design.php#b-des-fashion-fesign">Read more</a>
    		    </p>
				
				<h1 class="course_name">B.Des. (LEATHER GOODS & ACCESSORIES DESIGN )</h1>
    		    <p>SCHOOL OF LEATHER GOODS & ACCESSORIES DESIGN<br>
				     The School of Leather Goods & Accessories Design offers Bachelor programs to impart in-depth training in the area of Fashion Leather Goods, Garment & Accessory Design. The Leather Design Program at FDDI is exclusive in its structure and application to the Leather Fashion and Accessories Industry. It focuses on curating Design-Techno professionals in the field of Leather product, Leather Garment and lifestyle accessories across the five campuses at Noida, Chennai, Kolkata, Chandigarh and Hyderabad.
    		          <br>
    		        <a target="_blank" href="https://www.fddiindia.com/school-of-leather-goods-design-production.php#bdes-leather">Read more</a>
    		    </p>
				
				<h1 class="course_name">BBA RETAIL & FASHION MERCHANDISE</h1>
    		    <p>SCHOOL OF RETAIL & FASHION MERCHANDISE (SRFM)<br>
The School of Retail and Fashion Merchandise offers Master and Bachelor programs in Retail and fashion Merchandise. This programs aims in inculcating the student, the capacity, the drive, and the value based professional competence to address varied situations in the world of work that can be transformed into added business value. This course enables the students to acquire sufficient diversity of experience and understanding through learning at institutional settings elsewhere in India and overseas.
	The Indian retail industry is not one of the fastest growing sectors in our country but also a major employment contributor in India. Retail industry in India is expected to grow to US$ 1,200 billion by 2021 from US$ 672 billion in 2017. There are several international and domestic business enterprises who have invested in Indian retail.
    		          <br>
    		        <a target="_blank" href="https://www.fddiindia.com/school-of-retail-fashion-merchandise.php#bba-merchandise">Read more</a>
    		    </p>			
            </div>
				
			
            <div class="course_type" id="pg_block" style="display:none;">
               
			   
				<h1 class="course_name">M.Des. FOOTWEAR DESIGN & PRODUCTION</h1>
    		    <p>
				   SCHOOL OF FOOTWEAR DESIGN & PRODUCTION (SFDP)<br>
Footwear and Products Industry holds a prominent place in Indian economy in terms of employment generation and exports earnings. India has a 2.6 per cent share in the global leather trade and this sector ranks eighth in terms of the country‘s foreign exchange earnings from the industry. With affluence of raw materials, skilled manpower, innovative technology, and the strong presence of the allied industries, the sector has tremendous potential for growth and employment generation. Government of India has also recognized this as the Priority sector under Make in India initiative and targets to enhance the turnover to US $ 27 billion by 2020 (from the present turnover of US $ 12.60 billion) and employment from 3.1 million people to 6 million in next 5 years. India is today the most favorable sourcing and manufacturing base destination for the leading countries like Italy, Germany, UK, USA, Hong Kong, France, Spain, Netherlands and Belgium.
    		          <br>
    		        <a target="_blank" href="https://www.fddiindia.com/school-of-footwear-design-production.php#mdes-foot-production">Read more</a>
    		    </p>
				
				
				<h1 class="course_name">MBA RETAIL & FASHION MERCHANDISE</h1>
    		    <p>
				     Diversified Career Options<br>
The objective of the two year Master of Fashion Management (MFM) Programme (erstwhile AMM), started in 1987, is to develop leadership and managerial talents in the fields of management, marketing, merchandising and retailing, honed specifically for the requirements of the garment export, fashion and lifestyle and retail sectors. Students undergo in depth education in management, marketing, buying, merchandising (retail and export), retail operations, forecasting, international marketing, international trade practices and project formulation. 

They are exposed to creative merchandising/marketing, innovative fashion management practices, Information technology developments, directions of fashion trends and business practices through field visits and industry internships. Research, data analysis and decision-making skills are inculcated as part of curriculum. Entrepreneurship is inculcated both as part of curriculum and through various projects. The students are also associated with craft clusters because of which they become better marketers of both handloom and handicraft products, and understand the entrepreneurial challenges of the MSME sector, and the business solutions that are needed.
    		          <br>
    		        <a target="_blank" href="https://www.fddiindia.com/school-of-retail-fashion-merchandise.php#mba-merchandise">Read more</a>
    		    </p>		
	
            </div>
		</div>
		<div style="display:none" class="information" id="college_admit">
            <h1>Admissions</h1>
            <a class="admit_details_button" href="https://www.fddiindia.com/admission-process.php">Official Admission Details</a>
            <div class="admit_block">
                <h1 class="admit_name">Admission Process</h1>
                <p>
				GENERAL INFORMATION<br>
				Candidates are required to fill the Registration Form Online as per the instructions mentioned and upload the requisite documents at the time of Registration. A candidate has to make an online payment of Rs. 500 against the registration.

				Payments of application fee (Rs. 500/-) can be made through credit cards/debit cards/internet banking. The bank and/or transaction charges on the application fee will be borne by the candidate.

				CANDIDATES ARE ADVISED TO APPLY ON OR BEFORE 15TH APRIL 2020.

			<br>
			<br>

                    <a target="_blank" href="https://www.fddiindia.com/admission-process.php">Read more</a>
                </p>
            </div>
        </div>
        <div style="display:none" class="information" id="college_place">
           <h1>CENTRALIZED PLACEMENT</h1>
            <div class="place_block">
                <p>The Corporate Relations & Placement Department plays a key role in counselling and guiding the students of the Institute for their successful career. It is a crucial interface for the students between the stage of completion of academic programme of studies and entry into the professional world.

				The department also coordinates various activities related to the placement of the students along with the Industry Internship. Reputed National and Multinational companies visit FDDI for campus interviews every year. The benefits of this assistance are reflected in the preparation of FDDI students who are able to secure esteemed positions in the industry. The placement service operates year round to facilitate contacts between companies and students. The teams, other activities include career counselling by trained professionals, organizing interview skills, workshops and development of effective resumes, holding seminars & events and updation of pedagogy through market research. So far FDDI has been able to achieve a very high placement record. All students secure job offers before they complete their programme at FDDI.
				<br>
                    <a target="_blank" href="https://www.fddiindia.com/placement.php">Read more</a>
                </p>
            </div> 
        </div>
		<div style="display:none" class="information" id="college_review">
           <h1>Reviews</h1>
			<?php
				include '../PHP/dbhandler.php';
				$sql = "SELECT * FROM reviews WHERE college = '13'";
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
					$sql1 = "SELECT * FROM colleges where id = '13'";
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