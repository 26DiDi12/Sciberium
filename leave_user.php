<?php  

	if(!isset($_SESSION)) { 
		session_start(); 
	}

	$_SESSION["user"] = 'Гость';
	unset($_SESSION["pass"]);
	unset($_SESSION["email"]);
	unset($_SESSION["phone"]);
	unset($_SESSION["password"]);
	unset($_SESSION["city"]);
	unset($_SESSION["prof"]);
	unset($_SESSION["gender"]);
	require_once('index.php');
		
?>