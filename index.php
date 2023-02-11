<?php
ob_start(); 
include "set-cookie.php";
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

<table width="1700" height="989" border="0,0001">
  <tr>
    <td height="42" colspan="6" bgcolor="#333333" valign="center">
	 
      
       <?php include ("section/searchform.php");?></td>
  </tr>
  <tr> 
    <td height="32" colspan="6" bgcolor="e4b998"><?php include ("section/horizontalmenu.php");?></td>
  </tr>

  <tr>
    <td width="195" rowspan="3" valign="top" background="img/s.jpg"><?php include("section/menu.php")?>	 </td>
    <td height="220" colspan="5" background="img/top.jpg" align="center" ><?php include("login2.php")?></td>
  </tr>
  <tr>
    <td height="160" colspan="6"  background="img/middle.jpg" align="center"><div align="center"><br/>sort by: <?php
include "connect.php";
$countries = array(
  'Africa'=>'Africa',
  'Brazil'=>'Brazil',
  'New_Zeland'=>'New_Zeland',
    
);
$countriesSelect = "<select name='countries' id='contries' onchange='changeEventCountry()'>";
foreach ( $countries as $k => $v ) {
$countriesSelect .= "<option value='$k'>$v</option>";
}
$countriesSelect .= "</select>";

$producer = array(
  'ABS'=>'ABS',
  'CRM'=>'CRM',
  'BP' =>'BP',
 );
$producersSelect = "<select name='producers' id='producers'>";
foreach ( $producer as $k => $v ){
  $producersSelect .= "<option value='$k'>$v</option>";
}
$producersSelect .= "</select>";
$product = array(
  'games'=>'games',
  'fruits'=>'fruits',
  
 );
$productSelect = "<select name='product' id='product'>";
foreach ( $product as $k => $v ){
  $productSelect .= "<option value='$k'>$v</option>";
}
$productSelect .= "</select>";

$pack = array(
  'box'=>'box', 
  'middle_box'=>'middle_box',
  'big_box'=>'big_box',
    
);
$packsSelect = "<select name='packs' id='packs'>";
foreach ( $pack as $k => $v ) {
  $packsSelect .= "<option id='packs' value='$k'>$v</option>";
}
$packsSelect .= "</select>";

echo "<form method='post'>";
echo $countriesSelect.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;';
echo $producersSelect.'&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;';
echo $packsSelect.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;';
echo $productSelect.'&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;';
echo "<input type='submit' name='submit' value='submit' />";
echo "</form>";
echo '&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;';
?>


<?php

require_once "pagination.php";

 $countryFilter = $_POST['country'];
 $producerFilter = $_POST['producer'];
 $packsFilter = $_POST['pack'];
 $productFilter = $_POST['product'];
 $name = $_POST['name'];


 $countryFilterGet = $_GET['country_filter'] ? $_GET['country_filter'] : $countryFilter;
 $producerFilterGet = $_GET['producer_filter'] ? $_GET['producer_filter'] : $producerFilter;
 $packsFilterGet = $_GET['packs_filter'] ? $_GET['packs_filter'] : $packsFilter;
 $productFilterGet = $_GET['product_filter'] ? $_GET['product_filter'] : $productFilter;



if (!isset($_POST['submit'])) {
	$productFilterGet = $productFilterGet ? $productFilterGet : 'fruits';
	$countryFilterGet = $countryFilterGet ? $countryFilterGet : 'Africa';
	$producerFilterGet = $producerFilterGet ? $producerFilterGet : 'box';
	$packsFilterGet = $packsFilterGet ? $packsFilterGet : 'pack';
	$productFilterGet = $productFilterGet ? $productFilterGet : 'Apple';
	switch($productFilterGet) {
		case 'games':
			$sql = "SELECT * FROM games";
			break;
		case 'fruits':
			$sql = "SELECT * FROM fruits";
			break;
		default:
			$sql = "SELECT * FROM fruits";
			break;  
	}
	$sql .= " WHERE pack='{$packsFilterGet}' AND country='{$countryFilterGet}' AND producer='{$producerFilterGet}'";
	
} else {
//    array(5) { ["countries"]=> string(6) "Africa" ["producers"]=> string(3) "ABS" ["packs"]=> string(10) "middle_box" ["product"]=> string(5) "games" ["submit"]=> string(6) "submit" } string(3) "ABS"

    $productFilterGet = $_POST['product'];
    $countryFilterGet = $_POST['countries'];
    $producerFilterGet = $_POST['producers'];
    $packsFilterGet = $_POST['packs'];
	$name = $_POST['name'];

    switch($productFilterGet) {
        case 'games':
			$sql = "SELECT * FROM games";
			break;
		case 'fruits':
			$sql = "SELECT * FROM fruits";
			break;
		default:
			$sql = "SELECT * FROM fruits";
			break;  
    }
	$sql .= " WHERE pack='{$packsFilterGet}' AND country='{$countryFilterGet}' AND producer='{$producerFilterGet}'";

}


if ($countryFilterGet && $producerFilterGet && $packsFilterGet && $productFilterGet) {

	if (!isset($_POST['submit'])) {
		if ($productFilterGet == 'games')$sql = "SELECT * FROM games";
		if ($productFilterGet == 'fruits')$sql = "SELECT * FROM fruits";
	}	
}

	 $pager = new PS_Pagination($globalConnect, $sql, 12, 4, "country_filter={$countryFilterGet}&producer_filter={$producerFilterGet}&packs_filter={$packsFilterGet}&product_filter={$productFilterGet}");

	$currentIndex =  0;
	
	$rs = $pager->paginate();

	$arrData = array();
	
	$curIndex = 0;
	$tableNew ="<table id='resultData'>";
	$tableNew .= "<tr>";
	while($row = mysql_fetch_assoc($rs)) {
		if (isset($_POST['submit'])) {
			$curIndex++;
			
			if($curIndex == 3) {
				$curIndex = 1;
			}
		
			if($curIndex == 1) {
				$tableNew .= "<td>";	
			}

            $tableNew .= "<a href=\"add_to_cart.php?product_id=".(int)$row['id']."&product_type='{$productFilterGet}'&name=".$row['name']."\">".$row['goods']."</a>";
			$tableNew .= "<br/>";
	
			if($curIndex == 2) {
				$tableNew .= "</td>";	
			}
		} else {
			$curIndex++;
			
			if($curIndex == 3) {
				$curIndex = 1;
			}
		
			if($curIndex == 1) {
				$tableNew .= "<td>";	
			}	
			
			$tableNew .= "<a href=\"add_to_cart.php?product_id=".(int)$row['id']."&product_type='{$productFilterGet}'&name=".$row['name']."\">".$row['goods']."</a>";
			$tableNew .= "<br/>";
	
			if($curIndex == 2) {
				$tableNew .= "</td>";	
			}
		}
	}
	$tableNew .= "</tr>";
	$tableNew .= "</table>";
	
	echo $tableNew;
	
	echo '<br/>';

	echo $pager->renderFullNav();		
	
	echo "<hr/>";
	echo "<hr/>";
	    

?>	


</div></td>
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
