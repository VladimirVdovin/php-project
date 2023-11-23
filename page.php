<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>page</title>
		<link rel="stylesheet" href="public/css/style.css">
	</head>
	<body style="text-align: center;">
		<header>
			<?php include 'includes/header.php'; ?>
		</header>

		<aside>
        <?php $CurrentPage = 'page.php'; ?>
			<?php include 'includes/slidebar.php'; ?>
		</aside>

		<br>

		<main>

            <?php

        session_start();    

				// Если это переход с http.php то произойдет редирект с флеш сообщением
				if (isset($_GET['flag'])) {
				$referer = strrchr($_SERVER['HTTP_REFERER'], '/');

                	if ($referer == '/http.php' and $_GET['flag'] == 'flash_mes') {
                    	$_SESSION["flash"] = "Это флеш сообщение о редиректе на db.php с page.php";
                    	header('Location: db.php');
                    	die();
                	}

					// Это уже редирект с массивом флеш сообщений
					if ($referer == '/http.php' and $_GET['flag'] == 'flash_array') {
						$_SESSION['arr_flash'][] = "Второе сообщение из массива сообщений с page.php";
						header('Location: files.php?redirect=true');
						die();
					}
				}

				//	Если зайти на странице без параметра param 
                if (!isset($_GET['param'])) {
                    header("Location: page.php?param=default");
                } else {
                    echo "<b style='background-color:SpringGreen'>Это просто страница для проверки редиректов. <br>Если зайти на эту страницу без параметра param, 
                            то сработает редирект на эту же страницу, но уже с параметром</b>";
                }
				
		    ?>


		
		</main>

        <footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

	</br>
	</br>

	</body>
</html>