<?php
  class clsPage extends clsPage_base {
       function render(){
           global $app;
           debugLog($_POST);
       if ( $_POST['loginbutton'] ){
			debugLog("Login submitted");
		   if ( $_POST['login']['email'] == "" || $_POST['login']['password'] == "" ){
			   $errMsg = "Please enter an e-mail address and password.";		
			   $_POST['login']['password'] = "";	// make sure the password field is clear
			   debugLog("No info entered");
		   } else {
			// check their login credentials
			
				if ( $app->user->login($_POST['login']['email'],$_POST['login']['password'])){
					// login success
					debugLog("Success!");
					if ( $_POST['redir'] != "" ){
						header("location: " . $_POST['redir']);
					} else {
						header("location: " . $app->settings->getVal('site_url') . "/myaccount");
					}
					exit;
				} else {
					// login failed	
					debugLog("Failed!");
					$errMsg = "Incorrect Login!";
					$_POST['login']['password'] = "";
				}	
			}
		}
		
		if ( $_GET['logout'] ){
			debugLog("logout");
			$app->user->logout();
			$errMsg = "You have been logged out successfully!";
		}
		
			$this->assign("redir",$_GET['redir']);
	   
		   $this->assign("err_msg",$errMsg);
		   $this->assign("login",$_POST['login']);
           $this->display($this->template);

       }
  }
?>