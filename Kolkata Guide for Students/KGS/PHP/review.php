<?php
    if(!isset($_POST["submit_review"])){
        header("location:/KGS/reviews/index.php");
    }
    else{
        include "dbhandler.php";
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $college = mysqli_real_escape_string($conn, $_POST["college"]);
        $contact = mysqli_real_escape_string($conn, $_POST["ph"]);
        $mail = mysqli_real_escape_string($conn, $_POST["mail"]);
        $comments = mysqli_real_escape_string($conn, $_POST["comments"]);
        $rating = mysqli_real_escape_string($conn, $_POST["star"]);
        $date = mysqli_real_escape_string($conn, date("Y/m/d"));
        $sql = "INSERT INTO reviews (name, contact, email, college, comment, rating, date) VALUES ('$name', '$contact', '$mail', '$college', '$comments', '$rating','$date')";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($res==TRUE)
            header("location:/KGS/reviews/");
    }
?>