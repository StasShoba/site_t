
<?php
include "connect.php";
if(isset($_GET['id'])) {$id=$_GET['id'];}
if(!isset($id)) {$id=1;}
/*if ($id > 21 or $id == 21) {$id=1;}
if ($id == 0) {$id=1;}*/

$itog=mysql_query("SELECT * FROM note WHERE id='$id'");


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
    <td height="70" colspan="5" >
		
		
		<?php 
		$viewings_plus=$myrow["viewings"] + 1;
		$n=mysql_query("UPDATE note SET viewings='$viewings_plus' WHERE id='$id'");

printf("<p class='partition_title'>%s</p><p class='partition_author'>автор: %s</p><p class='partition_author'>дата: %s</p><p>%s</p><p class='training_viewings'>просмотров: %s</p>",$myrow["title"],$myrow["author"],$myrow["date"],$myrow["text"],$myrow["viewings"]);
?>

<form action="calculation_opinion2.php" method="post" name="opinion" target="_self">
<p style="font-size:12px; border-top:solid 1px; padding-top:10px;">
Голосование: 1<input name="calc" type="radio" value="1">
             2<input name="calc" type="radio" value="2">
			 3<input name="calc" type="radio" value="3">
			 4<input name="calc" type="radio" value="4">
			 5<input name="calc" type="radio" value="5">
			 6<input name="calc" type="radio" value="6" checked>
			 7<input name="calc" type="radio" value="7">
			 8<input name="calc" type="radio" value="8">
			 9<input name="calc" type="radio" value="9">
			 10<input name="calc" type="radio" value="10">
			 <input name="id" type="hidden" value="<?php echo "$id"; ?>id">
			 <input  style="font-size:10px; width:120px;height:25px;background-color:#999999; color:#FFFFFF; boder:1px;" name="opinion" type="submit" value="Проголосовать">
</form>
</p>
<?php
echo"<p class='partition_comm'>комментарии к этой статье</p>";
$itog2=mysql_query("SELECT * FROM comm WHERE idea='$id'");
if(mysql_num_rows($itog2) > 0)
{
$myrow2 = mysql_fetch_array($itog2);
do
{
printf("<div class='partition_comm_strip'><p class='partition_comm_add'>комментарий написал(а) <strong>%s</strong> <br>дата:<strong>%s</strong></p><p>%s</p></div>",$myrow2["author"],$myrow2["date"],$myrow2["text"]);
}
while ($myrow2 = mysql_fetch_array($itog2));
}


$itog3=mysql_query("SELECT picture FROM options_comments");
$myrow3 = mysql_fetch_array($itog3);





		?>
	<p class='partition_comm'>добавить комментарий</p>	
		
		<form action="processing_comments2.php" method="post" name="comm_form">
		<p><label>ваше имя<br>
		</label><input name="author" type="text" size="35" maxlength="35"></p>
		<p><label>текст вашей заметки</label>
		<br><textarea name="text" cols="40" rows="4"></textarea></p>
		<p><label>введите сумму</label></p>
		  <p align="left"><img style="vertical_align:top; "src="img/plus.gif" width="70" height="25">
		    <input name="check" type="text" class="icon" style="vertical_align:top; margin-top:3px;" size="5" maxlength="5"></p>
		  <p><input name="reset_button" type="reset" value="сброс">
		  <input name="id" type="hidden" value="<?php echo $id;?>">
		<input name="submit_comm" type="submit" value="отправить"></p>
		</form>	
		&nbsp;<p><input type="button" value="На предыдущую" class="button" onclick="javascript:window.location='show_heading2.php'" /></p></td>
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
