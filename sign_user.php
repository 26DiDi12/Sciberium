<?php
if ($_POST['name'] == '') {
	// echo '<meta charset="UTF-8">Введите имя';
	$_SESSION['user'] = 'Гость';
	require_once('register.php');
} else if ($_POST['phone'] == '') {
	// echo '<meta charset="UTF-8">Выберите классификацию';
} else if ($_POST['email'] == '' || $_POST['password'] == '') {
	$_SESSION['user'] = 'Гость';
	require_once('register.php');
	// echo '<meta charset="UTF-8">Введите логин и пароль';
	$_SESSION['user'] = 'Гость';
	require_once('register.php');
} else {
	
	// if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	// 	$emailErr = "Invalid email format";
	// }
	// var_dump($_POST['name']);
	try {
		$conn = new PDO("mysql:host=localhost;dbname=mysql", "root", "");
		$sql = "SELECT * FROM  `users` WHERE email=:email";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":email", $_POST["email"]);
		$stmt->execute();
		$stmt = $stmt->fetchAll();

		if (count($stmt) > 0) {
			// echo '<meta charset="UTF-8">Эта почта уже зарегистрирована'; 
			$_SESSION['user'] = 'Гость';
			require_once('register.php');
		} else {
			$sql = "INSERT INTO  `users` (`name`, `email`, `phone`, `city`, `prof`, `password`) VALUES (:name, :email, :phone, :city, :prof, :password);";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(":name", $_POST['name']);
			$stmt->bindValue(":email", $_POST["email"]);
			$stmt->bindValue(":phone", $_POST['phone']);
			$stmt->bindValue(":city", $_POST['city']);
			$stmt->bindValue(":prof", $_POST['prof']);
			$stmt->bindValue(":password", $_POST['password']);
			$stmt->execute();
			// echo '<meta charset="UTF-8">Регистрация успешна!';
			if (!isset($_SESSION)) {
				session_start();
			}
			$_SESSION['user'] = $_POST["name"];
			$_SESSION['email'] = $_POST["email"];
			$_SESSION['phone'] = $_POST["phone"];
			$_SESSION['city'] = $_POST["city"];
			$_SESSION['prof'] = $_POST["prof"];
			$_SESSION['pass'] = $_POST["password"];
			require_once('index.php');
		}
	} catch (PDOException $e) {
		$Log_File = "log.txt";
		file_put_contents($Log_File, date("Y-m-d H:i:s") . " -//- " . $e->getMessage() . PHP_EOL, FILE_APPEND | LOCK_EX);
		// echo '<meta charset="UTF-8">Ошибка регистрации';
		if (!isset($_SESSION)) {
			session_start();
		}
		$_SESSION['user'] = 'Гость';
		require_once('register.php');
	}
}
