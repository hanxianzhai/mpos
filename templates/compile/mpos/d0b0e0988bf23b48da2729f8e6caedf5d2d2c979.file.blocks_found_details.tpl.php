<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:56:09
         compiled from "./templates/mpos/statistics/blocks/blocks_found_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42255749352dd471991f966-16324818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b0e0988bf23b48da2729f8e6caedf5d2d2c979' => 
    array (
      0 => './templates/mpos/statistics/blocks/blocks_found_details.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42255749352dd471991f966-16324818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKLIMIT' => 0,
    'GLOBAL' => 0,
    'BLOCKSFOUND' => 0,
    'totalshares' => 0,
    'count' => 0,
    'pplnsshares' => 0,
    'totalexpectedshares' => 0,
    'percentage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd4719b7ede5_94844609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd4719b7ede5_94844609')) {function content_52dd4719b7ede5_94844609($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include './include/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include './include/smarty/libs/plugins/function.math.php';
?><article class="module width_full">
  <header><h3>Last <?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
 Blocks Found</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Block</th>
        <th align="center">Validity</th>
        <th>Finder</th>
        <th align="center">Time</th>
        <th align="right">Difficulty</th>
        <th align="right">Amount</th>
        <th align="right">Expected Shares</th>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?><th align="right">PPLNS Shares</th><?php }?>
        <th align="right">Actual Shares</th>
        <th align="right" style="padding-right: 25px;">Percentage</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalexpectedshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsshares'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
      <?php $_smarty_tpl->tpl_vars["totalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?><?php $_smarty_tpl->tpl_vars["pplnsshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['pplns_shares'], null, 0);?><?php }?>
      <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
<?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
        <td align="center"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</a></td>
<?php } else { ?>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</td>
<?php }?>
        <td align="center">
<?php if ($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']) {?>
          <span class="confirmed">Confirmed</span>
<?php } elseif ($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations']==-1) {?>
          <span class="orphan">Orphan</span>
<?php } else { ?>
          <span class="unconfirmed"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']-$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations'];?>
 left</span>
<?php }?>
        </td>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['finder'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['time'],"%d/%m %H:%M:%S");?>
</td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['difficulty'],"2");?>
</td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['amount'],"2");?>
</td>
        <td align="right">
<?php $_smarty_tpl->tpl_vars["totalexpectedshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalexpectedshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares'], null, 0);?>
          <?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares']);?>

        </td>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['pplns_shares']);?>
</td><?php }?>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares']);?>
</td>
        <td align="right" style="padding-right: 25px;">
<?php echo smarty_function_math(array('assign'=>"percentage",'equation'=>"shares / estshares * 100",'shares'=>(($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'])===null||$tmp==='' ? "0" : $tmp),'estshares'=>$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares']),$_smarty_tpl);?>

          <font color="<?php if (($_smarty_tpl->tpl_vars['percentage']->value<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage']->value,"2");?>
</font>
        </td>
      </tr>
<?php endfor; endif; ?>
    <tr>
      <td colspan="6" align="right"><b>Totals</b></td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalexpectedshares']->value);?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsshares']->value);?>
</td><?php }?>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['totalshares']->value);?>
</td>
      <td align="right" style="padding-right: 25px;"><?php if ($_smarty_tpl->tpl_vars['count']->value>0) {?><font color="<?php if ((($_smarty_tpl->tpl_vars['totalshares']->value/$_smarty_tpl->tpl_vars['totalexpectedshares']->value*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['totalshares']->value/$_smarty_tpl->tpl_vars['totalexpectedshares']->value*100),"2");?>
</font><?php } else { ?>0<?php }?></td>
    </tr>
    </tbody>
  </table>
  <footer>
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?><ul><li>Note: Round Earnings are not credited until <font color="orange"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations'];?>
</font> confirms.</li></ul><?php }?>
  </footer>
</article>
<?php }} ?>
