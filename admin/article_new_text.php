<?

/*Подключаемся с базой*/
include "connect.php";
/*Запрос к базе*/

/*Создание массива полученных данных*/
$myrow=mysql_fetch_array($itog);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../style11.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Тест</title>

</head>
<body> 

<table width="1490" height="989" border="1">
  <tr>
    <td height="42" colspan="6" bgcolor="#333333" valign="center"><div align="right">
	       
        <form id="form1" name="search_box" method="post" action="index.php" class="form-search" action="display index.php" ><div align="center" valign="50%" class="container" >
              
            <p id="delivery"> Доставим товары+37529 7386926 &nbsp;</p><img id="car" src="../img/car.jpg" height="39" />
              <input type="text" name="textfield" id="textfield" class="textfield"  onmousedown="value" value="Введите название товара"  onfocus="this.value=''" onmouseout="this.value='Введите название товара'" />
              <input id="basket" name="" type="image" src="../img/korz_1.jpg"  height="38"/>
          
          </div>
        
      </form></td>
  </tr>
  <tr> 
    <td height="32" colspan="6" bgcolor="#FFFF00"><?php include("sections/horizontalmenu2.php")?>	</td>
  </tr>
  <tr>
    <td width="195" height="291" rowspan="4" valign="top"><?php include("sections/menu.php")?>	</td>
    <td height="291" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td height="172" colspan="5"></td>
  </tr>
  <tr>
    <td height="70" colspan="5"><div align="center">sort by:</td>
  </tr>
  <tr>
    <td colspan="5" align="justify"><form name="form1" method="post" action="/admin/lesson_add2.php">
    <p>
    <label>
	 <select name="client[pay]" required="">
     <option value="">Выберите вариант оплаты</option>
     <option value="1">Games</option>
     <option value="2">Fruits</option>
</select>  
                </label>
                </p>
				 <p>
                <label><br>
                Введите id<br>
                <input type="text" name="id" id="id">
                </label>
                </p>
              <p>
                <label><br>
                Введите название игры или фрукта<br>
                <input type="text" name="game" id="game"> 
                </label>
              </p>
               </form>
            <p>
              <label></label>
            </p></td>
  </tr>
  <tr>
    <td height="70" colspan="5"><div align="center">sort by:</td>
  </tr>
  <tr>
    <td colspan="5" align="justify"><?php include("sections/gallery2.php")?>	 </td>	
  </tr>
  
  <tr>
    <td height="95" valign="top"> </td>
    <td colspan="5">  </td>
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
