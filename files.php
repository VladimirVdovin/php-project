<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>php project</title>
	</head>
	<body>

		<?php
			error_reporting(E_ALL);
			ini_set('display_errors', 'on');
			mb_internal_encoding('UTF-8');
			
			include 'navbar.php';

		?>


<!-- ------- Глава 14 - Файловая система ---------->


<!-- Чтение файлов в PHP -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Чтение файлов в PHP</h3>

    <?php
        $content1 = file_get_contents('1.txt');
        $content2 = file_get_contents('2.txt');

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
        $content = file_get_contents('1.txt');
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


<!-- АПереименовывание файлов в PHP -->
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
            $size = round(filesize("picture.jpg") / (1024 * 1024), 2);
            echo "Размер файла code.php: $size мегабайта<br>";
        ?>

        <!-- <?php                                           // Номер 4
            $size = round(filesize("film.mkv") / (1024 * 1024 *1024), 2);
            echo "Размер файла code.php: $size гигабайта<br>";
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



























       



    
    






   




	</body>
</html>