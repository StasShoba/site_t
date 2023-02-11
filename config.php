<?php
/*
This script was downloaded at:
LightPHPScripts.com
Please support us by visiting
out website and letting people
know of it.
Produced under: LGPL
*/

/* Main Options */
//----------------

/* Do you want to send a thank you email */
$sendThankYou = TRUE;

/* Require mental question challenge */
$mentalQuestion = TRUE;

/* Mental question list - the more, the
better secured you are from auto bots */

$mentalQuestionList[] = array("What is the square root of 169?","13");
$mentalQuestionList[] = array("What is the 1.3 divided by .2?","6.5");
$mentalQuestionList[] = array("What is the color of a green fire?","green");
$mentalQuestionList[] = array("LightPHPScripts rocks,true/false?","false");
$mentalQuestionList[] = array("2532 + 5328","7860");


/* Email Options */
//-----------------
/* Admin emails */
$adminEmails = array('shobastas1@tut.by');

/* Site Title */
$siteTitle = 'Demo Contact Form';

/* Email From */
$emailFrom = 'shobastas1@tut.by';

/* Email Charset */
$emailCharset = 'utf-8';

/* Email Title */
$emailTitle = 'Thank you for your contact';

/* Admin Email Title */
$emailAdminTitle = 'You have received a new contact';


/*
For Templates you can use the following variables:
	$+name+$ -> User Name Sending Contact
	$+email+$ -> User Email Sending Contact
	$+message_text+$ -> Contact Message
	$+reason+$ -> Reason For Contact
*/

/* Email Subject */
$emailSubject = '<b>Hi $+name+$,</b></span><br /><br />
	<span align="justify"><b>We have received your contact from '.$siteTitle.'.</b></span><br /><br />
	<span align="justify"><b>Your message was: <font color="blue">$+message_text+$</font></b></span><br /><br />
	<span align="justify"><b>Reason: <font color="blue">$+reason+$</font></b></span><br /><br />
	<span align="justify"><b>We will respond to you asap to the email you provided <font color="blue">$+email+$</font></b></span><br /><br />
	<span align="justify"><b>Till then, please review your request and email us back any changed you might have, </b></span><br /><br />
	<span align="justify"><b>We thank you for your contact, </b></span><br /><br /><br />
	<span align="justify"><b>'.$siteTitle.'</b></span><br />';

/* Admin Email Subject */
$emailSubjectAdmin = '<b>Hi Admin,</b></span><br /><br />
	<span align="justify"><b>You have a new contact @ '.$siteTitle.'.</b></span><br /><br />
	<span align="justify"><b>User name was: <font color="blue">$+name+$</font></b></span><br /><br />
	<span align="justify"><b>User message was: <font color="blue">$+message_text+$</font></b></span><br /><br />
	<span align="justify"><b>User contact reason was: <font color="blue">$+reason+$</font></b></span><br /><br />
	<span align="justify"><b>User email provided <font color="blue">$+email+$</font></b></span><br /><br />
	<span align="justify"><b>'.$siteTitle.'</b></span><br />';

/* End Configurations */

//Function to check for valid email
function is_valid_email($string) {
	return preg_match('/^[.\w-]+@([\w-]+\.)+[a-zA-Z]{2,6}$/', $string);
}


/** SEC 334 **/
?>