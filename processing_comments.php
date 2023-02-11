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
include ("connect.php");
if(isset($_POST['id'])) {$id=$_POST['id'];}
if(isset($_POST['author'])) {$author=$_POST['author'];}
if(isset($_POST['text'])) {$text=$_POST['text'];}
if(isset($_POST['check'])) {$check=$_POST['check'];}
if(isset($_POST['submit_comm'])) {$submit_comm=$_POST['submit_comm'];}


if(isset($submit_comm))
{
if(isset($author)) {trim(author);}
else {$author="";}

if(isset($text)) {trim(text);}
else {$text="";}

if(empty ($author) or empty ($text))
{exit ("<p> Вы ввели не все данные, вернитесь назад и заполните остальные поля<p>
<input name='anew' type='button' value='Aa?ioouny iacaa'   onclick='javascript:self.back();'>");
}

$author= stripslashes($author);
$text= stripslashes($text);
$author= htmlspecialchars($author);
$text= htmlspecialchars($text);


$itog=mysql_query("SELECT sum FROM options_comments");
$myrow = mysql_fetch_array($itog);

if ($check == $myrow["sum"])
{
$date=date("Y-m-d");
$itog1 = mysql_query("INSERT INTO comm (idea,author,text,date) VALUES('$id','$author','$text','$date')");

$address="www.soprandis@mail.ru";
$theme="iiaue eiiiaioa?ee ia aeiea";
$itog2 = mysql_query("SELECT title FROM note WHERE id='id'");
$myrow2 = mysql_fetch_array($itog2);
$add_title=$myrow2["title"];
$note_text="Появился комментарий к заметке-".$add_title."\nКомментарий добавил(а):".$author."\nТекст комментария:".$text."\nСсылка на заметку:http://localhost/blog_php/show_partition.php?id=".$id."";
mail($address,$theme,$no_text,"Content-type:text/plain; Charset=windows-1251\r\n");
echo 
"<html>
<head>
<meta http-equiv='Refresh' content='0; URL=show_partition.php?id=$id' >
</head>
</html>";
exit();
}
else 
{
exit ("<p>Вы ввели неправильный результат, вернитесь назад и введите правильную сумму с картинки. <p>
<input name='back' type='button' value='Вернуться  назад' onclick='javascript:history.back();'>");
}
}


/*echo "$author, $text0, $check, $submit_comm, $sum";*/



?>
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
