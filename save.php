<?php
    require_once __DIR__ . "/vendor/autoload.php"; 
    use Dotenv\Dotenv;

    $dotenve = Dotenv::createImmutable(__DIR__);
    $dotenve->load();

    $db_host = $_ENV["DB_HOST"];
    $db_user = $_ENV["DB_USER"];    
    $db_pass = $_ENV["DB_PASS"];         
    $db_name = $_ENV["DB_NAME"];   
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>save</title>
		<link rel="stylesheet" href="public/css/style.css">
	</head>
	<body style="text-align: center;">
		<header>
			<?php include 'includes/header.php'; ?>
		</header>

		<aside>
		</aside>

		<main>
        <br><br>

<!-- Редкатирование записи в БД-->

                        <!-- Номер 2. Реализуйте save для сохранения -->
               
        <?php 
        $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
                    or die(mysqli_connect_error($link));
        $id = $_GET['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];
        $query = "UPDATE test SET name='$name', age='$age', 
                            salary='$salary' WHERE id='$id'";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        echo 'юзер успешно изменен!';
        ?>    
  
</main>

<footer>
    <?php include 'includes/footer.php'; ?>
</footer>

</br>
</br>

</body>
</html>