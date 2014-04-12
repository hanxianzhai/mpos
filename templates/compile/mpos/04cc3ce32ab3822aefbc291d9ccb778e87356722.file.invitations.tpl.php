<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:28:31
         compiled from "./templates/mpos/admin/dashboard/invitations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168816653852dd409f3e6116-66639655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04cc3ce32ab3822aefbc291d9ccb778e87356722' => 
    array (
      0 => './templates/mpos/admin/dashboard/invitations.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168816653852dd409f3e6116-66639655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd409f404a78_74556896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd409f404a78_74556896')) {function content_52dd409f404a78_74556896($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>Invitations</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th align="center">Total</th>
        <th align="center">Activated</th>
        <th align="center">Outstanding</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
        <td align="center"><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
