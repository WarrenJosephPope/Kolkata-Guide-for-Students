<?php
	session_start();
	session_unset();
	session_destroy();
	header("location:".$_GET['back']);
?>