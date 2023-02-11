<?php 

include "connect.php";

if(isset($_GET['id'])){$id=$_GET['id'];}
if(isset($_POST['producer'])){$producer=$_POST['producer'];}
if(isset($_POST['country'])){$country=$_POST['country'];}
if(isset($_POST['product'])){$product=$_POST['product'];}
if(isset($_POST['pack'])){$pack=$_POST['pack'];}
if(isset($_POST['goods'])){$goods=$_POST['goods'];}
if(isset($_POST['name'])){$goods=$_POST['name'];}
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
		    
		  <h3 align="center">Редактирование характеристик продуктов</h3>
<?php
/*
if(isset($product))
{
	 if($product=="games"){
  $sql =mysql_query("SELECT id,pack,country,game FROM games ");
  $itog=mysql_fetch_array($sql);
    do{
        printf("<p><a href='lesson_edit2.php?id=%s'>%s</a></p>", $itog["id"], $itog["game"]);
    }
    while($itog=mysql_fetch_array($sql));
	}
	 else
	{
	$sql=mysql_query("SELECT * FROM games WHERE id=$id");
	$itog=mysql_fetch_array($sql);
print <<<HERE
<form name="form1" method="post" action="lesson_update.php">
		  <p>
		    <label >введите название урока
		      </label><br>
		    <input value="$itog[id]" type="text" name="id" id="id">
			
		    </p>
			<p>
		    <label>введите название упаковки</label><br>
		    <input value="$itog[pack]" type="text" name="pack " id="pack ">
			
			 </p>
			 <p>
		    <label>введите страну</label><br>
		    <input value="$itog[country]" type="text" name="country" id="country">
			
		  </p>
		 <p>
		     <label>введите товар</label><br>
		    <input value="$itog[game]" type="text" name="game" id="game">
		    
			  </p>
		   
		  
		  <input name="id" type="hidden" value="$itog[product]">
		  
		  <p>
		    <input type="submit" name="button" id="button" value="занести продукт в базу">
		  </p>
		  </form>	
HERE;
}
  
  if($product=="fruits"){
  $sql2=mysql_query("SELECT id,pack,country,fruit FROM fruits");
  $itog2=mysql_fetch_array($sql2);
  do{
    printf("<p><a href='lesson_edit2.php?id=%s'>%s</a></p>", $itog2["id"], $itog2["fruit"]);
  }
  while($itog2=mysql_fetch_array($sql2));
  }
   else
	{
	$sql2=mysql_query("SELECT * FROM fruits WHERE id=$id");
	$itog2=mysql_fetch_array($sql2);
print <<<HERE
<form name="form1" method="post" action="lesson_update.php">
		  <p>
		    <label >введите название урока
		      </label><br>
		    
			<input value="$itog2[id]" type="text" name="id" id="id">
		    </p>
		 <p>
		     <label>введите страну</label><br>
		    
		    <input value="$itog2[fruit]" type="text" name="fruit" id="fruit">
			  </p>
		   <p>
		    <label>введите название упаковки</label><br>
		    
			<input value="$itog2[pack]" type="text" name="pack " id="pack ">
			 </p>
		  <p>
		    <label>введите страну</label><br>
		    
			<input value="$itog2[country]" type="text" name="country" id="country">
		  </p>
		   <input name="id" type="hidden" value="$itog2[product]">
		  <p>
		    <input type="submit" name="button" id="button" value="занести продукт в базу">
		  </p>
		  </form>	
HERE;
}
}*/

// Games case
// Ouput list of games
if ($product == 'games') {
	$sql = mysql_query("SELECT id,pack,country,goods,producer,name FROM games");
	do {
		printf("<p><a href='lesson_edit2.php?id=%s&product=%s'>%s</a></p>", $itog["id"], $product, $itog["name"]);
		
	}
	
	while($itog = mysql_fetch_array($sql));
}

if ($product == 'fruits') {
	$sql2 = mysql_query("SELECT id,pack,country,goods,producer,name FROM fruits");
	do {
		printf("<p><a href='lesson_edit2.php?id=%s&product=%s'>%s</a></p>", $itog2["id"], $product, $itog2["name"]);
	}
	while($itog2 = mysql_fetch_array($sql2));
}

//Update 
if (isset($id)) {
	$productGet = $_GET['product'];

	if ($productGet == 'games') {
		$sql=mysql_query("SELECT * FROM games WHERE id=$id");
		$itog=mysql_fetch_array($sql);
		$filteredGoods = htmlspecialchars($itog['goods']);
print <<<HERE
<form name="form1" method="post" action="lesson_update.php">
		  <p>
		    <label >введите id урока
		      </label><br>
		    
			<input value="$itog[id]" type="text" name="id" id="id">
		    </p>
		 <p>
		     <label>введите товар</label><br>
		    
		    <input value="$filteredGoods" type="text" name="goods"  id="goods">
			  </p>
		   <p>
		    <label>введите название упаковки</label><br>
		    
			<input value="$itog[pack]" type="text" name="pack" id="pack ">
			 </p>
		  <p>
		    <label>введите страну</label><br>
		    
			<input value="$itog[country]" type="text" name="country" id="country">
		  </p>
		  <p>
		    <label>введите название</label><br>
		    
			<input value="$itog[name]" type="text" name="name" id="name">
		  </p>
		  <p>
		    <label>введите производителя</label><br>
		    
			<input value="$itog[producer]" type="text" name="producer" id="producer">
		  </p>
		   <input name="productName" type="hidden" value="$productGet">
		  <p>
		    <input type="submit" name="button" id="button" value="занести продукт в базу">
		  </p>
		  </form>	

HERE;
		
	}
		
	
	elseif ($productGet == 'fruits') {
		$sql2=mysql_query("SELECT * FROM fruits WHERE id=$id");
	$itog2=mysql_fetch_array($sql2);
$filteredGoods2 = htmlspecialchars($itog2['goods']);
print <<<HERE
<form name="form1" method="post" action="lesson_update.php">
		  <p>
		    <label >введите id урока
		      </label><br>
		    
			<input value="$itog2[id]" type="text" name="id" id="id">
		    </p>
		 <p>
		     <label>введите товар</label><br>
		    
		    <input value="$filteredGoods2" type="text" name="goods"  id="goods">
			  </p>
		   <p>
		    <label>введите название упаковки</label><br>
		    
			<input value="$itog2[pack]" type="text" name="pack" id="pack ">
			 </p>
		  <p>
		    <label>введите страну</label><br>
		    
			<input value="$itog2[country]" type="text" name="country" id="country">
		  </p>
		  <p>
		    <label>введите название</label><br>
		    
			<input value="$itog2[name]" type="text" name="name" id="name">
		  </p>
		  <p>
		    <label>введите производителя</label><br>
		    
			<input value="$itog2[producer]" type="text" name="producer" id="producer">
		  </p>
		   <input name="productName" type="hidden" value="$productGet">
		  <p>
		    <input type="submit" name="button" id="button" value="занести продукт в базу">
		  </p>
		  </form>	
HERE;
	}	
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
