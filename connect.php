
<?php

$host="localhost";/*Имя сервера*/

$user="Stas";/*Имя пользователя*/

$password="56789";/*Пароль пользователя*/

$db="php_123";/*Имя базы данных*/

$globalConnect = mysql_connect($host, $user, $password); /*Подключение к серверу*/

mysql_select_db($db);
?>

