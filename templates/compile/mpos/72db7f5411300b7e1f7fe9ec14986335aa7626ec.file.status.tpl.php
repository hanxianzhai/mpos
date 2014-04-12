<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:28:31
         compiled from "./templates/mpos/admin/dashboard/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182843747552dd409f38a5a8-52249632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72db7f5411300b7e1f7fe9ec14986335aa7626ec' => 
    array (
      0 => './templates/mpos/admin/dashboard/status.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182843747552dd409f38a5a8-52249632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRON_ERROR' => 0,
    'CRON_DISABLED' => 0,
    'WALLET_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd409f3e05d5_61590054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd409f3e05d5_61590054')) {function content_52dd409f3e05d5_61590054($_smarty_tpl) {?>
<article class="module width_quarter">
  <header><h3>MPOS Status</h3></header>
  <table class="tablesorter" cellspacing="0">
    <thead>
      <tr>
        <th colspan="2" align="center">Cronjobs</th>
        <th align="center">Wallet</th>
      </tr>
      <tr>
        <th align="center"><strong>Errors</strong></th>
        <th align="center"><strong>Disabled</strong></th>
        <th align="center"><strong>Errors</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_ERROR']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_ERROR']->value;?>
<?php }?></a>
        </td>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_DISABLED']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_DISABLED']->value;?>
<?php }?></a>
        </td>
        <td align="center">
          <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['WALLET_ERROR']->value)===null||$tmp==='' ? "None - OK" : $tmp);?>
</a>
        </td>
      </tr>
    </tbody>
  </table>
</article>

<?php }} ?>
