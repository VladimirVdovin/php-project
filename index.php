<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>php project</title>
	</head>
	<body>

	<a href="form.php">Тема Формы - form.php</a>

		<?php
			error_reporting(E_ALL);
			ini_set('display_errors', 'on');
			mb_internal_encoding('UTF-8');

			include 'code.php';

		?>

<!-- Метод отправки формы в PHP -->
	<h3>Метод отправки формы в PHP</h3>

		<form action='result.php' method="GET">
			<input name="test1">
			<input name="test2">
			<input type="submit">
		</form>

	</body>
</html>