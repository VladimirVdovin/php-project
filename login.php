<?php
require_once __DIR__ . "/vendor/autoload.php";

use Dotenv\Dotenv;

$dotenve = Dotenv::createImmutable(__DIR__);
$dotenve->load();

$dbHost = $_ENV["DB_HOST"];
$dbUser = $_ENV["DB_USER"];
$dbPass = $_ENV["DB_PASS"];
$dbName = $_ENV["DB_NAME"];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>main</title>
	<link rel="stylesheet" href="public/css/style.css">
</head>

<body style="text-align: center;">
	<header>
		<?php session_start(); ?>
		<?php include 'includes/header.php'; ?>
	</header>

	<aside>
		<?php $currentPage = 'login.php'; ?>
		<?php include 'includes/sidebar.php'; ?>
	</aside>

	<br><br>

	<main>


		<!-- Если пользователь авторизован, предлагаем ему выйти  -->

		<?php if (isset($_SESSION['auth']) && isset($_SESSION['login'])) : ?>
			<?php echo $_SESSION['login'] ?>, хотите выйти из сессии?
			<form method='POST'>
				<input type="submit" name="quit" value="yes">
			</form>

			<?php
			if (isset($_POST["quit"]) == 'yes') {
				$_POST["quit"] = null;
				$_SESSION['auth'] = null;
				$_SESSION['user_flash'] = 'Пользователь больше не авторизован';
				header('Location:index.php');
				die();
			}
			?>


			<!-- Если пользователь не авторизован, предлагаем авторизоваться  -->

		<?php else : ?>

			<form action="" method="POST">
				<label for="login">Введите логин</label>
				<input name="login" id="login"><br>
				<label for="password">Введите пароль</label>
				<input name="password" type="password" id="password"><br>
				<input type="submit">
			</form>

			<a href="register.php">Зарегистрироваться</a>

			<?php

			$link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
			if (!$link) {
				mysqli_connect_error();
			}

			if (!empty($_POST['login']) && !empty($_POST['password'])) {
				$login = $_POST['login'];
				$password = $_POST['password'];

				$query = "SELECT * FROM user 
						WHERE login='$login'
						AND password='$password'";
				$res = mysqli_query($link, $query);
				$user = mysqli_fetch_assoc($res);

				if (!empty($user)) {
					$_SESSION['auth'] = true;
					$_SESSION['login'] = $login;
					$_SESSION['user_flash'] = 'Авторизация прошла успешно';
					header("Location: index.php");
					die();
				} else {
					echo "Неверный логин или пароль";
				}
			}
			?>
		<?php endif ?>
	</main>

	<footer>
		<?php include 'includes/footer.php'; ?>
	</footer>

	<br>
	<br>

</body>

</html>