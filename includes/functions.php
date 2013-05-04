<?php

function xml2array($url, $get_attributes = 1, $priority = 'tag')
{
    $contents = "";
    if (!function_exists('xml_parser_create'))
    {		
        return array ();
    }
    $parser = xml_parser_create('');
    if (!($fp = @ fopen($url, 'rb')))
    {
        return array ();
    }
    while (!feof($fp))
    {
        $contents .= fread($fp, 8192);
    }
    fclose($fp);
    xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8");
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, trim($contents), $xml_values);
    xml_parser_free($parser);
    if (!$xml_values)
        return; //Hmm...
    $xml_array = array ();
    $parents = array ();
    $opened_tags = array ();
    $arr = array ();
    $current = & $xml_array;
    $repeated_tag_index = array (); 
    foreach ($xml_values as $data)
    {
        unset ($attributes, $value);
        extract($data);
        $result = array ();
        $attributes_data = array ();
        if (isset ($value))
        {
            if ($priority == 'tag')
                $result = $value;
            else
                $result['value'] = $value;
        }
        if (isset ($attributes) and $get_attributes)
        {
            foreach ($attributes as $attr => $val)
            {
                if ($priority == 'tag')
                    $attributes_data[$attr] = $val;
                else
                    $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr'
            }
        }
        if ($type == "open")
        { 
            $parent[$level -1] = & $current;
            if (!is_array($current) or (!in_array($tag, array_keys($current))))
            {
                $current[$tag] = $result;
                if ($attributes_data)
                    $current[$tag . '_attr'] = $attributes_data;
                $repeated_tag_index[$tag . '_' . $level] = 1;
                $current = & $current[$tag];
            }
            else
            {
                if (isset ($current[$tag][0]))
                {
                    $current[$tag][$repeated_tag_index[$tag . '_' . $level]] = $result;
                    $repeated_tag_index[$tag . '_' . $level]++;
                }
                else
                { 
                    $current[$tag] = array (
                        $current[$tag],
                        $result
                    ); 
                    $repeated_tag_index[$tag . '_' . $level] = 2;
                    if (isset ($current[$tag . '_attr']))
                    {
                        $current[$tag]['0_attr'] = $current[$tag . '_attr'];
                        unset ($current[$tag . '_attr']);
                    }
                }
                $last_item_index = $repeated_tag_index[$tag . '_' . $level] - 1;
                $current = & $current[$tag][$last_item_index];
            }
        }
        elseif ($type == "complete")
        {
            if (!isset ($current[$tag]))
            {
                $current[$tag] = $result;
                $repeated_tag_index[$tag . '_' . $level] = 1;
                if ($priority == 'tag' and $attributes_data)
                    $current[$tag . '_attr'] = $attributes_data;
            }
            else
            {
                if (isset ($current[$tag][0]) and is_array($current[$tag]))
                {
                    $current[$tag][$repeated_tag_index[$tag . '_' . $level]] = $result;
                    if ($priority == 'tag' and $get_attributes and $attributes_data)
                    {
                        $current[$tag][$repeated_tag_index[$tag . '_' . $level] . '_attr'] = $attributes_data;
                    }
                    $repeated_tag_index[$tag . '_' . $level]++;
                }
                else
                {
                    $current[$tag] = array (
                        $current[$tag],
                        $result
                    ); 
                    $repeated_tag_index[$tag . '_' . $level] = 1;
                    if ($priority == 'tag' and $get_attributes)
                    {
                        if (isset ($current[$tag . '_attr']))
                        { 
                            $current[$tag]['0_attr'] = $current[$tag . '_attr'];
                            unset ($current[$tag . '_attr']);
                        }
                        if ($attributes_data)
                        {
                            $current[$tag][$repeated_tag_index[$tag . '_' . $level] . '_attr'] = $attributes_data;
                        }
                    }
                    $repeated_tag_index[$tag . '_' . $level]++; //0 and 1 index is already taken
                }
            }
        }
        elseif ($type == 'close')
        {
            $current = & $parent[$level -1];
        }
    }
    return ($xml_array);
}

function errorLog($txt){
	
      	$el = fopen(APP_DIR . "/logs/error_" . date("m-d-Y") . ".txt", "a+");
      		fwrite($el,"[" . date("m/d/Y H:i:s") . "] " . $txt . "\r\n");
      	fclose($el);      	
}
      
function debugLog($txt){

    if ( DEBUG ){
		$debugFile = APP_DIR . "/logs/debug_" . date("m-d-Y") . ".txt";
		if ( is_array($txt) || is_object($txt) ){
		@ksort($txt);
		ob_start();
			print_r($txt);
		$buff = ob_get_clean();
	
		$txt = $buff;
	}
	
		$text = "[" . date("m/d/Y H:i:s") . "] " . $txt;
		$h = fopen($debugFile,"a+");
			fwrite($h,$text . "\r\n");
		fclose($h);
	}
}

function getTileExits($coords){
global $app;
	$retVal = array();
	
		// north
		$SQL = "SELECT tile_id FROM tiles WHERE tile_x = " . $coords['x'] . " AND tile_y = " . ( $coords['y'] + 1 ) . " AND tile_z = " . $coords['z'];
		$results = $app->db->query($SQL);
		if ( $app->db->numrows($results) > 0 ){
			$r = $app->db->fetchrow($results);
			$retVal['north'] = array('tile_id'=>$r['tile_id']);
		}
		debugPrint($SQL);
		// south
		$SQL = "SELECT tile_id FROM tiles WHERE tile_x = " . $coords['x'] . " AND tile_y = " . ( $coords['y'] - 1 ) . " AND tile_z = " . $coords['z'];
		$results = $app->db->query($SQL);
		if ( $app->db->numrows($results) > 0 ){
			$r = $app->db->fetchrow($results);
			$retVal['south'] = array('tile_id'=>$r['tile_id']);
		}
		debugPrint($SQL);
		// east
		$SQL = "SELECT tile_id FROM tiles WHERE tile_x = " . ($coords['x'] + 1) . " AND tile_y = " . ( $coords['y'] ) . " AND tile_z = " . $coords['z'];
		$results = $app->db->query($SQL);
		if ( $app->db->numrows($results) > 0 ){
			$r = $app->db->fetchrow($results);
			$retVal['east'] = array('tile_id'=>$r['tile_id']);
		}
		debugPrint($SQL);
		// west
		$SQL = "SELECT tile_id FROM tiles WHERE tile_x = " . ($coords['x'] - 1) . " AND tile_y = " . ( $coords['y']  ) . " AND tile_z = " . $coords['z'];
		$results = $app->db->query($SQL);
		if ( $app->db->numrows($results) > 0 ){
			$r = $app->db->fetchrow($results);
			$retVal['west'] = array('tile_id'=>$r['tile_id']);
		}
		debugPrint($SQL);
		
	return $retVal;
}


function activityLog($tile_id,$user_id,$activity_message,$activity_js=""){
global $app;

	$SQL = "INSERT INTO activity ( activity_dt, tile_id, user_id, activity_message, activity_js ) values(" . round(microtime(true),2) . "," . $tile_id . "," . $user_id . ",'" . addslashes($activity_message) . "','" . addslashes($activity_js) . "')";
	$app->db->query($SQL);
	debugLog($SQL);
}

function resampimagejpg( $forcedwidth, $forcedheight, $sourcefile, $destfile )
{
    $fw = $forcedwidth;
    $fh = $forcedheight;
    $is = getimagesize( $sourcefile );
    if( $is[0] >= $is[1] )
    {
        $orientation = 0;
    }
    else
    {
        $orientation = 1;
        $fw = $forcedheight;
        $fh = $forcedwidth;
    }
    if ( $is[0] > $fw || $is[1] > $fh )
    {
        if( ( $is[0] - $fw ) >= ( $is[1] - $fh ) )
        {
            $iw = $fw;
            $ih = ( $fw / $is[0] ) * $is[1];
        }
        else
        {
            $ih = $fh;
            $iw = ( $ih / $is[1] ) * $is[0];
        }
        $t = 1;
    }
    else
    {
        $iw = $is[0];
        $ih = $is[1];
        $t = 2;
    }
    if ( $t == 1 )
    {
        $img_src = imagecreatefromjpeg( $sourcefile );
        $img_dst = imagecreatetruecolor( $iw, $ih );
        imagecopyresampled( $img_dst, $img_src, 0, 0, 0, 0, $iw, $ih, $is[0], $is[1] );
        if( !imagejpeg( $img_dst, $destfile, 90 ) )
        {
            exit( );
        }
    }
    else if ( $t == 2 )
    {
        copy( $sourcefile, $destfile );
    }
}
 
function isCli() {
 
     if(php_sapi_name() == 'cli' && empty($_SERVER['REMOTE_ADDR'])) {
          return true;
     } else {
          return false;
     }
}

// for backward compatibility
function debugPrint($txt){
	debugLog($txt);
}


?>