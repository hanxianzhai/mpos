<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:46:42
         compiled from "./templates/mpos/password//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147864184252dd52f2912002-36199606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca53f4fc9bdbd780a6dec8f5d211549f9033865a' => 
    array (
      0 => './templates/mpos/password//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147864184252dd52f2912002-36199606',
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
  'unifunc' => 'content_52dd52f299d734_99409878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd52f299d734_99409878')) {function content_52dd52f299d734_99409878($_smarty_tpl) {?><article class="module width_half">
  <form action="" method="POST">
    <input type="hidden" name="page" value="password">
    <input type="hidden" name="action" value="reset">
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("passreset",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
    <header><h3>Password reset</h3></header>
    <div class="module_content">
      <p>If you have an email set for your account, enter your username to get your password reset</p>
      <fieldset>
        <label>Username or E-Mail</label>
        <input type="text" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="22" maxlength="100" required>
      </fieldset>
      <div class="clear"></div>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Reset" class="alt_btn">
      </div>
    </footer>
  </form>
</article>
<?php }} ?>
