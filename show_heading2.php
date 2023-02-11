<?php
include "connect.php";
if(isset($_GET['h'])) {$h=$_GET['h'];}
if(!isset($h)) {$h=2;}
if ($h > 5 or $h == 5) {$h=2;}
if ($h == 0) {$h=2;}


$itog=mysql_query("SELECT * FROM heading WHERE id='$h'");


if(!$itog)
{
echo "<p>Запрос на выбарку данных из базы данных непрошел.Напишите об этом администратору</p>";
exit(mysql_error());
}

if(mysql_num_rows($itog) >0)
{
$myrow=mysql_fetch_array($itog);
}
else
{
echo"<p>Данные по запросу не могут быть получены</p>";
exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style11.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <td height="220" colspan="5" background="img/top.jpg" ></td>
  </tr>
  <tr>
    <td height="70" colspan="5"  background="img/middle.jpg"><br/>;
		
		<?php echo $myrow['text'];
		
		
		$itog100 = mysql_query("SELECT p FROM nav");
$masiv = mysql_fetch_array($itog100);
$amount = $masiv["p"]; // $amount = хранит количество сколько выводить статей на одной странице (p)
// Получаем из URL текущую страницу
$sheet = $_GET['sheet']; //@$sheet = $_GET['sheet'];
// Определяем общее количество статей в базе  
$result00 = mysql_query("SELECT COUNT(*) FROM note WHERE resolution=5 and heading_r='$h'");
$temporary = mysql_fetch_array($result00);
$quantity = $temporary[0]; //$quantity = 3 (3 заметики в базе для Indesign)
// Определяем общее количество страниц
$summary = (($quantity - 1) / $amount) + 1;
$summary =  intval($summary);
// Определяем начало сообщений для текущей страницы
$sheet = intval($sheet);
// Если значение $sheet меньше единицы или отрицательно то идем на первую страницу
// Но если слишком большое, то переходим на последнюю
if(empty($sheet) or $sheet < 0) $sheet = 1;
  if($sheet > $summary) $sheet = $summary;
// Вычисляем начиная с какого номера нужно выводить сообщения
$start = $sheet * $amount - $amount;
// Выбираем $amount сообщений начиная с числа $start
		
		$itog =mysql_query("SELECT  id,title,description,author,date,viewings,icon,popularity,voice  FROM note WHERE resolution=5 and heading_r='$h' ORDER BY id LIMIT $start, $amount" );
		if(!$itog)
{
echo "<p>Запрос на выбарку данных из базы данных непрошел.Напишите об этом администратору</p>";
exit(mysql_error());
}

if(mysql_num_rows($itog) > 0)
{
$myrow=mysql_fetch_array($itog);

do{
$popul=$myrow["popularity"]/$myrow["voice"];
$popul=intval($popul);
printf(	"<table align='center'  class='training'>
          <tr>
            <td class='training_head'>
			<p class=training_s><img class='icon' align='left' src='%s'><a href='show_partition.php?id=%s'>%s</a></p>
			<p class='training_date'>Дата добавления: %s &nbsp;&nbsp;&nbsp;&nbsp;Популярность:<img src='img/%s.png'></p>
			<p class='training_date'>Автор урока: %s</p>
			</td>
          </tr>
          <tr>
            <td>%s <p class='training_viewings'>Количество просмотров %s</p></td>
          </tr>
        </table><br><br>",$myrow["icon"],$myrow["id"],$myrow["title"],$myrow["date"],$popul,$myrow["author"],$myrow["description"],$myrow["viewings"]);
}
while($myrow=mysql_fetch_array($itog));	

// Удостоверяемся нужны ли стрелки назад
if ($sheet != 1) $pervsheet = '<a href=show_heading2.php?h='.$h.'&sheet=1>Первая</a> | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 1) .'>Предыдущая</a> | ';
// Удостоверяемся нужны ли стрелки вперед
if ($sheet != $summary) $nextsheet = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 1) .'>Следующая</a> | <a href=show_heading2.php?h='.$h.'&sheet=' .$summary. '>Последняя</a>';

// Определяем две ближайшие станицы с обоих боков, если они есть
if($sheet - 6 > 0) $sheet5left = ' <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 6) .'>'. ($sheet - 6) .'</a> | ';
if($sheet - 5 > 0) $sheet5left = ' <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 5) .'>'. ($sheet - 5) .'</a> | ';
if($sheet - 4 > 0) $sheet4left = ' <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 4) .'>'. ($sheet - 4) .'</a> | ';
if($sheet - 3 > 0) $sheet3left = ' <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 3) .'>'. ($sheet - 3) .'</a> | ';
if($sheet - 2 > 0) $sheet2left = ' <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 2) .'>'. ($sheet - 2) .'</a> | ';
if($sheet - 1 > 0) $sheet1left = '<a href=show_heading2.php?h='.$h.'&sheet='. ($sheet - 1) .'>'. ($sheet - 1) .'</a> | ';

if($sheet + 6 <= $summary) $sheet5right = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 6) .'>'. ($sheet + 6) .'</a>';
if($sheet + 5 <= $summary) $sheet5right = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 5) .'>'. ($sheet + 5) .'</a>';
if($sheet + 4 <= $summary) $sheet4right = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 4) .'>'. ($sheet + 4) .'</a>';
if($sheet + 3 <= $summary) $sheet3right = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 3) .'>'. ($sheet + 3) .'</a>';
if($sheet + 2 <= $summary) $sheet2right = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 2) .'>'. ($sheet + 2) .'</a>';
if($sheet + 1 <= $summary) $sheet1right = ' | <a href=show_heading2.php?h='.$h.'&sheet='. ($sheet + 1) .'>'. ($sheet + 1) .'</a>';

//Отображаем меню если страниц больше одной
if ($summary > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"nav\">";
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'; echo $pervsheet.$sheet5left.$sheet4left.$sheet3left.$sheet2left.$sheet1left.'<b>'.$sheet.'</b>'.$sheet1right.$sheet2right.$sheet3right.$sheet4right.$sheet5right.$nextsheet;
echo "</div>";
}	

}
else
{
echo"<p>Данные по запросу не могут быть получены</p>";
exit();
}
		?>
		&nbsp;<p style=" margin-left: 20px;"><input type="button" value="На Главную" class="button" onclick="javascript:window.location='index.php'" />
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
