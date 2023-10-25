<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>result</title>
	</head>
	<body>

	
<!-- Получение данных форм методом GET -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Получение данных форм методом GET</h3>  <!-- Номер 1 -->

        <form action="/result.php" method="GET">
	        <label for="number1">Введите слагаемое 1</label>
			<input id="number1" name="number1">
			<label for="number2">Введите слагаемое 2</label>
	        <input id="number2" name="number2">
	        <input type="submit">
        </form>
	<br>
	</div>


<!-- Получение данных форм методом POST -->
	<div style="text-align: center;">
	<h3>Получение данных форм методом POST</h3>
		<div style="border: 2px solid lightgray; padding: 10px; display: inline-block;">
		<form action="/result.php" method="POST"> <!-- Номер 1 -->
			<label for="name">Введите имя</label>
			<input id="name" name="name">
			<label for="age">Введите возраст</label>
			<input id="age" name='age'>
			<input type="submit">
		</form>
		</div>

		<br><br>

		<form action="result.php" method="POST">  <!-- Номер 2 -->
			<label for="pass">Введите пароль (12345)</label>
			<input type="password" id="pass" name="pass">
			<input type="submit">
		</form>

		<br>

		<form action="result.php" method="POST">  <!-- Номер 3 -->
			<div style="border: 2px solid lightgray; padding: 10px; display: inline-block;">
			<label for="year">Введите год рождения</label>
			<input id="year" name="year">
			<br>
			<label for="month">Введите месяц</label>
			<input id="month" name="month">
			<br>
			<label for="day">Введите день</label>
			<input id="day" name="day">
			<br>
			<input type="submit">
			</div>
		</form>
	</div>


<!-- Обработка формы в одном файле -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Обработка формы в одном файле</h3>

	<form method="GET">
		<input name="name">
		<input name="surname">
		<input name="fathername">
		<input type="submit">
	</form>

	<br>

	<?php
	if (!empty($_GET)) {
		echo $_GET['surname'] . ' ' . $_GET['name'] . ' ' . $_GET['fathername']; 
	}	
	?>
	</div>


<!-- Скрытие формы после отправки -->
	<div style="text-align: center;">
	<h3>Скрытие формы после отправки</h3>

	
	<?php if (empty($_GET['name1'])): ?>
	
		<form action="" method="GET">
			<input name="name1">
			<input type="submit">
		</form>
	
	<?php else: ?>
		<?php echo $_GET['name1'] . ", приветствую Вас!"; ?>
	<?php endif; ?>
	</div>


<!-- Сохранение значений формы после отправки -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Сохранение значений формы после отправки</h3>


	<form action="" method="GET">
		<input name="town" value=<?php if (isset($_GET["town"])) 
			echo $_GET["town"]?>>
		<input name="country" value=<?php if (isset($_GET["country"])) 
			echo $_GET["country"]?>>
		<input type="submit">
	</form>

	<?php
	if (!empty($_GET)) {
		echo $_GET['town'] . ', ' . $_GET['country'];
	}	
	?>
	<br>
	</div>
	


<!-- Сохранение значения по умолчанию формы -->
	<div style="text-align: center;">
	<h3>Сохранение значения по умолчанию формы</h3>


	<?php $current_year = date('Y', time()) ?>

	<form action="" method="GET">
		<input name="year1" value=<?php 
			if (!isset($_GET["year1"]))
				echo $current_year; 
		?>>
		<input type="submit">
	</form>
	
</div>

	<?php
	if (!empty($_GET["year1"])) {
		$leap_year = strtotime($_GET["year1"] . "-01-01");
		if (date('L', $leap_year)) {
			echo $_GET["year1"] . " - это високосный год";
		} else {
			echo $_GET["year1"] . " - это не високосный год";
		}
	}	
	?>


<!-- Сокращенный код для сохранения значений по умолчанию -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Сокращенный код для сохранения значений по умолчанию</h3>
 

	<?php $current_time = time(); ?>

	<form method="GET">
		<label for="year2">Год</label>
		<input id="year2" name="year2" value="<?=
			$_GET['year2'] ?? date('Y', $current_time) ?>">
		<label for="month2">Месяц</label>
		<input id="month2" name="month2" value="<?=
			$_GET["month2"] ?? date("m", $current_time) ?>">
		<label for="day2">День</label>
		<input id="day2" name="day2" value="<?=
			$_GET['day2'] ?? date('d', $current_time) ?>">
		<input type="submit">
	</form>

	<?php 
	if (empty($_GET)) {
		echo "До нового года осталось " . (365 - date('z', $current_time)) . " дней";
	} else {
		$user_time = strtotime($_GET['year2'] . '-' . $_GET["month2"] . '-' . $_GET['day2']);
		echo "До нового года осталось " . (365 - date('z', $user_time)) . " дней";
	}
	?>
	</div>


<!-- Элемент textarea в PHP -->
	<div style="text-align: center;">
	<h3>Элемент textarea в PHP</h3>

	<form action="" method="GET">
		<label for="test">Введите комментарий</label>
		<textarea id="test" name="test"></textarea>
		<input type="submit">
	</form>

	<?php if ($_GET['test']) {
		echo $_GET['test'];
	}
	?>
	</div>


<!-- Элемент textarea в PHP -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Элемент textarea в PHP</h3>


	<form type="GET">
		<textarea name="translit"><?=$_GET["translit"] ?? '' ?></textarea>
		<input type="submit">
	</form>

	<?php 
	function translit($str) {
		$dict = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 
		'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
		'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
		'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
		'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch',
		'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => "'",
		'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];
	
		return strtr($str, $dict);
	}

	if ($_GET["translit"]) {
		echo translit($_GET["translit"]);
	}
	?>
	</div>


<!-- Чекбокс в PHP -->
	<div style="text-align: center;">
	<h3>Чекбокс в PHP</h3>


	<form action="" method="GET">
		<input type="checkbox" name="flag">
		<input name="name4">
		<input type="submit">
	</form>

	<?php 
	if (!empty($_GET)) {
		if (isset($_GET['flag'])) {
			echo 'Привет, ' . $_GET['name4'];
		} else {
			echo 'Пока, ' . $_GET['name4'];;
		}
	}
	?>
	</div>


<!-- Нюансы использования чекбоксов -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Нюансы использования чекбоксов</h3>


	<form action="" method="GET">
		<input type="hidden" name="flag18" value=0>
		<label for="flagID">Вам уже есть 18 лет?</label>
		<input id="flagID" type="checkbox" name="flag18">
		<input type="submit">
	</form>

	<?php 
	if (!empty($_GET['flag18'])) {
		if ($_GET['flag18'] === '1') {
			echo 'Вам разрешен доступ на сайт';
		} else {
			echo 'Вам НЕ разрешен доступ на сайт';
		}
	}
	?>
	<br>
	</div>


<!-- Сохранение выбранного значения в чекбоксе после отправки -->
	<div style="text-align: center;">
	<h3>Сохранение выбранного значения в чекбоксе после отправки</h3>

	<form action="" method="GET">
		<input type="hidden" name="flag3" value="0">
		<input type="hidden" name="flag4" value="0">
		<input type="hidden" name="flag5" value="0">
		<input
			type="checkbox"
			name="flag3"
			value="1"
			<?php if (!empty($_GET['flag3'])) echo 'checked' ?>
	>
	<input
			type="checkbox"
			name="flag4"
			value="1"
			<?php if (!empty($_GET['flag4'])) echo 'checked' ?>
	>
	<input
			type="checkbox"
			name="flag5"
			value="1"
			<?php if (!empty($_GET['flag5'])) echo 'checked' ?>
	>
	<input type="submit">
	</form>
	</div>


<!-- Радиокнопки в PHP -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Радиокнопки в PHP</h3>
	
	
	Выберите пол: 
	<form action="" method="GET">
		<label for="female">Ж</label>
		<input type="hidden" value="0">
		<input type="radio" name="radio" value="1" id="female">
		<label for="male">М</label>
		<input type="radio" name="radio" value="2" id="male">
		<input type="submit">
	</form>

	<?php if ($_GET['radio'] === "1") {
		echo "Вы выбрали Ж";
	} elseif ($_GET['radio'] === "2") {
		echo "Вы выбрали М";
	}
	?>
	<br>
	</div>


<!-- Сохранение выбранного значения в радиокнопках после отправки -->
	<div style='text-align: center;'>
	<h3>Сохранение выбранного значения в радиокнопках после отправки</h3>


	Выберите язык: 
	<form action="" method="GET">
		<label for="rus">Русский</label>
		<input type="radio" name="radio" value="1" id="rus" <?php 
			if (!empty($_GET["radio"]) and $_GET["radio"] === "1") 
				echo 'checked' ?>>
		<label for="eng">Английский</label>
		<input type="radio" name="radio" value="2" id="eng" <?php 
			if (!empty($_GET["radio"]) and $_GET["radio"] === "2") 
				echo 'checked' ?>>
		<label for="srb">Сербский</label>
		<input type="radio" name="radio" value="3" id="srb" <?php 
			if (!empty($_GET["radio"]) and $_GET["radio"] === "3") 
				echo 'checked' ?>>
		<input type="submit">
	</form>

	<?php if ($_GET['radio'] === "1") {
		echo "Вы выбрали русский";
	} elseif ($_GET['radio'] === "2") {
		echo "Вы выбрали английский";
	} else {
		echo "Вы выбрали сербский";
	}
	?>
	</div>


<!-- Сохранение выбранного значения в радиокнопках после отправки -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Сохранение выбранного значения в радиокнопках после отправки</h3>
	
	В какой стране вы живете?
	<form action="" method="GET">
	<select name="select">
		<option>Россия</option>
		<option>Сербия</option>
		<option>Австралия</option>
	</select>
	<input type="submit">
	</form>

	<?php
	if (isset($_GET) and !empty($_GET["select"])) {
		echo "Вы живете в стране " . $_GET["select"];
	} 
	?>
	<br>
	</div>


<!-- Сохранение выбранного значения в радиокнопках после отправки -->
	<div style="text-align: center;">
	<h3>Сохранение выбранного значения в радиокнопках после отправки</h3>


	Выберите ваш язык
	<form action="" method="GET">
	<select name="select">
		<option value="русский">Русский</option>
		<option value="сербский">Сербский</option>
		<option value="английский">Английский</option>
	</select>
	<input type="submit">
	</form>

	<?php
	if (isset($_GET) and !empty($_GET["select"])) {
		echo "Вы выбрали " . $_GET["select"] . " язык";
	} 
	?>
	<br>
	</div>


<!-- Сохранение значения в селектах после отправки -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>Сохранение значения в селектах после отправки</h3>


	Выберите ваш язык
	<form action="" method="GET">
	<select name="select2">
		<option value="русский" <?php
			if (!empty($_GET) and $_GET["select2"] === "русский") {
				echo "selected"; } ?>>Русский</option>
		<option value="сербский" <?php
			if (!empty($_GET) and $_GET["select2"] === "сербский") {
				echo "selected"; } ?>>Сербский</option>
		<option value="английский" <?php
			if (!empty($_GET) and $_GET["select2"] === "английский") {
				echo "selected"; } ?>>Английский</option>
	</select>
	<input type="submit">
	</form>

	<?php
	if (isset($_GET) and !empty($_GET["select2"])) {
		echo "Вы выбрали " . $_GET["select2"] . " язык";
	} 
	?>
	<br>
	</div>


<!-- Сохранение значения в селектах после отправки -->
	<div style="text-align: center;">
	<h3>Сохранение значения в селектах после отправки</h3>

	Пишем в адресной строке ?par1=1&par1=2 (или другие значения)<br>
	<?php
	echo $_GET["par1"] . '<br>';
	echo ($_GET["par1"] ** 2)  . '<br>';
	echo ($_GET["par1"] + $_GET["par2"])  . '<br>';
	if ($_GET["par1"] === "1") {
		echo 'hello <br>';
	} elseif (($_GET["par1"] === '2')) {
		echo 'bye <br>';
	}
	$arr = ['a', 'b', 'c', 'd', 'e'];
	echo $arr[$_GET["par1"]];
	?>


<!-- GET запросы с помощью ссылок -->
	<div style="background-color: Gainsboro; text-align: center;">
	<h3>GET запросы с помощью ссылок</h3>

	
	<a href="?number=1">Число 1</a>  <!-- номер 1 -->
	<a href="?number=2">Число 2</a>
	<a href="?number=3">Число 3</a>
	<br>
	<?php echo $_GET["number"]?>
	<br>
	<br>


	<?php   								// номер 2
	for ($i=1; $i<=10; $i++): ?>
		<a href="<?= '?num=' . $i ?>"><?='Число ' . $i . " " ?></a>
	<?php endfor ?>

	<?php 
	if (!empty($_GET)) {
		echo '<br>';
		echo ($_GET["num"]);
	} 
	?>
	<br><br>


	<?php                                       // номер 3
	$arr = ['a', 'b', 'c', 'd', 'e'];
	foreach ($arr as $elem) {
		echo "<a href=\"?letter=$elem\">Буква $elem </a>";
	}
	?>

<?php 
	if (!empty($_GET)) {
		echo '<br>';
		echo ($_GET["letter"]);
	} 
	?>

	<br>
	</div>


<!-- Практика на формы в PHP -->
	<div style="text-align: center;">
	<h3>Практика на формы в PHP</h3>
	

 <!-- номер 1 -->
	<form method="GET">              
		<label for="degrees">Введите температуру в градусах Цельсия</label>
		<input id="degrees" name="degrees">
		<input type="submit">
	</form>

	<?php 
	if (isset($_GET['degrees'])) {
		$Fahrenheit = (($_GET['degrees'] * 9) / 5) + 32;
		echo "Это $Fahrenheit градусов по Фаренгейту";
	}
	?>
	<br><br>


<!-- номер 2 -->
	<div style="border: 2px solid lightgray; padding: 10px; display: inline-block;">
	<form method="GET">              
		<label for="factorial">Введите число, факториал которого вы хотите узнать</label>
		<input id="factorial" name="factorial">
		<input type="submit">
	</form>

	<?php 
	if (isset($_GET['factorial'])) {
			$arr = range(1, $_GET['factorial']);
			$factorial = array_product($arr);
			echo "Факториал {$_GET['factorial']} равен $factorial";
		}
	?>
	</div>
	<br><br>


<!-- номер 3 -->
	<form method="GET">              
		<label for="divisor">Введите число, для которого нужно найти делители</label>
		<input id="divisor" name="divisor">
		<input type="submit">
	</form>
	
	<br>

	<?php 
	if (isset($_GET['divisor'])) {
		$arr_divisors = [];
		for ($i=1; $i<=$_GET['divisor']; $i++) {
			if ($_GET['divisor'] %  $i == 0) {
			$arr_divisors[] = $i; 
			}
		}
		echo "Делители числа " . $_GET['divisor'] . ": ";
		foreach($arr_divisors as $elem) {
			echo $elem . ' ';
		}	
	}
	?>
	<br><br>


<!-- номер 4 -->
	<div style="border: 2px solid lightgray; padding: 10px; display: inline-block;">
	<form method="GET">              
		<label for="nmbr1">Введите число 1</label>
		<input id="nmbr1" name="nmbr1">
		<label for="nmbr2">Введите число 2</label>
		<input id="nmbr2" name="nmbr2">

		<input type="submit">
	</form>
	
	<br>

	<?php 
	if (isset($_GET['nmbr1']) and isset($_GET['nmbr2'])) {
		if ($_GET['nmbr1'] >= $_GET['nmbr2']) {
			$max_nmbr = $_GET['nmbr1'];
		} else {
			$max_nmbr = $_GET['nmbr2'];
		}
		$arr_divisors = [];
		for ($i=1; $i<=$max_nmbr; $i++) {
			if ($_GET['nmbr1'] %  $i == 0 and $_GET['nmbr2'] %  $i == 0) {
				$arr_divisors[] = $i; 
				}
			}
			echo "Делители чисел {$_GET['nmbr1']} и {$_GET['nmbr2']}: ";
			foreach($arr_divisors as $elem) {
				echo $elem . ' ';
			}
	}
	?>
	</div>

	














</div>





















































	

	
	
	
	











        
	</body>
</html>