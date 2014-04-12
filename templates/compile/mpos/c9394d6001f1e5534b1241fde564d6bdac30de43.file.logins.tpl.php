<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:28:31
         compiled from "./templates/mpos/admin/dashboard/logins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112209043252dd409f40a4d8-66846150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9394d6001f1e5534b1241fde564d6bdac30de43' => 
    array (
      0 => './templates/mpos/admin/dashboard/logins.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112209043252dd409f40a4d8-66846150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd409f4331a9_42136952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd409f4331a9_42136952')) {function content_52dd409f4331a9_42136952($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Logins</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">24 hours</th>
        <th align="center">7 days</th>
        <th align="center">1 month</th>
        <th align="center">6 months</th>
        <th align="center">1 year</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
