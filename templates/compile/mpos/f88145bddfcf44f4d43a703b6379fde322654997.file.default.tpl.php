<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:26:52
         compiled from "./templates/mpos/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181384521352dd403c6a8e50-02339426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f88145bddfcf44f4d43a703b6379fde322654997' => 
    array (
      0 => './templates/mpos/login//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181384521352dd403c6a8e50-02339426',
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
  'unifunc' => 'content_52dd403c7acab6_04088193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd403c7acab6_04088193')) {function content_52dd403c7acab6_04088193($_smarty_tpl) {?><article class="module width_half">
  <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="to" value="<?php echo htmlspecialchars(((($tmp = @$_REQUEST['to'])===null||$tmp==='' ? ((string)$_SERVER['SCRIPT_NAME'])."?page=dashboard" : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("login",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
    <header><h3>Login with existing account</h3></header>
    <div class="module_content">
        <fieldset>
          <label>E-Mail</label>
          <input type="email" name="username" size="22" maxlength="100" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['username'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Your email" required />
        </fieldset>
        <fieldset>
          <label>Password</label>
          <input type="password" name="password" size="22" maxlength="100" placeholder="Your password" required />
        </fieldset>
      <div class="clear"></div>
    </div>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
    <footer>
      <div class="submit_link">
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a>
        <input type="submit" value="Login" class="alt_btn" />
      </div>
    </footer>
  </form>
</article>
<?php }} ?>
