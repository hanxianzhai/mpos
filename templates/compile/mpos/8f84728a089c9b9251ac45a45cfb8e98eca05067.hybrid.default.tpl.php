<?php /* Smarty version Smarty-3.1.16, created on 2014-01-26 11:30:24
         compiled from "hybrid:login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60772120652de3585c66484-20955247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f84728a089c9b9251ac45a45cfb8e98eca05067' => 
    array (
      0 => 'hybrid:login//default.tpl',
      1 => 1390706996,
      2 => 'hybrid',
    ),
  ),
  'nocache_hash' => '60772120652de3585c66484-20955247',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de3585d65e44_40015281',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de3585d65e44_40015281')) {function content_52de3585d65e44_40015281($_smarty_tpl) {?><article class="module width_half">
  <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="to" value="<?php echo htmlspecialchars(((($tmp = @$_REQUEST['to'])===null||$tmp==='' ? ((string)$_SERVER['SCRIPT_NAME'])."?page=dashboard" : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("login",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
    <header><h3>帐户登陆 Login with existing account</h3></header>
    <div class="module_content">
        <fieldset>
          <label>注册邮箱 E-Mail</label>
          <input type="email" name="username" size="22" maxlength="100" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['username'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Your email" required />
        </fieldset>
        <fieldset>
          <label>密码 Password</label>
          <input type="password" name="password" size="22" maxlength="100" placeholder="Your password" required />
        </fieldset>
      <div class="clear"></div>
    </div>
    <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
    <footer>
      <div class="submit_link">
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">忘记密码 Forgot your password?</font></a>
        <input type="submit" value="Login" class="alt_btn" />
      </div>
    </footer>
  </form>
</article>
<?php }} ?>
