<?php
require_once __DIR__ . "/vendor/autoload.php";

use Dotenv\Dotenv;

$dotenve = Dotenv::createImmutable(__DIR__);
$dotenve->load();

$host = $_ENV["DB_HOST"];
$user = $_ENV["DB_USER"];
$pass = $_ENV["DB_PASS"];
$name = $_ENV["DB_NAME"];
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
		<?php include 'includes/header.php'; ?>
	</header>

	<aside>
		<?php $currentPage = 'index.php'; ?>
		<?php include 'includes/sidebar.php'; ?>
	</aside>

	<main>


		<!-- Просмотр записи в БД -->

		<?php
		$link = mysqli_connect($host, $user, $pass, $name)
			or die(mysqli_connect_error($link));
		$id = $_GT['id'];
		$query = mysqli_query($link, "SELECT * FROM test WHERE id=$id")
			or die(mysqli_error($link));
		$user = mysqli_fetch_assoc($query);
		?>

		<br><br>
		<div style="background-color: Gainsboro;">
			<?php if (mysqli_num_rows($query) != 0) : ?>
				<p>
					имя: <span class='name'><?php echo $user['name'] ?></span>
				</p>
				<p>
					возраст: <span class='age'><?php echo $user['age'] ?></span>
					зарплата: <span class='salary'><?php echo $user['salary'] . '$' ?></span>
				</p>
			<?php else : ?>
				Юзера с таким ID нет в базе данных
			<?php endif; ?>
		</div>

	</main>

	<footer>
		<?php include 'includes/footer.php'; ?>
	</footer>

	<br>
	<br>

</body>

</html>