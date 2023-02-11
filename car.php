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
    <td height="70" colspan="5"  background="img/middle.jpg">
 <?php
 require "connect.php"; 
 ?>
 
 <label><br><form name="form1" method="get" action="cart.php">
		     <select name="client"  >
			  <option value="buyer">
			<?php
          $itog=mysql_query("SELECT * FROM cart ");


if(!$itog)
{
echo "<p>Запрос на выбарку данных из базы данных непрошел.Напишите об этом администратору</p>";
exit(mysql_error());
}

if(mysql_num_rows($itog) >0)
{
$myrow=mysql_fetch_array($itog);

do 
{
printf("<option value='%s'>%s</option>",$myrow["buyer"],$myrow["buyer"]);
}
while($myrow=mysql_fetch_array($itog));
}
else
{
echo"<p>Данные по запросу не могут быть получены</p>";
exit();
}
?></option>
            </select>
<p>
		    <input type="submit" name="button" id="button" value="Посмотреть товар" >
		  </p>

		  
</form>
 <input type="button" value="На Главную" class="button" onclick="javascript:window.location='index.php'" />
 
 </td>
  </tr>
  
  <tr>
    <td colspan="5" align="justify" background="img/bottom.jpg"><?php include("section/gallery.php")?></td>	
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
