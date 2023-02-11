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
require_once "connect.php";

if ($_GET['product_id'] && $_GET['name']) {

    ?>
	<?php if ($_COOKIE['user_login']) { ?>
		<b><?php echo "Привет!!! ".$_COOKIE['user_login']; ?></b>
	<?php } ?>
        <form method="post" action="cart_update.php">
            <p>Number</p>
            <input type="number" name="numberProduct" /><br/><br/>
			<p>Фамилия покупателя</p>
			 <input name="buyer" type="text" lang="ru" />
			 <p>Адрес покупателя</p>
			 <input name="address" type="text" lang="ru" />
            <input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>"/>
			<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>"/>
			<input type="hidden" name="lang" value="2">
			<input type="hidden" name="lang" value="2">
            <p>Product id: <?php echo $_GET['product_id']; ?></p>
			<p>Product name: <?php echo $_GET['name']; ?></p>
            <input type="submit" name="submitForm" value="Оформить заказ"/>
        </form>
<?php
}

?>
<p style=" margin-left: 2px;"><input type="button" value="На Главную" class="button" onclick="javascript:window.location='index.php'" /></p>
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
