<?php
	include '../PHP/dbhandler.php';
    $output = '';
    if(isset($_POST['search'])){
        $st = "%{$_POST['search']}%";
        $sql = "SELECT * FROM colleges WHERE name LIKE ?";
        $stmt = $conn->prepare($sql);
        if($stmt&&$stmt->bind_param("s", $st)&&$stmt->execute()&&$stmt->store_result()&&$stmt->bind_result($id, $name, $link, $logo, $desc, $bg)){
            if($stmt->num_rows>0){
                $output .= '<ul>';
                while($stmt->fetch()){
                    $output .= '<li class="list"><a href="'.$link.'">'.$name.'<span class="type">Colleges</span></a></li>';
                }
				$output .="</ul>";
                echo $output;
            }
            else{
                echo '<ul><li>Data Not Found</li></ul>';
            }
        }
        else{
            echo 'Error';
        }
    }
?>