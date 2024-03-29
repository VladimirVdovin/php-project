<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>result</title>
</head>

<body>
    <?php
    // Код для упражнений по теме Редирект
    // Исполняется только при переходе с http.php
    // Редирект на index.php
    if (isset($_SERVER['HTTP_REFERER'])) {
        $refererFile = strrchr($_SERVER['HTTP_REFERER'], '/');
        if ($refererFile == '/http.php' && isset($_GET['redirect'])) {
            $addr = 'index.php';
            if (!isset($_GET['par'])) {             // без параметра 
                header("Location: " . $addr . "?redirect=true");
            } else {
                $par = $_GET['par'];                  // с параметром
                header("Location: " . $addr . "?par=" . $par . "&redirect=true");
            }
            die();
        }
    }


    if (isset($_GET["test1"]) && isset($_GET["test2"])) {
        echo $_GET["test1"] . ' ' . $_GET["test2"];
    }


    if (isset($_GET["number1"]) && isset($_GET["number2"])) {
        echo ($_GET["number1"] + $_GET["number2"]);
    }

    if (isset($_POST["name"]) && isset($_POST["age"])) {
        echo $_POST['name'] . ' - ' . $_POST['age'];
    }

    if (isset($_POST['pass'])) {
        $pass = 12345;
        if ($pass == $_POST['pass']) {
            echo "Вы ввели правильный пароль";
        } else {
            echo "Вы ввели неправильный пароль";
        }
    }

    if (isset($_POST['year']) && isset($_POST['month'])) {
        $date = $_POST['year'] . "-" . $_POST['month']  . "-" . $_POST['day'];
        $birthTime = strtotime($date);
        $weekday = [
            'воскресенье', 'понедельник', 'вторник', 'среда',
            'четверг', 'пятница', 'суббота'
        ];
        echo "День недели, когда вы родились: "  . $weekday[date('w', $birthTime)];
    }
    ?>

</body>

</html>