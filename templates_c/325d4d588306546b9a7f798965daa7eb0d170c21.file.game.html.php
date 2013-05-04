<?php /* Smarty version Smarty-3.0.8, created on 2012-12-26 10:43:40
         compiled from "/home/brandon/web-code.local/bremarpg-code/templates/game.html" */ ?>
<?php /*%%SmartyHeaderCode:47657369550db293cb6ce83-92943085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325d4d588306546b9a7f798965daa7eb0d170c21' => 
    array (
      0 => '/home/brandon/web-code.local/bremarpg-code/templates/game.html',
      1 => 1355715073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47657369550db293cb6ce83-92943085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<div id="game_right">
	<div id="tile_title">&nbsp;</div>
	<div id="tile_desc">&nbsp;</div>
	
	<div id="tile_items">&nbsp;</div>
	<div style="text-align: left;">
	<b>Who is here:</b><br />
	<div id="tile_users">&nbsp;</div>
	</div>
	<b>Messages</b>
	<div id="messages">&nbsp;</div>
	Chat <input type="text" id="chat_input" size="89" style="border: solid 1px #000000;" onkeypress="return checkKeyPress(event);" />
	<div style="clear: both;"></div>
</div>
<div id="game_left">
<center>
	<input type="hidden" class="dir-tile-id" id="north_tile_id" value="" />
	<input type="hidden" class="dir-tile-id" id="south_tile_id" value="" />
	<input type="hidden" class="dir-tile-id" id="east_tile_id" value="" />
	<input type="hidden" class="dir-tile-id" id="west_tile_id" value="" />
	<input type="hidden" class="dir-tile-id" id="up_tile_id" value="" />
	<input type="hidden" class="dir-tile-id" id="down_tile_id" value="" />
	<table>
		<tr><td>&nbsp;</td><td><input type="button" value="N" id="north" disabled="true" onclick="move(this.id);" /></td><td><input type="button" value="U" id="up" disabled="true"  onclick="move(this.id);" /></td></tr>
		<tr><td><input type="button" value="W" id="west"  disabled="true" onclick="move(this.id);" /></td><td>&nbsp;</td><td><input type="button" value="E" id="east"  disabled="true" onclick="move(this.id);" /></td></tr>
		<tr><td>&nbsp;</td><td><input type="button" value="S" id="south"  disabled="true" onclick="move(this.id);" /></td><td><input type="button" value="D" id="down"  disabled="true" onclick="move(this.id);" /></td></tr>
	</table>
</center>
<hr style="width: 80%; " />
<h3><a href="/myaccount/profile" target="_blank">Character Info</a></h3>
<input type="hidden" id="last_id" value="<?php echo $_smarty_tpl->getVariable('last_id')->value;?>
" />
<input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->getVariable('user')->value->data['user_id'];?>
" />
<input type="hidden" id="tile_id" value="<?php echo $_smarty_tpl->getVariable('user')->value->data['tile_id'];?>
" />
<input type="hidden" id="user_x" value="<?php echo $_smarty_tpl->getVariable('user')->value->data['user_x'];?>
" />
<input type="hidden" id="user_y" value="<?php echo $_smarty_tpl->getVariable('user')->value->data['user_y'];?>
" />
<input type="hidden" id="user_z" value="<?php echo $_smarty_tpl->getVariable('user')->value->data['user_z'];?>
" />

<b>Name</b>: <?php echo $_smarty_tpl->getVariable('user')->value->data['user_cname'];?>
<br />
<b>Health</b>: &nbsp;<input type="text" size="4" id="user_health" value="" style="text-align: right; border: none; background: inherit; color: inherit; " />%<br />
<b>Mana</b>:&nbsp;&nbsp;&nbsp;<input type="text" size="4" id="user_mana" value="" style="text-align: right; border: none; background: inherit; color: inherit;" />%<br />
<b>Energy</b>: <input type="text" size="4" value="" id="user_energy" style="text-align: right; border: none; background: inherit; color: inherit;" />%<br />
<input type="button" onclick="updateGame();" value="Update Game" />

</div>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>