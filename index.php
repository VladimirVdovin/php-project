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
		<?php $currentPage = 'index.php'; ?>
		<?php include 'includes/sidebar.php'; ?>
	</aside>

	<br>

	<?php


	// Код для упражнения по теме Редирект
	// Исполняется только при редиректе с result.php
	// Передает параметр success
	if (isset($_SERVER['HTTP_REFERER'])) {
		$refererFile = strrchr($_SERVER['HTTP_REFERER'], '/');
		if ($refererFile == '/http.php' && isset($_GET['redirect'])) {
			if (isset($_GET['par'])) {
				echo '<b style="background-color:SpringGreen">' . $_GET['par'] . " - 
						редирект http.php -> result.http -> index.http c параметром выполнен успешно!</b>";
			} else {
				echo '<b style="background-color:SpringGreen">
						Редирект http.php -> result.http -> index.http  выполнен успешно!</b>';
			}
		}
	}

	// Код для упражнения по теме аутентификация
	// Редирект с login.php. Выводим сообщение об аутентификации
	if (!empty($_SESSION['user_flash'])) {
		echo '<b style="background-color:SpringGreen">' .
			$_SESSION['user_flash'] . "</b>";
		$_SESSION['user_flash']	= '';
	}
	?>

	<main>
		<?php
		// Информация на главной странице доступна только авторизированным пользователям
		if (isset($_SESSION['auth'])) {
			include 'code.php';
		} else {
			echo "<b style='background-color:SpringGreen'> 
						Информация доступна только авторизированным пользователям</b><br>";
			echo "<b style='background-color:SpringGreen'>
						<a href='login.php'>Авторизуйтесь</a></b>";
		}

		?>
	</main>

	<footer>
		<?php include 'includes/footer.php'; ?>
	</footer>

	<br>
	<br>

</body>

</html>