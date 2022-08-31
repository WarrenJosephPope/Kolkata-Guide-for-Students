<?php
$servername = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "kgs";

$conn = mysqli_connect($servername, $DBUsername, $DBPassword, $DBName);

if(!$conn){
	die("Connection Failed: ");
}