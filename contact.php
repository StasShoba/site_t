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
    <td height="160" colspan="6"   bgcolor="#99CC66" align="center">
<?php
/*
This script was downloaded at:
LightPHPScripts.com
Please support us by visiting
out website and letting people
know of it.
Produced under: LGPL
*/

/* Config File */
include_once('config.php');


/* Are we submitting form */
if($_POST['submitID'] == 1){

	/* Check user entered variables */
	if($_POST['name'] == NULL){ $message = 'Please enter your name.';}
	if($message == NULL && is_valid_email($_POST['email']) == false ){ $message = 'Please enter a valid email.';}
	if($_POST['messageText'] == NULL && $message == NULL){ $message = 'Please enter a comment.';}	
	
	/* Check Mental Question */
	if($mentalQuestion == TRUE)
	{
		foreach($mentalQuestionList as $question) {if($question[0] == $_POST['question']){$answer = $question[1];}}
		if($answer != $_POST['finalAnswer'] || $answer == NULL)
		{
			$message = 'Your answer to "'.$_POST['question'].'" is invalid.';
		}
	}
	/* Actual sending */
	if($message == NULL){

		/* Compose messages */
		$doSearch = array('$+name+$','$+email+$','$+message_text+$','$+reason+$');
		$doReplace = array($_POST['name'],$_POST['email'],$_POST['messageText'],$_POST['reason']);
		/* Compose headers */
		$headers = "Return-Path: ".$siteTitle." <".$emailFrom.">\r\n"; 
		$headers .= "From: ".$siteTitle." <".$emailFrom.">\r\n";
		$headers .= "Content-Type: text/html; charset=".$emailCharset.";\n\n\r\n"; 

		$file = "data.txt";
		$fileHandle = fopen($file, 'a') or die("Error opening file");
		 
		$data = "Name:".$_POST['name']."\n";
		$data .= "E-mail:".$_POST['email']."\n";
		$data .="Reason:".$_POST['reason']."\n";
		$data .= "Message:".$_POST['messageText']."\n";
		
		$data .= "\n";
		fwrite($fileHandle, $data); // write data to file 		 
		fclose($fileHandle); // close the file since we're done

		/* Send Thank you Email */
		if($sendThankYou == TRUE){
			$userMessage = str_replace($doSearch,$doReplace,$emailSubject);
			//Send Thank you
			mail ($_POST['email'],$emailTitle,$userMessage,$headers);	
		}
		
		$adminMessage = str_replace($doSearch,$doReplace,$emailSubjectAdmin);
		
		/* Send Admin Emails */
		if(count($adminEmails) > 0){			
			foreach($adminEmails as $thisEmail){
				mail($thisEmail,$emailAdminTitle,$adminMessage,$headers);	
			}
		}

		$message = 'Your contact has been sent, thank you.';
		$_POST = NULL;
		

	}
}
if($message != NULL){
?>
<table width="100%"  border="0" cellpadding="5" cellspacing="0" bgcolor="#FF8080">
  <tr>
    <td bgcolor="#FFD5D5"><font color="#FF0000"><?=$message;?></font></td>
  </tr>
</table>
<br/>
<?php } ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="contact" id="contact" style="display:inline;">
<table width="100%"  border="0" align="left" cellpadding="5" cellspacing="0">
	<tr>
	  <td>Name:</td>
		<td><input name="name" type="text" id="name" value="<?php echo $_POST['name'];?>"></td>
	</tr>
	<tr>
	  <td>Email:</td>
		<td><input name="email" type="text" id="email" value="<?php echo $_POST['email'];?>"></td>
	</tr>
	<tr>
	  <td>Reason for contact: </td>
		<td><select name="reason" id="reason" style="width:154px;">
		<?php if($_POST['reason'] == 'Support' || $_POST['reason'] == NULL){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Support"<?=$sel;?>>Support</option>
		<?php if($_POST['reason'] == 'Billing'){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Billing"<?=$sel;?>>Billing</option>
		<?php if($_POST['reason'] == 'Complaints'){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Complaints"<?=$sel;?>>Complaints</option>
		<?php if($_POST['reason'] == 'Other'){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Other<?=$sel;?>">Other</option>
	  </select></td>
	</tr>
	<tr>	
	  <td>Message:</td>
		<td><textarea name="messageText" cols="40" rows="4" id="messageText"><?php echo $_POST['messageText'];?></textarea></td>
	</tr>
	<?php
	if($mentalQuestion == TRUE)
	{
		$random = rand(0,count($mentalQuestionList)-1);
		$question = $mentalQuestionList[$random][0];
	?>
	<tr>
	  <td><?php echo $question;?></td>
		<td>		
		  <input name="finalAnswer" type="text" id="finalAnswer" value="<?php echo $_POST['finalAnswer'];?>" /></td>
	</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="2"><div align="center">
		<input type="submit" name="Submit" value="Send Contact">
		<input type="hidden" id="question" name="question" value="<?php echo $question;?>">
		<input name="submitID" type="hidden" id="submitID" value="1">
		</div></td>
	</tr>
	<tr>
	  <td colspan="2"><div align="right"><a href="http://www.tut.by" target="_blank"><font size="1">Powered Stanislav Shoba</font></a></div></td>
	</tr>
</table>     
</form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button title="Страница 23" onClick="location.href='//localhost/site_t/index.php';"
 style="border-radius: 5px; box-shadow: 0px 1px 3px; 
font-size: 14px;">Кнопка на главную</button>


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
