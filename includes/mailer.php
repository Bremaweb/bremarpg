<?php
require_once(APP_DIR . '/includes/phpMailer/class.phpmailer.php');

$mailer = new phpMailer(true);
$mailer->IsSMTP();
$mailer->SMTPAuth = true;
$mailer->Username = "";
$mailer->Password = "";
$mailer->Host = "";
$mailer->Port = "";
$mailer->SMTPSecure = "";
$mailer->Mailer = "smtp";

$mailer->AddReplyTo('', '');
$mailer->SetFrom('', '');

debugLog($mailer);

function sendTemplateEmail($to,$subject,$template,$template_data,$bcc="",$reply_to=""){
global $app;
debugLog("sendTemplateEmail($to,$subject,$template,$template_data,$bcc,$reply_to)");

	$smarty = new Smarty;
	
	$smarty->template_dir = TEMPLATE_DIR;
	$smarty->compile_dir = TEMPLATE_DIR . "_c";
	
	$smarty->assign("data",$template_data);
	
	$smarty->assign("site_url",$app->settings->getVal('site_url'));
	
	$htmlMsg = $smarty->fetch($template);
	
	return sendEmail($to,$subject,$htmlMsg,$bcc,$reply_to);
}

function sendEmail($to,$subject,$message,$bcc="",$reply_to=""){
debugLog("sendEmail($to,$subject,$message,$bcc,$reply_to)");
debugLog($mailer);
	global $app;
	global $mailer;
	try {
		$mailer->MsgHTML($message);
		if ( is_array($to) ) {
			foreach ( $to as $v )
				$mailer->AddAddress($v);
		} else {
			$mailer->AddAddress($to);
		}
		
		if ( $bcc )
			$mailer->AddBCC($bcc);
		
		if ( $reply_to ){
			$mailer->ClearReplyTos();
			$mailer->AddReplyTo($reply_to);
		}
		
		$mailer->Subject = $subject;
		
		$mailer->Send();
	} catch ( phpMailerException $e ){
		errorLog("phpMailerException: " . $e->errorMessage());
		$app->cacheMail($mailer);
		return false;
	}
	resetMailer();
	return true;
}

function resetMailer(){
	// clears all names and messages
	global $mailer;
	$mailer->ClearAllRecipients();
	$mailer->ClearAttachments();
	$mailer->ClearCustomHeaders();
}

  function sendTestMessage(){
    global $mailer;
    $mailer->Body = "This is a test message from ITP";
    $mailer->Subject = "Email Subject";
    $mailer->AddAddress("brandon.reese@gmail.com","Brandon Bohannon");    
    if ( $mailer->Send() )
        echo "Message Sent";
    else
        echo $mailer->ErrorInfo;
  }
?>
