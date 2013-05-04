<?php

class cslPage extends Smarty {
	var $template = null;
	var $xml_file = null;
	function __construct($template,$xml_file=null){
		$this->template = $template;
		$this->xml_file = $xml_file;
		
		$this->template_dir = TEMPLATE_DIR;
		$this->compile_dir = TEMPLATE_DIR . "_c";
	}
	
	
	function render(){
		
	}
}