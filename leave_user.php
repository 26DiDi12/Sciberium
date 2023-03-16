<?php  

	if(!isset($_SESSION)) { 
		session_start(); 
	}

	$_SESSION["user"] = 'Гость';
	unset($_SESSION["pass"]);
	unset($_SESSION["email"]);
	unset($_SESSION["phone"]);
	require_once('index.php');
		
?>