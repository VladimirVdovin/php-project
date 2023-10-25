<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>result</title>
	</head>
	<body>
        <?php
            if (isset($_GET["number1"]) and isset($_GET["number2"])) {
                echo ($_GET["number1"] + $_GET["number2"]);
            }

            if (isset($_POST["name"]) and isset($_POST["age"])) {
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

            if (isset($_POST['year']) and isset($_POST['month'])) {
                $date = $_POST['year'] . "-" . $_POST['month']  . "-" . $_POST['day'];
                $birthtime = strtotime($date);
                $weekday = [ 'воскресенье', 'понедельник', 'вторник', 'среда', 
                'четверг', 'пятница', 'суббота'];
                echo "День недели, когда вы родились: "  . $weekday[date('w', $birthtime)];
            }
            
           

        ?>


	</body>
</html>