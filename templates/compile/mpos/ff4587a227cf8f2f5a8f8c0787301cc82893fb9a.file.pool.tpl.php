<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:41:20
         compiled from "./templates/mpos/statistics/graphs/pool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214257502652dd51b0937078-61825008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4587a227cf8f2f5a8f8c0787301cc82893fb9a' => 
    array (
      0 => './templates/mpos/statistics/graphs/pool.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214257502652dd51b0937078-61825008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'POOLHASHRATES' => 0,
    'hour' => 0,
    'hashrate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd51b098a403_01200775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd51b098a403_01200775')) {function content_52dd51b098a403_01200775($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['POOLHASHRATES']->value)) {?>
    <div class="tab_content" id="pool">
      <table class="visualize" rel="area">
        <caption>Pool Hashrate</caption>
        <thead>
          <tr>
            <td></td>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['POOLHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value) {
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
            <th scope="col"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hour']->value)===null||$tmp==='' ? "0" : $tmp);?>
:00</th>
<?php } ?>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Pool</th>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['POOLHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value) {
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hashrate']->value)===null||$tmp==='' ? "0" : $tmp);?>
</td>
<?php } ?>
          </tr>
        </tbody>
      </table>
    </div>
<?php }?>
<?php }} ?>
