<?php /* Smarty version Smarty-3.1.16, created on 2014-01-28 21:13:10
         compiled from "./templates/mobile/statistics/pool/contributors_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116923836452e7ace6ba80c7-16736729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d0e365809d610a00286ece8b2725ed150f51678' => 
    array (
      0 => './templates/mobile/statistics/pool/contributors_shares.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116923836452e7ace6ba80c7-16736729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONTRIBSHARES' => 0,
    'GLOBAL' => 0,
    'rank' => 0,
    'listed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52e7ace6c67cf5_72208159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e7ace6c67cf5_72208159')) {function content_52e7ace6c67cf5_72208159($_smarty_tpl) {?>  <table data-role="table" id="shares" data-mode="columntoggle">
    <thead>
      <tr>
        <th>Rank</th>
        <th>User Name</th>
        <th align="right">Shares</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['name'] = 'shares';
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['shares']['total']);
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account']) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?><?php }?>
      <tr>
        <th aign="center"><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</th>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBSHARES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['shares']['index']]['shares']);?>
</td>
      </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
      <tr>
        <th>n/a</th>
        <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'];?>
</td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
</td>
      </tr>
<?php }?>
    </tbody>
  </table>
<?php }} ?>
