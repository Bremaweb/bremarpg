<?php
class clsSettings{
  public $settingValues = array();
            
      function loadSettings(){
        global $app;
		global $settings;
		$this->settingValues = $settings;
      }
        
        function getVal($sName){
            return $this->settingValues["$sName"]; 
        }
        
       
  }
?>
