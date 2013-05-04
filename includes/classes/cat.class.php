<?php

class clsPage extends clsPage_base {

	function render(){
		global $app;
		
		$SQL = "SELECT cat_name FROM categories WHERE cat_slug = '" . $app->router->params[1] . "'";
		$catRow = $app->db->queryrow($SQL);
		debugLog($SQL);
		$this->assign("cat_name",$catRow['cat_name']);
		$this->display($this->template);
	}

}

?>