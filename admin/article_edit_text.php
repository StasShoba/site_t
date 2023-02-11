 <?php include("connect.php");
 if (isset($_GET['id'])) {$id = $_GET['id'];}
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
	<h3 align="center">Редактирование заметки</h3>
	<?php 
	if (!isset($id))
	{
	$itog=mysql_query("SELECT title,id FROM note");
	$mas=mysql_fetch_array($itog);
	do
	{
	printf("<p><a href='article_edit_text.php?id=%s'>%s</a></p>",$mas["id"],$mas["title"]);
    }
	while($mas=mysql_fetch_array($itog));
	}
	else
	{
	$itog=mysql_query("SELECT * FROM note WHERE id=$id");
	$mas=mysql_fetch_array($itog);
	
	$itog1=mysql_query("SELECT * FROM heading");
	$mas1=mysql_fetch_array($itog1);
	
	
	
echo "<form name='form1' method='post' action='article_update_text.php'>
<p>Выберите раздел<br><select name='partition'>";

do
{
if($mas['heading_r'] == $mas1['id'])
{
printf("<p><option value='%s' selected>%s</option>",$mas1["id"],$mas1["title"]);
}
else
{
printf("<p><option value='%s'>%s</option>",$mas1["id"],$mas1["title"]);
}
}
while($mas1=mysql_fetch_array($itog1));
echo "</select></p>";


print <<<HERE

		  <p>
		    <label for="title">введите название статьи<br>
		      </label>
		    <input value="$mas[title]" type="text" name="title" id="title" size="50">
		    </p>
		  <p>
		    <label for="meta_key">введите ключевые слова<br>
		    </label>
		    <input value="$mas[meta_key]" type="text" name="meta_key" id="meta_key"size="50">
		  </p>
		  <p>
		    <label for="meta_desc">введите краткое описание статьи</label>
		  </p>
		  <p>
		    <input value="$mas[meta_desc]" type="text" name="meta_desc" id="meta_desc"size="50">
		    </p>
		  <p>
		    <label for="date">введите дату добавления урока<br>
		    </label>
		    <input value="$mas[date]" type="text" name="date" id="date">
		  </p>
		  <p>
		    <label for="description">введите описание статьи</label>
		  </p>
		  <p>
		    <textarea name="description" id="description" cols="55" rows="5"size="50">$mas[description]</textarea>
		    </p>
		  <p>
		    <label for="text">введите текст полного статьи</label>
		  </p>
		  <p>
		    <textarea name="text" id="text" cols="55" rows="22">$mas[text]</textarea>
		    </p>
			
		  <p>
		    <label for="author">автор статьи<br>
		    <input value="$mas[author]" type="text" name="author" id="author"size="50">
		   </label>
		  </p>
		   <p>
		    <label for="resolution">резолюция<br>
		    <input value="$mas[resolution]" type="text" name="resolution" id="resolution">
		   </label>
		  </p>
		  
		  		  <p>
		    <label for="author">ввведите адрес где лежит картинка<br>
		    <input value="$mas[icon]" type="text" name="icon" id="icon"size="50">
		   </label>
		  </p>
		  
		  
		  <input name="id" type="hidden" value="$mas[id]">
		  <p>
		    <input type="submit" name="button" id="button" value="обнавить статью в базе">
		  </p>
</form>	
HERE;
}
		
		?>
		

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
