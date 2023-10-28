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

        <?php 
            if (isset($_SESSION['number1'])) {
                echo "Сумма 3 и 2 = " . 
                ($_SESSION['number1'] + $_SESSION['number2']);
                unset($_SESSION['number1']);
                unset($_SESSION['number2']);
        }
        ?>

        <?php 
            if (isset($_SESSION['name1'])) {
                echo $_SESSION['name1'] . ', ' . $_SESSION['surname'] . 
                ' ' . $_SESSION['age'];
                echo "<br><a href='test1.php'>Назад</a>";
               
        }
        ?>

   
          
        <?php if (!empty($_SESSION["user_data"])): ?> 
            <ul>
            <?php foreach ($_SESSION["user_data"] as $elem): ?> 
                <li><?php echo $elem ?></li>
            <?php endforeach ?> 
            </ul>
        <?php endif ?> 
        <br>
        <a href='test1.php'>Назад</a>
            


        <?php session_destroy(); ?>





    </body>
</html>