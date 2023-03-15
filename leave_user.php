<?php  

	if(!isset($_SESSION)) { 
		session_start(); 
	}

	$_SESSION["user"] = 'Гость';
	unset($_SESSION["pass"]);
	unset($_SESSION["login"]);
	unset($_SESSION["email"]);
	unset($_SESSION["prof"]);
	// echo '<meta charset="UTF-8">Вы вышли с аккаунта!'; 
	require_once('index.php');
		
?>