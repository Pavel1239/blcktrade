<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='/css/main.css' rel='stylesheet' type='text/css'>
    <title>blcktrade</title>
</head>
<?php
include('connection.php'); // подключаем скрипт

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка в подключение " . mysqli_error($link));

// выполняем операции с базой данных

// закрываем подключение

?>
