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
			<?php $CurrentPage = 'index.php'; ?>
			<?php include 'includes/slidebar.php'; ?>
		</aside>

		<br>

		<?php
			// Код для упражнения по теме Редирект
            // Исполняется только при редиректе с result.php
            // Передает парамерт succes
            $referer_file = strrchr($_SERVER['HTTP_REFERER'], '/');
            if ($referer_file == '/http.php' and isset($_GET['redirect'])) {
                if (isset($_GET['par'])) {
					echo '<b style="background-color:SpringGreen">' . $_GET['par'] . " - 
					редирект http.php -> result.http -> index.http c параметром выполнен успешно!</b>";
				} else {
					echo '<b style="background-color:SpringGreen">
					Редирект http.php -> result.http -> index.http  выполнен успешно!</b>';
				}
			}


		?>

		<main>
			<?php include 'code.php';?> 
		</main>

        <footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

	</br>
	</br>

	</body>
</html>
