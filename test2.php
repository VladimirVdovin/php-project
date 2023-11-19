 <!-- ЭТО ФАЙЛ ДЛЯ ПРОВЕРКИ КУКОВ, СЕССИЙ, ЗАПРОСОВ -->

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
    
    <div style="text-align: center; font-size: 18px;">

        <header>
       
        
			    <?php include 'includes/header.php'; ?>
                <!-- <?php header('HTTP/1.1 404 Not Found'); ?> -->
                <?php header('Xheader: OwnHeader'); ?>
	    </header>

        <br><br>

        

        <!-- Определяем из какого файла запрос -->
        <?php 

    
        $referer_file = strrchr($_SERVER['HTTP_REFERER'], '/');
        if ($referer_file == '/test1.php') {

// ------------- Глава двенадцатая - Сессии ----------------


            if (isset($_SESSION['number1'])) {
                echo "Сумма 3 и 2 = " . 
                ($_SESSION['number1'] + $_SESSION['number2']);
                unset($_SESSION['number1']);
                unset($_SESSION['number2']);
                echo '<br><br>';
            }
           
            if (isset($_SESSION['name1'])) {
                echo $_SESSION['name1'] . ', ' . $_SESSION['surname'] . 
                ' ' . $_SESSION['age'];
                unset($_SESSION['name1']);
            }
                    
            if (!empty($_SESSION["user_data"])) {
                echo "<ul>";
                    foreach ($_SESSION["user_data"] as $elem) {
                    echo "<li>" . $elem . '</li>';
                    }
                echo "</ul>";
                    
            }

            echo "<br><br>";
            session_destroy(); 

       
    
                
//  ----- Глава тринадцатая - Куки ------  

    
                echo $_COOKIE['test']; // выведет 'abcde'
            }
        ?>

<!-- ----- Глава 18 - Протокол HTTP ------  -->
       
        <?php 
        if ($referer_file == '/http.php') {
            
            echo "<b>Запрос отправлен со стораницы</b> " . $_SERVER['HTTP_REFERER'] . "<br><br>"; 

            if ($_GET['value'] == 'request_method') {
                echo "<b>Тип запроса</b> " . $_SERVER['REQUEST_METHOD'] . "<br>";
            }
            elseif ($_GET['value'] == 'headers') {
                echo "<b>Предпочтительные языки</b> " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
                echo "<b>Предпочтительный тип контента</b> " . $_SERVER['HTTP_ACCEPT'] . "<br><br>";
                echo "<b>Весь SERVER:</b><br> ";
                print_r($_SERVER);
            }
            elseif ($_GET['value'] == 'headers_array') {
                $arr = getallheaders();
                echo "<b>Массив заголовков: </b><br>";
                foreach ($arr as $headers => $values) {
                    echo $headers . " - " . $values . "<br>";
                }
            }
            elseif ($_GET['value'] == 'text/plain') {
                header('Content-Type: text/plain');

            }
            elseif ($_GET['value'] == 'own_header') {
                if (isset($_SERVER['HTTP_XHEADER'])) {
                    $header = $_SERVER['HTTP_XHEADER'];
                    echo $header;
                } else {
                    echo "Заголовок не был отправлен в запросе (почему-то).";
                }
            }
            elseif ($_GET['value'] == "404") {

                $arr = ['a', 'b', 'c'];
                $key = $_GET['key'];
                if (!isset($arr[$key])) {
                    header('HTTP/1.1 404 Not Found');
                } else {
                    header('HTTP/1.1 200 OK');
                }
            } else {
                http_response_code(402);
            }
            $status = http_response_code();
            echo 'Текущий статус запроса: ' . $status;
            

        
        }

        ?>

        <br><br>



        </div>
    </body>
</html>