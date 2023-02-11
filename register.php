<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="css/default.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style11.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Тест</title>

</head>
<body> 

<table width="1490" height="989" border="1">
  <tr>
    <td height="42" colspan="6" bgcolor="#333333" valign="center">


       <?php include ("section/searchform.php");?></td>
  </tr>
  <tr>
    <td height="32" colspan="6" bgcolor="e4b998"><?php include ("section/horizontalmenu.php");?></td>
  </tr>
  <tr>
    <td width="195" rowspan="3" valign="top" background="img/s.jpg"><?php include("section/menu.php")?>	 </td>
    <td height="220" colspan="5" background="img/top.jpg" >
	/td>
  </tr>
  <tr>
    <td height="160" colspan="6"  bgcolor="#99CC66" align="center"><div align="center">
<?php
// Страница регистрации нового пользователя
#Соединямся с БД
include "connect.php";

if (isset($_POST['submit'])) {
    $err = "";

    #    проверям логин
    if (!preg_match("/^[a-zA-Z0-9]+$/", $_POST['login'])) {
        $err = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if (strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) {
        $err = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    if (strrpos($_POST['login'], " ") > -1) {
        $err = "Логин не должен содержать пробелы";
    }

    #проверяем, не сущестует ли пользователя с таким именем
    $query = mysql_query("SELECT user_id FROM users2 WHERE user_login='".mysql_real_escape_string($_POST['login'])."'");

    if (mysql_num_rows($query) !== 0) {
        print "Пользователь успешно зарегистрирован базе данных";
    } else {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";


        echo $err.
            "<br>";

    }

    #Если нет ошибок, то добавляем в БД нового пользователя
    if (count($err) === 1) {

        $login = stripslashes(trim(htmlspecialchars($_POST['login'])));

        #        Убераем лишние пробелы и делаем двойное шифрование
        $password = md5(md5(trim($_POST['password'])));

        mysql_query("INSERT INTO users2 SET user_login='".$login."', user_password='".$password."'");
        
    }

}
if (isset($_GET['user_login'])) {
    $login = $_GET['user_login'];
}
if (isset($_GET['user_password'])) {
    $password = $_GET['user_password'];
}
$result = mysql_query("SELECT * FROM users2 WHERE user_login='{$login}' LIMIT 1");
while ($myrow = mysql_fetch_assoc($result)) {

    echo '<h3>'.
        'Ваш логин:'.($myrow['user_login']).
        '&nbsp;&nbsp'.
        'Ваш пароль:'.$myrow['user_password'].
        '<h3>';
}?><br>
&nbsp; <input type="button" value="На Главную" class="button" onClick="javascript:window.location='index.php'">
</td>
  </tr>
  
  <tr>
    <td colspan="5" align="justify" background="img/bottom.jpg"><?php include("section/gallery.php")?>	   </td>	
  </tr>
  
 <tr bgcolor="#e4b998">
    <td height="20" colspan="6">&nbsp;</td>
  </tr>
  <tr bgcolor="#333333">
    <td height="40" colspan="6">&nbsp;</td>
  </tr>
</table>
</body>
</html>

