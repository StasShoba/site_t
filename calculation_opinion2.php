<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include ("connect.php");
if(isset($_POST['calc'])){$calc=$_POST['calc'];}
if(isset($_POST['id'])) {$id=$_POST['id'];}

$itog=mysql_query("SELECT popularity,voice FROM note WHERE id='$id'");


if(!$itog)
{
echo "<p>Запрос на выбарку данных из базы данных непрошел.Напишите об этом администратору</p>";
exit(mysql_error());
}

if(mysql_num_rows($itog) >0)
{
$myrow=mysql_fetch_array($itog);
$poplarity_plus=$myrow['popularity']+$calc;
$voice_plus=$myrow['voice']+1;
$itog1=mysql_query("update note set popularity='$poplarity_plus', voice='$voice_plus' WHERE id='$id'");
if($itog1)
{
echo 
"<html>
<head>
<meta http-equiv='Refresh' content='0; URL=show_partition2.php?id=$id' >
</head>
</html>";
exit();
}
}
else
{
echo"<p>Данные по запросу не могут быть получены</p>";
exit();
}

?>
</body>
</html>
