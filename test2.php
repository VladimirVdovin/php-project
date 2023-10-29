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
    <div style="text-align=center; font-size: 22px;">

<!-- ----- Первая двенадцатая - Сессии -------->


        <?php
			error_reporting(E_ALL);
			ini_set('display_errors', 'on');
			mb_internal_encoding('UTF-8');
		?>

        <?php 
            if (isset($_SESSION['number1'])) {
                echo "Сумма 3 и 2 = " . 
                ($_SESSION['number1'] + $_SESSION['number2']);
                unset($_SESSION['number1']);
                unset($_SESSION['number2']);
        }
        ?> 
        <br><br>

        <?php 
            if (isset($_SESSION['name1'])) {
                echo $_SESSION['name1'] . ', ' . $_SESSION['surname'] . 
                ' ' . $_SESSION['age'];
                // echo "<br><a href='test1.php'>Назад</a>";
                unset($_SESSION['name1']);
               
        }
        ?>

          
        <?php if (!empty($_SESSION["user_data"])): ?> 
            <ul>
            <?php foreach ($_SESSION["user_data"] as $elem): ?> 
                <li><?php echo $elem ?></li>
            <?php endforeach ?> 
            </ul>
        <?php endif ?> 

        <br><br>


        <?php session_destroy(); ?>


<!-- ----- Первая тринадцатая - Куки ------  -->
    
    
    <?php
        echo $_COOKIE['test']; // выведет 'abcde'
    ?>



















    <br><br>
    <a href='test1.php'>Назад</a>




    </div>
    </body>
</html>