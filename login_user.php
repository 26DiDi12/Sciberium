<?php  
    $conn = new PDO("mysql:host=localhost;dbname=mysql", "root", "");
	$sql = "SELECT * FROM  `users` WHERE email=:email AND password=:password";

    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", $_POST["email"]);
    $stmt->bindValue(":password", $_POST['password']);
    $stmt->execute();
	$stmt = $stmt->fetchAll();
	// var_dump($stmt['0']);
         
	if (count($stmt)>0) {
		if(!isset($_SESSION)) { 
        	session_start(); 
    	}
		$_SESSION['user'] = $stmt['0']['name'];
		$_SESSION['email'] = $stmt['0']['email'];
		$_SESSION['phone'] = $stmt['0']['phone'];
		$_SESSION['city'] = $stmt['0']['city'];
		$_SESSION['prof'] = $stmt['0']['prof'];
		$_SESSION['pass'] = $stmt['0']['password'];
		// echo '<meta charset="UTF-8">Вы успешно авторизовались!'; 
		require_once('index.php');
	} else { 
		if(!isset($_SESSION)) { 
        	session_start(); 
    	}
		$_SESSION['user'] = 'Гость';
		// echo '<meta charset="UTF-8">Логин или пароль не верный или пользователь не существует'; 
		require_once('register.php');
	}
		
?>