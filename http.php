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

















		</main>

        <footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

	</br>
	</br>

	</body>
</html>