<?php

class clsPageReqLogin_base extends Smarty {
	var $template = null;
	var $xml_file = null;
	
	function __construct($template,$xml_file,$params=""){
		global $app;
		if ( $app->user->loggedIn == false ){
			header("location: " . $app->settings->getVal('site_url') . "/login?redir=" . $_SERVER['REQUEST_URI']);
			exit;
		}
	
			$this->template=$template . ".html";
			$this->xml_file = $xml_file;
			
			$this->template_dir = TEMPLATE_DIR;
			$this->compile_dir = TEMPLATE_DIR . "_c";
			$this->addPluginsDir(SMARTY_DIR . "plugins");
			
		if ( $this->xml_file != null ){
			debugLog("Has XML File: " . APP_DIR . "/xml_data/" . $this->xml_file);
			// load the XML data;
			$xml = simplexml_load_file(APP_DIR . "/xml_data/" . $this->xml_file);
			if ( $xml ){
				debugLog($xml->meta);
				$this->assign("meta",$xml->meta);
				$this->assign("js",explode(";", $xml->js) );
				$this->assign("content",$xml->content);
			} else {
				debugLog("XML Error");
			}
		}
		
		global $app;
		$this->assign("params",$params);
		$this->assign("site_url",$app->settings->getVal('site_url'));
		$this->assign("image_url",$app->settings->getVal('image_url'));
		$this->assign("user",$app->user);
		$this->assign("inAdmin",true);
		
	}

	function render(){		
		$this->display($this->template);
	}
}

?>