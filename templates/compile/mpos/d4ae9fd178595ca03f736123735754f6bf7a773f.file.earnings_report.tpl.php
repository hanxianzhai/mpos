<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 14:22:28
         compiled from "./templates/mpos/admin/reports/earnings_report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105252080452de122432f725-16116262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4ae9fd178595ca03f736123735754f6bf7a773f' => 
    array (
      0 => './templates/mpos/admin/reports/earnings_report.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105252080452de122432f725-16116262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKLIMIT' => 0,
    'USERNAME' => 0,
    'GLOBAL' => 0,
    'REPORTDATA' => 0,
    'totalshares' => 0,
    'totalvalid' => 0,
    'totalinvalid' => 0,
    'pplnsshares' => 0,
    'pplnsvalid' => 0,
    'pplnsinvalid' => 0,
    'amount' => 0,
    'userpplnsshares' => 0,
    'usertotalshares' => 0,
    'percentage1' => 0,
    'percentage2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52de122479d504_39362506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52de122479d504_39362506')) {function content_52de122479d504_39362506($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include './include/smarty/libs/plugins/function.math.php';
?><article class="module width_full">
  <header><h3>Earnings Report Last <?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
 Blocks For User: <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th >Block</th>
        <th align="right">Round Shares</th>
        <th align="right">Round Valid</th>
        <th align="right">Invalid</th>
        <th align="right">Invalid %</th>
        <th align="right">Round %</th>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
        <th align="right">PPLNS Shares</th>
        <th align="right">PPLNS Valid</th>
        <th align="right">Invalid</th>
        <th align="right">Invalid %</th>
        <th align="right">PPLNS %</th>
        <th align="right">Variance</th>
        <?php }?>
        <th align="right" style="padding-right: 25px;">Amount</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['percentage'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalinvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['usertotalshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalpercentage'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['userpplnsshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsinvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['name'] = 'txs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['REPORTDATA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
      <?php $_smarty_tpl->tpl_vars["totalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['totalvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['totalvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['totalinvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['totalinvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars["pplnsshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['pplnsvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['pplnsinvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsinvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['amount']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user_credit'], null, 0);?>
      <?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?>
        <?php $_smarty_tpl->tpl_vars["userpplnsshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['userpplnsshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'], null, 0);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']>0) {?>
        <?php $_smarty_tpl->tpl_vars["usertotalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['usertotalshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'], null, 0);?>
      <?php }?>
      <tr>
        <td><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['height'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['height'])===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
        <td align="right"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td align="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td align="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
      	<td align="right"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid']/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
        <td align="right"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']>0) {?><?php echo number_format(((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']),"2");?>
<?php } else { ?>0.00<?php }?></td>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
        <td align="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td align="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
        <td align="right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
	<td align="right"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid']>0&&$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid']/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
	<td align="right"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares']>0&&$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
        <td align="right"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']>0&&$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?><?php echo smarty_function_math(array('assign'=>"percentage1",'equation'=>(100/(((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid'])/((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid'])))),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']==0) {?><?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(100, null, 0);?><?php }?>
          <font color="<?php if (($_smarty_tpl->tpl_vars['percentage1']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['percentage1']->value,"2"))===null||$tmp==='' ? "0" : $tmp);?>
</font></b></td>
        <?php }?>
        <td align="right" style="padding-right: 25px;"><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user_credit'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
        <?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
      </tr>
<?php endfor; endif; ?>
    <tr>
      <td><b>Totals</b></td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalshares']->value);?>
</td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalvalid']->value);?>
</td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalinvalid']->value);?>
</td>
      <td align="right"><?php if ($_smarty_tpl->tpl_vars['totalinvalid']->value>0&&$_smarty_tpl->tpl_vars['totalvalid']->value>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['totalinvalid']->value/$_smarty_tpl->tpl_vars['totalvalid']->value*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
      	<td align="right"><?php if ($_smarty_tpl->tpl_vars['usertotalshares']->value>0&&$_smarty_tpl->tpl_vars['totalvalid']->value>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['usertotalshares']->value)*$_smarty_tpl->tpl_vars['totalvalid']->value),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsshares']->value);?>
</td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsvalid']->value);?>
</td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsinvalid']->value);?>
</td>
      <td align="right"><?php if ($_smarty_tpl->tpl_vars['pplnsinvalid']->value>0&&$_smarty_tpl->tpl_vars['pplnsvalid']->value>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['pplnsinvalid']->value/$_smarty_tpl->tpl_vars['pplnsvalid']->value*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
      	<td align="right"><?php if ($_smarty_tpl->tpl_vars['userpplnsshares']->value>0&&$_smarty_tpl->tpl_vars['pplnsvalid']->value>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['userpplnsshares']->value)*$_smarty_tpl->tpl_vars['pplnsvalid']->value),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
        <td align="right"><?php if ($_smarty_tpl->tpl_vars['totalvalid']->value>0&&$_smarty_tpl->tpl_vars['pplnsvalid']->value>0) {?><?php echo smarty_function_math(array('assign'=>"percentage2",'equation'=>(100/(((100/$_smarty_tpl->tpl_vars['usertotalshares']->value)*$_smarty_tpl->tpl_vars['totalvalid']->value)/((100/$_smarty_tpl->tpl_vars['userpplnsshares']->value)*$_smarty_tpl->tpl_vars['pplnsvalid']->value)))),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['pplnsvalid']->value==0) {?><?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(100, null, 0);?><?php }?>
          <font color="<?php if (($_smarty_tpl->tpl_vars['percentage2']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['percentage2']->value,"2"))===null||$tmp==='' ? "0" : $tmp);?>
</font></b></td>
        <?php }?>
        <td align="right" style="padding-right: 25px;"><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['amount']->value)===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
        <?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?>
    </tr>
    </tbody>
  </table>
  <footer>
  </footer>
</article>
<?php }} ?>
