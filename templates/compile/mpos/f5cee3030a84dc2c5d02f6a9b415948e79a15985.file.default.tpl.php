<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:30:49
         compiled from "./templates/mpos/account/invitations/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165171857952dd4f393c03c3-81703698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5cee3030a84dc2c5d02f6a9b415948e79a15985' => 
    array (
      0 => './templates/mpos/account/invitations/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165171857952dd4f393c03c3-81703698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CTOKEN' => 0,
    'INVITATIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4f395026e6_25273263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4f395026e6_25273263')) {function content_52dd4f395026e6_25273263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins/modifier.date_format.php';
?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="POST">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="sendInvitation">
  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['enabled']&&!in_array("invite",$_smarty_tpl->tpl_vars['GLOBAL']->value['csrf']['disabled_forms'])) {?><input type="hidden" name="ctoken" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
  <article class="module width_quarter">
    <header><h3>Invitation</h3></header>
    <div class="module_content">
      <fieldset>
        <label>E-Mail</label>
        <input type="text" name="data[email]" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['data']['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="30" />
      </fieldset>
      <fieldset>
        <label>Message</label>
        <textarea name="data[message]" rows="5"><?php echo (($tmp = @htmlspecialchars($_REQUEST['data']['message'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Please accept my invitation to this awesome pool." : $tmp);?>
</textarea>
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Invite" class="alt_btn">
      </div>
    </footer>
  </article>
</form>

<article class="module width_3_quarter">
  <header><h3>Past Invitations</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead style="font-size:13px;">
      <tr>
        <th>E-Mail</th>
        <th align="center">Sent</th>
        <th align="center">Activated</th>
      </tr>
    </thead>
    <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['invite'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['name'] = 'invite';
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['INVITATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total']);
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['email'];?>
</td>
        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['time'],"%d/%m/%Y %H:%M:%S");?>
</td>
        <td align="center"><i class="icon-<?php if ($_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['is_activated']) {?>ok<?php } else { ?>cancel<?php }?>"></i></td>
      </tr>
<?php endfor; endif; ?>
    <tbody>
  </table>
</article>
<?php }} ?>
