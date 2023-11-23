<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>main</title>
		<link rel="stylesheet" href="public/css/style.css">
	</head>
	<body style="text-align: center;">
		<header>
			<?php include 'includes/header.php'; ?>
		</header>

		<aside>
			<?php $CurrentPage = 'login.php'; ?>
			<?php include 'includes/slidebar.php'; ?>
		</aside>

		<br><br>

		<main>
			<form action="" method="POST">
				<label for="login">Введите логин</label>
				<input name="login" id="login"><br>
				<label for="password">Введите пароль</label>
				<input name="password" type="password" id="password"><br>
				<input type="submit">
			</form>
		</main>

        <footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

	</br>
	</br>

	</body>
</html>