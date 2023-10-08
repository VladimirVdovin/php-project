<?php

/* ----- Первая глава - Основы ------ */

// Переменные 	
    echo '<h3>Переменные</h3>'; 
	$num = 123;
	echo $num . '<br>';
    
    $a = 10;
    echo $a . '<br>';
    $a = 20;
    echo $a . '<br>';


// Математические операции
    echo '<h3>Математические операции</h3>'; 
    $a = 1 + 2 + 3;
    echo $a  . '<br>';

    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';

    $c = 10;
    $d = 5;
    $res = $c + $d;
    echo $res . '<br>';

    $a = 1;
    $b = 2;
    $c = 3;
    echo $a + $b + $c . '<br>';
    
    $a = 10;
    $b = 5;
    $c = $a - $b;
    $d = 7;
    $res = $c + $d;
    echo $res . '<br>'; 


// Дроби и отрицательные числа
    echo '<h3>Дроби и отрицательные числа</h3>'; 

    $a = 1.5;
    $b = 0.75;
    echo $a + $b . '<br>';

    $a = -100;
    echo $a . '<br>';

    $a = 200;
    echo -$a . '<br>';


// Остаток от деления и возведение в степень 
    echo '<h3>Остаток от деления и возведение в степень</h3>'; 

    $a = 10;
    $b = 3;
    echo $a % $b . '<br>';

    echo 2 ** 10 . '<br>';


// Строки, сложение строк, strlen, mb_strlen
    echo '<h3>Строки, сложение строк, strlen, mb_strlen</h3>'; 
    $str = 'hello';
    echo $str . '<br>';

    $str1 = 'abc';
	$str2 = 'def';
	echo $str1 . $str2 . '<br>';

    $str1 = 'hello';
	$str2 = 'world';
	echo $str1 . ' ' . $str2 . '<br>';

    $str = 'hello';
    echo strlen($str)  . '<br>';

    $str = 'Привет мир';
    echo mb_strlen($str)  . '<br>';


// HTML теги
    echo '<h3>HTML теги</h3>';
    echo '<i>Курсив</i>' . '<br>';
    echo 1 . '<br>';
    echo 2 . '<br>';
    echo 3 . '<br>';
    echo 4 . '<br>';
    echo 5 . '<br>';
    echo 6 . '<br>';
    echo 7 . '<br>';
    echo 8 . '<br>';
    echo 9 . '<br>';

    echo "<img src='images.png'>"  . '<br>';
    echo '<br>';
    echo "<input value='Какой-нибудь текст'>" . '<br>';
    echo '<br>';
    echo '<textarea>' . 'Какой-нибудь текст' . '</textarea>' . '<br>';

    
// Логические значения, null
    echo '<h3>Логические значения, null</h3>';
    $isTrue = true;
    echo $isTrue  . '<br>';
    $isFalse = false;
    echo $isFalse  . '<br>';

    $test = null;
    var_dump($test)  . '<br>';
    var_dump($unknown)  . '<br>';


// Логические значения, null
    echo '<h3>Преобразование типов данных (int), (float), (string)</h3>';
    $test = '12345';
    echo var_dump((int) $test) . '<br>';
    $test = '12.345';
    echo var_dump((float) $test) . '<br>';
    $test = '12.345';
    echo var_dump((int) $test) . '<br>';
    $test = (string) 12345;
    echo var_dump($test) . '<br>';
    $test = (string) 12.345;
    echo var_dump($test) . '<br>';


// Обращение к символам строки и к цифрам числа
    echo '<h3>Обращение к символам строки и к цифрам числа</h3>';
    $str = 'abcde';
    echo $str[0] . ', ' . $str[2] . ', ' . $str[4]  . '<br>'; 

    $str1 = 'abcde';
    $str2 = $str1[4] . $str1[3] . $str1[2] . $str1[1] . $str1[0]; 
    echo $str2  . '<br>';

    $str = 'abcde';
    $num = 2;
    echo $str[$num] . '<br>';

    $str = 'String';
    echo $str . '<br>';;
    echo $str[strlen($str) - 1] . '<br>';
    echo $str[strlen($str) - 2] . '<br>';
    echo $str[strlen($str) - 3] . '<br>';

    $str = '12345';
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4] . '<br>'; 

    $num = 12345;
    $str = (string) $num;
    echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4] . '<br>'; 

    echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4] . '<br>';

    echo $str[4] . $str[3] . $str[2] . $str[1] . $str[0] . '<br>';


// Сокращенные операции, префиксный и постфиксный тип
    echo '<h3>Сокращенные операции, префиксный и постфиксный тип</h3>';
    $num = 47;
	$num += 7;
	$num -= 18;
	$num *= 10;
	$num /= 15;
	echo $num . '<br>';

    $str = 'a';
	$str .= 'b' . 'c';
	echo $str . '<br>';

    $num = 10;
	$num++;
	$num++;
	$num--;
	echo $num . '<br>';


// Практика на операции в PHP
    echo '<h3>Практика на операции в PHP</h3>';
    $seconds_per_day = 3600 * 24;
    echo 'Количество секунд в сутках: ' . $seconds_per_day  . '<br>';
    echo 'Количество секунд в 30 сутках: ' . $seconds_per_day * 30  . '<br>';
    echo 'Количество секунд в году: ' . $seconds_per_day * 365  . '<br>';
    $minutes_per_day = $seconds_per_day / 60;
    echo 'Количество минут в сутках: ' . $minutes_per_day . '<br>';
    echo 'Количество минут в году ' . $minutes_per_day * 365  . '<br>';
    
    $bite_in_kb = 2 ** 10;
    echo 'Количество байт в мегабайте: ' . $bite_in_kb ** 2 . '<br>';
    echo 'Количество байт в гигабайте: ' . $bite_in_kb ** 3 . '<br>';
    echo 'Количество байт в 10 гигабайтах: ' . ($bite_in_kb ** 3) * 10 . '<br>';
    echo 'Количество байт в терабайте: ' . $bite_in_kb ** 4 . '<br>';
    echo 'Количество килобайт в терабайте: ' . 1024 ** 3  . '<br>';


// Практика на формулы в PHP
    echo '<h3>Практика на формулы в PHP</h3>';
    $r = 10;
    $s = 3.14 * ($r ** 2);
    echo 'Площадь круга (радиус 10): ' . $s  . '<br>';

    $a = 10;
    $s = $a ** 2;
    echo 'Площадь квадрата 10x10: ' . $s  . '<br>';

    $a = 10;
    $b = 12;
    $s = $a * $b;
    echo 'Площадь квадрата 10x12: ' . $s  . '<br>';

    $a = 10;
    $b = 12;
    $p = $a * 2 + $b * 2;
    echo 'Периметр квадрата 10x12: ' . $p  . '<br>';

    $tc = 24;
    echo '24 градусов Цельсия это ' . (($tc * 9/5) + 32)  . ' по Фаренгейту' . '<br>';


    /* ----- Глава вторая - Массивы ----- */


// Массивы
    echo '<h3>Массивы</h3>';
    $arr = [1, 2, 3];
    echo $arr  . '<br>';
    var_dump($arr);
    echo '<br>';

    $arr = ['a', 'b', 'c'];
    echo $arr[0]  . '<br>';
    echo $arr[1]  . '<br>';
    echo $arr[2]  . '<br>';

    $arr = ['a', 'b', 'c', 'd'];
    echo $arr[0] . '+' . $arr[1] . '+' . $arr[2] . '+' . $arr[3] . '<br>';

    $arr = [1, 2, 3];
    echo $arr[0] + $arr[1] + $arr[2]  . '<br>';

    $arr = [2, 5, 3, 9];
    $res = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3])  . '<br>'; 
    echo $res;


// Ассоциативные массивы в PHP
    echo '<h3>Ассоциативные массивы в PHP</h3>';
    $arr = [1 => 'a', 2 => 'b', 3 => 'c'];
    var_dump($arr);
    echo '<br>';

    $arr = [1 => 'январь', 'февраль','март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь']; 
    var_dump($arr);
    echo '<br>';

    $user = ['name' => 'Иван', 'surname' => 'Иванов', 'patronymic' => 'Иванович'];
    echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . '<br>';

    $date = ['year' => 2023, 'month' => 10, 'day' => 5];
    echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . '<br>';

    $arr = [2 => 'b', 3 => 'c', 1 => 'a'];
    echo $arr[1], $arr[2], $arr[3] . '<br>';


// Длина массива
    echo '<h3>Длина массива</h3>';

    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr) . '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    echo count($arr) . '<br>';

    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr)-1] . '<br>';

    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr)-2] . '<br>';


// Изменение и добавление элементов массива
    echo '<h3>Изменение и добавление элементов массива</h3>';
    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr['a'] = 10;
    $arr['b'] = 20;
    $arr['c'] = 30;
    var_dump($arr); 
    echo '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr['a'] += 3;
    $arr['b'] += 3;
    $arr['c'] += 3;
    var_dump($arr); 
    echo '<br>';

    $arr = [];
    $arr[] = 1;
    $arr[] = 2;
    $arr[] = 3;
    $arr[] = 4;
    $arr[] = 5;
    var_dump($arr); 
    echo '<br>';

    $arr = [1, 2, 3];
    $arr[] = 4;
    $arr[] = 5;
    var_dump($arr); 
    echo '<br>';

    $arr = [];
    $arr['year'] = 2023;
    $arr['month'] = 10;
    $arr['day'] = 5;
    var_dump($arr); 
    echo '<br>';


// Ключи из переменных 
    echo '<h3>Ключи из переменных</h3>';
    $arr = [1, 2, 3, 4, 5];
    $key1 = 1;
    $key2 = 2;
    echo $arr[$key1] + $arr[$key2] . '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $key = 'b';
    echo $arr[$key] . '<br>'; 


    /* ----- Глава третья - Условия ----- */


// Конструкция if-else в PHP
    echo '<h3>Конструкция if-else в PHP</h3>';

    $test = 11;
    if ($test > 10) {
        echo 'переменнная test (' . $test . ') больше 10' . '<br>';
    } else {
        echo 'переменнная test (' . $test . ') меньше 10' . '<br>';
    }
    $test = 9;
    if ($test < 10) {
        echo 'переменнная test (' . $test . ') меньше 10' . '<br>';
    } else {
        echo 'переменнная test (' . $test . ') больше 10' . '<br>';
    }
    $test = 10;
    if ($test >= 10) {
        echo 'переменнная test (' . $test . ') больше или равна 10' . '<br>';
    } else {
        echo 'переменнная test (' . $test . ') меньше 10' . '<br>';
    }

    $test = 10;
    if ($test <= 10) {
        echo 'переменнная test (' . $test . ') меньше или равна 10' . '<br>';
    } else {
        echo 'переменнная test (' . $test . ') больше 10' . '<br>';
    }

    $test = 10;
    if ($test == 10) {
        echo 'переменнная test (' . $test . ') равно 10' . '<br>';
    } else {
        echo 'переменнная test (' . $test . ') не равна 10' . '<br>';
    }

    $test = 9;
    if ($test != 10) {
        echo 'переменнная test (' . $test . ') не равна 10' . '<br>';
    } else {
        echo 'переменнная test (' . $test . ') равна 10' . '<br>';
    }

    $test1 = 1;
    $test2 = 2;
    if ($test1 > $test2) {
        echo 'test1 (' . $test1 . ') больше test2 (' . $test2 . ')'  . '<br>';
    } else {
        echo 'test1 (' . $test2 . ') больше test2 (' . $test1 . ')'  . '<br>';
    }

// Логическое И, ИЛИ. Инвертирование
    echo '<h3>Логическое И, ИЛИ. Инвертирование</h3>';

    $num = 4;
    if ($num > 0 and $num < 5) {
        echo 'num (' . $num . ') больше 0 и меньше 5' . '<br>';
    } else {
        echo 'num (' . $num . ') или не больше 0 или/и не меньше 5' . '<br>'; 
    }

    $num = 10;
    if ($num >= 10 and $num <= 20) {
        echo 'num (' . $num . ') больше или равна 10 и меньше или равна 20' . '<br>';
    } else {
        echo 'num (' . $num . ') не находится в диапазоне от 10 до 20 включительно' . '<br>'; 
    }

    $num1 = 1;
    $num2 = 3;
    if ($num1 <= 1 and $num2 >= 3) {
        echo 'num1 (' . $num1 . ') больше или равна 1, а num2 (' . $num2 . ') больше или равна 3' . '<br>';
    } else {
        echo 'условия не соблюдены' . '<br>'; 
    }

    $num1 = 1;
    $num2 = 3;
    if (!($num1 >= 0 or $num2 <= 10)) {
		echo '+++' . '<br>'; 
	} else {
		echo '---' . '<br>'; 
	}


// Конструкция if-else и булевы значения
    echo '<h3>Конструкция if-else и булевы значения</h3>';

    $test = true;
	if ($test === true) {
		echo '+++' . '<br>'; 
	} else {
		echo '---' . '<br>'; 
	}

    $test = true;
	if ($test === false) {
		echo '+++' . '<br>'; 
	} else {
		echo '---' . '<br>'; 
	}

    $test = '';
	if ($test == false) {
		echo '+++' . '<br>'; 
	} else {
		echo '---' . '<br>'; 
	}

    if ($test3 == true) {
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}

    $test = true;
	if ($test) {
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}

    $test = true;
	if (!$test) {
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}

    $test = true;
	if (!$test) {
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}

    $test = true;
	if ($test) {
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}

    $test = -1;
	if ($test) {
		echo '+++';
	} else {
		echo '---';
	}

// Оператор isset
    echo '<h3>Оператор isset</h3>';
    $test = 0;
    if (isset($test)) { // +++
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    $test = null;
	if (!isset($test)) { //+++
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    $test = null;
	if (isset($test)) { //---
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    if (!isset($test4)) { //+++
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    $test = '';
	if (isset($test)) { //+++
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    if (!isset($test6)) { //+++
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

	$test = false;
	if (isset($test)) { //+++
		echo '+++' . '<br>';
	} else {
		echo '---' . '<br>';
	}


// Оператор empty
    echo '<h3>Оператор empty</h3>';
	$test = 0;
	if (empty($test)) { //+++
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    $test = -1;
	if (empty($test)) { //---
		echo '+++' . ', ';
	} else {
		echo '---' . ', ';
	}

    $test = '';
	if (!empty($test)) { //---
		echo '+++'; 
	} else {
		echo '---';
	}
    $test = null;
	if (empty($test)) { //+++
		echo '+++';
	} else {
		echo '---';
	}

	$test = false;
	if (!empty($test)) { //---
		echo '+++';
	} else {
		echo '---';
	}

    $test = true;
	if (!empty($test)) { //+++
		echo '+++';
	} else {
		echo '---';
	}


 // Сокращенный синтаксис if-else 
    echo '<h3>Сокращенный синтаксис if-else</h3>';
    $test = 10;
    if ($test == 10) {
        echo 'верно' . '<br>';
    }

    if ($test == 0) echo 'верно'; else echo 'неверно!' . '<br>';
    if ($test == 10) echo 'верно' . '<br>';

    echo '<h3>Сокращенный синтаксис if-else</h3>';
    $day = 12;
    if ($day >= 1 and $day <= 10) {
        echo 'Число ' . $day . ' - первая декада' . '<br>';
    }
    if ($day >= 11 and $day <= 20) {
        echo 'Число ' . $day . ' - вторая декада' . '<br>';
    }
    if ($day >= 21 and $day <= 31) {
        echo 'Число ' . $day . ' - третья декада' . '<br>';
    }


 // Конструкция elseif в PHP
    echo '<h3>Конструкция elseif в PHP</h3>';
    $day = 50;
    if ($day >= 1 and $day <= 10) {
        echo 'Число ' . $day . ' - первая декада' . '<br>';
    } elseif ($day >= 11 and $day <= 20) {
        echo 'Число ' . $day . ' - вторая декада' . '<br>';
    } elseif ($day >= 21 and $day <= 31) {
        echo 'Число ' . $day . ' - третья декада' . '<br>';
    } else {
        echo 'Число ' . $day . ' - ОШИБКА!' . '<br>';
    }


 // Вложенные if в PHP
    echo '<h3>Вложенные if в PHP</h3>';
    $age = 25;
    if ($age < 10 or $age > 99) {
        echo "Число " . $age . ' меньше 10 или больше 99' . '<br>';
    } else { 
        $age_str = (string) $age;
        $sum = $age_str[0] + $age_str[1];
        echo 'Сумма цифр '. $age_str[0] . ' и ' . $age_str[1] . ' (' . $sum . ') ';
        if ($sum <= 9) {
            echo 'однозначна' . '<br>';
        } else {
            echo 'двухначна' . '<br>';
        }
    }

 // Конструкция switch-case в PHP  
    echo '<h3>Конструкция switch-case в PHP</h3>';
    $num = 1;
    switch ($num) {
        case 1:
            echo 'Лето' . '<br>';
            break;
        case 2:
            echo 'Осень' . '<br>';
            break;
        case 3:
            echo 'Зима' . '<br>';
            break;
        case 4:
            echo 'Весна' . '<br>';
            break;
        default:
            echo 'Ошибка' . '<br>';
            break;
    }


// Тернарный оператор в PHP
    echo '<h3>Тернарный оператор в PHP</h3>';
    $num = 10;
    $res = $num >= 0 ? 1: -1;
    echo $res . '<br>';


 // Оператор объединения с null в PHP
    echo '<h3>Оператор объединения с null в PHP</h3>';
    $user = ['name' => 'john', 'age' => 30];
	$name = $user['name'] ?? 'unknown';
    echo $name . '<br>';


 // Цепочки операторов объединения с null в PHP  
    echo '<h3>Цепочки операторов объединения с null в PHP</h3>';
    $user = ['name' => 'john', 'age' => 30];
    $res = $user['name'] ?? $user['surname'] ?? '';
    echo $res . '<br>';


// Логические операции в PHP    
    echo '<h3>Логические операции в PHP</h3>';
    $a = 2 * (3 - 1);
	$b = 6 - 2;
    var_dump($a == $b);
    echo ', ';

	$a = 5 * (7 - 4);
	$b = 1 + 2 + 7;
    var_dump($a >= $b);
    echo ', ';

	$a = 2 ** 4;
	$b = 4 ** 2;
    var_dump($a != $b);
    echo ', ';

// Определение четверти часа в PHP      
    echo '<h3>Определение четверти часа в PHP</h3>';
    $min = 55;
	if ($min >= 0 and $min <= 19) {
		echo '1 треть часа';
	}
	if ($min >= 20 and $min <= 39) {
		echo '2 треть часа';
	}
	if ($min >= 40 and $min <= 60) {
		echo '3 треть часа';
	}


// Проверка длины строк и массивов в PHP
    echo '<h3>Проверка длины строк и массивов в PHP</h3>';
    $arr = [1, 2, 3];
    if (count($arr) == 3) {
        echo $arr[0] + $arr[1] + $arr[2] . '<br>'; 
    }


// Проверка символа строки в PHP
    echo '<h3>Проверка символа строки в PHP</h3>';
    $str = "Николай0";
    if ($str[strlen($str)-1] == '0') {
        echo 'Строка ' . $str . ' заканчивается на 0' . '<br>';  
    }


// Остаток от деления в PHP  
    echo '<h3>Остаток от деления в PHP</h3>';
    $num  = 10;
    if ($num % 2 === 0) {
        echo 'Число ' . $num . ' четное' . '<br>';
    } else {
        echo 'Число ' . $num . ' не четное' . '<br>';
    }

    $num  = 3;
    if ($num % 3 === 0) {
        echo 'Число ' . $num . ' делится на 3' . '<br>';
    } else {
        echo 'Число ' . $num . ' не делится на 3' . '<br>';
    }

 // Практика на условия if-else в PHP
    echo '<h3>Практика на условия if-else в PHP</h3>';  
    
    $month = 11; // Номер 1
    if ($month == 12 or $month == 1 or $month == 2) {
        echo 'Месяц номер ' . $month . ' - это зимний месяц' . '<br>';
    } elseif (($month >= 3 and $month <= 5)) {
        echo 'Месяц номер ' . $month . ' - это весенний месяц' . '<br>';
    } elseif (($month >= 6 and $month <= 8)) {
        echo 'Месяц номер ' . $month . ' - это летний месяц' . '<br>';
    } elseif (($month >= 9 and $month <= 11)) {
        echo 'Месяц номер ' . $month . ' - это осенний месяц' . '<br>';
    } 

    $str = 'abcde'; // Номер 2
    if ($str[0] == 'a') {
        echo 'Первым символом строки является "a"' . '<br>';  
    }

    $num = 12345; // Номер 3
    $str = (string) $num;
    switch ($str[0]) {
        case 1:
            echo "Первый символ - 1" . '<br>'; 
            break;
        case 2:
            echo "Первый символ - 2" . '<br>'; 
            break;
        case 3:
            echo "Первый символ - 3" . '<br>'; 
            break;
        }

    $num = 123; // Номер 4
    $str = (string) $num;
    echo 'Сумма цифр числа ' . $num . ' = ' . ($str[0] + $str[1] + $str[2]) . '<br>'; 

    $num = 123456; // Номер 5
    $str = (string) $num;
    $first_three = $str[0] + $str[1] + $str[2];
    $second_three = $str[3] + $str[4] + $str[5];
    if ($first_three == $second_three) {
        echo 'Сумма первых трех чисел числа ' . $num . ' равна сумме вторых трех чисел'. '<br>'; 
    } else {
        echo 'Сумма первых трех чисел числа ' . $num . ' не равна сумме вторых трех чисел'. '<br>';
    }

        /* ----- Глава четвертая - Циклы ----- */

// Элементы массива через foreach
    echo '<h3>Элементы массива через foreach</h3>'; 

    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $elem) {
        echo $elem;
    }

// Столбец элементов массива
    echo '<h3>Столбец элементов массива</h3>'; 

    $arr = ['a', 'b', 'c', 'd', 'e'];
    foreach ($arr as $elem) {
        echo $elem . '<br>';
    }

// Квадраты чисел
    echo '<h3>Квадраты чисел</h3>'; 

    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $elem) {
        echo $elem * $elem . '<br>';
    }

// Накопление суммы
    echo '<h3>Накопление суммы</h3>';

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9]; // Номер 1
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }
    echo 'Сумма элементов массива: ' . $res . '<br>';

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9]; // Номер 2
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }
    $average = $res / count ($arr);
    echo 'Среднее арифметическое чисел массива: ' . $average . '<br>';

 // Получение ключей в цикле foreach
    echo '<h3>Получение ключей в цикле foreach</h3>';   

    $arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой']; // Номер 1
    foreach ($arr as $key => $elem) {
        echo $key . ' - ' . $elem . ", ";
    }
    echo "<br>";

    $arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];  // Номер 2
    foreach ($arr as $key => $elem) {
        echo $key . ' - ' . $elem . "<br>";
    }

 // Перебор массива и if
    echo '<h3>Перебор массива и if</h3>'; // Номер 1
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $elem) {
        if ($elem % 2 != 0) {
            echo $elem . ', ';
        }
    }
    echo "<br>";

    $arr = [2, 5, 9, 15, 1, 4]; // Номер 2
    foreach ($arr as $elem) {
        if ($elem > 3 and $elem < 10) {
            echo $elem . ' ';
        }
    }

    $arr = [2, -5, -9, 15, -1, 4]; // Номер 3
    $res = 0;
    foreach ($arr as $elem) {
        if ($elem >= 0) {
            $res += $elem;
            echo $res . '<br>';
        }
    }

    $arr = [10, 20, 30, 50, 235, 3000]; // Номер 4
    foreach ($arr as $elem) {
        $str_elem = (string) $elem;
        if ($str_elem[0] == 1 or $str_elem[0] == 2 or $str_elem[0] == 5) {
            echo $str_elem . ' ';
        }
    }
    echo '<br>'; // Номер 5

    $arr = [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', // Номер 5
    4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье'];
    foreach ($arr as $key => $elem) {
        if ($key != 6) {
        echo $key . " - " . $elem . '<br>';
        } else {
            echo '<i>' . $key . " - " . $elem . '</i>' . '<br>';
        }
    }

 // Цикл while
    echo '<h3>Цикл while</h3>'; 
    
    $i = 1; //  Номер 1  
    while ($i <= 100) {
        echo $i . ' ';
        $i++;
    }
    echo '<br>';

    $i = 11; //  Номер 2  
    while ($i <= 33) {
        echo $i . ' ';
        $i++;
    }
    echo '<br>';

// Более сложный цикл while
     echo '<h3>Цикл while</h3>';  
     $i = 2; //  Номер 1  
     while ($i <= 100) {
         echo $i . ' ';
         $i += 2;
     }
     echo '<br>';

     $i = 1; //  Номер 2  
     while ($i <= 99) {
         echo $i . ' ';
         $i += 2;
     }
     echo '<br>';

// Обратный отсчет в цикле while
     echo '<h3>Обратный отсчет в цикле while</h3>'; 

     $i = 30; //  Номер 1  
     while ($i >= 0) {
         echo $i . ' ';
         $i--;
     }
     echo '<br>';

// Ошибки начинающих при работе с циклом while
    echo '<h3>Ошибки начинающих при работе с циклом while</h3>'; 
     
    $i = 10;
     while ($i >= 1) {
         echo $i;
         $i--;
     }

// Забытое увеличение счетчика while
     echo '<h3>Забытое увеличение счетчика while</h3>'; 
     $i = 10;	
     while ($i >= 1) {
         echo $i;
         $i--;
     }

// Перепутаны инкремент и декремент в цикле while
    echo '<h3>Перепутаны инкремент и декремент в цикле while</h3>';   

     $i = 10;
     while ($i >= 0) {
         echo $i;
         $i--;
     }

// Изначально неверное условие в цикле while
    echo '<h3>Изначально неверное условие в цикле while</h3>'; 

    $i = 10;
	while ($i >= 0) {
		echo $i;
		$i--;
	}

// Неправильное понимание условия окончания в цикле while
    echo '<h3>Неправильное понимание условия окончания в цикле while</h3>'; 

    $i = 10;
	while ($i >= 0) {
		echo $i;
		$i--;
	}

// Цикл for в PHP
    echo '<h3>Цикл for в PHP</h3>'; 

    for ($i = 1; $i <= 100; $i++) { //  Номер 1  
        echo $i . " ";
    }
    echo '<br>';

    for ($i = 11; $i <= 33; $i++) { //  Номер 2  
        echo $i . " ";
    }
    echo '<br>';

    for ($i = 2; $i <= 100; $i += 2) { //  Номер 3
        echo $i . " ";
    }
    echo '<br>';

    for ($i = 1; $i <= 99; $i += 2) { //  Номер 4
        echo $i . " ";
    }
    echo '<br>';
    for ($i = 100; $i <= 0; $i++) { //  Номер 5
        echo $i . " ";
    }

// Накопление результата в цикле
    echo '<h3>Накопление результата в цикле</h3>'; 

    $res = 1; //  Номер 1
    for ($i = 1; $i <= 20; $i++) { 
        $res *= $i;
    }
    echo $res;
    echo '<br>';

    $res = 0; //  Номер 2
    for ($i = 2; $i <= 100; $i += 2) { 
        $res += $i;
    }
    echo $res;
    echo '<br>';

    $res = 0; //  Номер 3
    for ($i = 1; $i <= 99; $i += 2) { 
        $res += $i;
    }
    echo $res;
    echo '<br>';

// Накопление результата в цикле
    echo '<h3>Накопление результата в цикле</h3>'; 

    $arr = [1,2,3,4,5,0,7,8,9,10]; // Номер 1
    foreach ($arr as $elem) {
        if ($elem != 0) {
            echo $elem . ' ';
        } else {
            echo '<br>';
            echo 'Найдет элемент со значенеим 0 ' . '<br>';
            break;
        }
    }

    $arr = [1,2,3,4,5,-1,7,8,9,10]; // Номер 2
    $res = 0;
    foreach ($arr as $elem) {
        if ($elem >= 0) {
            $res += $elem;
        } else {
            echo '<br>';
            echo 'Найден элемент меньше 0 ' . '<br>';
            break;
        }
    }
    echo 'Сумма чисел массива до первого отрицательного числа =' . $res . '<br>';

    $arr = [1,2,3,4,5,-1,7,8,9,10]; // Номер 3
    $pos = 0;
    foreach ($arr as $elem) {
        if ($elem == 3) {
            echo 'Позиция числа 3 - ' . $pos . '<br>';
            break;
        } else {
            $pos++;
        }
    }

    $sum = 0; // Номер 4
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
        if ($sum > 100) {
            echo $i . ' чисел от 1 до 100 нужно сложить, чтобы сумма получилась больше 100' . '<br>'; 
            break;
        }
    }

// Проверяем отстутствие элемента массива
    echo '<h3>Проверяем отстутствие элемента массива</h3>'; 

    $arr = ['a', 'b', 'c', 'd', 'e'];
    $flag = false;
    foreach ($arr as $elem) {
        if ($elem === 'c') {
            $flag = true;
        }
    }
    if ($flag == true) {
        echo 'Да, элемент "c" присутствет в массиве' . '<br>';
    } else {
        echo 'Нет, элемент "c" отсутствует в массиве' . '<br>';
    }

// Произвольное количество итераций в цикле while
    echo '<h3>Произвольное количество итераций в цикле while</h3>'; 

    $num = 3;
    $res = $num;
    $i = 1;
    while ($res <= 1000) {
        $res *= $num; 
        $i++;
    }
    echo 'Число ' . $num . ' нужно умножить на себя ' . $i .  ' раз, ' . 
    'чтобы результат стал больше 1000' . '<br>';  

// Произвольное количество итераций в цикле for без тела
    echo '<h3>Произвольное количество итераций в цикле for без тела</h3>';

    for ($i = 1, $res = 3, $num = 3; $res <= 1000; $i++, $res *= $num); 
    echo 'Число ' . $num . ' нужно умножить на себя ' . $i .  ' раз, ' . 
    'чтобы результат стал больше 1000' . '<br>';  

// Формирование строк через циклы
    echo '<h3>Формирование строк через циклы</h3>'; 

    $str = '';
    for ($i = 1; $i <= 5; $str .= '0', $i++);
    echo $str . '<br>';

// Формирование строк с цифрами через циклы
    echo '<h3>Формирование строк с цифрами через циклы</h3>'; 

    $str = ''; // Номер 1
    for ($i = 1; $i <= 9; $str .= $i, $i++);
    echo $str . '<br>';

    $str = ''; // Номер 2
    for ($i = 9; $i >= 1; $str .= $i, $i--);
    echo $str . '<br>';

    $str = '-'; // Номер 3
    for ($i = 1; $i <= 9; $str = $str . $i . '-', $i++);
    echo $str . '<br>';

// Вложенные циклы в PHP
    echo '<h3>Вложенные циклы в PHP</h3>'; 

    for ($i = 1; $i <= 9; $i++) { // Номер 1
        for ($j = 1; $j <= 3; $j++) {
            echo $i;
        }
    }
    echo '<br>';

    for ($i = 10; $i <= 30; $i += 10) { // Номер 2
        for ($j = 1; $j <= 3; $j++) {
            echo ($i + $j) . ' ';
        }
    }
    echo '<br>';

// Заполнение массивов
    echo '<h3>Заполнение массивов</h3>'; 

    $arr = []; // Номер 1
    for ($i = 1; $i <= 10; $i++) {
        $arr[] = $i;
    }
    var_dump ($arr);
    echo '<br>';

    $arr = []; // Номер 2
    for ($i = 1; $i <= 5; $i++) {
        $arr[] = 'x';
    }
    var_dump($arr);

// Заполнение массивов через цикл for
    echo '<h3>Заполнение массивов через цикл for</h3>'; 

    $arr = []; // Номер 1
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
    var_dump ($arr);
    echo '<br>';

    $arr = []; // Номер 2
    for ($i = 1; $i <= 99; $i += 2) {
        $arr[] = $i;
    }
    var_dump ($arr);
    echo '<br>';

// Цикл for для массивов
    echo '<h3>Цикл for для массивов</h3>'; 

    $arr = ['a', 'b', 'c', 'd', 'e'];
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) {
        echo $arr[$i] . ' ';
    }
    echo '<br>';

// Применение цикла for для массивов
    echo '<h3>Применение цикла for для массивов</h3>'; 

    $arr = ['a', 'b', 'c', 'd', 'e']; // Номер 1
    $lenght = count($arr);
    for ($i = 0; $i < $lenght-1; $i++) {
        echo $arr[$i] . ' ';
    }
    echo '<br>';

    $arr = [1, 2, 3, 4, 5, 6, 7, 8]; // Номер 2
    $lenght = count($arr);
    for ($i = 0; $i < $lenght/2; $i++) {
        echo $arr[$i] . ' ';
    }
    echo '<br>';

// Распространенная ошибка при применении цикла for для массивов
    echo '<h3>Распространенная ошибка при применении цикла for для массивов</h3>'; 

	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	$lenght = count($arr);
    for ($i = 1; $i < $lenght; $i++) {
		$sum += $arr[$i];
	}
	echo $sum;

// Изменение массива в цикле for
    echo '<h3>Изменение массива в цикле for</h3>'; 

    $arr = [1,2,3,4,5];
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) {
        $arr[$i] **= 2;
    }
    var_dump($arr);

 // Сокращенные операции для изменения массива в цикле for
    echo '<h3>Сокращенные операции для изменения массива в цикле for</h3>';    

    $arr = [1,2,3,4,5]; // Номер 1
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) {
        $arr[$i]--;
    }
    var_dump($arr);
    echo '<br>';

    $arr = [1,2,3,4,5]; // Номер 2
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) {
        $arr[$i] += 10;
    }
    var_dump($arr);
    echo '<br>';

// Практика на массивы в цикле
    echo '<h3>Практика на массивы в цикле</h3>'; 

    $arr = [ // Номер 1
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
    foreach ($arr as $key => $elem) {
        $arr[$key] = $elem * 1.1;
    }
    var_dump($arr);
    echo '<br>';

    $arr = [ // Номер 2
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
    foreach ($arr as $key => $elem) {
        if ($elem <= 400) {
            $arr[$key] = $elem * 1.1;
        } 
    }
    var_dump($arr);
    echo '<br>';

    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10]; // Номер 3
    $key_sum = 0;
    $elem_sum = 0;
    foreach ($arr as $key => $elem) {
        $key_sum += $key;
        $elem_sum += $elem;
    }
    $result = $key_sum / $elem_sum;
    echo 'Cумма ключей массива ('. $key_sum .'), деленная на ' . 
    ' сумму значений (' . $elem_sum . ') равна ' . $result;
    echo '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]; // Номер 4
    $key_arr = [];
    $elem_arr = [];
    foreach ($arr as $key => $elem) {
        $key_arr[] = $key;
        $elem_arr[] = $elem;
    }
    echo 'Массив ключей: ';
    var_dump($key_arr);
    echo '<br>';
    echo 'Массив элементов: ';
    var_dump($elem_arr);
    echo '<br>';

    $arr = [ // Номер 5
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
	];
    $new_arr = [];
    foreach ($arr as $key => $elem) {
        $str_elem = (string) $elem; {
            if ($str_elem[0] == '1' or $str_elem[0] == '2')
            $new_arr[] = $elem;
        }
    }
    echo 'Массив из элементов, начинающихся с 1 или 2: ';
    var_dump($new_arr);

// Практика на циклы
    echo '<h3>Практика на циклы</h3>'; 

    for ($i = 1; $i <= 100; $i++) { // Номер 1
        echo $i . '<br>';
    }

    for ($i = 100; $i >= 1; $i--) { // Номер 2
        echo $i . '<br>';
    }

    for ($i = 2; $i <= 100; $i += 2) { // Номер 3
        echo $i . '<br>';
    }

    $arr = [];
    for ($i = 0; $i < 10; $i++) { // Номер 4
        $arr[] = 'x';
    }
    var_dump($arr);
    echo $i . '<br>';

    $arr = [];
    for ($i = 1; $i <= 10; $i++) { // Номер 5
        $arr[] = $i;
    }
    var_dump($arr);
    echo '<br>';

    $arr = [1, 0, 2, 11, 3, 0, 4, 11, 5, 0, 6, 11]; // Номер 6
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) { 
        if ($arr[$i] > 0 and $arr[$i] < 10) {
            echo $arr[$i] . ' ';
        }
    }

    
    $arr = [1, 0, 2, 11, 3, 0, 4, 11, 5, 0, 6, 11]; // Номер 7
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) { 
        if ($arr[$i] == 5) {
            echo 'Элемент со значением 5 в цикле есть' . ' ';
            break;
        }
    }

























    








    

























































    























    














    
















    

    























































    




















    

































    
    































    
































































































    








?>