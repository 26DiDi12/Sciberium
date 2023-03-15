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
			$sql = "INSERT INTO  `users` (`email`, `password`, `name`, `phone`) VALUES (:password, :email, :name, :phone);";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(":password", $_POST['password']);
			$stmt->bindValue(":email", $_POST["email"]);
			$stmt->bindValue(":name", $_POST['name']);
			$stmt->bindValue(":phone", $_POST['phone']);
			$stmt->execute();
			// echo '<meta charset="UTF-8">Регистрация успешна!';
			if (!isset($_SESSION)) {
				session_start();
			}
			$_SESSION['user'] = $_POST["name"];
			$_SESSION['pass'] = $_POST["password"];
			$_SESSION['email'] = $_POST["email"];
			$_SESSION['phone'] = $_POST["phone"];
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
