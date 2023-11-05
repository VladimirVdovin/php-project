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


    <!-- функция рисует таблицу и заполняет данными из users -->
    <!-- если $query не указан, то берет все данные из таблицы -->
    <!-- если $query указан, то использует запрос из $query -->
    <?php           
    function showTableUsers($link, $query = null) {
        if ($query == null) {
            $query = mysqli_query($link, "SELECT * FROM users");
        } else {
            $query = mysqli_query($link, $query);
        }
        for ($data=[]; $row=mysqli_fetch_assoc($query); $data[]=$row); 
        ?>
        <table border="2" style="width: 50%; margin: 0 auto;">
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
    <div style="text-align: center;">
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
    <br>
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

    </div>





             <!-- ----- Первая 16 - Организация БД ------  -->




















   



















































    </main>

    <footer>
		<?php include 'includes/footer.php'; ?>
	</footer>

	</br>
	</br>

	</body>
</html>
