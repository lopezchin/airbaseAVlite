<?php
/**
 * Hello World! Module Entry Point
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

if(isset($_POST['action'])) {


	$to = "philweb.srwebprogrammer@gmail.com";
	$subject = "Web Test";
	$message = "Test of php sendmail capability.";
	$from = $_POST['email'];

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From:" . $from;
	if(mail($to,$subject,$message,$headers)){
	echo "<br>Sent to: $to ... Sender: $from";
	}else{
	echo "<br>Not sent to: $to ... Sender: $from";
	}


	//Could not instantiate mail function

	 // jimport('joomla.mail.helper');

	 //  $mailer =& JFactory::getMailer();

	 //  $config =& JFactory::getConfig();
	 
	 //  $mailer->setSender($_POST['email']);

	 //  $recipient = 'philweb.srwebprogrammer@gmail.com';
	 //  $mailer->addRecipient($recipient);

	 //  $body   = "<body><br><p>"; 
	 //  $body   .= "<strong>".$_POST['email']."</strong>&nbsp;";   
	 //  $body   .= "</p><br></body>";

	 //  $mailer->isHTML(true);
	 //  $mailer->Encoding = 'base64';
	 //  $mailer->setBody($body);


	 //  $send =& $mailer->Send();
	 // // echo $send;

	 // // echo '<br>';

	 //  if ( $send != true ) {
	 //        echo 'Error sending email: ' . $send->message;
	 //    //return false;
	        
	 //  } else {
	        
	 //        echo 'Mail sent';

	 //       //return true;
	 //  }


    die(); return '';//json_decode( array('test' => $test) );

 } 



// Include the syndicate functions only once
require_once( dirname(__FILE__).'/helper.php' );
 
$lists = modCaseStudiesHelper::getCaseStudyCategory();
require( JModuleHelper::getLayoutPath( 'mod_case_studies_category' ) );
?>