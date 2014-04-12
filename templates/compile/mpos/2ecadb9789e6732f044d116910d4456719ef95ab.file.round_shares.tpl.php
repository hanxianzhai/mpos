<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:53:49
         compiled from "./templates/mpos/statistics/round/round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70130023252dd468d8b5363-24566417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ecadb9789e6732f044d116910d4456719ef95ab' => 
    array (
      0 => './templates/mpos/statistics/round/round_shares.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70130023252dd468d8b5363-24566417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROUNDSHARES' => 0,
    'GLOBAL' => 0,
    'data' => 0,
    'rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd468d9926f4_35730165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd468d9926f4_35730165')) {function content_52dd468d9926f4_35730165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include './include/smarty/libs/plugins/function.cycle.php';
?><article class="module width_half">
  <header><h3>Round Shares</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Rank</th>
        <th align="left">User Name</th>
        <th align="right">Valid</th>
        <th align="right">Invalid</th>
        <th align="right" style="padding-right: 25px;">Invalid %</th>
      </tr>
    </thead>
    <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROUNDSHARES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
      <tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['data']->value['username']) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php } else { ?> class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"<?php }?>>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
        <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['data']->value['username'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['valid']);?>
</td>
        <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['invalid']);?>
</td>
      	<td align="right" style="padding-right: 25px;"><?php if ($_smarty_tpl->tpl_vars['data']->value['invalid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['data']->value['invalid']/$_smarty_tpl->tpl_vars['data']->value['valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</article>
<?php }} ?>
