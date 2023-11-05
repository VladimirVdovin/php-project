<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>files</title>
        <link rel="stylesheet" href="public/css/style.css">
	</head>
	<body style="text-align: center;">
        <header>
		    <?php include 'includes/header.php' ?>
        </header> 

        <aside>
			<?php include 'includes/slidebar.php'; ?>
		</aside>


<!-- ------- Глава 14 - Файловая система ---------->


<!-- Чтение файлов в PHP -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Чтение файлов в PHP</h3>

    <?php
        $content1 = intval(file_get_contents('1.txt'));
        $content2 = intval(file_get_contents('2.txt'));

	    echo "Сумма чисел из файлов 1.txt и 2.txt равна " . 
        ($content1 + $content2);
    ?>
    </div>


<!-- Запись файлов в PHP -->
    <div style="text-align: center;">
    <h3>Запись файлов в PHP</h3>

    <?php
        $arr_for_sum = [1, 2, 4, 5, 6, 7, 8, 9, 10];
        $sum = array_sum($arr_for_sum);
        file_put_contents("sum.txt", $sum);

        $content = file_get_contents('sum.txt');
        echo "Сумма чисел массива записана в файл sum.txt и прочитана из файла : " .
        $content;
    ?>
     </div>


<!-- Комбинация операций чтения и записи файла -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Комбинация операций чтения и записи файла</h3>

    <?php
        $content = intval(file_get_contents('1.txt'));
        file_put_contents('1.txt', $content ** 2);
        echo "Число из файла 1.txt, возведенное в квадрат - " 
        . file_get_contents('1.txt');

    ?>
    <br>

    <?php
        $content = file_get_contents('count.txt');
        $content += 1;
        file_put_contents('count.txt', $content);
        echo "Счетчик обновлений с помощью txt файла - " 
        . file_get_contents('count.txt');
    ?>
</div>


<!-- Относительные пути в PHP -->
    <div style="Gainsboro; text-align: center;">
    <h3>Относительные пути в PHP</h3>

    <?php                                              // Номер 1
        echo file_get_contents('dir1/dir2/test.txt');
    ?>   

    <!-- <?php                                               // Номер 2
        echo file_get_contents('../dir1/dir2/test.txt');
    ?>   

    <?php                                               // Номер 3
        echo file_get_contents('../../dir/test.txt');
    ?>   

    <?php                                               // Номер 4
        echo file_get_contents('../../../dir1/dir2/dir3/test.txt');
    ?>    -->


<!-- Абсолютные пути к папке и файлу скрипта -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Абсолютные пути к папке и файлу скрипта</h3>


    <?php                                              
        $path = $_SERVER['DOCUMENT_ROOT'];
        echo file_get_contents($path . '/dir1/dir2/test.txt');
    ?>   

    <!-- <?php                                                  // Номер 1
        echo file_get_contents(__FILE__ . '../../dir1/dir2/test.txt')
    ?>   

    <?php                                                  // Номер 2                                            
        echo file_get_contents(__FILE__. '../../../dir1/dir2/dir3/test.txt');
    ?>  -->

    </div>


<!-- Переименовывание файлов в PHP -->
    <div style="text-align: center;">
    <h3>Переименовывание файлов в PHP</h3>

        <?php
        if (file_exists('new.txt')) {
            rename('new.txt', 'old.txt');
            echo "Файл new.txt переименован в old.txt";
        } else {
            rename('old.txt', 'new.txt');
            echo "Файл old.txt переименован в new.txt";
        }
        ?>

    </div>


<!-- Перемещение файлов в PHP -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Перемещение файлов в PHP</h3>

    <?php                                       // Номер 1
        if (file_exists('file.txt')) {                   
            rename('file.txt', 'dir1/file.txt');
            echo "Файл file.txt перемещен в папку dir1";
        } else {
            rename('dir1/file.txt', 'file.txt');
            echo "Файл file.txt перемещен из папку dir1 в корневую папку сайта";
        }
    ?> 
    
    <br>

    <?php                                       // Номер 2 
        if (file_exists('dir1/file1.txt')) {
            rename('dir1/file1.txt', 'dir1/dir2/file1.txt');
            echo "Файл file.txt перемещен из папки dir1 в папку dir1/dir2/";
        } else {
            rename('dir1/dir2/file1.txt', 'dir1/file1.txt');
            echo "Файл file.txt перемещен из папки dir1/dir2/file1.txt в папку dir1/file1.txt";
        }
    ?>

    </div>


<!-- Перемещение файлов в PHP -->
    <div style="text-align: center;">
    <h3>Перемещение файлов в PHP</h3>

    <?php 
        echo "Файл sum.txt скопирован в dir1 в пяти копиях<br>";
        if (file_exists("sum.txt") and !file_exists("dir1/sum1.txt")) {
            for ($i=1; $i<=5; $i++) {
                copy("sum.txt", "dir1/sum" . $i . ".txt");
            }
        }
    ?> 

    </div>


<!-- Удаление файлов в PHP -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Удаление файлов в PHP</h3>

    <?php 
        echo "Удаляем файлы del1.txt, del2.txt, del3.txt. При обновлении
            страницы - создаем заново<br><br>";
        $arr = ['del1.txt', 'del2.txt', 'del3.txt'];
        if (file_exists("del1.txt")) {
            foreach ($arr as $file) {
                unlink($file);
                echo "$file удален ";
            }   
        } else {
            foreach ($arr as $file) {
                file_put_contents($file, 'Новый файл');
                echo "$file создан ";
            }
        }
    ?> 
    </div>


<!-- Определение размера файлов -->
    <div style="text-align: center;">
    <h3>Определение размера файлов</h3>

        <?php                                           // Номер 1
            $size = filesize("test1.php");
            echo "Размер файла test1.php: $size байт<br>";
        ?>
        
        <?php                                           // Номер 2
            $size = round(filesize("code.php") / 1024);
            echo "Размер файла code.php: $size килобайт<br>";
        ?>

        <?php                                           // Номер 3
            $size = round(filesize("public\img\picture.jpg") / (1024 * 1024), 2);
            echo "Размер файла picture.jpg: $size мегабайта<br>";
        ?>

        <!-- <?php                                           // Номер 4
            // $size = round(filesize("film.mkv") / (1024 * 1024 *1024), 2);
            // echo "Размер файла code.php: $size гигабайта<br>";
        ?> -->

    </div>


<!-- Проверка существования файлов -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Проверка существования файлов</h3>

    <?php                                       // Номер 1
        if (file_exists('new_file.txt')) {                   
            echo "Файл new_file.txt существует<br>";
        }
    ?> 


    <?php                                       // Номер 2 
        if (!file_exists('new_file.txt')) {
            file_put_contents('new_file.txt', 'Создан новый файл');
            echo "Файл new_file.txt создан<br>";
        } else {
            echo "Файл new_file.txt существует<br>";
        }
    ?>

    <?php                                       // Номер 3
        if (file_exists('message.txt')) {
            $content = file_get_contents('message.txt');
            echo "Файл message.txt существует и вот его содержание: <br> 
            $content";
        }
    ?>
    </div>


<!-- Создание папок в PHP -->
    <div style="text-align: center;">
    <h3>Создание папок в PHP</h3>
        
    <?php                                           // Номер 1
        if (!is_dir('dir')) {
            mkdir('dir'); 
        }  
        echo 'Папка dir создана<br>';                    
    ?>

    <?php                                   // Номер 2
        if (!is_dir('dir/1'))   {
            $arr = ["1", "2", "3"];           
            foreach ($arr as $elem) {
                mkdir('dir/' . $elem);
            }                              
        }
        echo 'Папкb c именами из массива ["1", "2", "3"] созданы в папке dir<br>';
    ?>


    <?php                                   // Номер 3
        if (!is_dir('test'))   {
            $arr = ["1.txt", "2.txt", "3.txt"]; 
            mkdir('test/');          
            foreach ($arr as $elem) {
                file_put_contents($elem, '');
            }                              
        }
        echo 'Файлы 1.txt, 2.txt, 3.txt созданы в папке test';
    ?>

<!-- Удаление папок в PHP -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Удаление папок в PHP</h3>

    <?php
        if (is_dir('test')) {
            rmdir('test');
            echo "Папка test удалена";
        } 
    ?>
    </div>


<!-- Переименование папок в PHP -->
    <div style="text-align: center;">
    <h3>Переименование папок в PHP</h3>

    <?php
        
        if (is_dir('dir2')) {
            rename('dir2', 'test2');
            echo "Папка dir переименована в test2";
        } elseif (is_dir('test2')) {
            rename('test2', 'dir2');
            echo "Папка test2 переименована обратно в dir2";
        } else {
            mkdir('dir2');
        }
	    
    ?>
    </div>


<!-- Переименование папок в PHP -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Переименование папок в PHP</h3>

    <?php
        if (is_dir('dir3')) {
            rename('dir3', 'dir/dir3');
            echo "Папка dir3 перенесана в папку dir";
        } elseif (is_dir('dir/dir3')) {
            rename('dir/dir3', 'dir3');
            echo "Папка test3 переименована обратно в корневой каталог проекта";
        } 
    ?>
    </div>


<!-- Чтение содержимого папки -->
    <div style="text-align: center;">
    <h3>Чтение содержимого папки</h3>

    <?php                                 // Номер 1
        echo "Содержимое папки dir:<br>";
        $dir = scandir("dir");
        $files = array_diff($dir, ['..', '.']);
        foreach ($files as $elem) {
            echo $elem . '<br>'; 
        }
    ?>


    <?php                                 // Номер 2
        echo "Содержимое текстовых файлов папки dir:<br>";
        $dir = scandir("dir");
        $files = array_diff($dir, ['..', '.']);
        foreach ($files as $elem) {
            if (file_exists('dir/' . $elem) && is_file('dir/' . $elem)) {
                echo file_get_contents('dir/' . $elem) . "<br>";
            }
        }
    ?>

    <?php                                              // Номер 3
        $dir = scandir("dir");
        $files = array_diff($dir, ['..', '.']);
        foreach ($files as $elem) {
            if (file_exists('dir/' . $elem) && is_file('dir/' . $elem)) {
                $content4 = file_get_contents('dir/' . $elem);
                $content4 .= '!';
                file_put_contents('dir/' . $elem, $content4);
            }
        }
    ?>
     </div>


<!-- Отличаем папку от файлаи -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Отличаем папку от файла</h3>

    
    <?php                                   // Номер 1
        if (is_dir("dir")) 
            echo "dir - это папка";
    ?>
    
    <br>
    
    <?php                                   // Номер 2
        if (is_file("index.php")) 
            echo "index.php - это файл";
    ?>

    </div>


<!-- Разбираем содержимое папки -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Разбираем содержимое папки</h3>

    <   <?php                                         // Номер 1
        echo "Список подпапок папки dir:<br>";
        $dir = array_diff(scandir('dir'), ['..', '.']);
        foreach ($dir as $subdir) {
            if (is_dir('dir/' . $subdir)) {
                echo $subdir . '<br>';
            }
        }
    ?>


    <?php                                         // Номер 2
        echo "Список файлов в папке dir:<br>";
        $dir = array_diff(scandir('dir'), ['..', '.']);
        foreach ($dir as $file) {
            if (is_file('dir/' . $file)) {
                echo $file . '<br>';
            }
        }
    ?>

    <?php                                         // Номер 3
        echo "Добавляем в конец каждого файла папки dir текущее время:<br>";
        $dir = array_diff(scandir('dir'), ['..', '.']);
        foreach ($dir as $file) {
            $path = 'dir/' . $file;
            if (is_file($path)) {
                $content6 = file_get_contents($path);
                $content6 .= date('H:i:s', time());
                echo file_get_contents($path, $content6) . "<br>";
            }
        }
    ?>
    </div>


<!-- Вставка файлов-->
    <div style="text-align: center;">
    <h3>Вставка файлов</h3>


    <?php                                         // Номер 1
        include('php_files_for_exec\file1.php');
        echo '<br>';
        include('php_files_for_exec\file2.php');
        echo '<br>';
        include('php_files_for_exec\file3.php');
        echo '<br>';
        include('php_files_for_exec\file4.php');
    ?>
    </div>


<!-- Запись вставки в переменную -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Запись вставки в переменную</h3>

        <?php 
            
            function getWeekday($name) {
                ob_start();
                    include($name);
                return ob_get_clean();
            }

            $res_getWeekday = getWeekday("dir\weekdays\weekdays.php");
            echo $res_getWeekday;
        ?>

    
<!-- Подключение файлов -->
    <div style="text-align: center;">
    <h3>Подключение файлов</h3>

    <?php 
        require 'includes\functions.php';

        echo "Подключенная функция calcMinusOne: " . calcMinusOne(10) . '<br>';
        echo "Подключенная функция calcPlusFive: " . calcPlusFive(10) . '<br>';

    ?>

    Вставка из файла из предудущего задания 
    <br>   
    <?php echo $res_getWeekday; ?>


<!-- Однократное подключение файлов -->
<div style="background-color: Gainsboro; text-align: center;">
    <h3>Однократное подключение файлов</h3>

    <?php 
    
        require_once 'includes\new_functions.php';
        print_r(calsMinusPlus([1,2,3,4,5]));

    ?>

<!-- Запись подключения в переменную -->
    <div style="text-align: center;">
    <h3>Запись подключения в переменную</h3>
    
    <?php 
        $week = require_once "dir\weekdays\months.php";
        print_r($week);
    ?>        
    
    </div>















    <br><br>

    <footer>
		<?php include 'includes/footer.php'; ?>
	</footer>



	</body>
</html>