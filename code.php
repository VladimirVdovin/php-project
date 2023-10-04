<?php
	echo '<h3>Переменные</h3>';
	$num = 123;
	echo $num . '<br>';
    
    $a = 10;
    echo $a . '<br>';
    $a = 20;
    echo $a . '<br>';

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

    echo '<h3>Дроби и отрицательные числа</h3>';

    $a = 1.5;
    $b = 0.75;
    echo $a + $b . '<br>';

    $a = -100;
    echo $a . '<br>';

    $a = 200;
    echo -$a . '<br>';

    echo '<h3>Остаток от деления и возведение в степень</h3>';

    $a = 10;
    $b = 3;
    echo $a % $b . '<br>';

    echo 2 ** 10 . '<br>';

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

    echo '<h3>Логические значения, null</h3>';
    $isTrue = true;
    echo $isTrue  . '<br>';
    $isFalse = false;
    echo $isFalse  . '<br>';

    $test = null;
    var_dump($test)  . '<br>';
    var_dump($unknown)  . '<br>';

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
















    
































































































    








?>