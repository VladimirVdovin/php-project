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
    <title>main</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <?php session_start(); ?>
        <?php include 'includes/header.php'; ?>
    </header>

    <aside>
        <?php $currentPage = 'login.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
    </aside>

    <main>
        <div class="register__div">
            <form action="" method="POST" class='register__form'>
                <h3 class="register__title">Регистрация</h3>

                <div class="register__group">
                    <label for="login" class="register__label">Логин</label>
                    <input name="login" id="login" class='register__input' value="<?php echo !empty($_POST['login']) ? $_POST['login'] : '' ?>"><br>
                </div>

                <div class="register__group">
                    <label for="password" class="register__label">Пароль</label>
                    <input type="password" name="password" id="password" class='register__input' value="<?php echo !empty($_POST['password']) ? $_POST['password'] : '' ?>"><br>
                </div>

                <div class="register__group">
                    <label for="confirm" class="register__label">Повторите пароль</label>
                    <input type="password" name="confirm" id="confirm" class='register__input' value="<?php echo !empty($_POST['confirm']) ? $_POST['confirm'] : '' ?>"><br>
                </div>

                <div class="register__group">
                    <label for="birthday" class="register__label">Дата рождения</label>
                    <input name="birthday" id="birthday" class='register__input' value="<?php echo !empty($_POST['birthday']) ? $_POST['birthday'] : '' ?>"><br>
                </div>

                <div class="register__group">
                    <label for="email" class="register__label">email</label>
                    <input name="email" id="email" class='register__input' value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>"><br>
                </div>

                <label for="country">Страна</label>
                <select name="country" id="country">
                    <option value="Russia">Russia</option>
                    <option value="Serbia">Serbia</option>
                    <option value="France">France</option>
                </select>

                <input type="submit">
            </form>

            <?php
            $link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
            if (!$link) {
                die(mysqli_connect_error());
            }

            if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['confirm'])) {
                $login = $_POST['login'];
                $password = $_POST['password'];
                $birthday = $_POST['birthday'];
                $email = $_POST['email'];
                $date = date('d-m-Y', time());
                $country = $_POST['country'];

                // Функция проводит валидацию и возвращает массив сообщение об ошибках
                function ValidateAll($link, $login, $password, $birthday, $email)
                {
                    $errorsArr = [];
                    $query = "SELECT * FROM user WHERE login='$login"; // проверяем, не занят ли логин
                    if (mysqli_query($link, $query))
                        $errorsArr[] = 'Логин занят';
                    if (!preg_match('#^[a-zA-Z0-9]+$#', $login))
                        $errorsArr[] = 'Логин должен содержать только латинские буквы и цифры';
                    if (strlen($login) < 4 || strlen($login) > 10)
                        $errorsArr[] = 'Длина логина от 4 до 10 символов';
                    if (strlen($password) < 6 || strlen($password) > 12)
                        $errorsArr[] = 'Длина пароля от от 6 до 12 символов';
                    if ($_POST['password'] != $_POST['confirm'])
                        $errorsArr[] = 'Пароли не совпадают';
                    if (!preg_match('#^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,}$#', $email))
                        $errorsArr[] = 'Введите действующий адрес электронной почты';
                    if (!preg_match('#^[0-9]{1,2}[\.\-][0-9]{1,2}[\.\-][0-9]{4}$#', $birthday))
                        $errorsArr[] = 'Дата должна быть в формате день.месяц.год';

                    return $errorsArr;
                }

                $errorsArr = ValidateAll($link, $login, $password, $birthday, $email, $date);

                var_dump($errorsArr);

                if (empty($errorsArr)) { // если массив с ошибками пустой, то заносим данные в БД
                    echo ('Массив');
                    $query = "INSERT INTO user 
						    (login, password, email, birthday, date, country)
                            VALUES ('$login', '$password', '$email', '$birthday', '$date', '$country')";
                    mysqli_query($link, $query);

                    $id = mysqli_insert_id($link);
                    $_SESSION['id'] = $id;
                    $_SESSION['auth'] = true;
                    $_SESSION['login'] = $login;
                    $_SESSION['user_flash'] = 'Регистрация и авторизация прошли успешно';
                    header("Location: index.php");
                    die();
                } else {
                    foreach ($errorsArr as $error)
                        echo $error . '<br>';
                }
            }

            ?>
        </div>
    </main>

    <footer>
    </footer>

    <br>
    <br>

</body>

</html>