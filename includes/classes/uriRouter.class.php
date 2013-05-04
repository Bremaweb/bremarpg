<?php

class uriRouter {

	var $routes = array();
	var $uriList = array();
	var $params;
	function routeAdd($uri,$class,$template,$xml_file=""){
		$this->routes["{$uri}"]['class'] = $class;
		$this->routes["{$uri}"]['template'] = $template;
		$this->routes["{$uri}"]['xml_file'] = $xml_file;
		$this->routes["{$uri}"]['uri'] = $uri;
		
		$this->uriList[] = $uri;
	}
	
	function getRoute($requestURI){
		global $settings;
			//$requestURI = rtrim($requestURI,'/');
		  debugLog("Original URI: " . $requestURI);
		  $parpos = strpos($requestURI,"?");
		  if (  $parpos !== false ){
			// strip the parameters off the end of the requesturi
			debugLog("parpos: " . $parpos);
			$requestURI = substr($requestURI,0,$parpos);
		  }
		  
		  $requestURI = rtrim(str_replace(BASE_URI,"",$requestURI),"/");
		  
		  $this->params = explode("/",$requestURI);
		  //$requestURI = "/" . $this->params[1];
		  
		  debugLog("Mod URI: " . $requestURI);
		  debugLog($this->params);
		  debugLog($this->uriList);
		foreach ( $this->uriList as $v ){
			
				$subRoute = substr($requestURI,0,strlen($v));
				debugLog("Route: " . $subRoute);
				debugLog("File: " . $v);
			  if ( $subRoute == $v ){
				$sRoute = $this->routes["{$subRoute}"];
				debugLog("Found route entry");
				debugLog($sRoute);
				if ( file_exists(APP_DIR . "/includes/classes/" . $sRoute['class'] . ".class.php") && file_exists(TEMPLATE_DIR . "/" . $sRoute['template'] . ".html")  ){
					include(APP_DIR . "/includes/classes/" . $sRoute['class'] . ".class.php");
						$route=array();
						debugLog("create page class");
						try {
							$route['page'] = new clsPage($sRoute['template'],$sRoute['xml_file'],$this->params,$requestURI,$this->menu);
						} catch (Exception $e) {
							debugLog("Exception: " . $e->message);
						}
						return $route;
				} else {
					header("Status: 404 Not Found");
					echo "404 FILE NOT FOUND - Missing Class or Template<br />";
					exit;
				}
			}
		}  
				// undefined route
					header("Status: 404 Not Found");
					echo "404 FILE NOT FOUND - Undefined Route";
					exit;
			 
			
	}

	function go(){
		global $app;
		
		$app->user->restoreSession($_COOKIE['mpn_sessid']);
		
		$route = $this->getRoute($_SERVER['REQUEST_URI']);
		debugLog("render page");
		//debugLog($route);
		$route['page']->render();
	}
}

?>
