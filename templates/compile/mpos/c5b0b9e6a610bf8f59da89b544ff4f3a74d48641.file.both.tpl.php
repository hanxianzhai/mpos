<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:41:20
         compiled from "./templates/mpos/statistics/graphs/both.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167985153952dd51b09959c9-29130837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b0b9e6a610bf8f59da89b544ff4f3a74d48641' => 
    array (
      0 => './templates/mpos/statistics/graphs/both.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167985153952dd51b09959c9-29130837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURHASHRATES' => 0,
    'POOLHASHRATES' => 0,
    'hour' => 0,
    'hashrate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd51b0a59f09_22113235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd51b0a59f09_22113235')) {function content_52dd51b0a59f09_22113235($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['YOURHASHRATES']->value)&&is_array($_smarty_tpl->tpl_vars['POOLHASHRATES']->value)) {?>
    <div class="tab_content" id="both">
      <table class="visualize" rel="area">
        <caption>Your vs Pool Hashrate</caption>
        <thead>
          <tr>
            <td></td>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['YOURHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <th scope="row"><?php echo $_SESSION['USERDATA']['username'];?>
</th>
<?php  $_smarty_tpl->tpl_vars['hashrate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hashrate']->_loop = false;
 $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['YOURHASHRATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hashrate']->key => $_smarty_tpl->tpl_vars['hashrate']->value) {
$_smarty_tpl->tpl_vars['hashrate']->_loop = true;
 $_smarty_tpl->tpl_vars['hour']->value = $_smarty_tpl->tpl_vars['hashrate']->key;
?>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hashrate']->value)===null||$tmp==='' ? "0" : $tmp);?>
</td>
<?php } ?>
          </tr>
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
