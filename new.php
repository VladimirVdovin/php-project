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
		<title>new user</title>
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

		<main>
        <br><br>

<!-- Добавление новой записи в БД-->

        <div style="background-color: Gainsboro">
            <form method="POST">
	            <label for="name">Введите имя</label>
                <input name="name" id="name" value="<?php 
                        echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
                <br>
                <label for="age">Введите возраст</label>
	            <input name="age" id="age" value="<?php 
                        echo isset($_POST["age"]) ? $_POST["age"] : '' ?>">
                <br>
                <label for="salary">Введите зарплату</label>
	            <input name="salary" id="salary" value="<?php 
                        echo isset($_POST['salary']) ? $_POST["salary"] : '' ?>">
                <br>
	            <input type="submit">
            </form>
        </div> 

        <?php if (!empty($_POST)) {
        	$name = $_POST['name'];
            $age = $_POST['age'];
            $salary = $_POST['salary'];
            
			$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
						or die(mysqli_connect_error($link));
			$query = "INSERT INTO test SET name='$name', age='$age', 
                                                salary='$salary'"; 
            mysqli_query($link, $query) or die(mysqli_error($link));
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