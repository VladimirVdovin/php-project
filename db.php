<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>files</title>
        <link rel="stylesheet" href="public/css/style.css">
	</head>
	<body style="text-align: center;">
        <header>
		    <?php include 'includes/header.php'; ?>
        </header> 

        <aside>
            <?php $CurrentPage = 'bd.php'; ?>
			<?php include 'includes/slidebar.php'; ?>
		</aside>

        <main>

        <br>



         <!-- ----- Первая 15 - Базы данных ------  -->


<!-- Подготовительные манипуляции для работы с SQL -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Подготовительные манипуляции для работы с SQL</h3>

    <?php

        $host = 'localhost'; 
        $user = 'root';     
        $pass = '';          
        $name = 'mydb';      

        $link = mysqli_connect($host, $user, $pass, $name);
        mysqli_query($link, "SET NAMES 'utf8'");

        if (!$link) {
            die(mysqli_connect_error());
        } else {
            echo "Подключние к mydb прошло успешно";
        }
    ?>
    </div>


<!-- Приведение таблицы к исходном состоянию -->
    <div style="text-align: center;">
    <h3>Исходная таблица</h3>

    
    <!-- функция удаляет все данные из таблицы users -->
    <!-- и заполняет ее исходными значения (из $arr) -->
    <?php 
        function getDefaultTable($link) {

            mysqli_query($link, "DELETE FROM users");
            
            $arr = [['user1', 23, 400],   // массив с исходными данными
            ['user2', 25, 500],
            ['user3', 23, 500],
            ['user4', 30, 900],
            ['user5', 27, 500],
            ['user6', 28, 900],
            ];   
        
            foreach ($arr as $row) {
                
                $query = "INSERT INTO users (name, age, salary) 
                            VALUES ('$row[0]', $row[1], $row[2])";
                mysqli_query($link, $query);
            }
        }
    ?>

    <?php getDefaultTable($link); ?> 


    <!-- функция рисует таблицу и заполняет данными -->
    <!-- если $query не указан, то берет все данные из таблицы users -->
    <!-- если $query указан, то заполняет согласно запросу из $query -->
    <?php           
    function showTableUsers($link, $query = null) {
        if ($query == null) {
            $query = mysqli_query($link, "SELECT * FROM users");
        } else {
            $query = mysqli_query($link, $query);
        }
        if ($query === false) {
            die(mysqli_error($link));
        }
        for ($data=[]; $row=mysqli_fetch_assoc($query); $data[]=$row); 
        ?>
        <table border="2" style="width: 50%; margin: 0 auto;">
        <?php $keys = array_keys($data[0]) ?>     
            <tr>
                <?php  foreach ($keys as $elem): ?> 
                    <th><?php echo $elem ?></th>
                <?php endforeach ?>
            </tr>
            <?php foreach ($data as $line): ?>
            <tr>
                <?php foreach ($line as $elem): ?> 
                <td>
                    <?php echo $elem . ' '; ?>
                </td> 
                <?php endforeach; ?>
                </tr>   
            <?php endforeach; ?>
        </table>
    <?php } ?>
    
    <?php showTableUsers($link); ?>

    </div>


<!-- Отправка запросов к базе данных -->
    <div style="Gainsboro; text-align: center;">
    <h3>Отправка запросов к базе данных</h3>


    <?php
        $query = "SELECT * FROM users";
        $res = mysqli_query($link, $query) or die(mysqli_error($link));
        print_r($res);
    ?>
    </div>


<!-- Получение результата при SQL запросе -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Получение результата при SQL запросе</h3>


    <?php
        $row = mysqli_fetch_assoc($res);
        print_r($row);
        echo "<br>";
        $row1 = mysqli_fetch_assoc($res);
        print_r($row1);
        echo "<br>";
        $row2 = mysqli_fetch_assoc($res);
        print_r($row2);
        echo "<br>";
        $row3 = mysqli_fetch_assoc($res);
        print_r($row3);
        echo "<br>";
        $row4 = mysqli_fetch_assoc($res);
        print_r($row4);
        echo "<br>";
        $row5 = mysqli_fetch_assoc($res);
        print_r($row5);
        echo "<br>";
        $row6 = mysqli_fetch_assoc($res);
        print_r($row6);
    ?>
    </div>

<!-- Формирование массива в цикле при SQL запросе -->
<div style="text-align: center;">
    <h3>Формирование массива в цикле при SQL запросе</h3>

    <?php                                               // номер 1
        $res = mysqli_query($link, 'SELECT * FROM users');                                   // номер 1
        for ($data=[]; $row=mysqli_fetch_assoc($res); $data[]=$row);
        var_dump($data);
    ?>

    <br><br>
  
    <?php                                          // номер 2
        print_r($data[0]);    
    ?>

    <br><br>

    <?php                                          // номер 3
        echo $data[1]['name'] . ' ' . $data[1]['age'];    
    ?>

    <br><br>

    <?php                                          // номер 4
        echo $data[2]['name'] . ' ' . $data[2]['age'] 
             . ' ' . $data[2]['salary'];    
    ?>

    </div>


<!-- Выборка записей при SQL запросе к базе -->
<div style="background-color: Gainsboro; text-align: center;">
    <h3>Выборка записей при SQL запросе к базе</h3>

    <?php
        $query = "SELECT * FROM users WHERE id=3"; // номер 1
        $row = mysqli_query($link, $query);
        echo "<b>Юзер с id, равным 3:</b><br> ";
        print_r(mysqli_fetch_assoc($row));
    ?>
    <br><br>
    <?php
        $query = "SELECT * FROM users WHERE salary=900"; // номер 2
        $res = mysqli_query($link, $query);
        echo "<b>Юзер с зарплатой 900:</b><br> ";
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            print_r($data);
    ?>
    <br><br>
    <?php
        $query = "SELECT * FROM users WHERE age=23"; // номер 3
        $res = mysqli_query($link, $query);
        echo "<b>Юзеров в возрасте 23 года:</b><br> ";
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            print_r($data);
    ?>
    <br><br>
    <?php
        $query = "SELECT * FROM users WHERE salary>400"; // номер 4
        $res = mysqli_query($link, $query);
        echo "<b>Юзер с зарплатой более 400:</b><br> ";
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            print_r($data);
    ?>
    <br><br>
    <?php
        $query = "SELECT * FROM users WHERE salary>=500"; // номер 5
        $res = mysqli_query($link, $query);
        echo "<b>Юзер с зарплатой равной или большей 500:</b><br> ";
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            print_r($data);
    ?>
    <br><br>
    <?php
        $query = "SELECT * FROM users WHERE salary!=500"; // номер 6
        $res = mysqli_query($link, $query);
        echo "<b>Юзер с зарплатой НЕ равной 500:</b><br> ";
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            print_r($data);
    ?>
    <br><br>
    <?php
        $query = "SELECT * FROM users WHERE salary<=500"; // номер 7
        $res = mysqli_query($link, $query);
        echo "<b>Юзер с зарплатой равной или меньшей 500:</b><br> ";
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            print_r($data);
    ?>
    </div>


<!-- Логические операции в SQL -->
    <div id="1" style="text-align: center;">
    <h3>Логические операции в SQL</h3>

<?php 
    function getQueryResult($query, $link) {
        $res = mysqli_query($link, $query);
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
        return $data; 
    }    
?>
    
    <?php                                        // Номер 1
        $query = "SELECT * FROM users 
        WHERE age>25 and age<=28"; 
        echo "<b>Возраст от 25 (не включительно) 
            до 28 лет (включительно):</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 2
        $query = "SELECT * FROM users WHERE name='user1'"; 
        echo "<b>User1:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 3
        $query = "SELECT * FROM users WHERE name='user1' OR name='user2'"; 
        echo "<b>User1 и user2:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 4
        $query = "SELECT * FROM users WHERE name!='user3'"; 
        echo "<b>Кроме user3:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 5
        $query = "SELECT * FROM users WHERE 
            age=27 or
            salary=1000"; 
        echo "<b>Возраст 27 лет или зарплата 1000:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 6
        $query = "SELECT * FROM users WHERE 
            age=27 or
            salary!=400"; 
        echo "<b>Возраст 27 лет или зарплат не 400:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 7
        $query = "SELECT * FROM users WHERE 
            (age>=23 and age<27) OR salary=1000"; 
        echo "<b>Возраст от 23 лет (включительно) до 27 лет 
            (не включительно) или зарплата 1000:</b><br>";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php                                        // Номер 8
        $query = "SELECT * FROM users WHERE 
            (age>=23 and age<27) OR
            (salary>400 and salary<1000)"; 
        echo "<b>Возраст от 23 лет до 27 лет или зарплата от 400 
            до 1000:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    </div>   


<!-- Поля выборки при SQL запросе -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Поля выборки при SQL запросе</h3>

    <?php
        $query = "SELECT name, age, salary FROM users";   // Номер 1
        echo "<b>Имя, возраст и зарплату для каждого работника:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    <br><br>
    <?php
        $query = "SELECT name FROM users";                 // Номер 2
        echo "<b>Имена всех работников:</b><br> ";
        print_r(getQueryResult($query, $link));
    ?>
    </div>


<!-- Вставка записей через SQL запрос -->
    <div style="text-align: center;">
    <h3>Вставка записей через SQL запрос</h3>

    <?php
        $check = mysqli_query($link, "SELECT name FROM users WHERE name='user7'");
        if ($check->num_rows == 0) {
            $query = "INSERT INTO users (name, 
            age, salary) VALUES ('user7', 26, 300)"; 
            mysqli_query($link, $query) or die(msqli_error($link));
        }
        echo "<b>User7 добавлен в таблицу:</b> ";
        print_r(mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE name='user7'")));
    ?>

    <?php showTableUsers($link); ?>

    </div>

<!-- Вставка записей при отсутствующих столбцах через SQL запрос -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Вставка записей при отсутствующих столбцах через SQL запрос</h3>
        
        <?php
            $check = mysqli_query($link, "SELECT * FROM users WHERE name='xxxx'");
            if ($check->num_rows == 0) {
                $query = "INSERT INTO users (name) VALUES ('xxxx')";
                mysqli_query($link, $query) or die(msqli_error($link));
            } 
            $check = mysqli_query($link, 'SELECT * FROM users WHERE name="xxxx"');
            echo "Новая запись без полей age и salary: <br>";
            print_r(mysqli_fetch_assoc($check));
        ?>
    </div>
    

<!-- Обновление записей через SQL запрос -->
    <div style="text-align: center;">
    <h3>Обновление записей через SQL запрос</h3>
        
        <?php                                                    // Номер 2
            $query = "UPDATE users SET age=35 WHERE id=4"; 
            mysqli_query($link, $query);
            $query = "SELECT * FROM users WHERE id=4"; 
            $res = mysqli_query($link, $query);
            echo "<b>Возраст у id=4 поменяли на 35:</b><br> ";
            print_r(mysqli_fetch_assoc($res));
        ?>
        <br><br>
        <?php                                                    // Номер 3
            $query = "UPDATE users SET salary=700 WHERE salary=500"; 
            mysqli_query($link, $query);
            $query = "SELECT * FROM users WHERE salary=700";
            $res = mysqli_query($link, $query);
            echo "<b>Всем, у salary=500 поменяли на 700:</b><br>";
            for($data=[]; $row=mysqli_fetch_assoc($res);$data[]=$row);
                print_r($data);
        ?>
        <br><br>
        <?php                                                    // Номер 4
            $query = "UPDATE users SET age=23 WHERE (id>2 and id<=5)"; 
            mysqli_query($link, $query);
            $query = "SELECT * FROM users WHERE age=23 and (id>2 and id<=5)";
            $res = mysqli_query($link, $query);
            echo "<b>Всем, у кого id от 2 до 5 поменяли возраст на 23:</b><br>";
            for($data=[]; $row=mysqli_fetch_assoc($res);$data[]=$row);
            print_r($data);
        ?>
    </div>


<!-- Удаление записей через SQL запрос -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Удаление записей через SQL запрос</h3>

    <?php                                             // номер 1
        echo "Удаление всех записей с нечетными id:<br> ";
        $query = mysqli_query($link, "SELECT * FROM users");
        for ($data=[]; $row=mysqli_fetch_assoc($query); $data[]=$row);
        for ($i=0; $i<count($data); $i++) {
            if ($data[$i]['id'] % 2 != 0) {
                $id = $data[$i]['id'];
                $query = "DELETE FROM users WHERE id=$id";
                mysqli_query($link, $query);
            }
        }
    ?>

    <?php showTableUsers($link) ?>  
    <?php getDefaultTable($link) ?> 
    <br>


    <?php                                              // номер 2
        echo "Удаление всех записей с возрастом 23:<br> ";
        $query = "DELETE FROM users WHERE age=23";
        mysqli_query($link, $query);
    ?>

    <?php showTableUsers($link) ?>
    <?php getDefaultTable($link) ?>
    <br>


    <?php                                              // номер 3
        echo "Удаление всех записей:<br> ";
        $query = "DELETE FROM users";
        mysqli_query($link, $query);
    ?>

    <?php showTableUsers($link) ?>
    <?php getDefaultTable($link) ?>
            
    </div>

<!-- Обновление записей через SQL запрос -->
    <div style="text-align: center;">
    <h3>Обновление записей через SQL запрос</h3>

    <?php                                              // номер 1
        echo "<b>Все юзеры по возрастанию зарплаты:<br></b> ";
        $query = "SELECT * FROM users ORDER BY salary";
        showTableUsers($link, $query);
    ?>   

    <?php                                              // номер 2
        echo "<b>Все юзеры по убыванию зарплаты:<br></b> ";
        $query = "SELECT * FROM users ORDER BY salary DESC";
        showTableUsers($link, $query);
    ?> 

    <?php                                              // номер 3
        echo "<b>Все юзеры по имени по убыванию:<br></b> ";
        $query = "SELECT * FROM users ORDER BY name DESC";
        showTableUsers($link, $query);
    ?> 

    <?php                                              // номер 4
        echo "<b>Все юзеры salary=500 по возрасту:<br></b> ";
        $query = "SELECT * FROM users WHERE salary=500 ORDER BY age";
        showTableUsers($link, $query);
    ?> 

    <?php                                              // номер 5
        echo "<b>Все юзеры по возрасту и по зарплате:<br></b> ";
        $query = "SELECT * FROM users ORDER BY age, salary";
        showTableUsers($link, $query);
    ?> 
     </div>


<!-- Ограничение количества записей в SQL -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Ограничение количества записей в SQL</h3>

    <?php                                              // номер 1
        echo "<b>Первые 4 юзера:<br></b> ";
        $query = "SELECT * FROM users LIMIT 4";
        showTableUsers($link, $query);
    ?> 

    <?php                                              // номер 2
        echo "<b>Cо второго юзера, 3 штуки:<br></b> ";
        $query = "SELECT * FROM users LIMIT 1,3";
        showTableUsers($link, $query);
    ?> 

    <?php                                              // номер 2
        echo "<b>По возрастанию salary - три первых записи:<br></b> ";
        $query = "SELECT * FROM users ORDER BY salary LIMIT 3";
        showTableUsers($link, $query);
    ?> 

    <?php                                              // номер 3
        echo "<b>По убыванию salary - три первых записи:<br></b> ";
        $query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";
        showTableUsers($link, $query);
    ?> 
    </div>


<!-- Подсчет количества через SQL запрос -->
    <div style="text-align: center;">
    <h3>Подсчет количества через SQL запрос</h3>

    
    <?php                                           // номер 1
        $query = mysqli_query($link, 'SELECT COUNT(name) AS count 
                            FROM users WHERE salary=500');
        $count = mysqli_fetch_assoc($query);
        echo "<b>Количество юзеров salary=500</b>: " . 
        $count['count'] . "<br>";    
    ?> 
    <br>
    <?php                                           // номер 2
        $query = mysqli_query($link, 'SELECT COUNT(name) AS count 
                            FROM users WHERE salary=400 OR age=23');
        $count = mysqli_fetch_assoc($query);
        echo "<b>Количество юзеров salary=400 или age=23</b>: " . 
        $count['count'] . "<br>";    
    ?> 
    <br>
    <?php showTableUsers($link); ?> 
    </div>


<!-- Изучение продвинутых SQL запросов -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Изучение продвинутых SQL запросов</h3>


    <?php                                           // номер 1
        $query = mysqli_query($link, 
                            'SELECT ROUND(AVG(salary), 0) 
                            AS avg 
                            FROM users 
                            WHERE age=23');
        $count = mysqli_fetch_assoc($query);
        echo "<b>Средняя зарплата юзеров в 23 года</b>: " . 
        $count['avg'] . "<br>";    
    ?> 
    
    <?php                                           // номер 2
        $query = mysqli_query($link, 
                            'SELECT ROUND(AVG(age))
                            AS avg
                            FROM users 
                            WHERE salary>=500');
        $count = mysqli_fetch_assoc($query);
        echo "<b>Средний возраст юзеров с salary от 500</b>: " .
        $count['avg'] . "<br>";    
    ?>
    
    <?php                                           // номер 3
        $query = mysqli_query($link, 
                            'SELECT name
                            FROM users 
                            WHERE age IN (23, 28, 30)
                            AND salary IN (400, 900)');
        $res = mysqli_fetch_assoc($query);
        echo "<b>Список юзеров, у которыз salary IN (400, 900) 
                и age IN (23, 28, 30)</b>: " . 
        $res['name'] . "<br>";     
    ?>
 
    <?php                                           // номер 4
        $query = mysqli_query($link, 
                            'SELECT MIN(salary)
                            AS min
                            FROM users');
        $res = mysqli_fetch_assoc($query);
        echo "<b>Минимальная зарплата</b>: " . 
        $res["min"] . "<br>";     
    ?>

    <?php                                           // номер 5
        $query = mysqli_query($link, 
                            'SELECT MAX(salary)
                            AS max
                            FROM users');
        $res = mysqli_fetch_assoc($query);
        echo "<b>Минимальная зарплата</b>: " . 
        $res["max"] . "<br>";     
    ?>

    <?php                                           // номер 6
        $query = mysqli_query($link, 
                           "SELECT CONCAT('!!!', name, '!!!')
                            AS min
                            FROM users");
        $res = mysqli_fetch_assoc($query);
        echo "<b>Юзер с восклицательными знаками</b>: " . 
        $res["min"] . "<br>";     
    ?>

    </div>



             <!-- ----- Первая 16 - Организация БД ------  -->


 <!-- Связывание таблиц в базах данных -->
 <div>
    <h3>Связывание таблиц в базах данных</h3>

    
                                                    <!-- номер 1 -->
    <div style="display: flex; justify-content: center;"> 
        
        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Товары:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>название товара</li>
                <li>цена</li>
                <li>количество</li>
                <li>category_id (FOREIGN KEY (category_id))</li>
            </ul>
        </div>

        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Категории товаров:</b>
            <ul>
                <li>category_id (PRIMARY KEY)</li>
                <li>категория</li>
            </ul>
        </div>
    </div>

    <br>
                                                      <!-- номер 2 -->
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Реки:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>Название реки</li>
                <li>Длина реки</li>
                <li>Глебина реки</li>
                <li>sea_id (FOREIGN KEY (sea_id))</li>
            </ul>
        </div>

        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Моря:</b>
            <ul>
                <li>sea_id (PRIMARY KEY)</li>
                <li>Название моря</li>
                <li>Глубина моря моря</li>
                <li>Площадь</li>
            </ul>
        </div>
    </div>


    <br>
                                                      <!-- номер 3 -->
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Города:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>Название города</li>
                <li>Население</li>
                <li>Координаты</li>
                <li>country_id (FOREIGN KEY (country_id))</li>
            </ul>
        </div>

        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Страны:</b>
            <ul>
                <li>country_id (PRIMARY KEY)</li>
                <li>Названеи страны</li>
                <li>Население</li>
            </ul>
        </div>
    </div>
</div>



<!-- Получении данных из связанных таблиц -->
<div style="background-color: Gainsboro; text-align: center;">
    <h3>Получении данных из связанных таблиц</h3>

    <?php
        echo "<b>Таблица product</b>";
        showTableUsers($link, "SELECT * FROM product");
        echo "<br>";
        echo '<b>Таблица subcategory</b>';
        showTableUsers($link, "SELECT * FROM subcategory");
        echo "<br>";
    ?>

    <?php
        echo '<b>Сводная таблица: товары-категории</b>';
        $query = "SELECT product.name, subcategory.subcategory 
                FROM product
                LEFT JOIN subcategory 
                ON product.id_subcategory=subcategory.id";
       
        showTableUsers($link, $query);
    ?>
</div>



<!-- ПЦепочка связанных таблиц -->
    <div style="text-align: center;">
    <h3>Цепочка связанных таблиц</h3>


                        <!-- номер 1. Распишите структуру хранения -->
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Product:</b>
            <ul>
                <li>id_product (PRIMARY KEY)</li>
                <li>name</li>
                <li>price</li>
                <li>quanity</li>
                <li>id_subcatagory (<b>FOREIGN KEY -> Subcategory.id</b>)</li>
            </ul>
        </div>

        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Subcategory:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>subcategoty</li>
                <li>id_catagory (<b>FOREIGN KEY -> Category.id</b>)</li>
            </ul>
        </div>

        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Category:</b>
            <ul>
                <li>category_id (PRIMARY KEY)</li>
                <li>category</li>
            </ul>
        </div>
    </div>
    <br>

 
                        <!-- номер 2. Запрос для 3-х связанных таблиц-->
    <?php
        echo '<b>Сводная таблица: товары-субкатегории-категории</b>';
        $query = "SELECT product.name, subcategory.subcategory, category.category 
                FROM product
                LEFT JOIN subcategory 
                ON product.id_subcategory=subcategory.id
                LEFT JOIN category 
                ON subcategory.id_category =category.id";
            
        showTableUsers($link, $query);
    ?>
    <br>

                            <!-- номер 3. Запрос для 2-х связанных таблиц-->
    <?php
        echo '<b>Сводная таблица: субкатегории-категории</b>';
        $query = "SELECT subcategory.subcategory, category.category 
                FROM subcategory
                LEFT JOIN category 
                ON subcategory.id_category =category.id";
            
        showTableUsers($link, $query);
    ?>


<!-- Связывание через таблицу связи -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Связывание через таблицу связи</h3>

    
                        <!-- номер 1. Распишите структуру хранения -->
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Product:</b>
            <ul>
                <li>id_product (PRIMARY KEY)</li>
                <li>name</li>
                <li>price</li>
                <li>quanity</li>
                <li>id_subcatagory (FOREIGN KEY)</li>
            </ul>
        </div>

        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Таблица связи product_subcategory:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>id_product (<b>FOREIGN KEY -> Product.id_product</b>)</li>
                <li>id_subcategory (<b>FOREIGN KEY -> Subcategory.id)</b></li>
            </ul>
        </div>

        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Subcategory:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>subcategoty</li>
                <li>id_catagory (FOREIGN KEY)</li>
            </ul>
        </div>

 
    </div>
    <br>

                        <!-- номер 2. Запрос через таблицу связи -->
    <?php
        echo '<b>Сводная таблица: товары и несколько категорий<br></b>';
        $query = "SELECT product.name, subcategory.subcategory
                FROM product
                LEFT JOIN product_subcategory
                ON product.id_product=product_subcategory.id_product
                LEFT JOIN subcategory 
                ON product_subcategory.id_subcategory =subcategory.id";
            
        
        $res = mysqli_query($link, $query);
        for ($data=[]; $row=mysqli_fetch_assoc($res); $data[]=$row);
        // print_r($data);
        $arr = []; 
        foreach ($data as $elem) {
            $arr[$elem['name']][] = $elem["subcategory"];
        }
    ?>

                    <!-- номер 3. Список нескольких категорий для одного продукта -->
    <div style="display: flex; justify-content: center; width: 100%;">
    <ul style="float: left">
    <?php foreach ($arr as $name => $subcategory): ?>
        <li>
            <?php echo "$name: "?> 
            <?php foreach ($subcategory as $elem): ?> 
                <?php echo "$elem" ?> 
                <?php if (array_search($elem, $subcategory) != count($subcategory) - 1) {
                    echo ", "; 
                } ?>
            <?php endforeach ?>    
        </li>   
    <?php endforeach ?>  
    </ul>
    </div>
</div>
      
        
<!-- Родственные связи данных -->
    <div style="text-align: center;">
    <h3>Родственные связи данных</h3>    

                        <!-- номер 1. Распишите структуру хранения -->
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>family:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>user</li>
                <li>father (связь -> id)</li>
                <li>grandfather (связь -> id)</li>
                <li>great_grandfather (связть -> id)</li>
            </ul>
        </div>
    </div>

    <br>

    <b>Исходная таблица</b><br>
    <?php
        $query="SELECT * FROM family";
        showTableUsers($link, $query);
    ?>
    
    <br>
                            <!-- Номер 2. Категория с родительской категорией -->
    <b>Категория с родительской категорией</b><br>  
    <?php              
        $query="SELECT family.user, fathers.user AS fathers
                FROM family
                LEFT JOIN family AS fathers
                ON fathers.id=family.parents" ;
        showTableUsers($link, $query);
    ?>

    <br>
                            <!-- Номер 3. Категория с родителем и прародителем -->
    <b>Категория с родителем и прародителем</b><br>  
    <?php            
          
        $query="SELECT family.user, fathers.user AS fathers,
                        grandfathers.user AS grandfathers
                FROM family
                LEFT JOIN family AS fathers
                ON fathers.id=family.parents
                LEFT JOIN family AS grandfathers
                ON grandfathers.id=family.grandfather";
        showTableUsers($link, $query);
    ?>

    <br>
                            <!-- Номер 4. Категория с родителем и прародителем -->
    <b>Категория с родителем, прародителем и прапрародителем</b><br>  
    <?php            
          
        $query="SELECT family.user, fathers.user AS fathers,
                        grandfathers.user AS grandfathers,
                        great_grandfathers.user AS great_grandfathers
                FROM family
                LEFT JOIN family AS fathers
                ON fathers.id=family.parents
                LEFT JOIN family AS grandfathers
                ON grandfathers.id=family.grandfather
                LEFT JOIN family AS great_grandfathers
                ON great_grandfathers.id=family.great_grandfather";
        showTableUsers($link, $query);
    ?>



<!-- Несколько потомков в родственных связях -->
    <div style="background-color: Gainsboro; text-align: center;">
    <h3>Несколько потомков в родственных связях</h3>


                                <!-- номер 1. Распишите структуру хранения -->
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>family:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>user</li>
                <li>parents (father) (связь -> id)
                    несколько значнений = id </li>
            </ul>
        </div>
    </div>

   <br>
    
                                        <!-- Номер 2. Юзер с отцом и матерью -->
    <b>Таюлица user - parents</b><br>  
    <?php            
          
        // добавим второго родителя для user2, user3, user4
        $query = "INSERT INTO family (user, parents) VALUES 
                    ('user5', 2),
                    ('user6', 3),
                    ('user7', 4)";
        mysqli_query($link, $query);

        $query="SELECT family.user, parents.user AS parent
                FROM family
                LEFT JOIN family AS parents
                ON parents.id=family.parents";

        // выводим таблицу с новыми записями
    showTableUsers($link, "SELECT id, user, parents FROM family"); 

    $res = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data=[]; $row = mysqli_fetch_assoc($res); $data[] = $row);

    echo "<br>";

    $arr = [];
    foreach ($data as $elem) {
        if (!empty($elem['parent'])) {
            $arr[$elem['parent']][] = $elem['user'];
        }
    }

        // удалим добавленные ранее записи
    mysqli_query($link, "DELETE FROM family WHERE 
                            (user='user5') OR
                            (user='user6') OR
                            (user='user7')");
    ?>


        <!-- выводим список "потомок-родители" на экран -->
    <div style="display: flex; justify-content: center; width: 100%;">
    <ul style="float: left">
    <?php foreach ($arr as $user => $parent): ?>
        <li>
            <?php echo "Родители $user: "?> 
            <?php foreach ($parent as $elem): ?> 
                <?php echo "$elem" ?> 
                <?php if (array_search($elem, $parent) < count($subcategory)) {
                    echo ", "; 
                } ?>
            <?php endforeach ?>    
        </li>   
    <?php endforeach ?>  
    </ul>
    </div>
</div>


<!-- Практика на организацию баз данных-->
    <div style="text-align: center;">
    <h3>Практика на организацию баз данных</h3>

    
                        <!-- номер 1. Распишите структуру хранения: моря, реки и их притоки -->
    Cтруктура хранения: моря, реки и их притоки
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Реки:</b>
            <ul>
                <li>id_river (PRIMARY KEY)</li>
                <li>river_name</li>
                <li>id_приток (связь с id_river)</li>
                <li>id_sea (FOREIGN KEY -> sea_id)</li>
            </ul>
        </div>

        <div style="width: 25%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Моря:</b>
            <ul>
                <li>id (PRIMARY KEY)</li>
                <li>sea_name</li>
            </ul>
        </div> 
    </div>


                            <!-- номер 2. Распишите структуру хранения: пользователь, обмен сообщениями -->
    Структура хранения: пользователь, обмен сообщениями
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 35%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>User:</b>
            <ul>
                CREATE TABLE user 
                <li>id INT AUTO_INCREMENT PRIMARY KEY, </li>
                <li>username VARCHAR(32) NOT NULL,</li>
                <li>email VARCHAR(100) NOT NULL</li>
            </ul>
        </div>

        <div style="width: 35%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Message:</b>
            <ul>
                CREATE TABLE message
                <li>id INT AUTO_INCREMENT PRIMARY KEY,</li>
                <li>message NEXT NOT NULL,</li>
                <li>sender_id INT NOT NULL,</li>
                <li>recipient_id INT NOT NULL,</li>
                <li>FOREIGN KEY (sender_id) REFERENCES users (id),</li>
                <li>FOREIGN KEY (recipient_id) REFERENCES users (id),</li>
            </ul>
        </div> 
    </div>


                                <!-- номер 3. Футбольный сайт: даты игра, команды с игроками -->
    Футбольный сайт: даты игра, команды с игроками
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Game:</b>
            <ul>
                CREATE TABLE game
                <li><b>id</b> INT AUTO_INCREMENT PRIMARY KEY, </li>
                <li><b>game_title</b> VARCHAR(32) NOT NULL,</li>
                <li><b>date</b> TIMESTAMP DEFAULT CURRENT_TIMESTAMP,</li>
                <li><b>team1_id</b> INT NOT NULL</li>
                <li><b>team2_id</b> INT NOT NULL</li>
                <li>FOREIGN KEY (team1_id) REFERENCES team1 (id),</li>
                <li>FOREIGN KEY (team2_id) REFERENCES team2 (id)</li>
            </ul>
        </div>

        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Team1:</b>
            <ul>
                CREATE TABLE team1
                <li>id INT AUTO_INCREMENT PRIMARY KEY,</li>
                <li><b>player1</b> VARCHAR(32) NOT NULL,</li>
                <li><b>player2</b> VARCHAR(32) NOT NULL,</li>
                <li><b>player3</b> VARCHAR(32) NOT NULL</li>
            </ul>
        </div> 

        <div style="width: 30%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Team2:</b>
            <ul>
                CREATE TABLE team2
                <li><b>id</b> INT AUTO_INCREMENT PRIMARY KEY,</li>
                <li><b>player1</b> VARCHAR(32) NOT NULL,</li>
                <li><b>player2</b> VARCHAR(32) NOT NULL,</li>
                <li><b>player3</b> VARCHAR(32) NOT NULL</li>
            </ul>
        </div> 
    </div>


    Cтруктура хранения Форум: категории, темы, посты, авторы, сообщения
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>category:</b>
            <ul>
                <li>id_сategory (PrKey)</li>
                <li>category</li>
            </ul>
        </div>

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>topic:</b>
            <ul>
                <li>id_topic (PrKey)</li>
                <li><b>cat_id <br> (category.id_сategory)</b></li>
                <li>topic</li>
                
            </ul>
        </div> 

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>posts:</b>
            <ul>
                <li>id_post (PrKey)</li>
                <li><b>topik_id <br> (topic.d_topic)</b></li>
                <li>text</li>
                <li<b>autor_id <br> (user.id_user)</b></li>
            </ul>
        </div> 

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>user:</b>
            <ul>
                <li>id_user (PrKey)</li>
                <li>name</li>
                <li>email</li>
            </ul>
        </div> 

        <div style="width: 20%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>messages:</b>
            <ul>
                <li>id_Message (PrKey)</li>
                <li>text</li>
                <li><b>sender_id <br> (user.id_user)</b></li>
                <li><b>recipient_id <br> (user.id_user)</b></li>
            </ul>
        </div> 
    </div>


    Cтруктура хранения Соцсеть: юзер, друзья, стена, комментарии, сообщения
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>users:</b>
            <ul>
                <li>id (PrKey)</li>
                <li>name</li>
            </ul>
        </div>

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>friends:</b>
            <ul>
                <li>id (PrKey)</li>
                <li><b>friend_id <br> (users.id)</b></li>
    
                
            </ul>
        </div> 

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>posts:</b>
            <ul>
                <li>id (PrKey)</li>
                <li>text</li>
                <li><b>autor_id <br> (users.id)</b></li>
            </ul>
        </div> 

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>comments:</b>
            <ul>
                <li>id (PrKey)</li>
                <li>text</li>
                <li><b>post_id</b> (posts.id)</li>
                <li><b>autor_id <br> (users.id)</b></li>
            </ul>
        </div> 

        <div style="width: 20%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>Messages:</b>
            <ul>
                <li>id_Message (PrKey)</li>
                <li>text</li>
                <li><b>sender_id <br> (user.id)</b></li>
                <li><b>recipient_id <br> (user.id_)</b></li>
            </ul>
        </div> 
    </div>    


    Cтруктура хранения Генеологическое дерево: Пользователь, его бабушки, дедушки, мама, папа и т.д.
    <div style="display: flex; justify-content: center;"> 
        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>family_members:</b>
            <ul>
                <li>id (PrKey)</li>
                <li>name</li>
            </ul>
        </div>

        <div style="width: 15%; border: 1px solid grey; 
                    margin: 5px; text-align: left; padding: 2px">
            <b>relationship:</b>
            <ul>
                <li>id (PrKey)</li>
                <li><b>name_id <br> (family_members_id)</b></li>
                <li><b>relationship_id <br> (family_members_id)</b></li>
                <li>relationship_type</li>
                
            </ul>
        </div>
    </div>

    




























   



















































    </main>

    <footer>
		<?php include 'includes/footer.php'; ?>
	</footer>

	</br>
	</br>

	</body>
</html>
