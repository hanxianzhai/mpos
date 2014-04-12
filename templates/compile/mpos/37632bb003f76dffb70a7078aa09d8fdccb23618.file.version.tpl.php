<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:28:31
         compiled from "./templates/mpos/admin/dashboard/version.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111104411252dd409f243892-70097254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37632bb003f76dffb70a7078aa09d8fdccb23618' => 
    array (
      0 => './templates/mpos/admin/dashboard/version.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111104411252dd409f243892-70097254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd409f30d8f6_71983981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd409f30d8f6_71983981')) {function content_52dd409f30d8f6_71983981($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>MPOS Version Information</h3></header>
  <table width="25%" class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th>Component</th>
        <th align="center">Current</th>
        <th align="center">Installed</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>MPOS</strong></td>
        <td align="center"><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE'];?>
</font></td>
        <td align="center">
          <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE'];?>
</font>
        </td>
      </tr>
      <tr>
        <td><strong>Config</strong></td>
        <td align="center"><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG'];?>
</font></td>
        <td align="center">
          <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG'];?>
</font>
        </td>
      </tr>
      <tr>
        <td><strong>Database</strong></td>
        <td align="center"><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB'];?>
</font></td>
        <td align="center">
          <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB'];?>
</font>
        </td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
