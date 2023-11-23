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

<?php session_start() ?>
<br>
<?php
	// Это текст к заданию "Отправка формы в БД и редирект"
	// Саморедирект с сохранением записи в БД и сообщением об успехе
	// Форма находится в блоке <!-- Отправка формы в БД и редирект -->
		$link = mysqli_connect($host, $user, $pass, $name);
		if (!$link) {
			die(mysqli_connect_error());
		}

		if (!empty($_POST)) {
			$name=$_POST['name'];
			$age=$_POST['age'];
			$salary=$_POST['salary'];

			if (is_string($name) and is_numeric($age) and is_numeric($salary)) {
				$query = "INSERT INTO test (name, age, salary) 
				VALUES ('$name', '$age', '$salary')";
				mysqli_query($link, $query);
				$_SESSION['flash_db'] = 'Форма успешно сохранена';
				header('Location: http.php');
				die();
			} else {
				$_SESSION['flash_db'] = 'Форма не прошла валидацию';
			}
		}
	// Выводим сообещние, что форма сохранена
		if (isset($_SESSION['flash_db'])) {
			echo "<b style='background-color:SpringGreen'>" . $_SESSION['flash_db']
			. '</b>';
			unset($_SESSION['flash_db']);
		}
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
			<?php $CurrentPage = 'http.php'; ?>
			<?php include 'includes/slidebar.php'; ?>
		</aside>

        <main>


<!-- ------- Глава 18 - Работа с HTTP -------- -->

<br>

<!-- Протокол HTTP - Отправка форм методом GET -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Протокол HTTP - Отправка форм методом GET</h3>

	<form action="/index.php" method='GET'>
		<input name="test1" value="1">
		<input name="test2" value="2">
		<input type="submit">
	</form>
    <br><br>
</div>


<!-- Протокол HTTP - Отправка форм методом POST -->
<div style="text-align: center;">
	<h3>Протокол HTTP - Отправка форм методом POST</h3>

	<form action="/index.php" method='POST'>
		<input name="test1" value="1">
		<input name="test2" value="2">
		<input type="submit">
	</form>

</div>


<!-- API - данные валют -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>API - данные валют</h3>

    <?php
        static $rates;
    
        if ($rates === null) {
            $rates = json_decode(file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js'));
        }
        echo "Обменный курс USD по ЦБ РФ на сегодня: {$rates->Valute->USD->Value} <br>";
        echo "Обменный курс EUR по ЦБ РФ на сегодня: {$rates->Valute->EUR->Value}<br>";
        echo "Обменный курс 100 RSD по ЦБ РФ на сегодня: {$rates->Valute->RSD->Value}";
    ?>

</div>


<!-- Метод HTTP запроса -->
<div style="text-align: center;">
	<h3>Метод HTTP запроса</h3>

    <form action='test2.php' type="GET">
        Нажмите кнопку и определите тип HTTP запроса:
		<input type="hidden" name="value" value='request_method'>
        <input type="submit" value='request method'>
    </form>
</div>


<!-- HTTP заголовки запроса -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>HTTP заголовки запроса</h3>
    
    <form action='test2.php' type="GET">
        Посмотрть HTTP заголовки:
		<input type="hidden" name="value" value='headers'>
        <input type="submit" value='headers'>
    </form>
</div>


<!-- Массив заголовков HTTP запроса -->
<div style="text-align: center;">
	<h3>Массив заголовков HTTP запроса</h3>
    
    <form action='test2.php' type="GET">
        Посмотрть массив заголовков:
		<input type="hidden" name="value" value='headers_array'>
        <input type="submit" value='headers array'>
    </form>
</div>


<!-- Заголовки HTTP ответа -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Заголовки HTTP ответа</h3>
    
    <form action='test2.php' type="GET">                     <!-- Номер 1 -->
        Установка типа данных - text/plain (страница без форматирования):
		<input type="hidden" name="value" value='text/plain'>
        <input type="submit" value='header'>
    </form>
    
    <form action='test2.php' type="GET">                     <!-- Номер 2 -->
        Свой заголовок:
		<input type="hidden" name="value" value='own_header'>
        <input type="submit" value='own_header'>
    </form>
</div>


<!-- Отдача стартовой строки HTTP ответа -->
<div style="text-align: center;">
	<h3>Отдача стартовой строки HTTP ответа</h3>
    
	<form action='test2.php' type="GET">                    
		Статус запроса - если выбрать последнюю кнопку, будет 404:
			<input type='radio' name = 'key' value='1' checked>
			<input type='radio' name = 'key' value='2'>
			<input type='radio' name = 'key' value='3'>
			<input type='radio' name = 'key' value='4'>
			<input type="submit" name = 'value' value='404'>
	</form>
	
</div>



<!-- ------- Глава 19 - Редиректы -------- -->


<!-- Введение в редиректы PHP -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Введение в редиректы PHP</h3>

	Нахмите на кнопку. Это ссылка на result.php
	<br>
	<form action='result.php'>
		<input type="hidden" name="redirect" value="true">
		<!-- <input type="hidden" name="exe" value="success"> -->
		<input type="submit">
	</form>
	Hо сразу произойдет редирект на index.php
	<br>
</div>


<!-- GET запросы и редирект -->
<div style="text-align: center;">
	<h3>GET запросы и редирект</h3>

	Нажмите на кнопку. Это ссылка на result.php c параметром "success"
	<br>
	<form action='result.php'>
		<input type="hidden" name="par" value="success"> 
		<input type="hidden" name="redirect" value="true">
		<input type='submit'>
	</form>
	Далее редирект с result.php на index.php
	<br>


<!-- Саморедирект с добавлением параметров -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Саморедирект с добавлением параметров</h3>

	Это ссылка на page.php с параметром
	<br>
	<form action='page.php'>
		<input type="hidden" name="param" value="default">
		<input type='submit'>
	</form>
	Можно ввести в адресной троке http://interns-vladimir-php-project.local.wpstudio.ru/result.php и все равно не будет ошибки
	<br>
</div>

<!-- Флеш сообщения -->
<div style="text-align: center;">
	<h3>Флеш сообщения</h3>


	<?php $_SESSION["flesh"] = "Переход на db.php" ?>

	Это ссылка на page.php c редиректом на db.php
	<br>
	<form action='page.php' method="GET">
		<input type='hidden' name='flag' value='flash_mes'>
		<input type='submit'>
	</form>
	Там появится флеш сообщение
	<br>


<!-- Массив флеш сообщений -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Массив флеш сообщений</h3>

	<?php 
		$_SESSION['arr_flash'][] = "Первое сообщение из массива сообщений с http.php";
	?>

	Это ссылка c массивом сообщений на page.php и c редиректом на files.php
	<br>
	<form action='page.php' method="GET">

		<input type='hidden' name='flag' value='flash_array'>
		<input type='submit'>
	</form>
	<br>
</div>


<!-- Отправка формы в БД c редиректом, флеш сообщением и валидацией -->
<div style="text-align: center;">
	<h3>Отправка формы в БД и редирект</h3>

	
	<!-- Сохраняем форму в БД после отправки -->
	<!-- Редирект на эту же страницу, чтобы не было дублей. -->

	Новая запись в mydb:
	<br>
	<form method="POST">
		<label for="name">Имя</label>
		<input name="name" id="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>">
		<label for="age">Возраст</label>
		<input name="age" id="age" value="<?php echo isset($_GET['age']) ? $_GET['age'] : 0; ?>">>
		<label for="salary">Зарплата</label>
		<input name="salary" id="salary" value="<?php echo isset($_GET['salary']) ? $_GET['salary'] : 0; ?>">>>
		<input type='submit'>
	</form>
	<br>














		</main>

        <footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

	</br>
	</br>

	</body>
</html>