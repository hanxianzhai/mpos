<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 01:02:16
         compiled from "./templates/mpos/admin/transactions/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171491371852dd5698964914-22774508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c25a05fde88176cb567d6a4f3cc2d1c00bb4dc1' => 
    array (
      0 => './templates/mpos/admin/transactions/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171491371852dd5698964914-22774508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLE_TRANSACTIONSUMMARY' => 0,
    'SUMMARY' => 0,
    'type' => 0,
    'total' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
    'TRANSACTIONTYPES' => 0,
    'TXSTATUS' => 0,
    'TRANSACTIONS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd5698d16954_46525957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd5698d16954_46525957')) {function content_52dd5698d16954_46525957($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './include/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include './include/smarty/libs/plugins/modifier.truncate.php';
?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['DISABLE_TRANSACTIONSUMMARY']->value)===null||$tmp==='' ? "0" : $tmp)!=1) {?>
<article class="module width_full">
  <header><h3>Transaction Summary</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
    <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
        <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</th>
    <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['total']->value,"8");?>
</td>
    <?php } ?>
      </tr>
    </tbody>
  </table>
</article>
<?php }?>

<article class="module width_quarter">
  <header><h3>Transaction Filter</h3></header>
  <div class="module_content">
  <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <table cellspacing="0" class="tablesorter">
    <tbody>
      <tr>
        <td align="left">
<?php if ((($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"><i class="icon-left-open"></i></a>
<?php } else { ?>
          <i class="icon-left-open"></i>
<?php }?>
        </td>
        <td align="right">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"><i class="icon-right-open"></i></a>
        </td>
    </tbody>
  </table>
    <fieldset>
      <label>Type</label>
      <?php echo smarty_function_html_options(array('name'=>"filter[type]",'options'=>$_smarty_tpl->tpl_vars['TRANSACTIONTYPES']->value,'selected'=>(($tmp = @$_REQUEST['filter']['type'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

    </fieldset>
    <fieldset>
      <label>Status</label>
      <?php echo smarty_function_html_options(array('name'=>"filter[status]",'options'=>$_smarty_tpl->tpl_vars['TXSTATUS']->value,'selected'=>(($tmp = @$_REQUEST['filter']['status'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

    </fieldset>
    <fieldset>
      <label>Account</label>
      <input size="20" type="text" name="filter[account]" value="<?php echo (($tmp = @$_REQUEST['filter']['account'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </fieldset>
    <fieldset>
      <label>Address</label>
      <input size="20" type="text" name="filter[address]" value="<?php echo (($tmp = @$_REQUEST['filter']['address'])===null||$tmp==='' ? '' : $tmp);?>
" />
    </fieldset>
    </div>
  <footer>
    <div class="submit_link">
      <input type="submit" value="Filter" class="alt_btn">
    </div>
  </footer>
</form>
</article>

<article class="module width_3_quarter">
  <header><h3>Transaction History</h3></header>
    <table cellspacing="0" class="tablesorter" width="100%">
      <thead>
        <tr>
          <th align="center">ID</th>
          <th>Account</th>
          <th>Date</th>
          <th>TX Type</th>
          <th align="center">Status</th>
          <th>Payment Address</th>
          <th>TX #</th>
          <th>Block #</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody style="font-size:12px;">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['name'] = 'transaction';
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TRANSACTIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['transaction']['total']);
?>
        <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
          <td align="center"><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['timestamp'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type'];?>
</td>
          <td align="center">
            <?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Fee_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Donation_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Debit_MP'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Debit_AP'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='TXFee'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']) {?><span class="confirmed">Confirmed</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['confirmations']==-1) {?><span class="orphan">Orphaned</span>
            <?php } else { ?><span class="unconfirmed">Unconfirmed</span><?php }?>
          </td>
          <td><a href="#" onClick="alert('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['coin_address'], ENT_QUOTES, 'UTF-8', true);?>
')"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['coin_address'],20,"...",true,true);?>
</a></td>
          <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['transactionexplorer']['disabled']) {?>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['transactionexplorer']['url'];?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'],20,"...",true,true);?>
</a></td>
          <?php } else { ?>
            <td><a href="#" onClick="alert('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
')" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['txid'],20,"...",true,true);?>
</a></td>
          <?php }?>
          <td><?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height']==0) {?>n/a<?php } else { ?><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height'];?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['height'];?>
</a></td>
          <td><font color="<?php if ($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Credit_PPS'||$_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['type']=='Bonus') {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['TRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['transaction']['index']]['amount'],"8");?>
</td>
        </tr>
<?php endfor; endif; ?>
      </tbody>
    </table>
    <footer><font size="1"><b>Credit_AP</b> = Auto Threshold Payment, <b>Credit_MP</b> = Manual Payment, <b>Donation</b> = Donation, <b>Fee</b> = Pool Fees (if applicable)</font></footer>
</article>
<?php }} ?>
