<?php /* Smarty version Smarty-3.1.16, created on 2014-01-20 23:53:49
         compiled from "./templates/mpos/statistics/round/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89270827352dd468d544361-81130170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10a98d8e7b57de60fef64f7a29604a499bb6e020' => 
    array (
      0 => './templates/mpos/statistics/round/default.tpl',
      1 => 1390224332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89270827352dd468d544361-81130170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52dd468d64bd51_06478123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd468d64bd51_06478123')) {function content_52dd468d64bd51_06478123($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='prop') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>
