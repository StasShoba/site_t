	<?php
include ("connect.php");
if(isset($_POST['find_t'])) {$find_t=$_POST['find_t'];}
if(isset($_POST['find_b'])) {$find_b=$_POST['find_b'];}

if(isset($find_t))
{
if(empty($find_t) or strlen($find_t) < 4 )
{
exit("<p>вы ввели меньше четырех символов</p>");
}
$find_t=trim($find_t);
$find_t=stripslashes($find_t);
$find_t=htmlspecialchars($find_t);
}
else
{
exit("<p>вы ввели не те данные</p>");
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
    <td height="70" colspan="5"  background="img/middle.jpg">

		
		<?php 
 if ($_POST['find_b'] && $_POST['find_t']){
    $find_t = mysql_real_escape_string($find_t);
    $itog = mysql_query("SELECT id,pack,country,producer,name,goods,foto FROM games WHERE  MATCH(name) AGAINST('$find_t')");
    $itog2 = mysql_query("SELECT id,pack,country,producer,name,goods FROM fruits WHERE  MATCH(name) AGAINST('$find_t')");
    
    if (!$itog && !$itog2) {
        echo "<p>Запрос на выбарку данных из базы данных непрошел.Напишите об этом администратору</p>";
        exit(mysql_error());
    }
    
    if (mysql_num_rows($itog) > 0) {
        $myrow = mysql_fetch_array($itog);
        
        do {
            $popul = intval($popul);
            printf("<table align='center'  class='training'>
         <tr>
            <p><td class='training_head'>
   <p class=training_s><img class='icon' align='left' src='%s'><a href='add_to_cart.php?product_id=%s&name=%s'>%s</a></p>
   <p class='training_date'>Страна производства: %s &nbsp;&nbsp;&nbsp;&nbsp;Производитель:%s</p>
   <a class='training_date' >Упаковка: %s </a> &nbsp;&nbsp;&nbsp; <a href='add_to_cart.php? product_id=%s&name=%s' >В корзину </a>
      </td></p>
          </tr>
          <tr>
            
          </tr>
        </table><br><br>",$myrow["foto"], $myrow["id"],$myrow["name"], $myrow["name"], $myrow["country"], $myrow["producer"], $myrow["pack"],$myrow["id"],$myrow["name"]);
        } while ($myrow = mysql_fetch_array($itog));
        
    }
    
    if (mysql_num_rows($itog2) > 0) {
        $myrow = mysql_fetch_array($itog2);
        
        do {
            $popul = intval($popul);
            printf("<table align='center'  class='training'>
          <p><tr>
            <p><td class='training_head'>
   <p class=training_s><img class='icon' align='left' src='%s'><a href='add_to_cart.php?product_id=%s&name=%s'>%s</a></p>
   <p class='training_date'>Страна производства: %s &nbsp;&nbsp;&nbsp;&nbsp;Производитель:%s</p>
  <a class='training_date' >Упаковка: %s </a> &nbsp;&nbsp;&nbsp; <a href='add_to_cart.php? product_id=%s&name=%s' >В корзину </a>
      </td></p>
          </tr>
          <tr>
            
          </tr>
        </table><br><br>",$myrow["goods"], $myrow["id"],$myrow["name"], $myrow["name"], $myrow["country"], $myrow["producer"], $myrow["pack"],$myrow["id"],$myrow["name"]);
        } while ($myrow = mysql_fetch_array($itog2));
        
    }
    
     if(mysql_num_rows($itog) < 0 && mysql_num_rows($itog2) < 0) {
        echo "<p>Данные по запросу не могут быть получены на сайте нет такой информации</p>";
        exit();
    }
    
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p style=" margin-left: 20px;"><input type="button" value="На Главную" class="button" onclick="javascript:window.location='index.php'" />
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
