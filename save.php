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

        <!-- Редактирование записи в БД-->

        <!-- Номер 2. Реализуйте save для сохранения -->

        <?php
        echo 'Редактирование записи:<br>';
        $link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die(mysqli_connect_error($link));
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

    <br>
    <br>

</body>

</html>