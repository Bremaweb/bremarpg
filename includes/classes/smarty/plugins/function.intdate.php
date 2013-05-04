<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {math} function plugin
 *
 * Type:     function<br>
 * Name:    intdate<br>
 * Purpose:  formate a unix timestamp into a date string<br>
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param array
 * @param Smarty
 * @return string
 */

 function smarty_function_intdate($params, &$smarty){
 
	if ( $params['format'] == "" )
		$params['format'] = "m/d/Y";
	
	if ( $params['date'] == "0" | $params['date'] == "" )
		$strDate = "";
	else
		$strDate = date($params['format'],$params['date']);
	
	return $strDate;
 }
 ?>