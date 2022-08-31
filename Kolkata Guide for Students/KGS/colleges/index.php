<?php
    session_start();
?>
<!DOCTYPE html>
<html
    <head>
		<title>Kolkata Student Guide | Colleges</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../CSS/nav_menu.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/college_list.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/search.css"/>
		<link rel="stylesheet" type="text/css" href="../CSS/header.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<script>
		    function switch_menu(){
		        if(document.getElementById("submenu").style.display == "block")
		            document.getElementById("submenu").style.display = "none";
                else
                    document.getElementById("submenu").style.display = "block";
		    }
		</script>
	    <?php include "../PHP/header.php"?>
	    <div id="page">
	        <h1>Search For Colleges</h1>
	        <div class="course_container">
                <ul>
                    <li onclick="switch_menu()"><a><span><?php
                        if(empty($_GET["course"]))
                            echo "Select Course";
                        else if($_GET["course"]=="Agriculture")
                            echo "Agriculture";
                        else if($_GET["course"]=="Architecture")
                            echo "Architecture";
                        else if($_GET["course"]=="Arts")
                            echo "Arts";
                        else if($_GET["course"]=="Commerce")
                            echo "Commerce";
                        else if($_GET["course"]=="Computers")
                            echo "Computer Applications";
                        else if($_GET["course"]=="Dental")
                            echo "Dental";
                        else if($_GET["course"]=="Design")
                            echo "Design";
                        else if($_GET["course"]=="Education")
                            echo "Education";
                        else if($_GET["course"]=="Engineering")
                            echo "Engineering";
                        else if($_GET["course"]=="HotelManagement")
                            echo "Hotel Management";
                        else if($_GET["course"]=="Law")
                            echo "Law";
                        else if($_GET["course"]=="MassCom")
                            echo "Mass Communication";
                        else if($_GET["course"]=="Vocational")
                            echo "Vocational";
                        else if($_GET["course"]=="Pharmacy")
                            echo "Pharmacy";
                        else if($_GET["course"]=="Science")
                            echo "Science";
                        else if($_GET["course"]=="Medical")
                            echo "Medical";
                        else if($_GET["course"]=="VeterinaryScience")
                            echo "Veterinary Science";
                    ?><img style="float:right;height:20px;margin-right : 10px" src="https://www.freeiconspng.com/uploads/white-down-arrow-png-2.png"></img></a>
                        <div id="submenu" class="sub_menu">
                            <ul>
                                <li><a href="../colleges/">All</a></li>
                                <li><a href="../colleges?course=Agriculture">Agriculture</a></li>
                                <li><a href="../colleges?course=Architecture">Architecture</a></li>
                                <li><a href="../colleges?course=Arts">Arts</a></li>
                                <li><a href="../colleges?course=Commerce">Commerce</a></li>
                                <li><a href="../colleges?course=Computers">Computer Applications</a></li>
                                <li><a href="../colleges?course=Dental">Dental</a></li>
                                <li><a href="../colleges?course=Design">Design</a></li>
                                <li><a href="../colleges?course=Education">Education</a></li>
                                <li><a href="../colleges?course=Engineering">Engineering</a></li>
                                <li><a href="../colleges?course=HotelManagement">Hotel Management</a></li>
                                <li><a href="../colleges?course=Law">Law</a></li>
                                <li><a href="../colleges?course=MassCom">Mass Communication</a></li>
                                <li><a href="../colleges?course=Medical">Medical</a></li>
                                <li><a href="../colleges?course=Vocational">Vocational</a></li>
                                <li><a href="../colleges?course=Pharmacy">Pharmacy</a></li>
                                <li><a href="../colleges?course=Science">Science</a></li>
                                <li><a href="../colleges?course=VeterinaryScience">Veterinary Science</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
	        </div>
	        <?php
    	        include '../PHP/dbhandler.php';
    	        if(empty($_GET["course"])){
    	            $sql = "";
    	            $msql = "SELECT * FROM colleges";
    	            $res = mysqli_query($conn, $msql.$sql) or die();
    	        }
	            else{
    	            $msql = "SELECT colleges FROM courses";
	                if($_GET["course"]=="Agriculture")
                        $sql = " WHERE name = 'Agriculture'";
                    else if($_GET["course"]=="Architecture")
                        $sql = " WHERE name = 'Architecture'";
                    else if($_GET["course"]=="Arts")
                        $sql = " WHERE name = 'Arts'";
                    else if($_GET["course"]=="Commerce")
                        $sql = " WHERE name = 'Commerce'";
                    else if($_GET["course"]=="Computers")
                        $sql = " WHERE name = 'Computers'";
                    else if($_GET["course"]=="Dental")
                        $sql = " WHERE name = 'Dental'";
                    else if($_GET["course"]=="Design")
                        $sql = " WHERE name = 'Design'";
                    else if($_GET["course"]=="Education")
                        $sql =  " WHERE name = 'Education'";
                    else if($_GET["course"]=="Engineering")
                        $sql = " WHERE name = 'Engineering'";
                    else if($_GET["course"]=="HotelManagement")
                        $sql = " WHERE name = 'HotMan'";
                    else if($_GET["course"]=="Law")
                        $sql = " WHERE name = 'Law'";
                    else if($_GET["course"]=="MassCom")
                        $sql = " WHERE name = 'MassCom'";
                    else if($_GET["course"]=="Vocational")
                        $sql = " WHERE name = 'Vocational'";
                    else if($_GET["course"]=="Medical")
                        $sql = " WHERE name = 'Medical'";
                    else if($_GET["course"]=="Pharmacy")
                        $sql = " WHERE name = 'Pharmacy'";
                    else if($_GET["course"]=="Science")
                        $sql = " WHERE name = 'Science'";
                    else if($_GET["course"]=="VeterinaryScience")
                        $sql = " WHERE name = 'VetSc'";   
    	            $res = mysqli_query($conn, $msql.$sql) or die();
                    $row = mysqli_fetch_array($res);
                    $token = strtok($row[0], " ");
                    $msql = "SELECT * FROM colleges where id = '".$token."'";
                    $sql = "";
                    while (true)
                    {
                        $token = strtok(" ");
                        if($token == false)
                            break;
                        $sql .= " OR id = '".$token."'";
                    }
                    $res = mysqli_query($conn, $msql.$sql);
	            }
    	        $no_of_results = mysqli_num_rows($res);
    	        $res_per_page = 10;
    	        $no_of_pages = ceil($no_of_results/$res_per_page);
    	        
    	        if(!isset($_GET["page"])){
    	            $cur_page = 1;
    	        }
    	        else{
    	            $cur_page = $_GET["page"];
    	        }
    	        
    	        $starting_limit_number = ($cur_page-1)*$res_per_page;
    	        $limit_sql = " LIMIT ".$starting_limit_number.", ".$res_per_page;
    	        $res = mysqli_query($conn, $msql.$sql.$limit_sql) or die(mysqli_error($conn));
    	        $no_of_results = mysqli_num_rows($res);
    	        
    	        if($no_of_results > 0){
    	            while($row = mysqli_fetch_array($res)){
        	            echo '<div class="block">
        	                <div class="background_container">
        	                    <img src="'.$row["background"].'" class="background"></img>
            	                <img src="'.$row["logo"].'" class="logo"></img>
            	                <div class="header">'.$row["name"].'</div>
                            </div><br>
        	                <span class="description">'.$row["description"].'</span><br><br>
                            <a href="'.$row["link"].'">View More</a>
                        </div><br><br>';
    	            }
    	        }
    	        else{
    	            echo '<div class="error">Sorry! No match for colleges found. :(</div>';
    	        }
    	    ?>
    	    <?php
    	        echo "<div style='text-align:center;' id='page_number'>";
	            if(!isset($_GET["page"]))
					$_GET["page"] = 1;
				for($page=1; $page<=$no_of_pages; $page++){
					if($page == $_GET["page"])
						$style = "text-decoration : underline";
					else
						$style = "text-decoration : none";
	                echo "<a style='".$style."' href='../colleges?page=".$page."'>".$page."</a>";
	            }
	            echo "</div>";
    	    ?>
	    </div>
	    <?php require '../PHP/menu.php'; ?>
	    <?php require '../PHP/search.php' ?>
	</body>
</html>