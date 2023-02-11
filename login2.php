
<?php
include "connect.php";
$userinfo='';
if(!$_COOKIE['user_login']) {
?>

<div align="center">
<form method="post" action="index.php" class="autorisation">
Логин: <input type="text" size="30" name="user_login"/><br />
Пароль: <input type="password" name="user_password" size="30"/><br />
<input type="submit" value="Войти"/>

<br /><a style=" color:#CCCCCC" href="index2.php">Регистрация</a>
</form>
<?php
} else {
  echo '<h2>'.'Вы вошли на сайт!<br /> Ваш Логин: '.$_COOKIE['user_login'].'<br /> <a href="
  index.php?exit=y">Выход</a>'.'</h2>';
}
?>
</div>
