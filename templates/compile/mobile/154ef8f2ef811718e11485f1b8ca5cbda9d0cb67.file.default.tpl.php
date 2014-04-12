<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 13:33:24
         compiled from "./templates/mobile/password//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50808159752de06a4eebfb1-97778530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154ef8f2ef811718e11485f1b8ca5cbda9d0cb67' => 
    array (
      0 => './templates/mobile/password//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50808159752de06a4eebfb1-97778530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de06a504ccb0_10446893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de06a504ccb0_10446893')) {function content_52de06a504ccb0_10446893($_smarty_tpl) {?><form action="" method="POST">
<input type="hidden" name="page" value="password">
<input type="hidden" name="action" value="reset">
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("passreset",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
  <p>If you have an email set for your account, enter your username to get your password reset</p>
  <p><input type="text" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" name="username" required><input class="submit small" type="submit" value="Reset"></p>
</form>
<?php }} ?>
