<?php /* Smarty version Smarty-3.1.16, created on 2014-01-21 00:41:20
         compiled from "./templates/mpos/statistics/graphs/mine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197884873052dd51b08c9f86-35660919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f7f130ba6f74d24e797b92bb4f28dc31d82c38a' => 
    array (
      0 => './templates/mpos/statistics/graphs/mine.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197884873052dd51b08c9f86-35660919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURHASHRATES' => 0,
    'hour' => 0,
    'hashrate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd51b092f971_77118852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd51b092f971_77118852')) {function content_52dd51b092f971_77118852($_smarty_tpl) {?><?php if (is_array($_smarty_tpl->tpl_vars['YOURHASHRATES']->value)) {?>
  <div class="tab_content" id="mine">
    <table class="visualize" rel="area">
      <caption>Your Hashrate</caption>
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
      </tbody>
    </table>
  </div>
<?php }?>
<?php }} ?>
