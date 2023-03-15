<?php
	if ($_POST['name']=='') {
		// echo '<meta charset="UTF-8">Введите имя';
	} else if ($_POST['prof']=='') {
		// echo '<meta charset="UTF-8">Выберите классификацию';
	} else if ($_POST['login']=='' || $_POST['password']=='') {
		// echo '<meta charset="UTF-8">Введите логин и пароль';
	} else if ($_POST['email']=='') {
		// echo '<meta charset="UTF-8">Введите почту';
	} else {
		// var_dump($_POST['name']);
		// var_dump($_POST['prof']);
		try{  
        	$conn = new PDO("mysql:host=localhost;dbname=mysql", "root", "");
				$sql = "SELECT * FROM  `users` WHERE login=:login";

        	$stmt = $conn->prepare($sql);
        	$stmt->bindValue(":login", $_POST["login"]);
        	$stmt->execute();
			$stmt = $stmt->fetchAll();

			if (count($stmt)>0) {
				// echo '<meta charset="UTF-8">Такой пользователь уже существует'; 
				$login = 'Гость';
				require_once('index.php');
			} else {
				$conn = new PDO("mysql:host=localhost;dbname=mysql", "root", "");
					$sql = "SELECT * FROM  `users` WHERE email=:email";
	
				$stmt = $conn->prepare($sql);
				$stmt->bindValue(":email", $_POST["email"]);
				$stmt->execute();
				$stmt = $stmt->fetchAll();

				if (count($stmt)>0) {
					// echo '<meta charset="UTF-8">Эта почта уже зарегистрирована'; 
					$login = 'Гость';
					require_once('index.php');
				} else {
					$sql = "INSERT INTO  `users` (`login`, `email`, `password`, `name`, `prof`) VALUES (:login, :password, :email, :name, :prof);";
					$stmt = $conn->prepare($sql);
					$stmt->bindValue(":login", $_POST["login"]);
					$stmt->bindValue(":password", $_POST['password']);
					$stmt->bindValue(":email", $_POST["email"]);
					$stmt->bindValue(":name", $_POST['name']);
					$stmt->bindValue(":prof", $_POST['prof']);
					$stmt->execute();
					// echo '<meta charset="UTF-8">Регистрация успешна!';
					if(!isset($_SESSION)) { 
						session_start(); 
					}
					$_SESSION['user'] = $_POST["name"];
					$_SESSION['pass'] = $_POST["password"];
					$_SESSION['email'] = $_POST["email"];
					$_SESSION['login'] = $_POST["login"];
					$_SESSION['prof'] = $_POST["prof"];
					require_once('index.php');
				}
			}

		}catch(PDOException $e){
			$Log_File = "log.txt";
			file_put_contents($Log_File, date("Y-m-d H:i:s")." -//- ".$e->getMessage().PHP_EOL, FILE_APPEND | LOCK_EX);				
			// echo '<meta charset="UTF-8">Ошибка регистрации';
			if(!isset($_SESSION)) { 
				session_start(); 
			}
			$_SESSION['user'] = 'Гость';
			require_once('index.php');
		}
	}
?>