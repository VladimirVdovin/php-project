<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title >
        </title>
    <head>
    <body>
        <?php
			    error_reporting(E_ALL);
			    ini_set('display_errors', 'on');
			    mb_internal_encoding('UTF-8');
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
 
    










</div>


    </body>
</html>