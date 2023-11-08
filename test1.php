<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title >Sessions</title>
        <link rel="stylesheet" href="public/css/style.css">
    <head>
    <body style="text-align: center;">
        <header>
			<?php include 'includes/header.php'; ?>
            <?php session_start(); ?>
        </header>

        <aside>
            <?php $CurrentPage = 'sessions.php'; ?>
			<?php include 'includes/slidebar.php'; ?>
		</aside>

<!-- Куки, как и сессии, должны объявляться до первого вывода на странице,
поэтому я перенес все setcookie в начало, а аналогичный текст в заданиях
закомментировал -->

<?php
    if (!isset($_COOKIE['str']))
	 setcookie('str1', 'Надпись появится сразу');

    if (!isset($_COOKIE['start_moment']) && empty($_COOKIE['time_diff'])) {
        $start_moment = time();
        setcookie('start_moment', $start_moment);
        setcookie('time_diff', $start_moment);
    }

    if (!isset($_COOKIE['cookie_for_1month'])) {
        $month = 60 * 60 * 24 * 30;
        setcookie('cookie_for_1month', 'Кука на месяц', time() + $month);
        setcookie('cookie_for_1year', 'Кука на год', time() + ($month * 12));
        setcookie('cookie_for_10years', 'Кука на 10 лет', time() + ($month * 12 * 10));
    }

    if (!isset($_COOKIE['cookie_for_delete'])) {
        $cookie_for_delete = 'Кука еще есть, но после обновления 
            страницы она будет удалена.<br> Однако после следующего нажатия F5
            кука появиться вновь';
        setcookie('cookie_for_delete', 'Кука еще есть', time() + 1000);
    } else {
        setcookie('cookie_for_delete', 'Кука еще есть', time());
    }

    if (!isset($_COOKIE['cookie_for_delete2']))
        
        $cookie_for_delete2 = 'Если этот текст не повторяется два раза,<br>
            значит кука была моментально удалена и текст осталася только в переменной';
        setcookie('cookie_for_delete2', $cookie_for_delete2, time() + 1000);
        setcookie('cookie_for_delete2', $cookie_for_delete2, time());

?>

<!-- Получение данных форм методом GET -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Сессии в PHP</h3>  


        <?php
        $_SESSION['number1'] = 2;
        $_SESSION['number2'] = 3; 
        session_write_close(); 
        ?>

<a href="test2.php">Результат сложения переменных из сессии тут: test2.php</a>
<br><br>
</div>


<!-- Возможные проблемы при работе с сессиями-->
<div style="text-align: center;">
	<h3>Возможные проблемы при работе с сессиями</h3> 
     

    
               
    <?php                            // номер 1
	    session_start();
    ?>
    text   
    <?php                            
	    session_write_close(); 
    ?>


    <?php                            // номер 2
	    session_start();
    ?>
    <p>text</p>   
    <?php                            
	    session_write_close(); 
    ?>


    <?php                        // номер 3
	    session_start();
        echo 'text';
        session_write_close(); 
    ?>


<!-- Использование сессий на одной странице  -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Использование сессий на одной странице </h3> 
    
    <?php
        session_start();     // номер 1
        
        if (!isset($_SESSION['start'])) {
            $start = time();
            $_SESSION['start'] = $start;
        } else {
            $start = $_SESSION['start'];
            echo "Пользователь зашел на страницу " . (time() - $start) .
            " секунд назад";
        }
    
    ?>

    <?php
        session_write_close(); 
    ?>
    </div>


<!-- Удаление сессий в PHP  -->
<div style="text-align: center;">
	<h3>Удаление сессий в PHP</h3> 


    <?php
        session_start();                 // номер 1  
        if (!isset($_SESSION["counter"])) {
            $_SESSION["counter"] = 1;
            echo $_SESSION["counter"];
        } else {
            if ($_SESSION["counter"] == 10) {
                unset($_SESSION["counter"]); 
            } else {
                $_SESSION["counter"]++;
                echo $_SESSION["counter"];
            }
        
        }
    ?>

    <?php
        session_write_close(); 
    ?>
    </div>


<!-- Завершение всей сессии  -->
<div style="background-color: Gainsboro; text-align: center;">
	<h3>Завершение всей сессии</h3> 


    <?php
        if (isset($_GET['user'])) {               // номер 1  
            session_start();
            $_SESSION['user'] = $_GET['user'];     
        }

    ?>
    
    <form type="GET">
        <label for="user">Напишите ваше имя</label>
        <input name="user" id="user">
        <button type="submit">Начните сессию</button>  
    </form>

    <?php  if (isset($_SESSION['user']) and isset($_GET['user'])): ?>
        <a href="logout.php">Завершить сессию</a>
    <?php endif ?>   
    
    <?php
        session_write_close(); 
    ?>
</div>   


<!-- Сессии и формы  -->
<div style=text-align: center;>              
	<h3>Сессии и формы</h3> 


    <?php
        session_start();                            // номер 1  

        if (isset($_GET['name1'])) {
            $_SESSION['name1'] = $_GET['name1'];  
            $_SESSION['surname'] = $_GET['surname'];  
            $_SESSION['age'] = $_GET['age'];  
        }
    ?>

    <form type="GET">
        <label for="name1">Имя</label>
        <input name="name1" id="name1">
        <br>
        <label for="surname">Фамилия</label>
        <input name="surname" id="surname">
        <br>
        <label for="age">Год</label>
        <input name="age" id="age">
        <br>
        <button type="submit">Отправить данные</button>  
    </form>

    <?php
    if (!empty($_GET) and isset($_SESSION['name1'])): ?>
        <a href='test2.php'>Перейти на test2</a>
    <?php endif ?>


<!-- Запись массивов в сессии  -->
<div style="background-color: Gainsboro; text-align: center;">         
	<h3>Запись массивов в сессии</h3> 


    <?php                         

        if (isset($_GET['salary'])) {          // номер 1  
            $_SESSION["user_data"] = $_GET;  

        }
    ?>

    <form type="GET">
        <label for="name2">Имя</label>
        <input name="name2" id="name2">
        <br>
        <label for="age1">Фамилия</label>
        <input name="age1" id="age1">
        <br>
        <label for="salary">Год</label>
        <input name="salary" id="salary">
        <br>
        <label for="height">Рост</label>
        <input name="height" id="height">
        <br>
        <button type="submit">Отправить данные</button>  
    </form>

    <?php
    if (!empty($_SESSION["user_data"])): ?>
        <a href='test2.php'>Перейти на test2</a>
    <?php endif ?>

    

</div>
 
    

 <!-- ----- Первая тринадцатая - Куки ------  -->


<!-- Введение в работу с куками  -->
<div style="text-align: center;">         
	<h3>Введение в работу с куками</h3> 


    <?php
	    setcookie('test', 'Проверка. Куки работают');
    ?>
    <a href='test2.php'>Провери куки на test2</a>

</div>

<!-- Проблема установки кук  -->
<div style="background-color: Gainsboro; text-align: center;">         
	<h3>Проблема установки кук</h3> 

    <?php
        setcookie('str', "Надпись появиться только  
            после перезагрузки страницы");
        print_r($_COOKIE["str"]);
    ?>

</div>


<!-- Мгновенная установка кук  -->
<div style="text-align: center;">       


	<h3>Мгновенная установка кук</h3> 

    <?php
        if (!isset($_COOKIE['str']))
	        // setcookie('str1', 'Надпись появится сразу');
            $_COOKIE['str1'] = 'Надпись появится сразу';
    
        print_r($_COOKIE['str1']);
        unset($_COOKIE['str']);
    ?>

</div>


<!-- Счетчик обновления страницы на куках  -->
<div style="background-color: Gainsboro; text-align: center;">         
	<h3>Счетчик обновления страницы на куках</h3> 

    <?php
        if (!isset($_COOKIE['start_moment']) && empty($_COOKIE['time_diff'])) {
            // $start_moment = time();
            // setcookie('start_moment', $start_moment);
            // setcookie('time_diff', $start_moment);
            
        } else {
            $current_moment = time();
            $_COOKIE['time_diff'] = $current_moment - $_COOKIE['start_moment']; 
            echo 'Прошло времени: ' . $_COOKIE['time_diff' ] . ' cек';
        } 
    ?>

</div>


<!-- Время жизни куки в PHP  -->
<div style="text-align: center;">         
	<h3>Время жизни куки в PHP</h3> 

    <?php
        echo $_COOKIE['cookie_for_1month'] . ", ";
        echo $_COOKIE['cookie_for_1year'] . ", ";
        echo $_COOKIE['cookie_for_10years'];
    ?>

</div>


<!-- Удаление кук в PHP  -->
<div style="background-color: Gainsboro; text-align: center;">         
	<h3>Удаление кук в PHP</h3> 

    <?php
        if (!empty($cookie_for_delete)) {
            echo $cookie_for_delete;
        }
    ?>

    </div>


<!-- УМгновенное удаление кук  -->
<div style="text-align: center;">         
	<h3>Мгновенное удаление кук</h3> 

    <?php
	echo $cookie_for_delete2 . "<br>";
    if (isset($_COOKIE['cookie_for_delete2'])) {
		unset($_COOKIE['cookie_for_delete2']);
	}
    if (!empty($_COOKIE['cookie_for_delete2'])) {
		var_dump($_COOKIE['cookie_for_delete2']); 
	}
	
    ?>
</div>

</div>

        <footer>
			<?php include 'includes/footer.php'; ?>
		</footer>

        <br>


    </body>
</html>