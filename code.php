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


        /* ---------- Глава четвертая - Циклы ---------- */


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
    echo '<br>';

    
    $arr = [1, 0, 2, 11, 3, 0, 4, 11, 5, 0, 6, 11]; // Номер 7
    $lenght = count($arr);
    for ($i = 0; $i < $lenght; $i++) { 
        if ($arr[$i] == 5) {
            echo 'Элемент со значением 5 в цикле есть' . ' ';
            break;
        }
    }
    echo '<br>';

    $arr = [1, 0, 2, 11, 3, 0, 4, 11, 5, 0, 6, 11]; // Номер 8
    $lenght = count($arr);
    $sum = 0;
    for ($i = 0; $i < $lenght; $i++) { 
        $sum += $arr[$i];
    }
    echo 'Сумма элементов массива: ' . $sum . '<br>';

    $arr = [1, 2, 3]; // Номер 9
    $lenght = count($arr);
    $sum = 0;
    for ($i = 0; $i < $lenght; $i++) { 
        $sum += $arr[$i] ** 2;
    }
    echo 'Сумма квадратов элементов массива: ' . $sum . '<br>';

    $arr = [1, 0, 2, 11, 3, 0, 4, 11, 5, 0, 6, 11]; // Номер 11
    $lenght = count($arr);
    $sum = 0;
    for ($i = 0; $i < $lenght; $i++) { 
        $sum += $arr[$i];
    }
    $average = $sum / $lenght;
    echo 'Среднее арифметическое элументов массива: ' . $average . '<br>';

    $num = 5;
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo 'Факториал числа ' . $num . ' равен ' . $factorial . '<br>';



            /* ---------- Глава пятая - Многомерность ---------- */


// Многомерные массивы
    echo '<h3>Многомерные массивы</h3>'; 

    $arr = [ // Номер 1
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
    echo $arr[3][2] . $arr[1][1] . $arr[2][0] . $arr[0][0] . '<br>';

    $arr1 = [[1, 2], [3, 4], [5, 6]]; // Номер 1
    $sum = 0;
    foreach ($arr1 as $arr2) {
        foreach ($arr2 as $elem) {
            $sum += $elem;
        }
    }
    echo 'Сумма элементов двумерного массива: ' . $sum . '<br>';

// Трехмерный массив
    echo '<h3>Трехмерный массив</h3>'; 

    $arr1 = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
    $sum = 0;
    foreach ($arr1 as $arr2) {
        foreach ($arr2 as $arr3) {
            foreach ($arr3 as $elem) {
                $sum += $elem;
            } 
        }
    }
    echo 'Сумма элементов трехмерного массива: ' . $sum . '<br>';

// Ассоциативные массивы
    echo '<h3>Ассоциативные массивы</h3>'; 

    $arr = [  // Номер 1
		'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
		'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
	];
    echo $arr['boys'][1] . ', ' . $arr['girls'][2];
    echo '<br>';

    $arr = [ // Номер 2
		'ru' => ['пн', 'вт', 'ср', 'чт', 
			'пт', 'сб', 'вс'], 
		'en' => ['mn', 'ts', 'wd', 'th', 
			'fr', 'st', 'sn'], 
	];
    echo 'Английское название среды:' . $arr['en'][2];
    echo '<br>';

	$arr = [ // Номер 3
		[
			'name'   => 'user13',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
    echo 'Сумма зарплат первого и третьего юзера: ' . 
    ($arr[0]['salary'] + $arr[2]['salary']);
    

// Произвольные массивы
    echo '<h3>Произвольные массивы</h3>'; 

    $arr = [[1, 2, 3, [4, 5, [6, 7]]], [8, [9, 10]]]; // Номер 1
    echo $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + 
    $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1] +
    $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
    echo '<br>';

// Перебор многомерных массивов
    echo '<h3>Перебор многомерных массивов</h3>'; 

    $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]]; // Номер 1
    $sum = 0;
    foreach ($arr as $sub) {
        foreach ($sub as $elem) {
            $sum += $elem;
        }
    }
    echo 'Сумма элементов двумерного массива: ' . $sum . '<br>';

// Перебор трехмерного массива
    echo '<h3>Перебор трехмерного массива</h3>'; 

    $arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
    $sum = 0;
    foreach ($arr as $sub) {
        foreach ($sub as $subsub) {
            foreach ($subsub as $elem) {
                $sum += $elem;
            } 
        }
    }
    echo 'Сумма элементов трехмерного массива: ' . $sum . '<br>';

// Работа с ключами в многомерных массивах
    echo '<h3>Работа с ключами в многомерных массивах</h3>';

    $arr = [ // Номер 1
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
    foreach ($arr as $sub) {
        foreach ($sub as $key => $elem) {
            echo $key . '-' . $elem . ', ';
        }
    }
    echo '<br>';
    echo '<br>';

    $arr = [ // Номер 2
		'group1'  => ['user11', 'user12', 
			'user13', 'user43'], 
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
    foreach ($arr as $key => $sub) {
        foreach ($sub as $elem) {
            echo $key . '-' . $elem . ', ';
        }
    }
    echo '<br>';

// Заполнение многомерных массивов
    echo '<h3>Заполнение многомерных массивов</h3>';

    $arr = []; // Номер 1
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $arr[$i][$j] = $j + 1;
        }
    }
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = []; // Номер 2
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $arr[$i][$j] = 'x';
        }
    }
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = []; // Номер 3
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            for ($k = 0; $k < 5; $k++) {
                $arr[$i][$j][$k] = $k + 1;
            }
        }
    }
    var_dump($arr);
    echo '<br>';

// Заполнение многомерных массивов числами по порядку
    echo '<h3>Заполнение многомерных массивов числами по порядку</h3>';

    $arr = []; // Номер 1
    for ($i = 0, $k = 1; $i < 4; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $arr[$i][$j] = $k++;
        }
    }
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = []; // Номер 2
    for ($i = 0, $k = 2; $i < 4; $i++) {
        for ($j = 0; $j < 3; $j++, $k += 2) {
            $arr[$i][$j] = $k;
        }
    }
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = []; // Номер 3
    for ($i = 0, $c = 1; $i < 2; $i++) {
        $bracket = '[';
        for ($j = 0; $j < 2; $j++) {
            for ($k = 0; $k < 2; $k++) {
                $arr[$i][$j][$k] = $c++;
            }
        }
    }
    var_dump($arr);
    echo '<br>';

// Массив ассоциативных массивов
    echo '<h3>Массив ассоциативных массивов</h3>';

    $products = [
		[
			'name'   => 'мясо',
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'овощи',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'фрукты',
			'price'  => 300,
			'amount' => 7,
		],
	];
    foreach ($products as $product) {
        echo $product['name'] . ' (стоимость: ' . $product['price'] .
        ', количество: ' . $product['amount'] . ')' . '<br>';
    }

// Конвертация многомерных массивов
    echo '<h3>Конвертация многомерных массивов</h3>';

    $arr = [ // Номер 1
        [
            'country' => 'Россия',
            'city' =>    'Москва',
        ],
        [
            'country' => 'Беларусь',
            'city' =>    'Минск',
        ],
        [
            'country' => 'Россия',
            'city' =>    'Питер',
        ],
        [
            'country' => 'Россия',
            'city' =>    'Владивосток',
        ],
        [
            'country' => 'Украина',
            'city' =>    'Львов',
        ],
        [
            'country' => 'Беларусь',
            'city' =>    'Могилев',
        ],
        [
            'country' => 'Украина',
            'city' =>    'Киев',
        ],
    ];
    $new_arr = [];
    foreach($arr as $elem) {
        $new_arr[$elem['country']][] = $elem['city'];
        
    }
    foreach($new_arr as $country => $elem) {
        echo $country . ' - ';
        foreach($elem as $city) {
            echo $city . ', ';
        }
        echo '<br>';
    }
    echo '<br>';

    $arr = [ // Номер 2
        [
            'date'  => '2019-12-29',
            'event' => 'name1'
        ],
        [
            'date'  => '2019-12-31',
            'event' => 'name2'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name3'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name4'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name5'
        ],
        [
            'date'  => '2019-12-31',
            'event' => 'name6'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name7'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name8'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name9'
        ],
    ];
    $new_arr = [];
    foreach($arr as $elem) {
        $new_arr[$elem['date']][] = $elem['event'];
        
    }
    foreach($new_arr as $date => $events) {
        echo $date . ' - ';
        foreach($events as $event) {
            echo $event . ', ';
        }
        echo '<br>';
    }   
    echo '<br>';

    $arr = [ // Номер 3
        '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
        '2019-12-30'=> ['name5', 'name6', 'name7'],
        '2019-12-31'=> ['name8', 'name9'],
    ];
    $new_arr = [];
    foreach ($arr as $date => $events) {
        foreach ($events as $event) {
            $new_arr[] = ['date' => $date, 'event' => $event];
        }
    }
    var_dump($new_arr);
    echo '<br>';



        /* ------- Глава шестая - Стандартные функции ------- */

// Математические функции
    echo '<h3>Математические функции</h3>'; 

    echo pow(2, 10) . '<br>'; // Номер 1

    echo sqrt(245) . '<br>'; // Номер 2

    $arr = [4, 2, 5, 19, 13, 0, 10]; // Номер 3
    $pow_sum = 0;
    foreach($arr as $elem) {
        $pow_sum += pow($elem, 2);
    }
    echo sqrt($pow_sum) . '<br>';

    echo round(sqrt(379), 0) . '<br>';  // Номер 4
    echo round(sqrt(379), 1) . '<br>';
    echo round(sqrt(379), 2) . '<br>';

    $floor = floor(sqrt(578));  // Номер 5
    $ceil = ceil(sqrt(578));
    $res = [];
    $res['floor'] = $floor;
    $res['ceil'] = $ceil;
    var_dump($res);
    echo "<br>";

    $arr = [4, -2, 5, 19, -130, 0, 10]; // Номер 6
    echo min($arr) . '<br>';
    echo max($arr) . '<br>';

    echo mt_rand(1, 100) . '<br>'; // Номер 7

    for ($i = 0; $i < 10; $i++) { // Номер 8
        $num = mt_rand(1,100);
        $arr[$i] = $num;
    }
    var_dump($arr);
    echo '<br>';

    $a = -50;
    $b = 10;
    echo abs($a - $b) . '<br>';

// Строковые функции PHP
    echo '<h3>Строковые функции PHP</h3>'; 

    $str = 'php'; // Номер 1
    echo strtoupper($str)  . '<br>';

    $str = 'PHP'; // Номер 2
    echo strtolower($str)  . '<br>';

    $str = 'london'; // Номер 3
    echo ucfirst($str)  . '<br>';
 
    $str = 'London'; // Номер 4
    echo lcfirst($str)  . '<br>';

    $str = 'london is the capital of great britain'; // Номер 5
    echo ucwords($str)  . '<br>';

    $str = 'LONDON'; // Номер 6
    echo ucfirst(strtolower($str))  . '<br>';

    $str = 'html css php'; // Номер 7
    echo strlen($str)  . '<br>';

    $password = 'Пароль'; // Номер 8
    if (mb_strlen($password) > 5 and mb_strlen($password) < 10) {
        echo 'Пароль подходит'  . '<br>';
    } else {
        echo 'Придумайте другой пароль'  . '<br>';
    }

    $str = 'html css php'; // Номер 9
    echo substr($str, 0, 4)  . ', ';
    echo substr($str, 5, 3)  . ', ';
    echo substr($str, 9, 3)  . '<br>';

    $str = 'It is a string'; // Номер 10
    echo substr($str, -3, 3)  . '<br>';

    $str = 'http://page.com'; // Номер 11
    if (substr($str, 0, 7) == 'http://') {
        echo 'Строка начинается на "http://"'  . '<br>';
    } else {
        echo 'Строка не начинается на "http://"'  . '<br>';
    }

    $str = 'https://page.com'; // Номер 12
    if (substr($str, 0, 7) == 'http://' or substr($str, 0, 8) == 'https://') {
        echo 'Строка начинается на "http://" или на "https://"'  . '<br>';
    } else {
        echo 'Строка не начинается на "http://" или на "https://"'  . '<br>';
    }

    $str = 'image.png'; // Номер 13
    if (substr($str, -4, 4) == '.png') {
        echo 'Строка заканчивается на ".png"'  . '<br>';
    } else {
        echo 'Строка не заканчивается на ".png"'  . '<br>';
    }

    $str = 'image.jpg'; // Номер 14
    if (substr($str, -4, 4) == '.png' or substr($str, -4, 4) == '.jpg') {
        echo 'Строка заканчивается на ".png" или на ".jpg"'  . '<br>';
    } else {
        echo 'Строка не заканчивается на ".png" или на ".jpg"'  . '<br>';
    }

    $str = 'Ivanov Ivan Ivanovich'; // Номер 15
    if (strlen($str) >= 5) {
        echo substr($str, 0, 5) . '...'  . '<br>';
    } else {
        echo $str   . '<br>';
    }

    $str = '31.12.2013'; // Номер 16
    echo str_replace('.', '-', $str)  . '<br>';

    $str = 'aaa bbb ccc ddd'; // Номер 17
    echo str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str)  . '<br>';

    $str = '1a2b3c4b5d6e7f8g9h0'; // Номер 18
    echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str)  . '<br>';

    $str = 'aaa bbb ccc ddd'; // Номер 19
    echo strtr($str, ['a' => 1, 'b' => 2, 'c' => 3])  . '<br>';
    echo strtr($str, 'abc', 123)  . '<br>';

    $str = 'Ivanov Ivan Ivanovich'; // Номер 20
    echo substr_replace($str, '!!!', 3, 5)  . '<br>';

    $str = 'abc abc abc'; // Номер 21
    echo strpos($str, 'b')  . '<br>';

    $str = 'abc abc abc'; // Номер 22
    echo strrpos($str, 'b')  . '<br>';

    $str = 'abc abc abc'; // Номер 23
    echo strpos($str, 'b', 3)  . '<br>';

    $str = 'aaa aaa aaa aaa aaa'; // Номер 24
    $index_first_space = strpos($str, ' ');
    echo strpos($str, ' ', $index_first_space + 1)  . '<br>';

    $str = 'Ivan .. Ivanov'; // Номер 25
    if (strpos($str, '..')) {
        echo 'В строке есть две точки подряд'  . '<br>';
    } else {
        echo 'В строке нет двух точек подряд'  . '<br>';
    }

    $str = 'http://page.com'; // Номер 26
    if (strpos($str, 'http://') === 0) {
        echo 'Строка начинается с "http://"'  . '<br>';
    } else {
        echo 'Строка не начинается с "http://"'  . '<br>';
    }   

    $str = 'html css php';
    var_dump(explode( ' ', $str)); // Номер 27
    echo '<br>';

    $arr = ['html', 'css', 'php'];
    echo implode( ', ', $arr)  . '<br>';; // Номер 28

    $data = '11-08-2023';
    $arr_data = explode( '-', $data); // Номер 29
    echo implode('.', $arr_data) . '<br>';

    $str = '1234567890'; // Номер 30
    var_dump(str_split($str, 2));
    echo '<br>';

    $str = '1234567890'; // Номер 31
    var_dump(str_split($str, 1));
    echo '<br>';

    $str = '1234567890'; // Номер 32
    $arr = str_split($str, 2);
    echo implode('-', $arr) . '<br>';

    $str = 'qwerty   '; // Номер 33
    echo rtrim($str, ' ') . '<br>';

    $str = '/php/'; // Номер 34
    echo trim($str, '/') . '<br>';

    $str = 'слова слова слова'; // Номер 35
    rtrim($str, '.') . '<br>';
    echo (rtrim($str, '.')) . '.';
    echo '<br>';

    $str = '12345'; // Номер 36
    echo strrev($str) . '<br>';

    $str = '12321'; // Номер 37
    if ($str === strrev($str)) {
        echo 'Слово ' . $str . ' является палиндромом' . '<br>';
    } else {
        echo 'Слово ' . $str . ' не является палиндромом' . '<br>';
    }

    $str = 'Ivanov Ivan Ivanovich'; // Номер 38
    echo str_shuffle($str) . '<br>';

    $alphabet = implode('', range('a', 'z')); // Номер 39
    $str = '';
    for ($i = 0; $i < 6; $i++) {
        $shuffle = str_shuffle($alphabet);
        if (strpos($str, $shuffle[0]) === false) {
            $str .= $shuffle[0];
        }
    }
    echo $str . '<br>';

    $str = '12345678'; // Номер 40
    echo number_format($str, 0, ',', ' ') . '<br>';

    $str = 'x'; // Номер 41
    for ($i = 1; $i <= 9; $i++) {
        echo str_repeat($str, $i) . '<br>';
    }

    for ($i = 1; $i <= 9; $i++) { // Номер 42
        echo str_repeat($i, $i) . '<br>';
    }

    $str = 'html, <b>php</b>, js'; // Номер 43
    echo strip_tags($str) . '<br>';

    $str = '<h2>php</h2><b>php</b><i>php</i>'; // Номер 44
    echo strip_tags($str, '<b><i>') . '<br>';

    $str = 'html, <b>php</b>, js'; // Номер 45
    echo htmlspecialchars($str) . '<br>';

    echo ord('a') . '<br>'; // Номер 46
    echo ord('b') . '<br>';
    echo ord('c') . '<br>';

    echo 'Буквы латинского алфавита располагаются ' .  // Номер 47
    'в таблице ASCII от ' . ord('a') . ' ("a") ' . 'до ' . 
    ord('z') . ' ("z") ' . '<br>';

    echo chr(33) . '<br>'; // Номер 48

    echo chr(mt_rand(65, 90)) . '<br>';  // Номер 49

    $str = ''; // Номер 50
    $len = 10;
    for ($i = 1; $i <= $len; $i++) {
        $str .= chr(mt_rand(97, 122));
    }
    echo $str . '<br>';

    $str = 'A'; // Номер 51
    if (ord($str) >= 65 and ord($str) <= 90) {
        echo $str . ' - это большая буква' . '<br>';
    } else {
        echo $str . ' - это маленькая буква' . '<br>';
    }

    $str = 'ab-cd-ef'; // Номер 52
    echo strchr($str, '-') . '<br>';

    $str = 'ab-cd-ef'; // Номер 53
    echo strrchr($str, '-') . '<br>';

// Функции для массивов в PHP
    echo '<h3>Функции для массивов в PHP</h3>'; 

    $arr = [1, 2, 3, 4, 5]; // Номер 1
    if (in_array(3, $arr) === true) {
        echo 'Цифра 3 есть в массиве' . '<br>'; 
    }

    $arr = [1, 2, 3, 4, 5]; // Номер 2
    echo array_sum($arr) . '<br>'; 

    $arr = [1, 2, 3, 4, 5]; // Номер 3
    echo array_product($arr) . '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 4
    echo array_sum($arr) / count($arr) . '<br>';

    $arr = range(1, 100); // Номер 5
    var_dump($arr);
    echo '<br>';

    $arr = range('a', 'z'); // Номер 6
    var_dump($arr);
    echo '<br>';

    $arr = range(1, 9); // Номер 7
    echo implode($arr, '-') . '<br>';

    $arr = range(1, 100); // Номер 8
    echo array_sum($arr) . '<br>';

    $arr = range(1, 10); // Номер 9
    echo array_product($arr) . '<br>';

    $arr1 = [1, 2, 3]; // Номер 10
	$arr2 = ['a', 'b', 'c'];
    $result = array_merge($arr1, $arr2);
    var_dump($result);
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 11
    $result = array_slice($arr, 1, 3);
    var_dump($result);
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 12
    array_splice($arr, 1, 2);
    var_dump($arr);
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 13
    $result = array_splice($arr, 1, 3);
    var_dump($result);
    echo '<br>';

    $arr1 = [1, 2, 3, 4, 5]; // Номер 14
    $arr2 = ['a', 'b', 'c'];
    array_splice($arr1, 3, 0, $arr2);
    var_dump($arr1);
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 15
    array_splice($arr, 1, 0, ['a', 'b']);
    array_splice($arr, 6, 0, ['c']);
    array_splice($arr, 8, 0, ['e']);
    var_dump($arr);
    echo '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3]; // Номер 16
    $keys = array_keys($arr);
    $values = array_values($arr);
    var_dump($keys);
    echo '<br>';
    var_dump($values);
    echo '<br>';

    $arr1 = ['a', 'b', 'c']; // Номер 17
	$arr2 = [1, 2, 3];
    $result = array_combine($arr1, $arr2);
    var_dump($result);
    echo '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3]; // Номер 18
    $result = array_flip($arr);
    var_dump($result);
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 19
    $result = array_reverse($arr);
    var_dump($result);
    echo '<br>';

    $arr = ['a', '-', 'b', '-', 'c', '-', 'd']; // Номер 20
    $pos = array_search('-', $arr);
    echo 'Позиция первого элемента "-" ' . $pos . '<br>';

    $arr = ['a', '-', 'b', '-', 'c', '-', 'd']; // Номер 21
    $pos = array_search('-', $arr);
    array_splice($arr, $pos, 1);
    echo 'Элемент "-" удалён: ';
    var_dump($arr);
    echo '<br>';

    $arr = ['a', 'b', 'c', 'd', 'e']; // Номер 22
    $result = array_replace($arr, [0 => "!", 3 => "!!"]);
    var_dump($result);
    echo '<br>';

    $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];  // Номер 23
    sort($arr);
    echo 'По возрастанию элементов: ' . '<br>';
    var_dump($arr);
    echo '<br>';
    
    rsort($arr);
    echo 'По убыванию элементов: ' . '<br>';
    var_dump($arr);
    echo '<br>';
    
    asort($arr);
    echo 'По возрастанию элементов с сохранением ключей: ' . '<br>';
    var_dump($arr);
    echo '<br>';
    
    arsort($arr);
    echo 'По убыванию элементов с сохранением ключей: ' . '<br>';
    var_dump($arr);
    echo '<br>';
    
    ksort($arr);
    echo 'По возрастанию ключей: ' . '<br>';
    var_dump($arr);
    echo '<br>';

    krsort($arr);
    echo 'По убыванию ключей: ' . '<br>';
    var_dump($arr);
    echo '<br>';

    /*  usort($arr);
    echo 'По функции по элементам: ' . '<br>';
    var_dump($arr);
    echo '<br>';  */

    /* uasort($arr);
    echo 'По функции по элементам с сохранением ключей: ' . '<br>';
    var_dump($arr);
    echo '<br>'; */

    /* uksort($arr);
    echo 'По функции по ключам: ' . '<br>';
    var_dump($arr);
    echo '<br>';  */

    natsort($arr);
    echo 'Натуральная сортировка: ' . '<br>';
    var_dump($arr);
    echo '<br>';

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];   // Номер 24
    echo array_rand($arr)  . '<br>'; 

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];   // Номер 25
    echo $arr[array_rand($arr)]  . '<br>'; 

    $arr = [1, 2, 3, 4, 5];   // Номер 26
    shuffle($arr);
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = range(1, 25);   // Номер 27
    shuffle($arr);
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = range('a', 'z');   // Номер 28
    shuffle($arr);
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = [];
    $elem = '';
    for ($i = 0; $i < 6; $i++) {   // Номер 29
        $elem = chr(rand(97, 122));
        if (!in_array($elem, $arr)) {
            $arr[$i] = $elem;
        } else ($i--);
    }
    $str = implode($arr);
    echo $str . '<br>';

    $arr = ['a', 'b', 'c', 'b', 'a']; // Номер 30
    $unique = array_unique($arr);
    var_dump($unique);
    echo '<br>';
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 31
    echo array_shift($arr) . ', ';
    echo array_pop($arr) . ', ';
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = [1, 2, 3, 4, 5]; // Номер 32
    echo array_unshift($arr, 0) . ', ';
    echo array_push($arr, 6) . ', ';
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = ['a', 'b', 'c']; // Номер 33
    var_dump(array_pad($arr, 6, '-'));
    echo '<br>';
    echo '<br>';

    $arr = array_fill(0, 10, 'x'); // Номер 34
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $arr = range(0, 24);
    $chunk = array_chunk($arr, 5); // Номер 35
    var_dump($chunk);
    echo '<br>';
    echo '<br>';

    $arr = ['a', 'b', 'c', 'b', 'a'];  // Номер 36
    var_dump(array_count_values($arr));
    echo '<br>';
    echo '<br>';

    $arr = [1, 2, 3, 4, 5];  // Номер 37
    var_dump(array_map('sqrt', $arr));
    echo '<br>';
    echo '<br>';

    $arr1 = [1, 2, 3, 4, 5]; // Номер 38
	$arr2 = [3, 4, 5, 6, 7];
    $new_arr = array_intersect($arr1, $arr2);
    var_dump($new_arr);
    echo '<br>';
    echo '<br>';

    $arr1 = [1, 2, 3, 4, 5]; // Номер 39
	$arr2 = [3, 4, 5, 6, 7];
    $new_arr = array_diff($arr1, $arr2);
    var_dump($new_arr);
    echo '<br>';
    echo '<br>';

// Функции для времени-даты в PHP
    echo '<h3>Функции для времени-даты в PHP</h3>'; 

    echo 'Текущее время: ' . time(); // Номер 1
    echo '<br>';

    echo '1 марта 2025: ' . mktime(0,0,0,3,1,2025);  // Номер 2
    echo '<br>';

    $current_time = time(); // Номер 3
    $sec_per_year = 60 * 60 * 24 * 365.25;
    $full_years_from_1970 = floor($current_time / $sec_per_year);
    $dec31 = ($full_years_from_1970 * $sec_per_year) + ($sec_per_year - 60 * 60 * 24);
    echo 'з1 декабря вне записимости от текущей даты и года: ' . $dec31;
    echo '<br>';

    $current_time = time(); // Номер 4
    $Match15 = mktime(13,12,59,3,15,2000);
    echo "Количество секунд, прошедших с 13:12:59 15-го марта 2000: " .
    ($current_time - $Match15);
    echo '<br>';

    $current_time = time(); // Номер 5
    $morninig = mktime(7,23,48,10,16,2023);
    $full_hours = floor(($current_time - $morninig) / 3600) - 1;  // учитывая часовой пояс
    echo "Количество полных часов с 7:23:48: " . $full_hours;
    echo '<br>';

    echo date('Y-m-d H-i-s'); // Номер 6
    echo '<br>';

    echo date('Y-m-d') . ', '; // Номер 7
    echo date('d.m.Y') . ', ';
    echo date('d-m-y') . ', ';
    echo date('H:i:s');
    echo '<br>';

    echo date('d.m.Y', mktime(0,0,0,2,12,2025)) . '<br>'; // Номер 8

    $arr = [ 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', // Номер 9
    'friday', 'saturday'];
    echo 'Сегодня - ' . $arr[date('w')] . '<br>';
    echo '06.06.2006 был - ' . $arr[date('w', mktime(0,0,0,6,6,2006))] . '<br>';
    echo 'Я родился в - ' . $arr[date('w', mktime(0,0,0,6,15,1985))] . '<br>';

    $arr = ['january', 'february', 'march', 'april', // Номер 10
    'may', 'june', 'july', 'august', 'september', 'october', 'november', 
    'december'];
    echo 'Сегодня - ' . $arr[date('n')-1] . '<br>';

    echo 'В текущем месяца - ' . date('t') . ' дней <br>'; // Номер 11

    $date = strtotime('2025-12-31'); // Номер 12
    echo date('d-m-Y', $date);
    echo '<br>';

    $date = date_create('2025-12-31'); // Номер 13
    date_modify($date, '2 days');
    echo date_format($date, 'd-m-Y') . '<br>';
    date_modify($date, '1 month 3 days');
    echo date_format($date, 'd-m-Y') . '<br>';
    date_modify($date, '1 year');
    echo date_format($date, 'd-m-Y') . '<br>';
    date_modify($date, '-3 days');
    echo date_format($date, 'd-m-Y') . '<br>';

    $now = date('z'); // Номер 14
    if (date('L') == 0) {
        echo 'До конца года осталось ' . (365 - $now)  . ' дней <br>';
    } else {
        echo 'До конца года осталось ' . (366 - $now)  . ' дней <br>';
    }

    $year = 2016;  // Номер 15
    $day = strtotime($year . '-01-01');
    $last_day = strtotime($year . '-12-31');
    $amount = 0;
    while ($day <= $last_day) {
        if (date('w', $day) == 6 and date('d', $day) == 13) {
            $amount += 1;
        }
        $day = strtotime('+1 day', $day);
    }
    echo 'Количество пятниц 13 в ' . $year . ' году: ' . $amount . '<br>'; 

    $now = time(); // Номер 16
    $hundred_days_ago = strtotime('-100 days', $now);
    $arr = [ 'воскресенье', 'понедельник', 'вторник', 'среда', 
    'четверг', 'пятница', 'суббота'];
    $weekday  = date('w', $hundred_days_ago);
    echo 'День недели 100 дней назад: ' . $arr[$weekday] . '<br>';


// Практика на использования изученных функций
    echo '<h3>Практика на использования изученных функций</h3>'; 

    $arr = [1, 2, 3, 4, 5]; // Номер 1
    $averidge = array_sum($arr) / count($arr);
    echo 'Среднее арифметическое элементо массива: ' . $averidge  . '<br>';

    $arr = range(1, 100); // Номер 2
    $sum = array_sum($arr);
    echo "Сумма чисел от 1 до 100: " . $sum . '<br>';

    $arr = range(1, 100); // Номер 3
    echo 'Столбец чисел от 1 до 10 без цикла: ' . '<br>';
    echo implode('<br>', $arr);
    echo '<br>';
    echo '<br>';

    $arr = array_fill(0, 10, 'x'); // Номер 4
    echo 'Массив из 10 "x": ';
    var_dump($arr);
    echo '<br>';
    echo '<br>';
    
    $arr = range(1, 10); // Номер 5
    $shuffle = shuffle($arr);
    echo 'Массив из 10 не повторяющихся числе от 1 до 10: ';
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $number = 5; // Номер 7
    $arr = range(1, $number);
    $factorial = array_product($arr);
    echo 'Факториал числа ' . $number . ' равен ' . $factorial . '<br>';

    $number = 123456789; // Номер 8
    $arr = str_split($number, 1);
    $sum = array_sum($arr);
    echo 'Сумма цифр числа ' . $number . ' равна ' . $sum . '<br>';

    $arr = [4, 9, 16, 25, 36]; // Номер 9
    $sqrt = array_map('sqrt', $arr);
    echo 'Массив квадратных корней элементов данного массива: <br>';
    var_dump($sqrt);
    echo '<br>';
    echo '<br>';

    $alphabet = range('a', 'z'); // Номер 10
    $number = range(1, 26);
    $arr = array_combine($alphabet, $number);
    echo 'Массив от 1 до 26, где ключи - буквы, значения - цифры: <br>';
    var_dump($arr);
    echo '<br>';
    echo '<br>';

    $number = '1234567890'; // Номер 11
    $arr = str_split($number, 1);
    $sum = array_sum($arr);
    echo 'Сумма цифр строки "1234567890" равна ' . $sum . '<br>';

    $str = '1234567890'; // Номер 12
    $arr = str_split($number, 2);
    $sum = array_sum($arr);
    echo 'Сумма цифр строки "1234567890" по два символа равна ' . $sum . '<br>';
    echo '<br>';

    $arr = range(1, 9); // Номер 13
    $new_arr = array_chunk($arr, 3);
    var_dump($new_arr);
    echo '<br>';
    echo '<br>';


            /* ------- Глава седьмая - Пользовательские функции ------- */


// Основы работы с пользовательскими функциями
    echo '<h3>Основы работы с пользовательскими функциями</h3>'; 

    function name() {  // Номер 1
        echo 'Владимир<br>';
    }
    name();

    function sum_1_100() {  // Номер 2
        $arr = range(1, 100);
        $sum = array_sum($arr);
        echo 'Сумма чисел от 1 до 100: ' . $sum . '<br>';
    }
    sum_1_100();

// Параметры функций
    echo '<h3>Параметры функций</h3>'; 

    $number = 3;   // Номер 1
    function cube($number) {
        $cube = $number * 3;
        echo 'Куб числа ' . $number . ' = ' . $cube . '<br>';
    }
    cube($number);

    $number = 3;   // Номер 2
    function positive($number) {
        if ($number > 0) {
            echo '+++' . '<br>';
        } elseif ($number < 0) {
            echo '---' . '<br>';
        } else {
            echo 'Это ноль' . '<br>';
        }
    }
    positive($number);

// Несколько параметров функций
    echo '<h3>Несколько параметров функций</h3>'; 

    $number1 = 2;  // Номер 1
    $number2 = 3;
    function sum_of_numbers($number1, $number2) {
        $sum = $number1 + $number2;
        echo $sum . '<br>';
    }
    sum_of_numbers($number1, $number2);

// Параметры-переменные функций
    echo '<h3>Параметры-переменные функций</h3>'; 

    function func_3_param($param1, $param2, $param3) {  // Номер 1
        $sum = $param1 + $param2 + $param3;
        echo $sum . '<br>';
    }
    $param1 = 1;
	$param2 = 2;
	$param3 = 3;
    func_3_param($param1, $param2, $param3);

// Инструкция return
    echo '<h3>Инструкция return</h3>'; 

    function cube_res($number) {  // Номер 1 
        return $number ** 3;
    }
    $number = 5;
    $res = cube_res($number);
    echo $res . '<br>';

    function cube_sum($number1, $number2) {  // Номер 2
        return ($number1 ** 3) + ($number2 ** 3);
    }
    $number1 = 5;
    $number2 = 6;
    $res = cube_sum($number1, $number2);
    echo $res . '<br>';

// Цикл и return
    echo '<h3>Цикл и return</h3>'; 

    function func_cycle($num) {   // Номер 1 
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i;
		}
        return $sum;
	}
	echo func_cycle(5);
    echo '<br>';

// Применение return в цикле
    echo '<h3>Применение return в цикле</h3>'; 

    function iterations($number) {   // Номер 1 
        $i = 0;
        while (true) {
            $number /= 2;
            if ($number < 10) {
                return $i;
            }
            $i++;

        }
    }

    $number = 100;
    echo iterations($number);
    echo '<br>';

// Приемы работы с return в PHP
    echo '<h3>Приемы работы с return в PHP</h3>'; 

    function func($num1, $num2) {   // Номер 1
		if ($num1 > 0 and $num2 > 0) {
			return $num1 * $num2;
		} else {
			return $num1 - $num2;
		}
	}
	
	echo func(3, 4);

// Флаги в функциях
    echo '<h3>Флаги в функциях</h3>'; 

    function positive_array($arr) {   // Номер 1
        foreach ($arr as $elem) {
            if ($elem % 2 !== 0) {
                return false;
            }
        }
        return true;
    }
    $arr = [2, 4, 6, 8, 10];
    if (positive_array($arr)) {
        echo 'True';
    } else {
        echo 'False';
    }
    echo '<br>';


    function positive_numbers($number) {   // Номер 2
        $arr = str_split($number, 1);
        foreach ($arr as $elem) {
            if ($elem % 2 === 0) {
                return false;
            }
        }
        return true;
    }
    $number = 135;
    if (positive_numbers($number)) {
        echo 'True';
    } else {
        echo 'False';
    }
    echo '<br>';


    function same_numbers($arr) {   // Номер 3
        for ($i = 0; $i < count($arr)-1; $i++) {
            if ($arr[$i] === $arr[$i+1]) {
                return true;
            }
        }
        return false;

    }
    $arr = [2, 4, 2, 6, 8, 10];
    if (same_numbers($arr)) {
        echo 'True';
    } else {
        echo 'False';
    }
    echo '<br>';


// Логические операторы без if в функциях
    echo '<h3>Логические операторы без if в функциях</h3>'; 


    function func_no_if_1($a, $b) {    // Номер 1
		return ($a === $b);
	}

    $a = 10; 
    $b = 10;
    echo func_no_if_1($a, $b);
    echo '<br>';


    function func_no_if_2($a, $b) {
		return $a !== $b;
	}

    $a = 10; 
    $b = 11;
    echo func_no_if_2($a, $b);
    echo '<br>';


    function func_no_if_3($a, $b) {
		return ($a + $b >= 10);
	}

    $a = 10; 
    $b = 11;
    echo func_no_if_3($a, $b);
    echo '<br>';
    

    function func_no_if_4($num) {
		return ($num >= 0);
	}

    $num = 10; 
    echo func_no_if_4($num);
    echo '<br>';


// Советы по созданию функций в JavaScript
    echo '<h3>Советы по созданию функций в JavaScript</h3>';

    
    function calc_average($arr) {   // Номер 1
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
		}
		
		return $res / count($arr); 
	} 

    echo calc_average([1, 2, 3]) . '<br>';
    // изменил название с sum на calc_average


    function calc_sum_arr($arr) {  // Номер 2
		$res = 0;
		
		foreach ($arr as $elem) {
			$res += $elem;
		}
        return $res;
    }
    
    function calc_sum_ratio($arr1, $arr2) {
        $res1 = calc_sum_arr($arr1);
        $res2 = calc_sum_arr($arr2);
        return $res1 / $res2;
    }


        echo calc_sum_ratio([1, 2, 3], [4, 5, 6]) . '<br>';
    // переименовал функцию в calc_sum_ratio
    // разбил функцию на 2, каждая из которых делает одно дело
    // исользовать внутри функции вспомогательные функции
    // вынес дублирующийся код в функцию


    function getProduct($arr) {  // Номер 3
		$res = 1;
		
		foreach ($arr as $elem) {
			$res *= $elem;
		}
		
		return $res;
	} // изменил название с getSum на getProduct

    echo getProduct([1, 2, 3, 4, 5, 6]) . '<br>';


// Практика на функции
    echo '<h3>Практика на функции</h3>';


// Номер 1
    function getArrayDivisors($number) {  
        $arr = range(-$number, $number);
        $result_arr = [];
        foreach ($arr as $elem) {
            if (($elem != 0) and ($number % $elem == 0)) {
                $result_arr[] = $elem;
            }
        }
        return $result_arr;
    }

    $number = 10;
    $arr = getArrayDivisors($number);
    echo 'Массив делителей числа ' . $number . ':<br> ';
    var_dump($arr);
    echo '<br>';
    echo '<br>';


// Номер 2
    function getCommonDivisors($number1, $number2) {  
        if ($number1 >= $number2) {
            $arr = range(-$number1, $number1);
        } else {
            $arr = range(-$number2, $number2);
        }

        $result_arr = [];
        foreach ($arr as $elem) {
            if (($elem != 0) and ($number1 % $elem == 0) and ($number2 % $elem == 0)) {
                $result_arr[] = $elem;
            }
        }
        return $result_arr;
    }

    $number1 = 10;
    $number2 = 20;
    $arr = getCommonDivisors($number1, $number2);
    echo 'Массив общих делителей чисел ' . $number1 . ' и ' . $number2 . ':<br> ';
    var_dump($arr);
    echo '<br>';
    echo '<br>';


// Номер 3
    function calcSumNumbers($number) {  
        $arr = str_split($number, 1);
        return array_sum($arr);
    }

    $number = 123456789;
    $arr = calcSumNumbers($number);
    echo 'Сумма цифр числа ' . $number . ' равна ' . $arr .  '<br>';
    echo '<br>';

// Номер 4
    function showToday() {  
        $now = time(); 
        $arr = [ 'воскресенье', 'понедельник', 'вторник', 'среда', 
        'четверг', 'пятница', 'суббота'];
        echo 'Текущий день недели: ' . $arr[date('w', $now)];
    }

    showToday();
    echo '<br>';
    echo '<br>';


// Номер 5
    function showWeekday($date) {  
        $date = strtotime($date); 
        $arr = [ 'воскресенье', 'понедельник', 'вторник', 'среда', 
        'четверг', 'пятница', 'суббота'];
        return $arr[date('w', $date)];
    }

    $date = '08-12-2021';
    echo $date . ' это - ' . showWeekday($date);
    echo '<br><br>';


// Номер 6
    function convertSecondsToDays($seconds) {  
        $res = $seconds / (60 * 60 * 24);
        return round($res, 2);
    }

    $seconds = 200000;
    echo $seconds . ' секунд это  ' . convertSecondsToDays($seconds) . ' суток';
    echo '<br><br>';


// Номер 7
    function checkLeapYear($year) {  
        $res = strtotime('01-01-' . $year);
        if (date('L', $res) == 1) {
            return $year . ' - високосный год<br><br>';
        }
        return $year . ' - не високосный год<br><br>';
    }

    $year = 2008;
    echo checkLeapYear($year);


// Номер 8
    function checkPrimeNumber($number) {  
        if ($number % 2 != 0 or $number == 2) {
            return $number . ' - простое число<br><br>';
        }
        return $number . ' - не простое число<br><br>';
    }

    $number = 11;
    echo checkPrimeNumber($number);



    /* ------- Глава восьмая - Рекурсия -------- */


// Рекурсия с параметроми
    echo '<h3>Рекурсия с параметром</h3>';
    

// Номер 1 
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    function Recursion($arr) {
        if (count($arr) > 0) {
            echo array_shift($arr);
            Recursion($arr);
        }
    }

    Recursion($arr);
    echo '<br>';


// Сумма элементов массива при рекурсии
    echo '<h3>Сумма элементов массива при рекурсии</h3>';


// Номер 1
    function getSumElem($arr) {
        $sum = array_shift($arr);
        if (count($arr) > 0) {
            $sum += getSumElem($arr);
        }
        return $sum;
    }

    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    echo getSumElem($arr);
    echo '<br>';


// Рекурсия и многомерные структуры
    echo '<h3>Рекурсия и многомерные структуры</h3>';

// Номер 1
    function findPrimitiveElem($arr) {
        foreach ($arr as $elem) {
            if (is_array($elem)) {
                findPrimitiveElem($elem);
            } else {
                echo $elem . " ";
            }
        }
    } 

    $arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
    findPrimitiveElem($arr);
    echo '<br>';


// Сумма элементов массива
    echo '<h3>Сумма элементов массива</h3>';


// Номер 1
    function calcMultiArraySum($arr) {
        $sum = 0;
        foreach ($arr as $elem) {
            if (is_array($elem)) {
                $sum += calcMultiArraySum($elem);
            } else {
                $sum += $elem;
            }
        }
        return $sum;
    } 

    $arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
    echo calcMultiArraySum($arr);
    echo '<br>';


// Номер 2
    function showStringConcat($arr) {
        $str = '';
        foreach ($arr as $elem) {
            if (is_array($elem)) {
                $str .= showStringConcat($elem);
            } else {
                $str .= $elem;
            }   
        }
        return $str;
    } 

    $arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]]; 
    echo showStringConcat($arr);
    echo '<br>';


// Манипуляции с элементами многомерного массива
    echo '<h3>Манипуляции с элементами многомерного массива</h3>';


    function getSquareElements($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            if (is_array($arr[$i])) {
                $arr[$i] = getSquareElements($arr[$i]);
            } else {
                $arr[$i] **= 2; 
            }
        }
        return $arr;

    }

    $arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
    var_dump(getSquareElements($arr));
    echo '<br><br>';




        /* ------- Глава девятая - Pегулярные выражения -------- */



// Введение в регулярные выражения
    echo '<h3>Введение в регулярные выражения</h3>';

    $str = 'ahb acb aeb aeeb adcb axeb'; // Номер 1
    echo preg_replace('#a.b#', '!', $str);
    echo '<br>';

    $str = 'ahb acb aeb aeeb adcb axeb'; // Номер 2
    echo preg_replace('#a..b#', '!', $str);
    echo '<br>';


// Операторы повторения символов в регулярках
    echo '<h3>Операторы повторения символов в регулярках</h3>';

    $str = 'aa aba abba abbba abca abea'; // Номер 1
    echo preg_replace('#ab+a#', '!', $str);
    echo '<br>';

    $str = 'aa aba abba abbba abca abea'; // Номер 2
    echo preg_replace('#ab*a#', '!', $str);
    echo '<br>';

    $str = 'aa aba abba abbba abca abea'; // Номер 3
    echo preg_replace('#ab?a#', '!', $str);
    echo '<br>';

    $str = 'aa aba abba abbba abca abea'; // Номер 4
    echo preg_replace('#ab*a#', '!', $str);
    echo '<br>';

 // Группирующие скобки в регулярках
    echo '<h3>Группирующие скобки в регулярках</h3>';   

    $str = 'ab abab abab abababab abea'; // Номер 1
    echo preg_replace('#(ab)+#', '!', $str);
    echo '<br>';

// Список специальных символов в регулярках
     echo '<h3>Список специальных символов в регулярках</h3>';   

     $str = 'a.a aba aea'; // Номер 1
     echo preg_replace('#a\.a#', '!', $str);
     echo '<br>';

     $str = '2+3 223 2223'; // Номер 2
     echo preg_replace('#2\+3#', '!', $str);
     echo '<br>';

     $str = '23 2+3 2++3 2+++3 345 567'; // Номер 3
     echo preg_replace('#2\++3#', '!', $str);
     echo '<br>';

     $str = '23 2+3 2++3 2+++3 445 677'; // Номер 4
     echo preg_replace('#2\+*3#', '!', $str);
     echo '<br>';

     $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+'; // Номер 5
     echo preg_replace('#\*q+\+#', '!', $str);
     echo '<br>';

     $str = '[abc] {abc} abc (abc) [abc]'; // Номер 6
     echo preg_replace('#\[abc\]#', '!', $str);
     echo '<br>';

// Фигурные скобки в регулярных выражения
     echo '<h3>Фигурные скобки в регулярных выражения</h3>';  

     $str = 'aa aba abba abbba abbbba abbbbba';  // Номер 1
     echo preg_replace('#ab{2,4}a#', '!', $str);
     echo '<br>';

     $str = 'aa aba abba abbba abbbba abbbbba';  // Номер 2
     echo preg_replace('#ab{1,3}a#', '!', $str);
     echo '<br>';

     $str = 'aa aba abba abbba abbbba abbbbba';  // Номер 3
     echo preg_replace('#ab{4,}a#', '!', $str);
     echo '<br>';

// Ограничение жадности в регулярках
     echo '<h3>Ограничение жадности в регулярках</h3>'; 

     $str = 'aba accca azzza wwwwa';  // Номер 1
     echo preg_replace('#a.+?a#', '!', $str);
     echo '<br>';

// Группы символов в регулярных выражениях
     echo '<h3>Группы символов в регулярных выражениях</h3>';

     $str = 'a1a a2a a3a a4a a5a aba aca';  // Номер 1
     echo preg_replace('#a\da#', '!', $str);
     echo '<br>';

     $str = 'a1a a22a a333a a4444a a55555a aba aca'; // Номер 2
     echo preg_replace('#a\d+a#', '!', $str);
     echo '<br>';

     $str = 'aa a1a a22a a333a a4444a a55555a aba aca';  // Номер 3
     echo preg_replace('#a\d*a#', '!', $str);
     echo '<br>';

     $str = 'avb a1b a2b a3b a4b a5b abb acb';  // Номер 4
     echo preg_replace('#a\Db#', '!', $str);
     echo '<br>';

     $str = 'ave a#b a2b a$b a4b a5b a-b acb';  // Номер 5
     echo preg_replace('#a\Wb#', '!', $str);
     echo '<br>';

     $str = 'ave a#b a2b a$b a4b a5b a-b acb';  // Номер 6
     echo preg_replace('#\s#', '!', $str);
     echo '<br>';

// Наборы символов в регулярных выражениях
     echo '<h3>Наборы символов в регулярных выражениях</h3>';

     $str = 'aba aea aca aza axa';  // Номер 1
     echo preg_replace('#a[bex]a#', '!', $str);
     echo '<br>';

     $str = 'a1a a3a a7a a9a aba'; // Номер 2
     echo preg_replace('#a[3-6]a#', '!', $str);
     echo '<br>';

     $str = 'aba aea afa aha aga'; // Номер 3
     echo preg_replace('#a[a-g]a#', '!', $str);
     echo '<br>';

     $str = 'aba aea afa aha aga'; // Номер 4
     echo preg_replace('#a[a-fj-z]a#', '!', $str);
     echo '<br>';
     
     $str = 'aAa aea aEa aJa a3a'; // Номер 5
     echo preg_replace('#a[a-fA-D]a#', '!', $str);
     echo '<br>';

     $str = 'aAXa aeffa aGha aza ax23a a3sSa'; // Номер 6
     echo preg_replace('#a[a-z]+a#', '!', $str);
     echo '<br>';

     $str = 'aAXa aeffa aGha aza ax23a a3sSa'; // Номер 7
     echo preg_replace('#a[a-zA-Z]+a#', '!', $str);
     echo '<br>';

     $str = 'aAXa aeffa aGha aza ax23a a3sSa'; // Номер 8
     echo preg_replace('#a[a-z1-9]+a#', '!', $str);
     echo '<br>';

// Инвертирование наборов символов в регулярках
     echo '<h3>Инвертирование наборов символов в регулярках</h3>';

     $str = '1e2 1w2 1f2 1j2 1r1 1x2'; // Номер 1
     echo preg_replace('#1[^ex]2#', '!', $str);
     echo '<br>';

     $str = 'x3z x6z x1z x2x x4z x8z'; // Номер 2
     echo preg_replace('#x[^2-7]z#', '!', $str);
     echo '<br>';

     $str = 'xWERz xrz xAsd1z x2z xtttyz x8Rz'; // Номер 3
     echo preg_replace('#x[^A-Z1-9]+z#', '!', $str);
     echo '<br>';

     $str = 'x8z x99z x"z xAZz xttyz x3z'; // Номер 4
     echo preg_replace('#x[^A-Z1-5a-z]+z#', '!', $str);
     echo '<br>';

// Особенности кириллицы в регулярках
     echo '<h3>Особенности кириллицы в регулярках</h3>';

     $str = 'wйw wяw wёw wqw'; // Номер 1
     echo preg_replace('#w[а-яё]w#u', '!', $str);
     echo '<br>';

     $str = 'ааа ббб ёёё ззз ййй ААА  БББ ЁЁЁ ЗЗЗ ЙЙЙ'; // Номер 2
     echo preg_replace('#[а-яёA-ЯЁ]+#u', '!', $str);
     echo '<br>';

// Спецсимволы внутри квадратных скобок
     echo '<h3>Спецсимволы внутри квадратных скобок</h3>';

     $str = 'aba aea aca aza axa a.a a+a a*a'; // Номер 1
     echo preg_replace('#a[.+*]a#', '!', $str);
     echo '<br>';

     $str = 'xaz x.z x3z x@z x$z xrz'; // Номер 2
     echo preg_replace('#x[^@$]z#', '!', $str);
     echo '<br>';

// Группы символов внутри квадратных скобок
     echo '<h3>Группы символов внутри квадратных скобок</h3>';
     
     $str = '111 22 .... qwe qweee qwrtwqe'; // Номер 1
     echo preg_replace('#[\d.]+#', '!', $str);
     echo '<br>';

     $str = '#a&#$%4zeeee^* (## asd7'; // Номер 2
     echo preg_replace('#[^a-g\d]{3,7}#', '!', $str);
     echo '<br>';

// Исключения внутри наборов в регулярках
     echo '<h3>Исключения внутри наборов в регулярках в регулярках</h3>';

     $str = 'x[]z x{}z x.z x()z'; // Номер 1
     echo preg_replace('#x[\[\]{}()]+z#', '!', $str);
     echo '<br>';

     $str = '[abc] {abc} abc (abc) [abc]'; // Номер 2
     echo preg_replace('#[\[\]{}()]abc[\[\]{}()]#', '!', $str);
     echo '<br>';

// Символ шляпки внутри наборов в регулярках
     echo '<h3>Символ шляпки внутри наборов в регулярках</h3>';

     $str = '^xx axx ^zz bkk @ss'; // Номер 1
     echo preg_replace('#[\^@][a-z]{2}#', '!', $str);
     echo '<br>';

     $str = '^xx axx ^zz bkk @ss'; // Номер 2
     echo preg_replace('#\s[^\^@][a-z]{2}#', '!', $str);
     echo '<br>';

     $str = '^xx axx ^zz bkk'; // Номер 3
     echo preg_replace('#\s[^\^][a-z]{2}#', '!', $str);
     echo '<br>';

// Дефис внутри наборов в регулярках
     echo '<h3>Дефис внутри наборов в регулярках</h3>';

     $str = 'xaz xBz xcz x-z x@z'; // Номер 1
     echo preg_replace('#x[a-zA-z-]z#', '!', $str);
     echo '<br>';

     $str = 'xaz x$z x-z xcz x+z x%z x*z'; // Номер 2
     echo preg_replace('#x[$+-]z#', '!', $str);
     echo '<br>';

     
// Начало и конец строки в регулярках
    echo '<h3>Начало и конец строки в регулярках</h3>';

    $str = 'abc def xyz'; // Номер 1
    echo preg_replace('#^[a-z]{3}#', '!', $str);
    echo '<br>';

    $str = 'abc def xyz'; // Номер 2
    echo preg_replace('#[a-z]{3}$#', '!', $str);
    echo '<br>';

// Начало и конец строки в регулярках
    echo '<h3>Начало и конец строки в регулярках</h3>';

    $str = 'aaa xaa aaa xbb aaa'; // Номер 1
    echo preg_replace('#\bx[a-z]*#', '!', $str);
    echo '<br>';

// Команда 'или' в регулярных выражениях
    echo '<h3>Команда "или" в регулярных выражениях</h3>';

    $str = 'aeeea aeea aea axa axxa axxxa'; // Номер 1
    echo preg_replace('#a(e+|x+)a#', '!', $str);
    echo '<br>';

    $str = 'aeeea aeea aea axa axxa axxxa'; // Номер 1
    echo preg_replace('#a(e{2}|x+)a#', '!', $str);
    echo '<br>';

// Команда 'или' в регулярных выражениях
    echo '<h3>Команда "или" в регулярных выражениях</h3>';

    $str = 'aeeea aeea aea axa axxa axxxa'; // Номер 1
    echo preg_replace('~a(e{3}|x{3})a~', '!', $str);
    echo '<br>';

// Экранировка ограничителей
    echo '<h3>Экранировка ограничителей</h3>';

    echo preg_replace('#a\#b#', '!', 'a#b'); // Номер 1
    echo '<br>';

// Команда 'или' в регулярных выражениях
    echo '<h3>Команда "или" в регулярных выражениях</h3>';

    $str = 'aeeea aeea aea axa axxa axxxa'; // Номер 1
    echo preg_replace('~a(e{3}|x{3})a~', '!', $str);
    echo '<br>';

// Команда 'или' в регулярных выражениях
    echo '<h3>Команда "или" в регулярных выражениях</h3>';

    $str = 'a\\b c\\d e\\f'; // Номер 1
    echo preg_replace('#[a-z]\\\\[a-z]#', '!', $str);
    echo '<br>';

    $str = 'a\\b c\\\\d e\\\\\\f'; // Номер 2
    echo preg_replace('#[a-z]\\\\+[a-z]#', '!', $str);
    echo '<br>';

// Проверка строки с помощью регулярки
    echo '<h3>Проверка строки с помощью регулярки</h3>';

    echo preg_match('#\d{3}#', '111 ddd ccc' );  // Номер 1
    echo '<br>';

    echo preg_match('#^http#', 'http//' );  // Номер 2
    echo '<br>';

    echo preg_match('#^(http|https)#', 'https//index.txt' );  // Номер 3
    echo '<br>';

    echo preg_match('#(txt|html|php)$#', 'http//index.txt' );  // Номер 4
    echo '<br>';

    echo preg_match('#(jpg|jpeg)$#', 'http//image.jpg' );  // Номер 5
    echo '<br>';

// Автоматическое тестирование регулярок
    echo '<h3>Автоматическое тестирование регулярок</h3>';

    $reg   = '#\d+\.\d+#';  // Номер 1

    $arr = [];
	$arr[] = 'aaa 1.5 bbb';   
	$arr[] = 'aaa 12345 bbb'; 
	$arr[] = 'aaa 12.87 bbb';  
	$arr[] = 'aaa 12 bbb';    
	
	foreach ($arr as $str) {
		echo $str . ' ' . preg_match($reg, $str) . '<br>';
    }

// Проверка всей строки через регулярки
    echo '<h3>Проверка всей строки через регулярки</h3>';

// Номер 1
    $reg = '#^[a-z0-9-_]{1,63}\.[a-z1-9-]{2,24}$#';  
    
    $arr = [];
    $arr[] = 'site.ru';          // +
	$arr[] = 'site.com';         // +
	$arr[] = 'my-site.com';      // +
	$arr[] = 'my-cool-site.com'; // +
	$arr[] = 'my_site.com';      // +
	$arr[] = 'site123.com';      // +
	$arr[] = 'site.travel';      // +
	$arr[] = 'si$te.com';        // -
	$arr[] = 'site.r';           // -

    foreach ($arr as $str) {
        echo $str . ' ' . preg_match($reg, $str)  . '<br>';
    } 
    echo '<br>';

// Номер 2
    $reg = '#^[a-zA-Z0-9-_]{1,63}@[a-zA-Z1-9-]{2,255}\.[a-z1-9-]{2,24}$#';   
    
    $arr = [];
	$arr[] = 'addr@mail.ru';    // +
	$arr[] = 'addr123@mail.ru'; // +
	$arr[] = 'my-addr@mail.ru'; // +
	$arr[] = 'my_addr@mail.ru'; // +
	$arr[] = 'addr@site.ru';    // +
	$arr[] = 'addr.ru';         // -
	$arr[] = 'addr@.ru';        // -
	$arr[] = 'my@addr@mail.ru'; // -

    foreach ($arr as $str) {
        echo $str . ' ' . preg_match($reg, $str)  . '<br>';
    } 

// Проверка всей строки через регулярки
    echo '<h3>Проверка всей строки через регулярки</h3>';

    $reg = "#^([0-9]{4})\-([0-9]{2})\-([0-9]{2})$#"; // Номер 1
    $str = '2025-12-31';
    preg_match($reg, $str, $res);
    var_dump($res);

    $reg = "#^([a-z]{1,63})\.([a-z]{2,24})$#"; // Номер 2
    $str = 'index.html';
    preg_match($reg, $str, $res);
    var_dump($res);

// Поиск всех совпадений через регулярки
    echo '<h3>Поиск всех совпадений через регулярки</h3>';

    $reg = "#[0-9]#"; // Номер 1
    $str = '111 aaaa 22 bbbbb';
    echo preg_match_all($reg, $str) . '<br>';

// Все совпадения на карманы через регулярки
    echo '<h3>Все совпадения на карманы через регулярки</h3>';

    $str = '2023-10-29 2024-11-30 2025-12-31'; // Номер 1
    $reg = '#([0-9]{4})\-([0-9]{2})\-([0-9]{2})#';
    preg_match_all($reg, $str, $res) . '<br>';
    var_dump($res);

// Изменение поведения preg_match_all
    echo '<h3>Изменение поведения preg_match_all</h3>';

    $str = '2023-10-29 2024-11-30 2025-12-31'; // Номер 1
    $reg = '#([0-9]{4})\-([0-9]{2})\-([0-9]{2})#';
    preg_match_all($reg, $str, $res, PREG_SET_ORDER) . '<br>';
    print_r($res);

// Несохраняющие скобки в регулярках
    echo '<h3>Несохраняющие скобки в регулярках</h3>';

    $str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb'; // Номер 1
    $reg = '#([a-z]+)(?:\$\@)+([a-z]+)#';
    preg_match_all($reg, $str, $res) . '<br>';
    print_r($res);

// Карманы при замене через регулярки
    echo '<h3>Карманы при замене через регулярки</h3>';

    $str = '12 34 56 78'; // Номер 1
    $reg = '#(\d)(\d)#';
    $res = preg_replace($reg, '$2$1', $str) . '<br>';
    echo($res);

    $str = '31.12.2025'; // Номер 2
    $reg = '#(\d{2})\.(\d{2})\.(\d{4})#';
    $res = preg_replace($reg, '$3.$2.$1', $str) . '<br>';
    echo($res);

// Карманы в регулярном выражении
    echo '<h3>Карманы в регулярном выражении</h3>';
    
    $str = 'aaa bbb ccc xyz'; // Номер 1
    $reg = '#([a-z])\1\1#';
    echo preg_replace($reg, '!', $str) . '<br>';

    $str = 'a aa aaa abab bbbb'; // Номер 2
    $reg = '#([a-z])\1+#';
    echo preg_replace($reg, '!', $str) . '<br>';

    $str = 'aaa aaa bbb bbb ccc ddd'; // Номер 3
    $reg = '#([a-z])\1{2}\s\1{3}#';
    echo preg_replace($reg, '!', $str) . '<br>';

// Именованные карманы в регулярках
    echo '<h3>Именованные карманы в регулярках</h3>';

    $str = '12:59:59'; // Номер 1
    $reg = '#(?<hours>\d{2}):(?<minutes>\d{2}):(?<seconds>\d{2})#';
    preg_match($reg, $str, $res);
    print_r($res);
    echo '<br><br>';

    
    function delNumPockets($res) {  // Номер 2
        $new_arr = [];
        foreach ($res as $key => $value) {
            if (is_string($key)) {
                $new_arr[$key] = $value;        
            }
        } 
        return $new_arr;
    }

    $str = 'Ivanov Ivan is a pilot';
    $reg = '#(?<surname>[a-zA-Z]+)\s(?<name>[a-zA-Z]+)\s([a-z]+)\s([a-z]+)\s([a-z]+)#';
    preg_match($reg, $str, $res1);
    var_dump($res1);

    
    $new_arr = delNumPockets($res1);
    echo 'Результат без нумерованных ключей: <br>';
    print_r($new_arr);


// Именованные карманы внутри регулярки
    echo '<h3>Именованные карманы внутри регулярки</h3>';

    $str = '12:59:59 12:59:12 09:45:09'; // Номер 1
    $reg = '#(?<hour>\d{2}):\d{2}:\k<hour>#';
    echo preg_replace($reg, '!', $str) . '<br><br>';


// Общий номер карманов в регулярках
    echo '<h3>Общий номер карманов в регулярках</h3>';

    $reg = '#(\d{2})\-(\d{2})\-(?|19(9\d)|20(\d\d))#';  // Номер 1

    $arr = [
		'31-12-2025',
		'30-11-1995',
		'29-10-1990',
	];

    foreach ($arr as $elem) {
        preg_match($reg, $elem, $res);
        print_r($res);
        echo '<br>';
    } 


// Позитивный и негативный просмотр
    echo '<h3>Позитивный и негативный просмотр</h3>'; 

    $str = 'func1() func2() func3()';   // Номер 1
    $reg = '#(func\d(?=\())#';
    preg_match_all($reg, $str, $arr);
    print_r($arr[1]);
    echo '<br>';

    $str = '<a href="" class="eee" id="zzz">';   // Номер 2
    $reg = '#([a-z]+(?=\=))#';
    preg_match_all($reg, $str, $arr);
    print_r($arr[1]);
    echo '<br>';

    $str = '$aaa $bbb $ccc';;   // Номер 3
    $reg = '#((?<=\$)[a-z]{3})#';
    preg_match_all($reg, $str, $arr);
    print_r($arr[1]);
    echo '<br>';

// Замена с коллбэком через регулярки
    echo '<h3>Замена с коллбэком через регулярки</h3>'; 

    $str = '12345';   // Номер 1
    $res = preg_replace_callback('#(\d)#', function($match) {
        return $match[1] ** 2;}, $str);

    echo $res;

// Игнорирование регистра регулярок
    echo '<h3>Игнорирование регистра регулярок</h3>'; 

    echo preg_replace('#[a-z]+#i', '!', 'aaa BBB');  // Номер 1
    echo '<br>';


    


        /* ------- Глава десятая - Формирование строк -------- */


        
// Вставка переменных в строки
    echo '<h3>Вставка переменных в строки</h3>'; 

	$name = 'user'; // Номер 1
	echo "hello $name !";
    echo '<br>';

// Вставка элементов массива
    echo '<h3>Вставка элементов массива</h3>'; 

	$arr = ['1', '2', '3'];  // Номер 1
	echo "aaa $arr[0] bbb $arr[1]";
    echo '<br>';

// Вставка элементов массива
    echo '<h3>Вставка элементов массива</h3>'; 

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];   // Номер 1
	echo "text $arr[a] text $arr[b] text"; 
    echo '<br>';

// Цикл и вставка переменных
    echo '<h3>Цикл и вставка переменных</h3>'; 

    for ($i = 1; $i <= 10; $i++) {   // Номер 1
		for ($j = 1; $j <= 10; $j++) {
			echo "nums: $i $j <br>";
		}
	}

// Вставка элементов массивов в цикле
    echo '<h3>Вставка элементов массивов в цикле</h3>'; 

    $arr = ['a' => 1, 'b' => 2, 'c' => 3];   // Номер 1

	foreach ($arr as $key => $elem) {
		echo "pair: $elem $key <br>";
	}

// Вставка элементов многомерных массивов в цикле
    echo '<h3>Вставка элементов многомерных массивов в цикле</h3>';

    $products = [
		[
			'name'   => 'product1',   // Номер 1
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];

    foreach ($products as $elem) {
        foreach ($elem as $name => $info) {
            echo "$name - $info<br>";
        }
        echo '<br>';
    }

// Генерация тегов
    echo '<h3>Генерация тегов</h3>';

    $text1 = 'aaa';    // Номер 1
	$text2 = 'bbb';
	$text3 = 'ccc';

    echo "<p>$text1</p><p>$text2</p><p>$text3</p>";

// Генерация тегов с атрибутами
    echo '<h3>Генерация тегов с атрибутами</h3>';

    $src1 = '1.png';    // Номер 1
	$src2 = '2.png';
	$src3 = '3.png';

    echo "<img src=\"$src1\">";
    echo "<img src=\"$src2\">";
    echo "<img src=\"$src3\">";

// Цикл и генерация тегов
    echo '<h3>Цикл и генерация тегов</h3>';

    for ($i = 1; $i <= 5; $i++) {    // Номер 1
        echo "<li>$i</li>";
    }

// Цикл и генерация тегов
    echo '<h3>Цикл и генерация тегов</h3>';

    $arr = ['text1', 'text2', 'text3'];    // Номер 1
    echo '<select>';
    foreach ($arr as $elem) {
        echo "<option>$elem</option>";
    }
    echo '</select>';

// Цикл и генерация тегов и атрибутов
    echo '<h3>Цикл и генерация тегов и атрибутов</h3>';

    $arr = [
		['href'=>'page1.html', 'text'=>'text1'],     // Номер 1
		['href'=>'page2.html', 'text'=>'text2'],
		['href'=>'page3.html', 'text'=>'text3'],
	];
    echo '<ul>';
    foreach ($arr as $elem) {
        echo "<li><a href = \"{$elem['href']}\">{$elem['text']}</a></li>";
    }
    echo '</ul>';
    echo '<br>';


	$arr = [
		['value' => '1', 'text' => 'text1'],        // Номер 2
		['value' => '2', 'text' => 'text2'],
		['value' => '3', 'text' => 'text3'],
	];

    echo '<select>';
    foreach ($arr as $elem) {
        echo "<option value = \"{$elem['value']}\">{$elem['text']}</option>";
    }
    echo '</select>';
    echo '<br>';

// Цикл и генерация HTML таблиц
    echo '<h3>Цикл и генерация HTML таблиц</h3>';

    $arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500], 
		['name' => 'user2', 'age' => 31, 'salary' => 600], 
		['name' => 'user3', 'age' => 32, 'salary' => 700], 
	];

    echo '<table>';
    foreach ($arr as $row) {
        echo '<tr>';
        foreach ($row as $key => $cell) {
            if ($key === 'salary') {
                $cell .= ' dollars';
            } elseif ($key === 'age') {
                $cell .= ' years';
            }
            echo "<td>$cell</td>";         
        }
        echo '</tr>';
    }
    echo '</table>';

// Генерация HTML таблицы с помощью двух вложенных циклов
    echo '<h3>Генерация HTML таблицы с помощью двух вложенных циклов</h3>';

    $products = [
		[
			'name'   => 'product1',      // Номер 1
			'price'  => 100,
			'amount' => 5,
		],
		[
			'name'   => 'product2',
			'price'  => 200,
			'amount' => 6,
		],
		[
			'name'   => 'product3',
			'price'  => 300,
			'amount' => 7,
		],
	];

    echo '<table>';
    foreach ($products as $row) {
        echo '<tr>';
        foreach ($row as $key => $cell) {
            if ($key === 'price') {
                $cell .= ' dollars';
            }
            if ($key === 'amount') {
                $cell .= ' pieces';
            }
            echo "<td>$cell</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    ?>

<!-- Вставка PHP кода в HTML -->   
    <h3>Вставка PHP кода в HTML</h3>

	<p><?php echo "Текущее время: " . date("H:i:s", time()); ?></p>

<!-- Короткая команда echo -->
	<h3>Короткая команда echo</h3>

	<p><?= date('w'); ?></p>

<!-- Вставка PHP переменной в HTML -->
	<h3>Вставка PHP переменной в HTML</h3>

	<?php
	$str1 = 'text1';
	$str2 = 'text2';
	$str3 = 'text3';
	?>
		
	<p><?= $str1 ?></p>
	<p><?= $str2 ?></p>
	<p><?= $str3 ?></p>

<!-- Вставка элементов массива в HTML код -->
	<h3>Вставка элементов массива в HTML код</h3>

    <?php $arr = ['a' => 1, 'b' => 2, 'c' => 3]; ?>

    <p><?= $arr['a'] ?></p>
    <p><?= $arr['b'] ?></p>
    <p><?= $arr['c'] ?></p>

<!-- Условия и разрыв PHP кода -->
	<h3>Условия и разрыв PHP кода</h3>

    <?php
	$show = true;
    ?>
    <?php if ($show):?>  

    <div>
	    <p>text1</p>
	    <p>text2</p>
	    <p>text3</p>
    </div>

    <?php endif; ?> 

<!-- Блок else в условиях для разрыва PHP кода -->
	<h3>Блок else в условиях для разрыва PHP кода</h3>

    <?php
	$show = true;
    ?>

    <?php if ($show): ?>
        <div>
	        <p>text+</p>
	        <p>text+</p>
	        <p>text+</p>
        </div>
    <?php else: ?>
        <div>
	        <p>text-</p>
	        <p>text-</p>
	        <p>text-</p>
        </div>
    <?php endif; ?>

<!-- Блок else в условиях для разрыва PHP кода -->
	<h3>Блок else в условиях для разрыва PHP кода</h3>

    <?php
	$test = 2;
    ?>

    <?php if ($test == 1): ?>
        <div>
	        <p>text1</p>
	        <p>text1</p>
	        <p>text1</p>
        </div>
    <?php elseif ($test == 2): ?>
        <div>
	        <p>text2</p>
	        <p>text2</p>
	        <p>text2</p>
        </div>
    <?php else: ?>
        <div>
	        <p>text-</p>
	        <p>text-</p>
	        <p>text-</p>
        </div>
    <?php endif ?>

<!-- Блок else в условиях для разрыва PHP кода -->
	<h3>Блок else в условиях для разрыва PHP кода</h3>
    
    <ul>
    <?php for ($i = 1; $i <= 5; $i++): ?>
	    <li><?= $i ?></li>
    <?php endfor; ?>
    </ul>

<!-- Циклы и вставка элементов массива в разрыв PHP кода -->
	<h3>Циклы и вставка элементов массива в разрыв PHP кода</h3>

    <?php
	$arr = ['user1', 'user2', 'user3'];  // Номер 1
    ?>

    <?php foreach ($arr as $elem): ?>     
        <div>
            <h2><?= $elem ?></h2>
            <p>text</p>
        </div>
    <?php endforeach; ?>


<?php
    $arr = [                          // Номер 2
		[
			'name' => 'user1',
			'age'  => 30,
		],
		[
			'name' => 'user2',
			'age'  => 31,
		],
		[
			'name' => 'user3',
			'age'  => 32,
		],
	];
?>

<?php foreach ($arr as $subarr): ?>
    <div>
        <?php foreach ($subarr as $key => $elem): ?>
            <p><?= $key . ": " . $elem ?></p>
        <?php endforeach ?>   
    </div>   
<?php endforeach ?>

<br>


























































































    











        




    







