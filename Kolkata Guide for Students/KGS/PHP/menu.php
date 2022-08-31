<script src="/KGS/Scripts/courses_list.js"></script>
<script src="/KGS/Scripts/menu.js"></script>
<div id="toggle" onclick="open_menu()">
	<img src="/KGS/Pictures/toggle.jpg"></img>
</div>
<div id="menu">
	<div id="main_menu">
		<div id="info_space">
		    <?php
		    include "dbhandler.php";
		        if(isset($_SESSION["id"])){
		            $sql = "SELECT dp from userss WHERE id = ".$_SESSION["id"];
		            $res = mysqli_query($conn, $sql);
		            $row = mysqli_fetch_array($res);
		            echo '<img src = "/KGS/'.$row["dp"].'" class="dp" onclick="window.location.href="/KGS/profile.php"></img>';   
		        }
			    $text = "";
			    if(isset($_SESSION['fname'])){
			        $text = "Hi, " . $_SESSION['fname'] . " " . $_SESSION['lname'] . "!";
			    }
			    else{
			        $text = "Hi, Guest!";
			    }
				echo '<p class="greet">' . $text .'</p>';
			?>
		</div>
		<ul>
			<li><a href="/KGS"><img src="/KGS/Pictures/home.png" class="icon"></img><span class="menu_text">HOME</span></a></li>
			<li><a onclick="college()"><img src="/KGS/Pictures/college.png" class="icon"></img><span class="menu_text">COLLEGES</span><img src="/KGS/Pictures/more.png" class="more"></img></a></li>
			<li><a href="/KGS/pg/register.php"><img src="/KGS/Pictures/hostel.png" class="icon"></img><span class="menu_text">UPLOAD PG DETAILS</span></a></li>
			<li><a href="/KGS/reviews/write.php"><img src="/KGS/Pictures/review.png" class="icon"></img><span class="menu_text">WRITE A REVIEW</span></a></li>
			<li><a href="/KGS/pg/pglist.php"><img src="/KGS/Pictures/hostel.png" class="icon"></img><span class="menu_text">PAYING GUEST</span></a></li>
			<li><a href="/KGS/reviews/"><img src="/KGS/Pictures/review.png" class="icon"></img><span class="menu_text">REVIEWS</span></a></li>
			<li><a href="/KGS/bookstores/"><img src="/KGS/Pictures/shop.png" class="icon"></img><span class="menu_text">BOOK STORES</span></a></li>
	    	<?php
				if(isset($_SESSION['fname'])){
					echo '<li><a href="/KGS/PHP/logout.php?back='.$_SERVER["PHP_SELF"].'"><img src="/KGS/'.$_SESSION["dp"].'" class="dp"></img><span style="margin-left:5px;" class="menu_text" id="log">LOGOUT</span></a></li>';
				}
				else{
					echo '<li><a href="/KGS/login.php?back='.$_SERVER["PHP_SELF"].'"><img src="/KGS/Pictures/login.png" class="icon"></img><span class="menu_text" id="log">LOGIN</span></a></li>';
				}
			?>
		</ul>
	</div>
	<div id="rest" onclick="close_menu()"></div>
</div>
<div id="college_list" class="more_list">
	<div class="header">
		<img src="/KGS/Pictures/back.png" onclick="close_college_list()"></img><span class="head">Colleges</span>
	</div>
	<ul>
	    <li><a href="/KGS/colleges/">All</a></li>
		<li><a href="/KGS/colleges?course=Agriculture">Agriculture</a></li>
		<li><a href="/KGS/colleges?course=Architecture">Architecture</a></li>
		<li><a href="/KGS/colleges?course=Arts">Arts</a></li>
		<li><a href="/KGS/colleges?course=Commerce">Commerce</a></li>
		<li><a href="/KGS/colleges?course=Computers">Computer Applications</a></li>
		<li><a href="/KGS/colleges?course=Dental">Dental</a></li>
		<li><a href="/KGS/colleges?course=Design">Design</a></li>
		<li><a href="/KGS/colleges?course=Education">Education</a></li>
		<li><a href="/KGS/colleges?course=Engineering">Engineering</a></li>
		<li><a href="/KGS/colleges?course=HotMan">Hotel Management</a></li>
		<li><a href="/KGS/colleges?course=Law">Law</a></li>
		<li><a href="/KGS/colleges?course=Management">Management</a></li>
		<li><a href="/KGS/colleges?course=MassCom">Mass Communication</a></li>
		<li><a href="/KGS/colleges?course=Medical">Medical</a></li>
		<li><a href="/KGS/colleges?course=Pharmacy">Pharmacy</a></li>
		<li><a href="/KGS/colleges?course=Science">Science</a></li>
		<li><a href="/KGS/colleges?course=VetSc">Veterinary Sciences</a></li>
	</ul>
</div>