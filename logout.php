<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
    </title>

    <head>

    <body>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
        mb_internal_encoding('UTF-8');
        ?>

        <?php
        session_start();
        echo $_SESSION['user'] . ", ваша сессия закрыта";
        session_destroy();
        ?>

        <br>
        <a href="test1.php">Назад</a>

    </body>
    <html>