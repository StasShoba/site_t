<?php
include "connect.php";
$state='0';
if ($state != 1) {
  if (isset($_POST['user_login']) && isset($_POST['user_password'])) {
	  $login = $_POST['user_login'];
	  $sql = "SELECT user_id, user_password FROM users2 WHERE user_login='$login'";
	  $res = mysql_query($sql);
		if(mysql_num_rows($res)>0) {// если пользователь есть в БД
		  $userinfo = mysql_fetch_array($res);// в этой переменной лежит пароль из БД и номер пользователя
		  $pass = $_POST['user_password'];
		  if(strcmp($pass,$userinfo['user_password'])==0){
				$sql="SELECT * FROM users2 WHERE user_login='$login' ";
				$res=mysql_query($sql);
				$userinfo=mysql_fetch_array($res);// в этой переменной будет лежать вся информация о пользователе из БД
				$time=time();
				setcookie("user_login", $login, $time+1800);
				setcookie("user_password", $pass, $time+1800);
				header('Location: http://site_t/index.php');
				ob_end_flush();
				$state = 1;// статус, если 1, тогда пользователь авторизован
		  }
		}
  }
}

if ($_GET['exit'] == 'y') {
	setcookie('user_login');
	setcookie('user_password');
	header('Location: http://site_t/index.php');
}
?>