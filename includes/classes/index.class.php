<?php

class clsPage extends clsPage_base {
	function render(){
		global $app;
		$this->display($this->template);
	}	
}

?>