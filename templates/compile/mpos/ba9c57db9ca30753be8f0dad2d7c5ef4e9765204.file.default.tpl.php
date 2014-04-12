<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:24:33
         compiled from "./templates/mpos/register/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151759781752dd3fb1ab0958-55452567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9c57db9ca30753be8f0dad2d7c5ef4e9765204' => 
    array (
      0 => './templates/mpos/register/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151759781752dd3fb1ab0958-55452567',
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
  'unifunc' => 'content_52dd3fb1ba28c3_00633765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd3fb1ba28c3_00633765')) {function content_52dd3fb1ba28c3_00633765($_smarty_tpl) {?>
<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
<article class="module width_half">
  <header><h3>Register new account</h3></header>
  <div class="module_content">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)) {?>
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("register",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
    <input type="hidden" name="action" value="register">
    <fieldset>
      <label>Username</label>
      <input type="text" class="text tiny" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>Password</label>
      <input type="password" class="text tiny" name="password1" value="" size="15" maxlength="100" required>
      <label>Repeat Password</label>
      <input type="password" class="text tiny" name="password2" value="" size="15" maxlength="100" required>
    </fieldset>
    <fieldset>
      <label>Email</label>
      <input type="text" name="email1" class="text small" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
      <label>Email Repeat</label>
      <input type="text" class="text small" name="email2" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
    </fieldset>
    <fieldset>
      <label>PIN</label>
      <input type="password" class="text pin" name="pin" value="" size="4" maxlength="4"><font size="1"> (4 digit number. <b>Remember this pin!</b>)</font>
    </fieldset>
    <fieldset>
      <label>Terms and Conditions</label><a style="width:152px;" onclick="TINY.box.show({url:'?page=tacpop',height:500})"><font size="1">Accept Terms and Conditions</font></a>
      <input type="checkbox" value="1" name="tac" id="tac">
      <label for="tac" style="margin:1px 0px 0px -20px"></label>
    </fieldset>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
  </div>
  <footer>
    <div class="submit_link">
      <input type="submit" value="Register" class="alt_btn">
    </div>
  </footer>
</article>
</form>
<?php }} ?>
