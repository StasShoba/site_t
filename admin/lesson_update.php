<?

/*Подключаемся с базой*/
include "connect.php";
/*
if(isset($_POST['title'])){$title=$_POST['title']; if($title==''){unset($title);}}
if(isset($_POST['meta_key'])){$meta_key=$_POST['meta_key'];if($meta_key=''){unset($meta_key);}}
if(isset($_POST['meta_desc'])){$meta_desc=$_POST['meta_desc'];if($meta_desc==''){unset($meta_desc);}}
if(isset($_POST['date'])){$date=$_POST['date'];}
if(isset($_POST['description'])){$description=$_POST['description'];if($description==''){unset($description);}}
if(isset($_POST['text'])){$text=$_POST['text'];if($text==''){unset($text);}}
if(isset($_POST['author'])){$author=$_POST['author'];if($author==''){unset($author);}}
if(isset($_POST['id'])){$id=$_POST['id'];}
*/


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
    <td height="172" colspan="5">
		 <?php  

if($_POST['id']){$idVal=$_POST['id'];}
if($_POST['productName']){$productVal = $_POST['productName'];}
if($_POST['pack']){$packVal=$_POST['pack'];}
if($_POST['country']){$countryVal=$_POST['country'];}
if($_POST['name']){$nameVal=$_POST['name'];}
if($_POST['goods']){$goodsVal=$_POST['goods'];}
if($_POST['name']){$nameVal=$_POST['name'];}
if(isset($_POST['producer'])){$producerVal=$_POST['producer'];}
/*Заносим инофрмацию в базу*/


if(isset($productVal) && isset($idVal) && isset($packVal) && isset($countryVal) && isset($goodsVal) && isset($producerVal) && isset($nameVal))
{

	if($productVal == "games"){
		$itog = mysql_query("UPDATE games SET id=$idVal, pack='{$packVal}',country='{$countryVal}',goods='{$goodsVal}',producer='{$producerVal}',name='{$nameVal}' WHERE id={$idVal}");
	}
	if($productVal == "fruits"){
		$itog2 = mysql_query("UPDATE fruits SET id=$idVal, pack='{$packVal}',country='{$countryVal}',goods='{$goodsVal}',producer='{$producerVal}',name='{$nameVal}' WHERE id={$idVal}");
	}
	
	if($itog=='true'){
echo"<p>Ваш товар успешно обновлен в базе!</p>";}
elseif($itog2=='true'){
echo"<p>Ваш товар успешно обновлен в базе!</p>";}
else{echo"<p>Ваш товар не обнавлен в базе!</p>";}
}
	

?>
&nbsp;
<p><input type="button" value="На главную" class="button" onclick="javascript:window.location='index.php'" /></p>
&nbsp;
</td>
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
