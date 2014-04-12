<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:53:49
         compiled from "./templates/mpos/statistics/round/round_transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98649094252dd468d999e77-53134755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fa73109ec7002fadb55daa2c3597e67e348e04' => 
    array (
      0 => './templates/mpos/statistics/round/round_transactions.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98649094252dd468d999e77-53134755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROUNDTRANSACTIONS' => 0,
    'GLOBAL' => 0,
    'ROUNDSHARES' => 0,
    'BLOCKDETAILS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd468daa73e0_67112222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd468daa73e0_67112222')) {function content_52dd468daa73e0_67112222($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins/function.cycle.php';
?><article class="module width_half">
  <header><h3>Round Transactions</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th>User Name</th>
        <th align="center">Type</th>
        <th align="right">Round Shares</th>
        <th align="right" scope="col">Round %</th>
        <th align="right" style="padding-right: 25px;">Amount</th>
      </tr>
    </thead>
    <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['name'] = 'txs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total']);
?>
      <tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['username']) {?> style="background-color:#99EB99;"<?php } else { ?> class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"<?php }?>>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['username'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="center"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['type'])===null||$tmp==='' ? '' : $tmp);?>
</td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid']);?>
</td>
        <td align="right"><?php echo number_format((($tmp = @((100/$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'])*$_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid']))===null||$tmp==='' ? "0" : $tmp),"2");?>
</td>
        <td align="right" style="padding-right: 25px;"><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['amount'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
      </tr>
<?php endfor; endif; ?>
    </tbody>
  </table>
</article>
<?php }} ?>
