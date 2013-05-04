<?php /* Smarty version Smarty-3.0.8, created on 2012-12-26 10:43:40
         compiled from "/home/brandon/web-code.local/bremarpg-code/templates/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:63318546650db293cd003a8-12438645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7799c2d5ac1634ea7d307b534b63c1547a5631' => 
    array (
      0 => '/home/brandon/web-code.local/bremarpg-code/templates/footer.html',
      1 => 1355713040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63318546650db293cd003a8-12438645',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div style="clear: both;"></div>
</div>
</div>
<div id="footer">
<a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/">Home</a> - <a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/game">Game</a> - <a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/signup">Sign Up</a> - <a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/contact-us">Contact Us</a>

<?php if ($_smarty_tpl->getVariable('user')->value->user_admin==1){?>
 - <a href="<?php echo $_smarty_tpl->getVariable('site_url')->value;?>
/admin">Admin</a>
<?php }?>

</div>
</center>
<center><span style="font-size: 8pt"><a href="http://www.bremaweb.com/">Web Design</a> by Brema Web Solutions</span></center>
</body>
</html>