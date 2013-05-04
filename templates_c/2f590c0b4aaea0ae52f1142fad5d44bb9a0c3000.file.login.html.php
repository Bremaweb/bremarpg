<?php /* Smarty version Smarty-3.0.8, created on 2012-12-26 22:00:16
         compiled from "/home/brandon/web-code.local/bremarpg-code/templates/login.html" */ ?>
<?php /*%%SmartyHeaderCode:203025388350dbc7d0677b77-82741352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f590c0b4aaea0ae52f1142fad5d44bb9a0c3000' => 
    array (
      0 => '/home/brandon/web-code.local/bremarpg-code/templates/login.html',
      1 => 1355554726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203025388350dbc7d0677b77-82741352',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1>Login</h1>
<table width="90%">
	<tr>
		<td>
			Please login using your e-mail address and password.<br>
			<br />
			<form action="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/login" method="post">				
				<input type="hidden" name="doit" value="1">
				<table>
					<tr><td>Email:</td><td><input type="text" name="login[email]" value="<?php echo $_smarty_tpl->getVariable('login')->value['email'];?>
" id="email"></td></tr>
					<tr><td>Password:</td><td><input type="password" name="login[password]" value=""></td></tr>					
					<tr><td><input type="submit" value="Login" name="loginbutton"></td><td>&nbsp;</td></tr>
					<tr><td colspan="2"><a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/forgot-password">I Forgot My Password</a></td></tr>
				</table>
			</form>
		</td>
		<td width="15">
			&nbsp;
		</td>
		<td align="center">
			If you have not already signed up, you can sign up now for a FREE 30 Day Trial.<br />
			<br />
			<a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/signup"><img src="<?php echo $_smarty_tpl->getVariable('image_url')->value;?>
/sign-up.png" /></a>
		</td>
	</tr>
</table>
<script language="javascript">
	document.getElementById('email').focus();
</script>
<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
