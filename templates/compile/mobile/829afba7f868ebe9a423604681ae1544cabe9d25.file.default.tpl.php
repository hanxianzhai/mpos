<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 06:02:11
         compiled from "./templates/mobile/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187224631852dd9ce3e485d9-79858912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '829afba7f868ebe9a423604681ae1544cabe9d25' => 
    array (
      0 => './templates/mobile/login//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187224631852dd9ce3e485d9-79858912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd9ce40636d3_83297831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd9ce40636d3_83297831')) {function content_52dd9ce40636d3_83297831($_smarty_tpl) {?>      <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm" data-ajax="false">
        <input type="hidden" name="to" value="<?php echo htmlspecialchars(((($tmp = @$_REQUEST['to'])===null||$tmp==='' ? ((string)$_SERVER['SCRIPT_NAME'])."?page=dashboard" : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("login",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
        <p><label for="userForm">Email</label><input type="text" name="username" value="" id="userForm"></p>
        <p><label for="passForm">Password</label><input type="password" name="password" value="" id="passForm"></p>
        <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
        <center><p><input type="submit" value="Login"></p></center>
      </form>
      <center><p><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a></p></center>
<?php }} ?>
