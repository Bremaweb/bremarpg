<?php /* Smarty version Smarty-3.0.8, created on 2012-12-26 10:43:40
         compiled from "/home/brandon/web-code.local/bremarpg-code/templates/error_msg.html" */ ?>
<?php /*%%SmartyHeaderCode:80226529750db293cccac31-46436017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd35dfa2272ad3e3fe0dc70a5941cd2bc06a2c59' => 
    array (
      0 => '/home/brandon/web-code.local/bremarpg-code/templates/error_msg.html',
      1 => 1308018361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80226529750db293cccac31-46436017',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('err_msg')->value!=''){?>
    <div class="errMsg">
        <?php echo $_smarty_tpl->getVariable('err_msg')->value;?>

    </div>
<?php }?>