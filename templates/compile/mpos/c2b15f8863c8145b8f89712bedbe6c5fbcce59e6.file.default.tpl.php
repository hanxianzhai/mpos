<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:45:40
         compiled from "./templates/mpos/contactform//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111298760152dd44a4ac4514-14795243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b15f8863c8145b8f89712bedbe6c5fbcce59e6' => 
    array (
      0 => './templates/mpos/contactform//default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111298760152dd44a4ac4514-14795243',
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
  'unifunc' => 'content_52dd44a4befee2_26357708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd44a4befee2_26357708')) {function content_52dd44a4befee2_26357708($_smarty_tpl) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="contactform">
  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("contact",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
    <article class="module width_3_quarter">
    <header><h3>Contact Us</h3></header>
    <div class="module_content">
      <fieldset>
        <label for="senderName">Your Name</label>
        <input type="text" class="text tiny" name="senderName" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderName'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your name" size="15" maxlength="100" required />
      </fieldset>
      <fieldset>
        <label for="senderEmail">Your Email Address</label>
        <input type="text" class="text tiny" name="senderEmail" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderEmail'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your email" size="50"  maxlength="100" required />
      </fieldset>
      <fieldset>
        <label for="senderEmail">Your Subject</label>
        <input type="text" class="text tiny" name="senderSubject" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['senderSubject'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Please type your subject" size="15" maxlength="100" required />
      </fieldset>
      <fieldset>
        <label for="message">Your Message</label>
        <textarea type="text" name="senderMessage" cols="80" rows="10" maxlength="10000" required><?php echo (($tmp = @htmlspecialchars($_REQUEST['senderMessage'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>
      </fieldset>
      <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
    </div>
    <footer>
      <div class="submit_link"><input type="submit" class="alt_btn" name="sendMessage" value="Send Email" /></div>
    </footer>
  </article>
</form>
<?php }} ?>
