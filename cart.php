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
    <td height="70" colspan="5"  bgcolor="#99CC66">
<center>
<img   src="img/korzinische.jpg" wdth="70" height="50">

<br>
<?php require "connect.php"; 
if(isset($_GET['buyer'])){$buyer=$_GET['buyer'];}
if(isset($_GET['client'])){$client=$_GET['client'];}

if ($client)
	{
		$result = mysql_query("SELECT * FROM cart WHERE buyer='{$client}'");
		echo '<h3>Ваш заказ:</h3>';
		echo '<table id="cart-result-data">';
		echo '<tr>';
		echo '<th>#</th>';
		echo '<th>Покупатель</th>';
		echo '<th>Продукт</th>';
		echo '<th>Количество</th>';
		echo '</tr>';
		while ($myrow = mysql_fetch_array($result)) {
			echo '<tr>';
			echo '<td>'.$myrow['id'].'</td>';
			echo '<td>'.$myrow['buyer'].'</td>';
			echo '<td>'.$myrow['name_product'].'</td>';
			echo '<td>'.$myrow['count_product'].'</td>';
			echo '</tr>';	
		}
		echo '<tr><td colspan="4">Всего: $' . $total . '</td></tr>';	
		echo '</table>';
	}

?>
&nbsp;
</br>
<input name="button" type="button" class="button" onclick="javascript:window.location='car.php'" value="На Предыдущую" />
&nbsp; <input type="button" value="На Главную" class="button" onclick="javascript:window.location='index.php'" /></td>
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
