<?php
  class application {
      public $db;
      var $page;
      var $settings;
	  var $path;
	  public $init;
      public $user;
	  public $logUrl;
	  public $router;
	  
      function __construct(){
	  
		debugLog("application construc");
			$this->init=false;
			
			$this->db = new dbClass("10.0.0.225","3306","rpg2011","root","dbpa55");
			
			$this->path = dirname(dirname(__FILE__));
			
	        $this->settings = new clsSettings();
			
			debugLog("db");
			debugLog($this->db);
			
			$this->user = new user();
			
			
	        $this->init=true;
      }

      function cacheMail($mailObject){
      	// here we serialize the mailer object and store it in a file to attempt to mail it later
      	$smailObject = serialize($mailObject);
      	$fh = fopen($this->path . "\mail_spool\\" . md5(time() . $user['user_email']),"w+");
			fwrite($fh,$smailObject);			
		fclose($fh);
      }

  }
?>
