<?php include("connect.php");?>
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
    <td height="172" colspan="5"><h3 align="center">Добавление заметки</h3>
		<form name="form1" method="post" action="article_add_text2.php">
		  <p>
		    <label for="title">введите название заметки<br>
		      </label>
		    <input type="text" name="title" id="title">
		    </p>
		  <p>
		    <label for="meta_key">введите ключевые слова<br>
		    </label>
		    <input type="text" name="meta_key" id="meta_key">
		  </p>
		  <p>
		    <label for="meta_desc">введите краткое описание заметки</label>
		  </p>
		  <p>
		    <input type="text" name="meta_desc" id="meta_desc">
		    </p>
			
		  <p>
		  <label>
		  введите дату добавления заметки<br>
		  <input type="text" name="date" id="date" value="<?php $date=date("Y-m-d");echo $date;?>">
		  </label>
		  </p>
		  
		  <p>
		    <label for="description">введите описание заметки</label>
		  </p>
		  <p>
		    <textarea name="description" id="description" cols="55" rows="5"></textarea>
		    </p>
		  <p>
		    <label for="text">введите текст полной заметки</label>
		  </p>
		  <p>
		    <textarea name="text" id="text" cols="55" rows="22"></textarea>
		    </p>
		  <p>
		    <label for="author">автор заметки
		      <br>
		    </label>
		    <input type="text" name="author" id="author">
		  </p>
		  <p>
		    <label for="meta_desc">введите резолюцию</label>
		  </p>
		  <p>
		    <input type="text" name="resolution" id="resolution">
		    </p>
			<p>
		   
		   <p>
		    <label for="author">введите где лежит миниатюра
		      <br>
		    </label>
		    <input type="text" name="icon" id="icon">
		  </p>  
		   <p>
		    <label>введите категорию статьи<br>
		    <select name="heading_r" onChange="heading_r">
			<?php
          $itog=mysql_query("SELECT id,title FROM heading ");


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
printf("<option value='%s'>%s</option>",$myrow["id"],$myrow["title"]);
}
while($myrow=mysql_fetch_array($itog));
}
else
{
echo"<p>Данные по запросу не могут быть получены</p>";
exit();
}
?>
</select>
		    </label>
		  </p>
		  
		  <p>
		    <input type="submit" name="button" id="button" value="занести заместу в базу">
		  </p>
        </form></td>
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
