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
    <title>new user</title>
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

        <!-- Номер 1. Реализуйте страницу edit -->

        <?php
        $link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
            or die(mysqli_connect_error($link));
        $id = $_GET['id'];
        $query = "SELECT id FROM test";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($row = mysqli_fetch_assoc($res)) {
            $data[] = $row['id'];
        }
        ?>

        <?php if (in_array($id, $data)) : ?>

            <?php
            $query = "SELECT * FROM test WHERE id='$id'";
            $res = mysqli_query($link, $query) or die(mysqli_error($link));
            $user = mysqli_fetch_assoc($res);
            ?>

            <div style="background-color: Gainsboro">
                <form action='save.php?id=<?= $_GET['id'] ?>' method="POST">
                    <label for="name">Введите имя</label>
                    <input name="name" id="name" value="<?php echo $user['name'] ?>">
                    <br>
                    <label for="age">Введите возраст</label>
                    <input name="age" id="age" value="<?php echo $user['age'] ?>">
                    <br>
                    <label for="salary">Введите зарплату</label>
                    <input name="salary" id="salary" value="<?php echo $user['salary'] ?>">
                    <br>
                    <input type="submit">
                </form>
            </div>
        <?php else : ?>
            Юзера с таким ID в базе данных нет
        <?php endif ?>

    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <br>
    <br>

</body>

</html>