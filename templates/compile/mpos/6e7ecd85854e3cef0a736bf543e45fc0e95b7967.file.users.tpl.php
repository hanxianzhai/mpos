<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:28:31
         compiled from "./templates/mpos/admin/dashboard/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11043439552dd409f317878-75368225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7ecd85854e3cef0a736bf543e45fc0e95b7967' => 
    array (
      0 => './templates/mpos/admin/dashboard/users.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11043439552dd409f317878-75368225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd409f384036_19663353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd409f384036_19663353')) {function content_52dd409f384036_19663353($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Users</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Active</th>
        <th align="center">Locked</th>
        <th align="center">Admins</th>
        <th align="center">No Fees</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
